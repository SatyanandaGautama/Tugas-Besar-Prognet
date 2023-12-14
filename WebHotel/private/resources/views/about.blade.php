@extends('layouts.mainlayouts')

@section('content')
    <style>
        .testimonial-slider {
            max-width: 800px;
            /* Atur lebar maksimum sesuai kebutuhan */
            margin: 0 auto;
            /* Atur margin otomatis untuk tetap di tengah halaman */
        }

        .testimonial-slider .owl-carousel-item {
            width: 100%;
            height: 100%;
            border-radius: 10px;
            overflow: hidden;
            transition: transform 0.5s ease-in-out;
        }

        .testimonial-slider img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }

        .testimonial-slider .gi-text {
            position: absolute;
            bottom: 0;
            background: transparent;
            width: 100%;
            padding: 10px;
            text-align: center;
        }

        .testimonial-slider .owl-carousel-item:hover {
            transform: scale(1.1);
        }
    </style>

    <!-- Breadcrumb Section Begin -->
    <div class="breadcrumb-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-text">
                        <h2>About Us</h2>
                        <div class="bt-option">
                            <a href="{{ URL('/') }}">Home</a>
                            <span>About Us</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Breadcrumb Section End -->

    <!-- About Us Page Section Begin -->
    <section class="aboutus-page-section spad">
        <div class="container">
            <div class="about-page-text">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="ap-title">
                            <h2>Welcome To Sona.</h2>
                            <p>Built in 1910 during the Belle Epoque period, this hotel is located in the center of
                                Paris, with easy access to the city’s tourist attractions. It offers tastefully
                                decorated rooms.</p>
                        </div>
                    </div>
                    <div class="col-lg-5 offset-lg-1">
                        <ul class="ap-services">
                            <li><i class="icon_check"></i> 20% Off On Accommodation.</li>
                            <li><i class="icon_check"></i> Complimentary Daily Breakfast</li>
                            <li><i class="icon_check"></i> 3 Pcs Laundry Per Day</li>
                            <li><i class="icon_check"></i> Free Wifi.</li>
                            <li><i class="icon_check"></i> Discount 20% On F&B</li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="about-page-services">
                <div class="row">
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p1.jpg">
                            <div class="api-text">
                                <h3>Restaurants Services</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p2.jpg">
                            <div class="api-text">
                                <h3>Travel & Camping</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="ap-service-item set-bg" data-setbg="img/about/about-p3.jpg">
                            <div class="api-text">
                                <h3>Event & Party</h3>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Page Section End -->

    <!-- Video Section Begin -->
    <section class="video-section set-bg" data-setbg="img/video-bg.jpg">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="video-text">
                        <h2>Discover Our Hotel & Services.</h2>
                        <p>It S Hurricane Season But We Are Visiting Hilton Head Island</p>
                        <a href="https://www.youtube.com/watch?v=EzKkl64rRbM" class="play-btn video-popup"><img
                                src="img/play.png" alt=""></a>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Video Section End -->

    <!-- Gallery Section Begin -->
    <section class="gallery-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Our Gallery</span>
                        <h2>Discover Our Work</h2>
                    </div>
                </div>
            </div>
            {{-- <div class="row">
                @foreach ($galeri as $g)
                    <div class="col-lg-6">
                        <div class="gallery-item set-bg" data-setbg="{{ URL($g->foto) . '?p=' . rand(0, 100) }}">
                            <div class="gi-text">
                                <h3>{{ $g->judul }}</h3>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div> --}}
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">
                        @foreach ($galeri as $g)
                            <div class="gallery-item">
                                <img src="{{ URL($g->foto) . '?p=' . rand(0, 100) }}" alt="{{ $g->judul }}"
                                    class="img-fluid">
                                <div class="gi-text">
                                    <h3>{{ $g->judul }}</h3>
                                </div>
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
        </div>
    </section>
    <!-- Gallery Section End -->
@endsection
