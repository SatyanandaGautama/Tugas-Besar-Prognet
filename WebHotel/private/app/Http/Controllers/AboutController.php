<?php

namespace App\Http\Controllers;
use App\Galeri;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function index()
    {
        $galeri = Galeri::all();
        return view('about', compact('galeri'));
    }
}