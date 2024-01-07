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
                'icon'          => route('file-assets-download', ['file-path' => $categories['icon']]),
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


                if(!isset($product['allow-custom-size'])){
                    dd($product);
                }
                Product::create([
                    'category_id'           => $category->id,
                    'name'                  => $product['name'],
                    'active'                => $product['active'],
                    'description'           => $product['description'],
                    'short_description'     => $product['short-description'],
                    'unit_price'            => $product['unit-price'],
                    'icon'                  => isset($product['icon']) ? route('file-assets-download', ['file-path' => $product['icon']])  : '',
                    'settings'              => $settings,
                    'allow_custom_size'     => $product['allow-custom-size'] ?? true, 
                    'allow_custom_quantity' => $product['allow-custom-quantity'] ?? true, 
                    'quantity_postfix'      => $product['quantity-postfix'] ?? null, 
                    'discount_percentage'   => $product['discount-percentage'], 
                    'min_width'             => $product['min-width'], 
                    'min_height'            => $product['min-height'], 
                    'max_width'             => $product['max-width'], 
                    'max_height'            => $product['max-height'], 
                    'min_quantity'          => $product['min-quantity'], 
                    'max_quantity'          => $product['max-quantity'], 

                ]);
            });
        });
    }
}
