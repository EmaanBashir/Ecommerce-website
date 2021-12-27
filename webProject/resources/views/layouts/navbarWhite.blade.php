<!-- ======= Header ======= -->
<header id="header" class="position-absolute w-100">
    <div class="container d-flex align-items-center justify-content-between">
        <a href="" class="logo d-flex align-items-center">
            <span class="text-white">Flores Amor</span>
        </a>
        <nav id="navbar" class="navbar">
            <ul>
                <li><a class="nav-link scrollto" href="#">Categories</a></li>
                <li><a class="nav-link scrollto" href="#">Event Decor</a></li>
                <li><a class="nav-link scrollto" href="#">Gifts</a></li>
                <li><a class="nav-link scrollto" href="../aboutUs/index.html">About</a></li>
                <li>
                    @auth
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <a class="nav-link scrollto" href = "" onclick="event.preventDefault(); this.closest('form').submit();">Sign Out</a>
                    </form>
                    @else
                    <form action="{{ route('login') }}">
                        @csrf
                        <a class="nav-link scrollto" href = "" onclick="event.preventDefault(); this.closest('form').submit();">Sign In</a>
                    </form>
                    @endauth
                </li>
            </ul>
            <i class="bi bi-list mobile-nav-toggle"></i>
        </nav><!-- .navbar -->
    </div>
</header><!-- End Header -->