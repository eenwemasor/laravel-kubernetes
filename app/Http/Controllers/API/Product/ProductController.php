<?php

namespace App\Http\Controllers\API\Product;

use App\Enums\StatusCode;
use App\Http\Controllers\Controller;
use App\Http\Responser;
use App\Models\Product;
use App\Models\ProductCategory;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    /**
     * @param Request $request
     * 
     * @return Responser
     */
    function index(Request $request)
    {
        $category = ProductCategory::get();
        $products = Product::with(['files'])->get();

        return Responser::send(StatusCode::OK, [
            "products" => $products,
            "categories" =>  $category
        ], "Products fetched successfully");
    }
}
