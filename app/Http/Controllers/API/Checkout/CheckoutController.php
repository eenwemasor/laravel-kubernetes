<?php

namespace App\Http\Controllers\API\Checkout;

use App\Enums\OrderStatus;
use App\Enums\StatusCode;
use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Http\Responser;
use App\Models\PreOrder;
use App\Models\User;
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

    public function store(CheckoutRequest $request)
    {
        $inputs = $request->validated();
        $user = $request->user();
        $accountType = 'logged-in';
        $errorMessage = "Error completing you checkout, please try again later.";
        $txVerification = $this->flwService->verifyTransaction($inputs['tx_id'], $inputs['amount'], $inputs['tx_ref']);

        $preOrder = PreOrder::create(['data' => $inputs]);

        if (!$user) {
            $shippingInfo = $inputs['shipping_info'];
            $user = User::where('email', $shippingInfo['email'])->first();
            $accountType = 'not-logged-but-existing-user';

            if(!$user){
                $userData = [
                    'name'          => $shippingInfo['first_name'] . ' ' . $shippingInfo['last_name'],
                    'email'         => $shippingInfo['email'],
                    'password'      =>  Str::random(8)
                ];
                $user = User::create($userData);
                $newAccount = 'new-user';
            }
            
        }

        $shipping = $this->checkoutRepository->saveShippingInfo($inputs['shipping_info'], $user);

        if (!$shipping) {
            return Responser::send(StatusCode::SERVER_ERROR, [], $errorMessage);
        }

        if (!$inputs['ship_same_as_bill']) {
            $billing = $this->checkoutRepository->saveBillingInfo($inputs['billing_info'], $user);
        }

        $orderData = [...collect($inputs)->only([
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
        'status' => OrderStatus::PENDING
        ];

        $order =  $this->checkoutRepository->saveOrder($orderData, $user);

        $orderItems = $this->checkoutRepository->saveOrderItems($inputs['items'], $order);

        $order->load(['user', 'billing', 'shipping', 'items.product', 'items.artwork']);

        return Responser::send(StatusCode::CREATED, $order, "Checkout complete");
    }
}
