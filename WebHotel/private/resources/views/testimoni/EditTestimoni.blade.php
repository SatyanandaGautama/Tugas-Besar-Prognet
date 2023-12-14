@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">Form Edit Data Testimonial</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        Data Testimonial<br />
                        <hr />
                        <form method="POST" action="{{ URL('/testimoni/' . $data->id) }}">
                            {{ csrf_field() }}
                            <input type="hidden" name="_method" value="PUT">
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Name</label>
                                <div class="col-sm-10">
                                    <input type="text" name="name" class="form-control" id="input"
                                        placeholder="Name" value="{{ $data->name }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Country</label>
                                <div class="col-sm-10">
                                    <input type="text" name="country" class="form-control" id="input"
                                        placeholder="Country" value="{{ $data->country }}">
                                </div>
                            </div>
                            <div class="form-group row">
                                <label for="input" class="col-sm-2 col-form-label">Testimoni</label>
                                <div class="col-sm-10">
                                    <textarea style="text-align: justify;" name="testimonial" cols="30" rows="10" class="form-control"
                                        id="input">{{ $data->testimonial }}
                                    </textarea>
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
