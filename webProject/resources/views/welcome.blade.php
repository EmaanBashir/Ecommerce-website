<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Home</title>
  <meta content="" name="description">
  <meta content="" name="keywords">

  <!-- Google Fonts -->
  <link
    href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
    rel="stylesheet">
  <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" />
  <link href="https://fonts.googleapis.com/css?family=Script+MT+Bold&display=swap" rel="stylesheet" />

  <!--Font awesome-->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href = "{{ asset('vendor/bootstrap-social/bootstrap-social.css') }}" rel = "stylesheet">

  <!-- Vendor CSS Files -->
  <link href = "{{ asset('vendor/animate.css/animate.min.css') }}" rel = "stylesheet">
  <link href = "{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel = "stylesheet">
  <link href = "{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel = "stylesheet">
  <link href = "{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel = "stylesheet">
  <link href = "{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel = "stylesheet">
  <link href = "{{ asset('vendor/remixicon/remixicon.css') }}" rel = "stylesheet">
  <link href = "{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel = "stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/home.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: Hidayah - v4.7.0
  * Template URL: https://bootstrapmade.com/hidayah-free-simple-html-template-for-corporate/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>
    @include('layouts.navbarWhite')
  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

      <div class="carousel-inner" role="listbox">

        <!-- Slide 1 -->
        <div class="carousel-item active" style="background-image: url('{{ asset('img/home/slide/slide-1.png')}}');">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Make your day glorious with Flores Amor</h2>
              <a href = "#" class="mt-3 btn-get-started animated fadeInUp scrollto">BOOK NOW</a>
            </div>
          </div>
        </div>

        <!-- Slide 2 -->
        <div class="carousel-item" style="background-image: url('{{ asset('img/home/slide/slide-2.png')}}');">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Make your day glorious with Flores Amor</span></h2>
              <a href = "#" class="mt-3 btn-get-started animated fadeInUp scrollto">BOOK NOW</a>
            </div>
          </div>
        </div>

        <!-- Slide 3 -->
        <div class="carousel-item" style="background-image: url('{{ asset('img/home/slide/slide-3.png')}}');">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Make your day glorious with Flores Amor</span></h2>
              <a href = "#" class="mt-3 btn-get-started animated fadeInUp scrollto">BOOK NOW</a>
            </div>
          </div>
        </div>

        <!-- Slide 4 -->
        <div class="carousel-item" style="background-image: url('{{ asset('img/home/slide/slide-4.png')}}');">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Make your day glorious with Flores Amor</h2>
              <a href = "#" class="mt-3 btn-get-started animated fadeInUp scrollto">BOOK NOW</a>
            </div>
          </div>
        </div>

        <!-- Slide 5 -->
        <div class="carousel-item" style="background-image: url('{{ asset('img/home/slide/slide-5.png')}}');">
          <div class="carousel-container">
            <div class="container">
              <h2 class="animated fadeInDown">Make your day glorious with Flores Amor</h2>
              <a href = "#" class="mt-3 btn-get-started animated fadeInUp scrollto">BOOK NOW</a>
            </div>
          </div>
        </div>

      </div>
    </div>
  </section><!-- End Hero -->

  <main id="main">

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container">

        <div class="section-title text-center">
          <h2>Flores Amor</h2>
          <p>YOUR CHOICE, OUR RESPONSIBILITY</p>
          <h3>EVENTS</h3>
        </div>

        <div class="wedding">

          <div class="row event-title">
            <div class="col-1"></div>
            <h2 class="col-auto">WEDDINGS</h2>
            <div class="col"></div>
          </div>

          <div class="row mt-5">
            <div
              class="col-xl-4 col-lg-4 video-box d-flex justify-content-center align-items-stretch position-relative">
              <img src="{{ asset('img/home/weddings/pic1.png') }}" class="glightbox img-fluid h-75 mb-4">
              <div class="h-75 w-75 wed-1 position-absolute"></div>
            </div>

            <div class="col-xl-7 col-lg-7 d-flex flex-column justify-content-center px-lg-5 text-center">
              <p>We strive
                to make your wedding the most memorable event of your life.
                A themed wedding, destination wedding, traditional wedding, beach wedding, and many more.
              </p>

              <p>Choose from our wedding themes or customize your wedding.</p>
              <div class="text-center">
                <a href="#"
                  class="rounded-pill btn scrollto d-inline-flex align-items-center justify-content-center align-self-center px-5 py-3">
                  <span>See More</span>
                </a>
              </div>
            </div>

            <div class="row mt-5">
              <img src="{{ asset('img/home/weddings/pic2.png') }}" class="col-lg-6 m-0 p-0 img-fluid">
              <div class="col-lg-6">
                <div class="row">
                  <img src="{{ asset('img/home/weddings/pic3.png') }}" alt="" class="col-6 m-0 p-0 img-fluid">
                  <img src="{{ asset('img/home/weddings/pic4.png') }}" alt="" class="col-6 m-0 p-0 img-fluid">
                </div>
                <div class="row">
                  <img src="{{ asset('img/home/weddings/pic5.png') }}" alt="" class="col-6 m-0 p-0 img-fluid">
                  <img src="{{ asset('img/home/weddings/pic2.png') }}" alt="" class="col-6 m-0 p-0 img-fluid">
                </div>
              </div>
            </div>

          </div>
        </div>

        <div class="wedding birthday">

          <div class="row event-title">
            <div class="col-1"></div>
            <h2 class="col-auto">BIRTHDAYS</h2>
            <div class="col"></div>
          </div>

          <div class="row mt-5">
            <div
              class="col-xl-4 col-lg-4 video-box d-flex justify-content-center align-items-stretch position-relative">
              <img src="{{ asset('img/home/birthdays/pic1.png') }}" class="glightbox img-fluid h-75 mb-4">
              <div class="h-75 w-75 wed-2 position-absolute"></div>
            </div>

            <div class="col-xl-7 col-lg-7 d-flex flex-column justify-content-center px-lg-5 text-center">
              <p>Let it be a
                Marverl-themed birthday or Kitty-themed.
              </p>

              <p>We have got you covered !!!</p>
              <div class="text-center">
                <a href="#"
                  class="rounded-pill btn scrollto d-inline-flex align-items-center justify-content-center align-self-center px-5 py-3">
                  <span>See More</span>
                </a>
              </div>
            </div>

            <div class="row mt-5">
              <img src="{{ asset('img/home/birthdays/pic2.png') }}" class="col-lg-6 m-0 p-0 img-fluid">
              <div class="col-lg-6">
                <div class="row">
                  <img src="{{ asset('img/home/birthdays/pic2.png') }}" alt="" class="col-6 m-0 p-0 img-fluid">
                  <img src="{{ asset('img/home/birthdays/pic2.png') }}" alt="" class="col-6 m-0 p-0 img-fluid">
                </div>
                <div class="row">
                  <img src="{{ asset('img/home/birthdays/pic2.png') }}" alt="" class="col-6 m-0 p-0 img-fluid">
                  <img src="{{ asset('img/home/birthdays/pic2.png') }}" alt="" class="col-6 m-0 p-0 img-fluid">
                </div>
              </div>
            </div>

          </div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <section id="end">
      <div class="container">

        <div class="section-title text-center">
          <h3>Not sure where to start ? No need to worry.</h3>
          <h4>Get in touch with us and make your event just the way you want</h4>
          <div class="text-center">
            <a href="#"
              class="btn mt-5 scrollto d-inline-flex align-items-center justify-content-center align-self-center px-5 py-3">
              <span>Get in touch</span>
            </a>
          </div>
        </div>

      </div>
    </section>
  </main><!-- End #main -->

  <div id="preloader"></div>
  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
      class="bi bi-arrow-up-short"></i></a>

    @include('layouts.footer')

  <!-- Vendor JS Files -->
  <script src = "{{ asset('vendor/purecounter/purecounter.js') }}"></script>
  <script src = "{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src = "{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src = "{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src = "{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src = "{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
  <script src = "{{ asset('vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="assets/js/main.js"></script>
  <script src = "{{ asset('js/home.js') }}"></script>

</body>

</html>