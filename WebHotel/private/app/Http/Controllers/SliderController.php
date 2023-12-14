<?php
namespace App\Http\Controllers;

use App\Slider;
use Illuminate\Http\Request;

class SliderController extends Controller
{
    public function index()
    {
        $slider = Slider::all();
        return view('slider.IndexSlider', compact('slider'));
    }
    public function insert()
    {
        return view('slider.CreateSlider');
    }
    public function store(Request $request)
    { //Request $request membaca data yg dikirim melalui Post
        $data = Slider::create($request->all()); //(Syarat name pada input form harus sama dengan nama field database)
        if (!empty($request->file('foto'))) { //Ambil data foto dari form create/tambah
            $name = md5($data->id);
            $folder = 'private/storage/slider'; //File foto tersimpan pada folder slider pada folder storage, private
            $extension = $request->file('foto')->getClientOriginalExtension();
            $file = $name . "." . $extension;
            //Jika foto sudah ada sebelumnya, hapus foto tersebut
            if (file_exists($folder . "/" . $file)) {
                unlink($folder . "/" . $file);
            }
            //Jika belum ada foto sebelumnya, pindahkan foto yg telah diupload ke folder slider pada storage
            if ($request->file('foto')->move($folder, $file)) {
                $data->foto = $folder . "/" . $file;
                $data->save();
            }
        }
        return redirect(URL('/slider'));
    }
    public function edit($id)
    {
        $data = Slider::find($id);
        return view('slider.EditSlider', compact('data'));
    }
    public function update($id, Request $request)
    {
        $data = Slider::find($id);
        $data->judul = $request->judul;
        if (!empty($request->file('foto'))) { //Ambil data foto dari form create/tambah
            $name = md5($data->id);
            $folder = 'private/storage/slider'; //File foto tersimpan pada folder slider pada folder storage, private
            $extension = $request->file('foto')->getClientOriginalExtension();
            $file = $name . "." . $extension;
            //Jika foto sudah ada sebelumnya, hapus foto tersebut
            if (file_exists($folder . "/" . $file)) {
                unlink($folder . "/" . $file);
            }
            //Jika belum ada foto sebelumnya, upload foto baru dan pindahkan ke folder slider pada storage
            if ($request->file('foto')->move($folder, $file)) {
                $data->foto = $folder . "/" . $file;
                $data->save();
            }
        }
        $data->save();
        return redirect(URL('/slider'));
    }
    public function destroy($id, Request $request)
    {
        $data = Slider::find($id);
        //Jika ada file foto, maka hapus file foto tersebut
        if (file_exists($data->foto)) {
            unlink($data->foto); //Menghapus file foto yang ada difolder
        }
        $data->delete();
        return redirect(URL('/slider'));
    }
}
