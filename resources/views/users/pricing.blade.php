@extends('layouts.app')

@section('title', 'Pricing')

@section('content')

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

@php
$cars = [
    // 🚗 Mobil Bensin (10)
    ['name' => 'Toyota Avanza', 'type' => 'Bensin', 'img' => 'avanza.avif'],
    ['name' => 'Daihatsu Xenia', 'type' => 'Bensin', 'img' => 'xenia.avif'],
    ['name' => 'Honda Brio', 'type' => 'Bensin', 'img' => 'brio.png'],
    ['name' => 'Toyota Rush', 'type' => 'Bensin', 'img' => 'rush.webp'],
    ['name' => 'Mitsubishi Xpander', 'type' => 'Bensin', 'img' => 'xpander.jpg'],
    ['name' => 'Suzuki Ertiga', 'type' => 'Bensin', 'img' => 'ertiga.webp'],
    ['name' => 'Toyota Innova', 'type' => 'Bensin', 'img' => 'innova.jpg'],
    ['name' => 'Honda Mobilio', 'type' => 'Bensin', 'img' => 'mobilio.webp'],
    ['name' => 'Nissan Livina', 'type' => 'Bensin', 'img' => 'livina.webp'],
    ['name' => 'Toyota Fortuner', 'type' => 'Bensin', 'img' => 'fortuner.webp'],

    // ⚡ Mobil Listrik (3)
    ['name' => 'Hyundai Ioniq 5', 'type' => 'Listrik', 'img' => 'ioniq5.avif'],
    ['name' => 'Wuling Air EV', 'type' => 'Listrik', 'img' => 'wuling.jpeg'],
    ['name' => 'Tesla Model 3', 'type' => 'Listrik', 'img' => 'tesla.jpg'],
];
@endphp

<section class="ftco-section ftco-cart">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="car-list">

          <table class="table">
            <thead class="thead-primary">
              <tr class="text-center">
                <th></th>
                <th>Mobil</th>
                <th class="bg-primary heading">Per Hour</th>
                <th class="bg-dark heading">Per Day</th>
                <th class="bg-black heading">Per Month</th>
              </tr>
            </thead>

            <tbody>
              @foreach ($cars as $car)
              <tr>
                <td class="car-image">
                  <div class="img" 
                       style="background-image:url('{{ asset('users/images/'.$car['img']) }}'); height:100px;">
                  </div>
                </td>

                <td>
                  <h5>{{ $car['name'] }}</h5>
                  <span class="badge {{ $car['type'] == 'Listrik' ? 'bg-success' : 'bg-secondary' }}">
                    {{ $car['type'] }}
                  </span>
                  <p>⭐⭐⭐⭐⭐</p>
                </td>

                <td>
                  <a href="#" class="btn btn-primary btn-sm mb-1">Booking</a><br>
                  <strong>Rp 50.000</strong><br>
                  <small>/jam</small>
                </td>

                <td>
                  <a href="#" class="btn btn-primary btn-sm mb-1">Booking</a><br>
                  <strong>Rp 350.000</strong><br>
                  <small>/hari</small>
                </td>

                <td>
                  <a href="#" class="btn btn-primary btn-sm mb-1">Booking</a><br>
                  <strong>Rp 8.000.000</strong><br>
                  <small>/bulan</small>
                </td>
              </tr>
              @endforeach
            </tbody>

          </table>

        </div>
      </div>
    </div>
  </div>
</section>

@endsection