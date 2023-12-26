@extends('layouts.app')
@section('content')
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                <h3 class="fs-2 m-0">Blog</h3>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div align="right">
                    <a href="{{ URL('/blog/insert') }}" class="btn btn-dark"><b>Tambah</b></a>
                    <a href="{{ URL('/blog/cetak') }}" class="btn btn-success" target="_blank"><b>Cetak</b></a>
                    <div>&nbsp;<br /></div>
                </div>
                <div class="card">
                    <div class="card-header"><b>Data Blog</b></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-striped">
                            <thead style="text-align: center">
                                <th>Judul Blog</th>
                                <th>Tema</th>
                                <th>Foto</th>
                                <th>Deskripsi Blog</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($blog as $b)
                                    <tr>
                                        <td>{{ $b->judul_blog }}</td>
                                        <td>{{ $b->tema_blog }}</td>
                                        <td> <img src="{{ URL($b->foto) . '?p=' . rand(0, 100) }}" height="100"
                                                width="150">
                                        </td>
                                        <td>{{ $b->deskripsi }}</td>
                                        <td>
                                            <a class="btn btn-warning"
                                                href="{{ URL('/blog/' . $b->id . '/edit') }}"><b>Edit</b></a>
                                            <div style="display: inline-block;">
                                                <form action="{{ URL('/blog/' . $b->id) }}" method="POST" id="formhapus">
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
