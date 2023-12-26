@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header"><b>Form Tambah Blog</b></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <b>Data Blog</b><br />
                        <hr />
                        <form method="POST" action="{{ URL('/blog') }}" class="" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Judul Blog</label>
                                <div class="col-sm-10">
                                    <input type="text" name="judul_blog" class="form-control" id="input"
                                        placeholder="Judul Blog">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Tema</label>
                                <div class="col-sm-10">
                                    <input type="text" name="tema_blog" class="form-control" id="input"
                                        placeholder="Tema Blog">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Foto</label>
                                <div class="col-sm-10">
                                    <input type="file" name="foto">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Deskripsi</label>
                                <div class="col-sm-10">
                                    <textarea style="text-align: justify;" name="deskripsi" cols="5" rows="5" class="form-control"
                                        id="input">
                                    </textarea>
                                </div>
                            </div>
                            <div class="col-md-12" align="right">
                                <input type="submit" name="simpan" class="btn btn-dark" value="Simpan">
                                <input type="reset" name="kosongkan" class="btn btn-default" value="Reset">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
