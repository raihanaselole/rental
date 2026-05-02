@extends('layouts.app')

@section('title', 'Services')

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

{{-- SERVICES --}}
<section class="ftco-section">
    <div class="container">

        <div class="row justify-content-center mb-5">
            <div class="col-md-7 text-center">
                <span class="subheading">Services</span>
                <h2 class="mb-3">Layanan Kami</h2>
            </div>
        </div>

        <div class="row">

            {{-- Rental Mobil Bensin --}}
            <div class="col-md-3">
                <div class="services services-2 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        🚗
                    </div>
                    <div class="text">
                        <h3 class="heading">Rental Mobil Bensin</h3>
                        <p>
                            Pilihan mobil bensin yang nyaman dan ekonomis untuk kebutuhan harian maupun perjalanan jauh.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Rental Mobil Listrik --}}
            <div class="col-md-3">
                <div class="services services-2 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        ⚡
                    </div>
                    <div class="text">
                        <h3 class="heading">Rental Mobil Listrik</h3>
                        <p>
                            Kendaraan ramah lingkungan dengan teknologi modern untuk pengalaman berkendara yang lebih efisien.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Sewa Harian --}}
            <div class="col-md-3">
                <div class="services services-2 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        📅
                    </div>
                    <div class="text">
                        <h3 class="heading">Sewa Harian</h3>
                        <p>
                            Layanan sewa fleksibel per hari dengan harga terjangkau dan proses cepat.
                        </p>
                    </div>
                </div>
            </div>

            {{-- Sewa Bulanan --}}
            <div class="col-md-3">
                <div class="services services-2 text-center">
                    <div class="icon d-flex align-items-center justify-content-center">
                        🗓️
                    </div>
                    <div class="text">
                        <h3 class="heading">Sewa Bulanan</h3>
                        <p>
                            Solusi hemat untuk kebutuhan jangka panjang dengan harga lebih ekonomis.
                        </p>
                    </div>
                </div>
            </div>

        </div>

    </div>
</section>

{{-- CTA --}}
<section class="ftco-section ftco-intro"
    style="background-image: url('{{ asset('users/images/bg_3.jpg') }}');">
    <div class="overlay"></div>
    <div class="container">
        <div class="row justify-content-end">
            <div class="col-md-6 heading-section heading-section-white">
                <h2 class="mb-3">Siap Memulai Perjalanan Anda?</h2>
                <a href="#" class="btn btn-primary btn-lg">Booking Sekarang</a>
            </div>
        </div>
    </div>
</section>

@endsection