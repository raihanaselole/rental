@extends('layouts.app')

@section('title', 'Pricing')

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
        <div class="row no-gutters slider-text align-items-end justify-content-start">
        </div>
    </div>

</section>


{{-- PRICING --}}
<section class="ftco-section ftco-cart">

    <div class="container">

        <div class="row justify-content-center mb-5">

            <div class="col-md-7 text-center heading-section">

                <span class="subheading">
                    Rental Cups
                </span>

                <h2 class="mb-3">
                    Daftar Harga Rental Mobil
                </h2>

                <p>
                    Pilih kendaraan terbaik sesuai kebutuhan perjalanan Anda.
                </p>

            </div>

        </div>


        <div class="row">

            @foreach ($cars as $car)

            <div class="col-md-4 mb-4">

                <div class="card shadow border-0 h-100">

                    {{-- IMAGE --}}
                    <img src="{{ asset('storage/'.$car->image) }}"
                         class="card-img-top"
                         style="height:220px; object-fit:cover;">

                    <div class="card-body text-center">

                        {{-- NAMA --}}
                        <h4 class="mb-2">
                            {{ $car->name }}
                        </h4>

                        {{-- TYPE --}}
                        <span class="badge 
                            {{ $car->type == 'Listrik' 
                                ? 'badge-success' 
                                : 'badge-secondary' }}">

                            {{ $car->type }}

                        </span>

                        <p class="mt-3 text-muted">
                            {{ $car->description }}
                        </p>

                        <hr>

                        {{-- HARGA --}}
                        <div class="mb-2">

                            <strong>
                                Rp {{ number_format($car->price_hour) }}
                            </strong>

                            <small>/jam</small>

                        </div>

                        <div class="mb-2">

                            <strong>
                                Rp {{ number_format($car->price_day) }}
                            </strong>

                            <small>/hari</small>

                        </div>

                        <div class="mb-4">

                            <strong>
                                Rp {{ number_format($car->price_month) }}
                            </strong>

                            <small>/bulan</small>

                        </div>

                        {{-- BUTTON --}}
                        <a href="{{ url('/booking') }}"
                           class="btn btn-primary btn-block">

                            Booking Sekarang

                        </a>

                    </div>

                </div>

            </div>

            @endforeach

        </div>

    </div>

</section>

@endsection