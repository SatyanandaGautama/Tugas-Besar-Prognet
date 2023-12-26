<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Blog;
use Spipu\Html2Pdf\Html2Pdf;
class BlogController extends Controller
{
    public function cetak()
    {
        $blog = Blog::all();
        $html2pdf = new HTML2PDF('P', 'A4', 'de', false, 'UTF-8');
        $doc = view('blog.CetakBlog', compact('blog'));
        $html2pdf->pdf->SetTitle('Cetak Blog | PDF');
        $html2pdf->setDefaultFont('Times');
        $html2pdf->writeHTML($doc, false);
        $html2pdf->Output('CETAK_BLOG.pdf');
    }
    public function index()
    {
        $blog = Blog::all();
        return view('blog.IndexBlog', compact('blog'));
    }
    public function insert()
    {
        return view('blog.CreateBlog');
    }
    public function store(Request $request)
    { //Request $request membaca data yg dikirim melalui Post
        $data = Blog::create($request->all()); //(Syarat name pada input form harus sama dengan nama field database)
        if (!empty($request->file('foto'))) { //Ambil data foto dari form create/tambah
            $name = md5($data->id);
            $folder = 'private/storage/blog'; //File foto tersimpan pada folder slider pada folder storage, private
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
        return redirect(URL('/blog'));
    }
    public function edit($id)
    {
        $data = Blog::find($id);
        return view('blog.EditBlog', compact('data'));
    }
    public function update($id, Request $request)
    {
        $data = Blog::find($id);
        $data->judul_blog = $request->judul_blog;
        $data->tema_blog = $request->tema_blog;
        $data->deskripsi = $request->deskripsi;
        if (!empty($request->file('foto'))) { //Ambil data foto dari form create/tambah
            $name = md5($data->id);
            $folder = 'private/storage/blog'; //File foto tersimpan pada folder slider pada folder storage, private
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
        return redirect(URL('/blog'));
    }
    public function destroy($id, Request $request)
    {
        $data = Blog::find($id);
        //Jika ada file foto, maka hapus file foto tersebut
        if (file_exists($data->foto)) {
            unlink($data->foto); //Menghapus file foto yang ada difolder
        }
        $data->delete();
        return redirect(URL('/blog'));
    }
}
