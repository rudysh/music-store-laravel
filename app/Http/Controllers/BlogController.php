<?php

namespace App\Http\Controllers;

use App\Models\Course;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
        $blogs = Course::all();
        return view('blogs.blog', compact('blogs',));
    }

    public function show($id)
    {
        $blogInfo = Course::with('lessons')->find($id);
        return view('blogs.show', compact('blogInfo'));
    }

}
