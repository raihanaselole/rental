<nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
    <div class="container">

        <a class="navbar-brand font-weight-bold" href="/admin/booking">
            Rental<span style="color:#01d28e;">Cups</span> Admin
        </a>

        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#adminNav">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="adminNav">

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

                <li class="nav-item dropdown">

                    <a class="nav-link dropdown-toggle"
                       href="#"
                       data-toggle="dropdown">

                        {{ Auth::user()->name }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right">

                        <form action="{{ route('logout') }}" method="POST">
                            @csrf

                            <button type="submit" class="dropdown-item">
                                Logout
                            </button>
                        </form>

                    </div>

                </li>

            </ul>

        </div>

    </div>
</nav>