@extends('layouts.app')

@section('title', 'Contact')

@section('content')

{{-- HERO --}}
<section class="hero-wrap hero-wrap-2"
    style="background-image: url('{{ asset('users/images/bg1.png') }}'); height:300px; background-size:cover; background-position:center;">
    <div class="overlay"></div>
    <div class="container">
        <div class="row align-items-end h-100">
            
        </div>
    </div>
</section>

{{-- CONTACT INFO --}}
<section class="ftco-section">
    <div class="container">
      <div class="text-center">
                <h1 class="mb-3">Contact Rental Cups</h1>
                <p>Hubungi kami untuk informasi dan pemesanan mobil</p>
            </div>
        <div class="row justify-content-center text-center">


            {{-- Alamat --}}
            <div class="col-md-3 mb-4">
                <div class="p-4 border rounded h-100">
                    <h5>📍 Alamat</h5>
                    <p>Jl. Rental Cups No.123, Jakarta</p>
                </div>
            </div>

            {{-- Email --}}
            <div class="col-md-3 mb-4">
                <div class="p-4 border rounded h-100">
                    <h5>📧 Email</h5>
                    <p>info@rentalcups.com</p>
                </div>
            </div>

            {{-- Nomor HP --}}
            <div class="col-md-3 mb-4">
                <div class="p-4 border rounded h-100">
                    <h5>📞 Phone</h5>
                    <p>+62 812-3456-7890</p>
                </div>
            </div>

            {{-- Sosial Media --}}
            <div class="col-md-3 mb-4">
                <div class="p-4 border rounded h-100">
                    <h5>🌐 Social Media</h5>
                    <p>
                        <a href="#">Instagram</a><br>
                        <a href="#">Facebook</a><br>
                        <a href="#">WhatsApp</a>
                    </p>
                </div>
            </div>

        </div>
    </div>
</section>

@endsection