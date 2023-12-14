@extends('layouts.app')
@section('content')
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                <h3 class="fs-2 m-0">Testimoni</h3>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div align="right">
                    <a href="{{ URL('/testimoni/insert') }}" class="btn btn-dark"><b>Tambah</b></a>
                    <div>&nbsp;<br /></div>
                </div>
                <div class="card">
                    <div class="card-header">Daftar Testimoni</div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <th>Name</th>
                                <th>Country</th>
                                <th>Testimoni</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($testimoni as $d)
                                    <tr>
                                        <td>{{ $d->name }}</td>
                                        <td>{{ $d->country }}</td>
                                        <td style="text-align: justify;">{{ $d->testimonial }}</td>
                                        <td>
                                            <div class="btn-group" role="group">
                                                <a class="btn btn-warning"
                                                    href="{{ URL('/testimoni/' . $d->id . '/edit') }}"><b>Edit</b></a>
                                                <form action="{{ URL('/testimoni/' . $d->id) }}" method="POST"
                                                    id="formhapus">
                                                    {{ csrf_field() }}
                                                    <input type="hidden" name="_method" value="delete">
                                                    <button class="btn btn-danger"><b>Delete</b></button>
                                                </form>
                                            </div>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
@push('jquery')
    <script type="text/javascript">
        $(document).ready(function() {
            $(document).on('submit', '#formhapus', function(e) {
                let tanya = window.confirm("Apakah anda yakin untuk menghapus data ini?");
                if (tanya) {
                    return true;
                } else {
                    e.preventDefault();
                    return false
                }
            });
        });
    </script>
@endpush
