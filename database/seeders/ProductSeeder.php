<?php

namespace Database\Seeders;

use App\Models\Product;
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
       collect($products)->each(function($categories, $key){  
        // dd($key); 
         collect($categories)->each(function($product) use($key){
            $productObj = Product::create([
                'category' => $key,
                'name' => $product['name'],
                'description' => $product['description'],
                'unit_price' => $product['unit-price']
            ]);

            // dd($product);
         });
       });
    }
}
