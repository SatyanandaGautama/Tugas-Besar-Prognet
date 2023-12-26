<?php

namespace App\Http\Controllers;
Use App\Roomlist;
use Spipu\Html2Pdf\Html2Pdf;
use Illuminate\Http\Request;

class RoomlistController extends Controller
{
    public function cetak()
    {
        $roomlist = Roomlist::all();
        $html2pdf = new HTML2PDF('P', 'A4', 'de', false, 'UTF-8');
        $doc = view('roomlist.CetakRoomlist', compact('roomlist'));
        $html2pdf->pdf->SetTitle('Cetak Roomlist | PDF');
        $html2pdf->setDefaultFont('Times');
        $html2pdf->writeHTML($doc, false);
        $html2pdf->Output('CETAK_ROOMLIST.pdf');
    }
    public function index()
    {
        $roomlist = Roomlist::all();
        return view('roomlist.IndexRoomlist', compact('roomlist'));
    }
    public function insert()
    {
        return view('roomlist.CreateRoomlist');
    }
    public function store(Request $request)
    { //Request $request membaca data yg dikirim melalui Post
        $data = Roomlist::create($request->all()); //(Syarat name pada input form harus sama dengan nama field database)
        if (!empty($request->file('foto'))) { //Ambil data foto dari form create/tambah
            $name = md5($data->id);
            $folder = 'private/storage/roomlist'; //File foto tersimpan pada folder slider pada folder storage, private
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
        return redirect(URL('/roomlist'));
    }
    public function edit($id)
    {
        $data = Roomlist::find($id);
        return view('roomlist.EditRoomlist', compact('data'));
    }
    public function update($id, Request $request)
    {
        $data = Roomlist::find($id);
        $data->judul = $request->judul;
        $data->harga= $request->harga;
        $data->ukuran = $request->ukuran;
        $data->kapasitas = $request->kapasitas;
        $data->tipe_bed = $request->tipe_bed;
        $data->servis = $request->servis;
        $data->deskripsi = $request->deskripsi;
        if (!empty($request->file('foto'))) { //Ambil data foto dari form create/tambah
            $name = md5($data->id);
            $folder = 'private/storage/roomlist'; //File foto tersimpan pada folder slider pada folder storage, private
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
        return redirect(URL('/roomlist'));
    }
    public function destroy($id, Request $request)
    {
        $data = Roomlist::find($id);
        //Jika ada file foto, maka hapus file foto tersebut
        if (file_exists($data->foto)) {
            unlink($data->foto); //Menghapus file foto yang ada difolder
        }
        $data->delete();
        return redirect(URL('/roomlist'));
    }
}
