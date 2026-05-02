<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Rental Cups') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />
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
    <body class="font-sans antialiased">
         @include('components.navbar')

        <main>
            @yield('content')
        </main>

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
