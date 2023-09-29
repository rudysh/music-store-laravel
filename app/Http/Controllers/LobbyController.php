<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class LobbyController extends Controller
{
    public function index()
    {
        $promotionsProducts = Product::take(9)->get();
        return view('index', compact('promotionsProducts'));
    }

    public function about()
    {
        return view('about');
    }

    public function blog()
    {
        return view('blog');
    }

    public function contactUs()
    {
        return view('contactUs');
    }

    public function store()
    {
        return view('store');
    }
}
