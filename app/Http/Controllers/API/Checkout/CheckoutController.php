<?php

namespace App\Http\Controllers\API\Checkout;

use App\Enums\StatusCode;
use App\Http\Controllers\Controller;
use App\Http\Requests\CheckoutRequest;
use App\Http\Responser;

class CheckoutController extends Controller
{
    public function store(CheckoutRequest $request)
    {
        $inputs = $request->validated();
        return Responser::send(StatusCode::OK, $inputs, "Checkout complete");
    }
}
