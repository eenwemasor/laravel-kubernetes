<?php

namespace App\Http\Controllers\API\User;

use App\Enums\StatusCode;
use App\Http\Controllers\Controller;
use App\Http\Responser;
use Illuminate\Http\Request;

class UserController extends Controller
{
    /**
     * @param Request $request
     * 
     * @return Responser
     */
    function me(Request $request)
    {
        $user = $request->user();
        $user->load([
            'shippingAddresses.stateData:slug,name',
            'billingAddresses.stateData:slug,name',
            'orders' => function ($query) {
                $query->with(['billing.stateData', 'shipping.stateData', 'items.product', 'items.artwork'])->take(5);
            }
        ]);
        return Responser::send(StatusCode::OK, $user, "User details fetched successfully");
    }
}
