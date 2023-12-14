<?php

namespace App\Http\Controllers;

use App\Testimoni;
use Illuminate\Http\Request;

class TestimoniController extends Controller
{
    public function index(){
        $testimoni = Testimoni::all();
        return view('testimoni.IndexTestimoni',compact('testimoni'));
    }
    public function insert(){
        return view('testimoni.CreateTestimoni');
    }
    public function store(Request $request){//Request $request membaca data yg dikirim melalui Post
        Testimoni::create($request->all()); //(Syarat name pada input form harus sama dengan nama field database)
        return redirect(URL('/testimoni'));
    }
    public function edit($id){
        $data = Testimoni::find($id);
        return view('testimoni.EditTestimoni',compact('data'));
    }
    public function update($id,Request $request){
        $data = Testimoni::find($id);
        $data->name = $request->name;
        $data->country = $request->country;
        $data->testimonial = $request->testimonial;
        $data->save();
        return redirect(URL('/testimoni'));
    }
    public function destroy($id,Request $request){
        $data = Testimoni::find($id);
        $data->delete();
        return redirect(URL('/testimoni'));
    }
}
