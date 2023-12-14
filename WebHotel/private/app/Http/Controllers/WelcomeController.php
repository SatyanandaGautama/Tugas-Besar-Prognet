<?php

namespace App\Http\Controllers;

use App\Slider;
use App\Testimoni;

class WelcomeController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        $testimoni = Testimoni::all();
        return view('welcome', compact('slider','testimoni'));
    }
}
