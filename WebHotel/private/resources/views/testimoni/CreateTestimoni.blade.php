@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Form Tambah Testimonial</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Data Testimonial <br />
                        <hr />
                        <form method="POST" action="{{ URL('/testimoni') }}" class="" enctype="multipart/form-data">
                            {{ csrf_field() }}
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="input"
                                        placeholder="Name">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-10">
                                    <input type="text" name="country" class="form-control" id="input"
                                        placeholder="Country">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Testimoni</label>
                                <div class="col-sm-10">
                                    <textarea style="text-align: justify;" name="testimonial" cols="30" rows="10" class="form-control"
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
