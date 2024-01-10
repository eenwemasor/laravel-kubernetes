<?php

namespace Database\Seeders;

use App\Models\ShippingCost;
use Illuminate\Database\Seeder;

class ShippingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $states = config('shipping-config');
        collect($states)->each(function ($state, $key) {
            ShippingCost::create([
                'slug'                      => $key,
                'name'                      => $state['name'],
                'price'                     => $state['shipping_cost'],
                'enabled'                   => $state['enabled'],
                'express_price'             => $state['express_price'],
                'express_minimum_day'       => $state['express_minimum_day'],
                'express_maximum_day'       => $state['express_maximum_day'],
                'minimum_day'               => $state['minimum_day'],
                'maximum_day'               => $state['maximum_day']
            ]);
        });
    }
}
