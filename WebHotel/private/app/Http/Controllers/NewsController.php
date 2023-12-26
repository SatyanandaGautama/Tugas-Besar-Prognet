<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
Use App\Blog;
class NewsController extends Controller
{
    public function index()
    {
        $blog = Blog::paginate(6);
        return view('news', compact('blog'));
    }
}
