<!DOCTYPE html>
<html lang="en">
<head>

    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Admin Rental Cups</title>

    {{-- CSS --}}
    <link rel="stylesheet" href="{{ asset('users/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('users/css/style.css') }}">

</head>

<body style="background:#f8f9fa;">

{{-- NAVBAR --}}
<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">

    <div class="container">

        <a class="navbar-brand font-weight-bold" href="/admin/booking">
            Admin Rental Cups
        </a>

        <button class="navbar-toggler"
                type="button"
                data-toggle="collapse"
                data-target="#adminNavbar">

            <span class="navbar-toggler-icon"></span>

        </button>

        <div class="collapse navbar-collapse" id="adminNavbar">

            <ul class="navbar-nav ml-auto">

                <li class="nav-item">
                    <a href="/admin/booking" class="nav-link">
                        Booking
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/admin/cars" class="nav-link">
                        Cars
                    </a>
                </li>

                <li class="nav-item">
                    <a href="/" class="nav-link">
                        Home
                    </a>
                </li>

                <li class="nav-item">

                    <form action="{{ route('logout') }}"
                          method="POST">

                        @csrf

                        <button class="btn btn-danger btn-sm ml-3 mt-1">
                            Logout
                        </button>

                    </form>

                </li>

            </ul>

        </div>

    </div>

</nav>


{{-- CONTENT --}}
<div style="min-height:100vh; padding-top:90px;">

    @yield('content')

</div>


{{-- FOOTER --}}
<footer class="bg-dark text-white text-center py-3 mt-5">

    <div class="container">

        © {{ date('Y') }} Admin Rental Cups

    </div>

</footer>


{{-- JS --}}
<script src="{{ asset('users/js/jquery.min.js') }}"></script>
<script src="{{ asset('users/js/bootstrap.min.js') }}"></script>

</body>
</html>