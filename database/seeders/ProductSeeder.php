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
       collect($products)->each(function($categories, $key){  

        $category = ProductCategory::create([
            'slug' => $key,
            'name' => $categories['name'],
            'icon' => $categories['icon'],
            'description' => $categories['description']
        ]);

        collect($categories['items'])->each(function($product) use($category){
            Product::create([
                'category_id' => $category->id,
                'name' => $product['name'],
                'description' => $product['description'],
                'unit_price' => $product['unit-price']
            ]);
         });
       });
    }
}
