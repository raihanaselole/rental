<!DOCTYPE html>
<html lang="en">
<head>
    <title>Rental Cups</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Poppins:200,300,400,500,600,700,800&display=swap" rel="stylesheet">

    <!-- CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="stylesheet" href="{{ asset('users/css/open-iconic-bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/owl.carousel.min.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/owl.theme.default.min.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/aos.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/ionicons.min.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/bootstrap-datepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/jquery.timepicker.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/flaticon.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/icomoon.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/style.css') }}">
</head>

<body>

{{-- NAVBAR --}}
@include('components.navbar')


{{-- HERO --}}
<div class="hero-wrap ftco-degree-bg"
     style="background-image: url('{{ asset('users/images/bg1.png') }}');"
     data-stellar-background-ratio="0.5">

    <div class="overlay"></div>

    <div class="container">
        <div class="row no-gutters slider-text justify-content-center align-items-center">
            <div class="col-lg-8 text-center">

                <h1 class="mb-4 text-white">
                    Rental Cups
                </h1>

                <p class="text-white mb-4">
                    Solusi Sewa Mobil Bensin & Listrik yang Mudah, Cepat, dan Terpercaya
                </p>

                <a href="{{ url('/booking') }}" class="btn btn-primary px-5 py-3">
                    Booking Sekarang
                </a>

            </div>
        </div>
    </div>
</div>


{{-- ABOUT / INTRO --}}
<section class="ftco-section">
    <div class="container text-center">

        <h2 class="mb-3">Welcome to Rental Cups</h2>

        <p class="mb-5">
            Rental Cups adalah layanan penyewaan mobil terpercaya yang menyediakan berbagai pilihan kendaraan,
            mulai dari mobil berbahan bakar bensin hingga mobil listrik modern.
            Kami hadir untuk memberikan pengalaman berkendara yang nyaman, aman, dan efisien.
        </p>

    </div>
</section>


{{-- FEATURES --}}
<section class="ftco-section bg-light">
    <div class="container">
        <div class="row text-center d-flex align-items-stretch">

            {{-- ITEM 1 --}}
            <div class="col-md-4 d-flex">
                <div class="feature-box p-4 w-100 text-center">
                    <div class="icon-box icon-1 mb-3">
                        <i class="fas fa-car"></i>
                    </div>
                    <h5>Mobil Berkualitas</h5>
                    <p>Semua kendaraan dirawat secara rutin dan siap digunakan kapan saja.</p>
                </div>
            </div>

            {{-- ITEM 2 --}}
            <div class="col-md-4 d-flex">
                <div class="feature-box p-4 w-100 text-center">
                    <div class="icon-box icon-2 mb-3">
                        <i class="fas fa-tags"></i>
                    </div>
                    <h5>Harga Terjangkau</h5>
                    <p>Kami memberikan harga terbaik sesuai dengan kualitas layanan.</p>
                </div>
            </div>

            {{-- ITEM 3 --}}
            <div class="col-md-4 d-flex">
                <div class="feature-box p-4 w-100 text-center">
                    <div class="icon-box icon-3 mb-3">
                        <i class="fas fa-headset"></i>
                    </div>
                    <h5>Support 24 Jam</h5>
                    <p>Tim kami siap membantu Anda kapan saja selama perjalanan.</p>
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
        <div class="row justify-content-center text-center">
            <div class="col-md-8 text-white">

                <h2 class="mb-4">Butuh Mobil Sekarang?</h2>

                <p>
                    Proses booking cepat, mudah, dan kendaraan siap digunakan kapan saja.
                </p>

                <a href="{{ url('/booking') }}" class="btn btn-primary btn-lg mt-3">
                    Mulai Booking
                </a>

            </div>
        </div>
    </div>
</section>


{{-- FOOTER --}}
@include('components.footer')



 <script src="{{ asset('users/js/jquery.min.js') }}"></script>
        <script src="{{ asset('users/js/popper.min.js') }}"></script>
        <script src="{{ asset('users/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('users/js/jquery.min.js') }}"></script>
        <script src="{{ asset('users/js/jquery-migrate-3.0.1.min.js') }}"></script>
        <script src="{{ asset('users/js/popper.min.js') }}"></script>
        <script src="{{ asset('users/js/bootstrap.min.js') }}"></script>
        <script src="{{ asset('users/js/jquery.easing.1.3.js') }}"></script>
        <script src="{{ asset('users/js/jquery.waypoints.min.js') }}"></script>
        <script src="{{ asset('users/js/jquery.stellar.min.js') }}"></script>
        <script src="{{ asset('users/js/owl.carousel.min.js') }}"></script>
        <script src="{{ asset('users/js/jquery.magnific-popup.min.js') }}"></script>
        <script src="{{ asset('users/js/aos.js') }}"></script>
        <script src="{{ asset('users/js/jquery.animateNumber.min.js') }}"></script>
        <script src="{{ asset('users/js/bootstrap-datepicker.js') }}"></script>
        <script src="{{ asset('users/js/jquery.timepicker.min.js') }}"></script>
        <script src="{{ asset('users/js/scrollax.min.js') }}"></script>
        <script src="{{ asset('users/js/main.js') }}"></script>
</body>
</html>