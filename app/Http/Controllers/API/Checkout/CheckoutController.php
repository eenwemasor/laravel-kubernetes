<?php

namespace App\Http\Controllers\API\Checkout;

use App\Enums\OrderStatus;
use App\Enums\StatusCode;
use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Http\Responser;
use App\Models\PreOrder;
use App\Models\User;
use App\Notifications\ReceiptNotification;
use App\Notifications\WelcomeNotification;
use App\Repositories\CheckoutRepository;
use App\Services\FlutterwaveService;
use Illuminate\Support\Str;

class CheckoutController extends Controller
{
    public $flwService;
    public $checkoutRepository;

    function __construct()
    {
        $this->flwService = FlutterwaveService::make();
        $this->checkoutRepository = CheckoutRepository::make();
    }

    /**
     * @param CheckoutRequest $request
     * 
     * @return Responser
     */
    public function store(CheckoutRequest $request)
    {
        $inputs = $request->validated();
        $user = $request->user();
        $accountType = 'logged-in';
        $errorMessage = "Error completing you checkout, please try again later.";

        PreOrder::create(['data' => $inputs]);

        if (!$user) {
            $shippingInfo = $inputs['shipping_info'];
            $user = User::where('email', $shippingInfo['email'])->first();
            $accountType = 'not-logged-but-existing-user';

            if (!$user) {
                $password = Str::random(8);
                $userData = [
                    'name'          => $shippingInfo['first_name'] . ' ' . $shippingInfo['last_name'],
                    'email'         => $shippingInfo['email'],
                    'password'      => $password
                ];
                $user = User::create($userData);
                $accountType = 'new-user';

                $user->notify(new WelcomeNotification($user, $accountType, $password));
            }
        }

        $shipping = $this->checkoutRepository->saveShippingInfo($inputs['shipping_info'], $user);

        if (!$shipping) {
            return Responser::send(StatusCode::SERVER_ERROR, [], $errorMessage);
        }

        if (!$inputs['ship_same_as_bill']) {
            $billing = $this->checkoutRepository->saveBillingInfo($inputs['billing_info'], $user);
        }

        $txVerification = $this->flwService->verifyTransaction($inputs['tx_id'], $inputs['amount'], $inputs['tx_ref']);

        $orderData = [
            ...collect($inputs)->only([
                'amount',
                'tx_id',
                'tx_ref',
                'flw_tx_ref',
                'shipping_method',
                'ship_same_as_bill',
                'privacy_policy',
                'note'
            ])->toArray(),
            'shipping_info_id' => $shipping->id,
            'billing_info_id' => $billing->id ?? null,
            'status' => OrderStatus::PENDING,
            'transaction_status' => $txVerification->status
        ];

        $order =  $this->checkoutRepository->saveOrder($orderData, $user);

        $this->checkoutRepository->saveOrderItems($inputs['items'], $order);

        $order->load(['user', 'billing', 'shipping', 'items.product', 'items.artwork']);

        $user->notify(new ReceiptNotification($user, $order));

        if ($accountType == 'new-user') {
            $token = $user->createToken(env('STICKERS_NG_TOKEN'))->accessToken;
        }

        $response = [
            'order' => $order,
            'user' => $user,
            'token' => $token ?? null
        ];

        return Responser::send(StatusCode::CREATED, $response, "Checkout complete");
    }
}
