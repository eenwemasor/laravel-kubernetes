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
        $user->load(['shippingAddresses']);
        return Responser::send(StatusCode::OK, $user, "User details fetched successfully");
    }
}
