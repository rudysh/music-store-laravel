<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Arr;

class ProductController extends Controller
{
    public function find($productId){
        $product = Product::find($productId);
        return response()->json($product);
    }

    public function storeIndex(Request $request){
        $params = $request->all();
        $productsQuery = Product::query();
        $categorySelected = null;
        $querySearch = null;
        if(Arr::has($params,'category_id')){
            $productsQuery->where('category_id', $params['category_id']);
            $categorySelected = Category::find($params['category_id']);
        }

        if(Arr::has($params,'name')){
            $productsQuery->where('name', 'like', '%' . $params['name'] . '%');
            $querySearch = $params['name'];
        }

        $products = $productsQuery->paginate();
        $categories = Category::all();
        return view('store', compact('products','categories','categorySelected','querySearch'));
    }
}
