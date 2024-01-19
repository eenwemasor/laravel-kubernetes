<?php

namespace App\Http\Controllers\API\Order;

use App\Enums\StatusCode;
use App\Http\Controllers\Controller;
use App\Http\Responser;
use App\Models\Order;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    /**
     * @param Request $request
     * 
     * @return Responser
     */
    function index(Request $request)
    {
        $user = $request->user();
        $orders = Order::with(['billing.stateData', 'shipping.stateData', 'items.product', 'items.artwork'])
            ->where('user_id', $user->id)
            ->latest()
            ->paginate(10);

        return Responser::send(StatusCode::OK, $orders, "Order fetched successfully");
    }
}
