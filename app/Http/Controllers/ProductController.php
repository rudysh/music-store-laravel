<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function find($productId){
        $product = Product::find($productId);
        return response()->json($product);
    }
}
