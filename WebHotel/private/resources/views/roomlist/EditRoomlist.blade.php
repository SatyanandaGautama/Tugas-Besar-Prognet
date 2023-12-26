@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><b>Form Edit Room</b></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <b>Data Room</b> <br />
                        <hr />
                        <form method="POST" action="{{ URL('/roomlist/' . $data->id) }}" class=""
                            enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Judul</label>
                                <div class="col-sm-10">
                                    <input type="text" name="judul" class="form-control" id="input"
                                        placeholder="Nama Judul" value="{{ $data->judul }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Harga(USD)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="harga" class="form-control" id="input"
                                        placeholder="Harga" value="{{ $data->harga }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Ukuran(ft)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="ukuran" class="form-control" id="input"
                                        placeholder="Ukuran" value="{{ $data->ukuran }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Kapasitas(person)</label>
                                <div class="col-sm-10">
                                    <input type="text" name="kapasitas" class="form-control" id="input"
                                        placeholder="Kapasitas" value="{{ $data->kapasitas }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Tipe Bed</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tipe_bed" class="form-control" id="input"
                                        placeholder="Tipe Bed" value="{{ $data->tipe_bed }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Servis</label>
                                <div class="col-sm-10">
                                    <input type="text" name="servis" class="form-control" id="input"
                                        placeholder="Servis" value="{{ $data->servis }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea style="text-align: justify;" name="deskripsi" cols="5" rows="5" class="form-control"
                                        id="input">{{ $data->deskripsi }}
                                    </textarea>
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <input type="file" name="foto">
                                </div>
                            </div>
                            <div class="col-md-12" align="right">
                                <input type="submit" name="simpan" class="btn btn-dark" value="Update">
                                <input type="reset" name="kosongkan" class="btn btn-default" value="Reset">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
