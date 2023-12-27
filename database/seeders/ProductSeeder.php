<?php

namespace Database\Seeders;

use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $products = config('product-config');
        collect($products)->each(function ($categories, $key) {

            $category = ProductCategory::create([
                'slug'          => $key,
                'name'          => $categories['name'],
                'icon'          => $categories['icon'],
                'description'   => $categories['description']
            ]);

            collect($categories['items'])->each(function ($product) use ($category) {
                $settings = collect([]);

                if (isset($product['default-size'])) {
                    $settings->put('defaultSize', $product['default-size']);
                }
                if (isset($product['default-quantity'])) {
                    $settings->put('defaultQuantity', $product['default-quantity']);
                }

                if (isset($product['colors'])) {
                    $settings->put('colors', $product['colors']);
                }

                if (isset($product['sizes'])) {
                    $settings->put('sizes', $product['sizes']);
                }

                if (isset($product['length'])) {
                    $settings->put('length', $product['length']);
                }

                Product::create([
                    'category_id'           => $category->id,
                    'name'                  => $product['name'],
                    'active'                => $product['active'],
                    'description'           => $product['description'],
                    'short_description'     => $product['short-description'],
                    'unit_price'            => $product['unit-price'],
                    'settings'              => $settings
                ]);
            });
        });
    }
}
