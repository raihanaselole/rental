<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Rental Cups</title>
</head>
<body>
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
  <div class="container">
    <a class="navbar-brand" href="{{ url('/') }}">Rental<span>Cups</span></a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav">
      <span class="oi oi-menu"></span> Menu
    </button>

    <div class="collapse navbar-collapse" id="ftco-nav">
      <ul class="navbar-nav ml-auto">

    <li class="nav-item"><a href="{{ route('home') }}" class="nav-link">Home</a></li>
    <li class="nav-item"><a href="{{ route('about') }}" class="nav-link">About</a></li>
    <li class="nav-item"><a href="{{ route('services') }}" class="nav-link">Services</a></li>
    <li class="nav-item"><a href="{{ route('pricing') }}" class="nav-link">Pricing</a></li>

    {{-- BOOKING --}}
    <li class="nav-item">
        @auth
            <a href="{{ url('/booking') }}" class="nav-link">Booking</a>
        @else
            <a href="{{ route('login') }}" class="nav-link">Booking</a>
        @endauth
    </li>

    <li class="nav-item"><a href="{{ route('contact') }}" class="nav-link">Contact</a></li>

    {{-- AUTH --}}
    @guest
        <li class="nav-item"><a href="{{ route('login') }}" class="nav-link">Login</a></li>
        <li class="nav-item"><a href="{{ route('register') }}" class="nav-link">Register</a></li>
    @endguest

    @auth
        <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" href="#" data-toggle="dropdown">
                {{ Auth::user()->name }}
            </a>

            <div class="dropdown-menu dropdown-menu-right">

                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button type="submit" class="dropdown-item">Logout</button>
                </form>
            </div>
        </li>
    @endauth

</ul>
    </div>
  </div>
</nav>
</body>
</html>
