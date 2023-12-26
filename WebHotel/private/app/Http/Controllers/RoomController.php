<?php

namespace App\Http\Controllers;
Use App\Roomlist;
class RoomController extends Controller
{
    public function index()
    {
        $roomlist = Roomlist::paginate(6);
        return view('room', compact('roomlist'));
    }
}
