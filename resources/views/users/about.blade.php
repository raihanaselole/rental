@extends('layouts.app')

@section('title', 'About')

@section('content')

{{-- HERO --}}
<section class="hero-wrap hero-wrap-2"
    style="
        background-image: url('{{ asset('users/images/bg1.png') }}');
        height: 300px;
        background-size: contain;
        background-position: center;
        background-repeat: no-repeat;
    ">
    <div class="overlay"></div>
    <div class="container">
        <div class="row no-gutters slider-text js-fullheight align-items-end justify-content-start">
        </div>
    </div>
</section>

{{-- ABOUT --}}
<section class="ftco-section ftco-about">
    <div class="container">
        <div class="row no-gutters">

            <div class="col-md-6 p-md-5 img img-2 d-flex justify-content-center align-items-center"
                style="background-image: url('{{ asset('users/images/about.jpg') }}');">
            </div>

            <div class="col-md-6 wrap-about">
                <div class="heading-section heading-section-white pl-md-5">
                    <span class="subheading">About us</span>
                    <h2 class="mb-4">Welcome to Rental Cups</h2>

                    <p>
                        Rental Cups adalah layanan penyewaan mobil terpercaya yang menyediakan berbagai pilihan kendaraan, mulai dari mobil berbahan bakar bensin hingga mobil listrik modern.
                    </p>

                    <p>
                        Kami hadir untuk memberikan solusi transportasi yang nyaman, aman, dan fleksibel untuk berbagai kebutuhan, baik perjalanan pribadi, bisnis, maupun acara khusus. Setiap kendaraan kami dirawat secara rutin untuk memastikan performa terbaik dan kenyamanan maksimal bagi pelanggan.
                    </p>

                    <p>
                        Dengan komitmen pada kualitas layanan dan kepuasan pelanggan, Rental Cups siap menjadi partner perjalanan Anda—lebih praktis, efisien, dan ramah lingkungan.
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>


{{-- TESTIMONI --}}
<section class="ftco-section testimony-section bg-light">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center heading-section">
                <span class="subheading">Testimonial</span>
                <h2 class="mb-3">Happy Clients</h2>
            </div>
        </div>

        <div class="row">
            <div class="col-md-12">

                <div class="carousel-testimony owl-carousel">

                    @for ($i = 1; $i <= 3; $i++)
                    <div class="item">
                        <div class="testimony-wrap rounded text-center py-4 pb-5">

                            <div class="user-img mb-2"
                                style="background-image: url('{{ asset('users/images/user2.webp') }}')">
                            </div>

                            <div class="text pt-4">
                                <p class="mb-4">
                                    Pelayanan sangat memuaskan dan mobil dalam kondisi prima.
                                </p>
                                <p class="name">Customer {{ $i }}</p>
                                <span class="position">User</span>
                            </div>

                        </div>
                    </div>
                    @endfor

                </div>

            </div>
        </div>

    </div>
</section>

{{-- COUNTER --}}
<section class="ftco-counter ftco-section img"
    style="background-image: url('{{ asset('users/images/bg_3.jpg') }}');">
    <div class="overlay"></div>

    <div class="container">
        <div class="row">

            <div class="col-md-3 text-center">
                <strong class="number">6</strong>
                <span>Year Experienced</span>
            </div>

            <div class="col-md-3 text-center">
                <strong class="number">10+</strong>
                <span>Total Cars</span>
            </div>

            <div class="col-md-3 text-center">
                <strong class="number">200+</strong>
                <span>Happy Customers</span>
            </div>

            <div class="col-md-3 text-center">
                <strong class="number">10</strong>
                <span>Branches</span>
            </div>

        </div>
    </div>
</section>

@endsection