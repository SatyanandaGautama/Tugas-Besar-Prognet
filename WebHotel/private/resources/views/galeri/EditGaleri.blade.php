@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><b>Form Edit Galeri</b></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <b>Data Galeri</b> <br />
                        <hr />
                        <form method="POST" action="{{ URL('/galeri/' . $data->id) }}" class=""
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
