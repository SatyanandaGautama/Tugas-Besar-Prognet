<?php

namespace App\Http\Controllers;
use App\Galeri;
use Spipu\Html2Pdf\Html2Pdf;
use Illuminate\Http\Request;

class GaleriController extends Controller
{
    public function cetak()
    {
        $galeri = Galeri::all();
        $html2pdf = new HTML2PDF('P', 'A4', 'de', false, 'UTF-8');
        $doc = view('galeri.CetakGaleri', compact('galeri'));
        $html2pdf->pdf->SetTitle('Cetak Galeri | PDF');
        $html2pdf->setDefaultFont('Times');
        $html2pdf->writeHTML($doc, false);
        $html2pdf->Output('CETAK_GALERI.pdf');
    }
    public function index()
    {
        $galeri = Galeri::all();
        return view('galeri.IndexGaleri', compact('galeri'));
    }
    public function insert()
    {
        return view('galeri.CreateGaleri');
    }
    public function store(Request $request)
    { //Request $request membaca data yg dikirim melalui Post
        $data = Galeri::create($request->all()); //(Syarat name pada input form harus sama dengan nama field database)
        if (!empty($request->file('foto'))) { //Ambil data foto dari form create/tambah
            $name = md5($data->id);
            $folder = 'private/storage/galeri'; //File foto tersimpan pada folder slider pada folder storage, private
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
        return redirect(URL('/galeri'));
    }
    public function edit($id)
    {
        $data = Galeri::find($id);
        return view('galeri.EditGaleri', compact('data'));
    }
    public function update($id, Request $request)
    {
        $data = Galeri::find($id);
        $data->judul = $request->judul;
        if (!empty($request->file('foto'))) { //Ambil data foto dari form create/tambah
            $name = md5($data->id);
            $folder = 'private/storage/galeri'; //File foto tersimpan pada folder slider pada folder storage, private
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
        return redirect(URL('/galeri'));
    }
    public function destroy($id, Request $request)
    {
        $data = Galeri::find($id);
        //Jika ada file foto, maka hapus file foto tersebut
        if (file_exists($data->foto)) {
            unlink($data->foto); //Menghapus file foto yang ada difolder
        }
        $data->delete();
        return redirect(URL('/galeri'));
    }
}
