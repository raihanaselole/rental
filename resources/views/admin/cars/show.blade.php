@extends('layouts.admin')

@section('content')

<div class="container pt-5 mt-5">

    <div class="card shadow border-0">

        <div class="card-header bg-dark text-white">
            <h4 class="mb-0 text-white">Detail Mobil</h4>
        </div>

        <div class="card-body">

            <div class="row">

                <div class="col-md-5">

                    <img src="{{ asset('storage/'.$car->image) }}"
                         class="img-fluid rounded shadow">

                </div>

                <div class="col-md-7">

                    <h3>{{ $car->name }}</h3>

                    <hr>

                    <p>
                        <b>Jenis:</b>
                        {{ $car->type }}
                    </p>

                    <p>
                        <b>Harga Umum:</b>
                        Rp {{ number_format($car->price,0,',','.') }}
                    </p>

                    <p>
                        <b>Harga per Jam:</b>
                        Rp {{ number_format($car->price_hour,0,',','.') }}
                    </p>

                    <p>
                        <b>Harga per Hari:</b>
                        Rp {{ number_format($car->price_day,0,',','.') }}
                    </p>

                    <p>
                        <b>Harga per Bulan:</b>
                        Rp {{ number_format($car->price_month,0,',','.') }}
                    </p>

                    <p>
                        <b>Deskripsi:</b><br>
                        {{ $car->description }}
                    </p>

                    <a href="{{ route('cars.index') }}"
                       class="btn btn-secondary mt-3">

                       Kembali

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>

@endsection