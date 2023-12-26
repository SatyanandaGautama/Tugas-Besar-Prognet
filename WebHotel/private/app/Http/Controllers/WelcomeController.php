<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Testimoni;
Use App\Roomlist;
Use App\Blog;
class WelcomeController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $testimoni = Testimoni::all();
        $roomlist = Roomlist::paginate(4);
        $blog = Blog::paginate(6);
        return view('welcome', compact('slider','testimoni','roomlist','blog'));
    }
}
