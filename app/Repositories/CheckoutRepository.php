<?php

namespace App\Repositories;

use App\Models\Order;
use App\Models\OrderBilling;
use App\Models\OrderItem;
use App\Models\OrderShipping;
use App\Models\User;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Auth;

class CheckoutRepository
{
    /**
     * @return CheckoutRepository
     */
    public static function make(): CheckoutRepository
    {

        return new static();
    }

    /**
     * @param array $data
     * 
     * @return OrderBilling
     */
    function saveBillingInfo(array $data, User $user): OrderBilling
    {
        $user = $user ?? Auth::user();

        if($user){
            $data['user_id'] = $user->id;
        }
        return OrderBilling::create($data);
    }

    /**
     * @param array $data
     * 
     * @return OrderShipping
     */
    function saveShippingInfo(array $data, User $user): OrderShipping
    {
        $user =  $user ?? Auth::user();

        if($user){
            $data['user_id'] = $user->id;
        }

        return OrderShipping::create($data);
    }

    /**
     * @param array $data
     * 
     * @return Order
     */
    function saveOrder(array $data, User $user): Order
    {
        $user =  $user ?? Auth::user();

        if($user){
            $data['user_id'] = $user->id;
        }

        return Order::create($data);
    }


    /**
     * @param array $data
     * 
     * @return OrderItem
     */
    function saveOrderItems(array $data, Order $order): Collection
    {
        return $order->items()->createMany($data);
    }
}
