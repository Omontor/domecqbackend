<?php

namespace App\Http\Controllers\Frontend;
use App\Models\Blog;
class HomeController
{
    public function index()
    {
        $posts = Blog::latest()->get()->take(5);
        return view('frontend.home', compact('posts'));
    }
}
