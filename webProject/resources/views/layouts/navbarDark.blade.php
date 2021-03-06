  <!-- ======= Header ======= -->
  <header id="header" class="header fixed-top">
    <div class="container-fluid container-lg d-flex align-items-center justify-content-between">

      <a href="{{ route('home') }}" class="logo d-flex align-items-center">
        <img src="{{ route('home') }}" alt="">
        <span>Flores Amor</span>
      </a>

      <nav id="navbar" class="navbar">
        <ul>
          <li><a class="nav-link scrollto" href="{{route('eventDecor')}}">Event Decor</a></li>
          <li><a class="nav-link scrollto" href="{{route('gifts')}}">Gifts</a></li>
          <li><a class="nav-link scrollto" href="{{ route('aboutus') }}">About</a></li>
          <li>
            @auth
            <x-dropdown>
              <x-slot name="trigger">
                <button class="nav-link scrollto profile">
                  <img src="{{ asset('img/profile.jpg') }}" class="rounded-circle img-fluid">
                </button>
              </x-slot>

              <x-slot name="content">
                <!-- Authentication -->
                <x-dropdown-link :href="route('account')">
                  {{ __('Account') }}
                </x-dropdown-link>
                <x-dropdown-link :href="route('accountHistory')">
                  {{ __('Event History') }}
                </x-dropdown-link>
                <x-dropdown-link :href="route('giftOrderHistory')">
                  {{ __('Gift History') }}
                </x-dropdown-link>
                <form method="POST" action="{{ route('logout') }}">
                  @csrf

                  <x-dropdown-link :href="route('logout')" onclick="event.preventDefault();
                                                this.closest('form').submit();">
                    {{ __('Sign Out') }}
                  </x-dropdown-link>
                </form>
              </x-slot>
            </x-dropdown>
            @else
            <form action="{{ route('login') }}">
              @csrf
              <a class="nav-link scrollto" href="" onclick="event.preventDefault(); this.closest('form').submit();">Sign In</a>
            </form>
            @endauth
          </li>
        </ul>
        <i class="bi bi-list mobile-nav-toggle"></i>
      </nav><!-- .navbar -->

    </div>

  </header><!-- End Header -->

  <script src="{{ asset('js/app.js') }}"></script>