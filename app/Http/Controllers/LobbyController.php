<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Product;
use Illuminate\Http\Request;

class LobbyController extends Controller
{
    public function index()
    {
        $promotionsProducts = Product::take(9)->get();
        $courses = Course::take(4)->get();
        return view('index', compact('promotionsProducts','courses'));
    }

    public function about()
    {
        return view('about');
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
