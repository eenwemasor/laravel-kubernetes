<?php

namespace App\Http\Controllers\API\Checkout;

use App\Enums\StatusCode;
use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Http\Responser;
use App\Services\FlutterwaveService;

class CheckoutController extends Controller
{
    public $flwService;
    function __construct()
    {
        $this->flwService = FlutterwaveService::make();
    }

    public function store(CheckoutRequest $request)
    {
        $inputs = $request->validated();
        $txVerification = $this->flwService->verifyTransaction($inputs['tx_id'], $inputs['amount'], $inputs['tx_ref']);

        return Responser::send(StatusCode::OK, $inputs, "Checkout complete");
    }
}
