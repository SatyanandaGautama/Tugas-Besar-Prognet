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
                        <h2>Blog</h2>
                        <div class="bt-option">
                            <a href="{{ URL('/') }}">Home</a>
                            <span>Blog Grid</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section blog-page spad">
        <div class="container">
            <div class="row">
                @foreach ($blog as $b)
                    <div class="col-lg-4 col-md-6">
                        <div class="blog-item set-bg" data-setbg="{{ URL($b->foto) . '?p=' . rand(0, 100) }}">
                            <div class="bi-text">
                                <span class="b-tag">{{ $b->tema_blog }}</span>
                                <h4><a href="./blog-details.html">{{ $b->judul_blog }}</a></h4>
                                <div class="b-time"><i class="icon_clock_alt"></i>{{ $b->updated_at->format('d F Y') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
                <div class="col-lg-12">
                    <div class="room-pagination">
                        {{ $blog->links() }}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->
@endsection
