@extends('layouts.mainlayouts')

@section('content')
    <style>
        .room-pagination {
            margin-top: 20px;
            /* Adjust the spacing as needed */
        }

        .room-pagination .pagination {
            display: flex;
            justify-content: center;
        }

        .room-pagination .pagination>li>a,
        .room-pagination .pagination>li>span {
            color: #c47741;
            /* Brown color */
            background-color: #fff8db;
            /* Light brown background */
            border: 1px solid #c47741;
            /* Brown border */
            padding: 6px 12px;
            /* Adjust padding as needed */
            margin: 0 3px;
            /* Adjust margin as needed */
        }

        .room-pagination .pagination>.active>a,
        .room-pagination .pagination>.active>span {
            background-color: #c47741;
            /* Active brown background */
            color: #FFF;
            /* Active text color */
            border: 1px solid #c47741;
            /* Active brown border */
        }
    </style>
    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>Our Rooms</h2>
                        <div class="bt-option">
                            <a href="{{ URL('/') }}">Home</a>
                            <span>Rooms</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Rooms Section Begin -->
    <section class="rooms-section spad">
        <div class="container">
            <div class="row">
                @foreach ($roomlist as $r)
                    <div class="col-lg-4 col-md-6">
                        <div class="room-item">
                            <img src="{{ URL($r->foto) . '?p=' . rand(0, 100) }}">
                            <div class="ri-text">
                                <h4>{{ $r->judul }}</h4>
                                <h3>{{ $r->harga }}$<span>/Pernight</span></h3>
                                <table>
                                    <tbody>
                                        <tr>
                                            <td class="r-o">Size:</td>
                                            <td>{{ $r->ukuran }} ft</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Capacity:</td>
                                            <td>{{ $r->kapasitas }} person</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Bed:</td>
                                            <td>{{ $r->tipe_bed }}</td>
                                        </tr>
                                        <tr>
                                            <td class="r-o">Services:</td>
                                            <td>{{ $r->servis }}</td>
                                        </tr>
                                    </tbody>
                                </table>
                                <a href="#" class="primary-btn">More Details</a>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12">
                    <div class="room-pagination">
                        {{ $roomlist->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Rooms Section End -->
@endsection
