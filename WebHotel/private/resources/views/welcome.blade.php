@extends('layouts.mainlayouts')

@section('content')
    <style>
        /* Add this to your existing CSS file or style tag in your HTML */

        .explore-btn-container {
            text-align: center;
            margin-top: 20px;
            /* Adjust margin as needed */
        }

        .primary-btn.about-btn {
            /* Add your styles for the Explore More button */
            color: #fff;
            /* Button text color */
            background-color: #c47741;
            /* Button background color (brown) */
            padding: 10px 10px;
            text-decoration: none;
            display: inline-block;
            font-size: 12px;
            border-radius: 5px;
        }
    </style>
    <!-- Hero Section Begin -->
    <section class="hero-section">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="hero-text">
                        <h1>Sona A Luxury Hotel</h1>
                        <p>
                            Here are the best hotel booking sites, including recommendations
                            for international travel and for finding low-priced hotel rooms.
                        </p>
                        <a href="#" class="primary-btn">Discover Now</a>
                    </div>
                </div>
                <div class="col-xl-4 col-lg-5 offset-xl-2 offset-lg-1">
                    <div class="booking-form">
                        <h3>Booking Your Hotel</h3>
                        <form action="#">
                            <div class="check-date">
                                <label for="date-in">Check In:</label>
                                <input type="text" class="date-input" id="date-in" />
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="check-date">
                                <label for="date-out">Check Out:</label>
                                <input type="text" class="date-input" id="date-out" />
                                <i class="icon_calendar"></i>
                            </div>
                            <div class="select-option">
                                <label for="guest">Guests:</label>
                                <select id="guest">
                                    <option value="">2 Adults</option>
                                    <option value="">3 Adults</option>
                                </select>
                            </div>
                            <div class="select-option">
                                <label for="room">Room:</label>
                                <select id="room">
                                    <option value="">1 Room</option>
                                    <option value="">2 Room</option>
                                </select>
                            </div>
                            <button type="submit">Check Availability</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        <div class="hero-slider owl-carousel">
            @foreach ($slider as $d)
                <div class="hs-item set-bg" data-setbg="{{ URL($d->foto) . '?p=' . rand(0, 100) }}">
                </div>
            @endforeach
        </div>

    </section>
    <!-- Hero Section End -->

    <!-- About Us Section Begin -->
    <section class="aboutus-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-6">
                    <div class="about-text">
                        <div class="section-title">
                            <span>About Us</span>
                            <h2>Intercontinental LA <br />Westlake Hotel</h2>
                        </div>
                        <p class="f-para">
                            Sona.com is a leading online accommodation site. We’re
                            passionate about travel. Every day, we inspire and reach
                            millions of travelers across 90 local websites in 41 languages.
                        </p>
                        <p class="s-para">
                            So when it comes to booking the perfect hotel, vacation rental,
                            resort, apartment, guest house, or tree house, we’ve got you
                            covered.
                        </p>
                        <a href="#" class="primary-btn about-btn">Read More</a>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="about-pic">
                        <div class="row">
                            <div class="col-sm-6">
                                <img src="img/about/about-1.jpg" alt="" />
                            </div>
                            <div class="col-sm-6">
                                <img src="img/about/about-2.jpg" alt="" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- About Us Section End -->

    <!-- Services Section End -->
    <section class="services-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>What We Do</span>
                        <h2>Discover Our Services</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-036-parking"></i>
                        <h4>Travel Plan</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-033-dinner"></i>
                        <h4>Catering Service</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-026-bed"></i>
                        <h4>Babysitting</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-024-towel"></i>
                        <h4>Laundry</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-044-clock-1"></i>
                        <h4>Hire Driver</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                </div>
                <div class="col-lg-4 col-sm-6">
                    <div class="service-item">
                        <i class="flaticon-012-cocktail"></i>
                        <h4>Bar & Drink</h4>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do
                            eiusmod tempor incididunt ut labore et dolore magna.
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Services Section End -->

    <!-- Home Room Section Begin -->
    <section class="hp-room-section">
        <div class="container-fluid">
            <div class="hp-room-items">
                <div class="row">
                    @foreach ($roomlist as $i)
                        <div class="col-lg-3 col-md-6">
                            <div class="hp-room-item set-bg" data-setbg="{{ URL($i->foto) . '?p=' . rand(0, 100) }}">
                                <div class="hr-text">
                                    <h3>{{ $i->judul }}</h3>
                                    <h2>{{ $i->harga }}$<span>/Pernight</span></h2>
                                    <table>
                                        <tbody>
                                            <tr>
                                                <td class="r-o">Size:</td>
                                                <td>{{ $i->ukuran }} ft</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Capacity:</td>
                                                <td>{{ $i->kapasitas }} person</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Bed:</td>
                                                <td>{{ $i->tipe_bed }}</td>
                                            </tr>
                                            <tr>
                                                <td class="r-o">Services:</td>
                                                <td>{{ $i->servis }}</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                    <a href="#" class="primary-btn">More Details</a>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <div class="explore-btn-container">
        <a href="{{ URL('/room') }}" class="primary-btn about-btn">Explore More</a>
    </div>
    <!-- Home Room Section End -->

    <!-- Testimonial Section Begin -->
    <section class="testimonial-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Testimonials</span>
                        <h2>What Customers Say?</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 offset-lg-2">
                    <div class="testimonial-slider owl-carousel">
                        @foreach ($testimoni as $t)
                            <div class="ts-item">
                                <p>
                                    {{ $t->testimonial }}
                                </p>
                                <div class="ti-author">
                                    <div class="rating">
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star"></i>
                                        <i class="icon_star-half_alt"></i>
                                    </div>
                                    <h5>{{ $t->name }} <span>({{ $t->country }})</span></h5>
                                </div>
                                <img src="img/testimonial-logo.png" alt="" />
                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Testimonial Section End -->

    <!-- Blog Section Begin -->
    <section class="blog-section spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title">
                        <span>Hotel News</span>
                        <h2>Our Blog & Event</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                @foreach ($blog as $b)
                    <div class="col-lg-4">
                        <div class="blog-item set-bg" data-setbg="{{ URL($b->foto) . '?p=' . rand(0, 100) }}">
                            <div class="bi-text">
                                <span class="b-tag">{{ $b->tema_blog }}</span>
                                <h4><a href="#">{{ $b->judul_blog }}</a></h4>
                                <div class="b-time">
                                    <i class="icon_clock_alt"></i>{{ $b->updated_at->format('d F Y') }}
                                </div>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
            <div class="explore-btn-container">
                <a href="{{ URL('/news') }}" class="primary-btn about-btn">Load More</a>
            </div>
        </div>
    </section>

    <!-- Blog Section End -->
@endsection
