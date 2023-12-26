@extends('layouts.app')
@section('content')
    <style>
        .table.table-striped.table-full-width {
            width: 100%;
        }

        .custom-card-width {
            width: 100%;
            /* You can adjust this value to your preference */
        }
    </style>
    <div id="page-content-wrapper">
        <nav class="navbar navbar-expand-lg navbar-light bg-transparent py-4 px-4">
            <div class="d-flex align-items-center">
                <i class="fas fa-align-left primary-text fs-4 me-3" id="menu-toggle"></i>
                <h3 class="fs-2 m-0">Room List</h3>
            </div>
        </nav>
    </div>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-8 custom-card-width">
                <div align="right">
                    <a href="{{ URL('/roomlist/insert') }}" class="btn btn-dark"><b>Tambah</b></a>
                    <a href="{{ URL('/roomlist/cetak') }}" class="btn btn-success" target="_blank"><b>Cetak</b></a>
                    <div>&nbsp;<br /></div>
                </div>
                <div class="card">
                    <div class="card-header"><b>Data Room</b></div>
                    <div class="card-body">
                        @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                        @endif
                        <table class="table table-striped table-full-width">
                            <thead style="text-align: center;">
                                <th>Judul</th>
                                <th>Harga(USD)</th>
                                <th>Ukuran(ft)</th>
                                <th>Kapasitas(person)</th>
                                <th>Tipe Bed</th>
                                <th>Servis</th>
                                <th>Deskripsi</th>
                                <th>Foto</th>
                                <th>Aksi</th>
                            </thead>
                            <tbody>
                                @foreach ($roomlist as $d)
                                    <tr>
                                        <td>{{ $d->judul }}</td>
                                        <td>{{ $d->harga }}</td>
                                        <td>{{ $d->ukuran }}</td>
                                        <td>{{ $d->kapasitas }}</td>
                                        <td>{{ $d->tipe_bed }}</td>
                                        <td>{{ $d->servis }}</td>
                                        <td>{{ $d->deskripsi }}</td>
                                        <td> <img src="{{ URL($d->foto) . '?p=' . rand(0, 100) }}" height="100"
                                                width="150">
                                        </td>
                                        <td>
                                            <a class="btn btn-warning"
                                                href="{{ URL('/roomlist/' . $d->id . '/edit') }}"><b>Edit</b></a>
                                            <div style="display: inline-block;">
                                                <form action="{{ URL('/roomlist/' . $d->id) }}" method="POST"
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
