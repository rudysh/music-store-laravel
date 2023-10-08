<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class CartController extends Controller
{
    public function carIndex(Request $request){
        $cart = session()->get('cart', []);
        return view('car', compact('cart'));
    }

    public function add($productId,Request $request)
    {
        $productObj = Product::find($productId);
        $cart = session()->get('cart', []);
        $cart[] = $productObj;
        session()->put('cart', $cart);
        return response()->json("ok");
    }

    public function remove(Request $request)
    {
        $productToRemove = $request->input('product');
        $cart = session()->get('cart', []);
        $cart = array_diff($cart, [$productToRemove]);
        session()->put('cart', $cart);
        return redirect()->route('cart.index');
    }

}
