<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>About Us</title>
  <meta content="" name="description">

  <meta content="" name="keywords">

  <!-- Favicons -->
  <link href="assets/img/favicon.png" rel="icon">
  <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

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

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    
  <!-- Vendor CSS Files -->
  <link href = "{{ asset('vendor/animate.css/animate.min.css') }}" rel = "stylesheet">
  <link href = "{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel = "stylesheet">
  <link href = "{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel = "stylesheet">
  <link href = "{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel = "stylesheet">
  <link href = "{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel = "stylesheet">
  <link href = "{{ asset('vendor/remixicon/remixicon.css') }}" rel = "stylesheet">
  <link href = "{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel = "stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('css/navbarDark.css') }}" rel="stylesheet">
  <link href="{{ asset('css/aboutus.css') }}" rel="stylesheet">
  <link href="{{ asset('css/footer.css') }}" rel="stylesheet">

  <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>

  @include('layouts.navbarDark')

  <!-- ======= Hero Section ======= -->
  <section id="hero" class="hero d-flex flex-column align-items-center justify-content-evenly">
    <h1 class="about-us">ABOUT US</h1>
    <div class="container">
      <div class="row">
        <div class="col-lg-5 d-flex flex-column justify-content-center align-items-left">
          <h2 data-aos="fade-up" data-aos-delay="400">We work to make your every <br> moment worthwhile and <br>
            mesmerizing with our <br> exceptional event decor <br> team and passionate <br> creative team.
          </h2>
        </div>
        <div class="col-lg-7 hero-img" data-aos="zoom-out" data-aos-delay="200">
          <div class = "img-parent">
            <img class="rounded-circle img-fluid left-img d-sm-block" src="{{ asset('img/aboutus/v247_14.png') }}">

            <img class="rounded-circle img-fluid mid-img d-sm-block" src="{{ asset('img/aboutus/v247_13.png') }}">

            <img class="rounded-circle img-fluid right-img d-sm-block" src="{{ asset('img/aboutus/v247_12.png') }}">
          </div>
        </div>
      </div>
    </div>

  </section><!-- End Hero -->

  <!-- ======= Values Section ======= -->
  <section id="values" class="values">

    <div class="container" data-aos="fade-up">

      <header class="section-header">
        <p>OUR SERVICES</p>
      </header>

      <div class="row">

        <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
          <div class="card col-12 box bg-transparent">
            <h3 class = "fa fa-gift"></h3>
            <div class="card-body">
              <p class="card-text">Provide fresh and beautiful flowers in our newly introduced exquisite
                packaging to keep them fresh for long.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="400">
          <div class="card box bg-transparent">
            <h3 class = "fa fa-gift"></h3>
            <div class="card-body">
              <p class="card-text">Provide top-notch gift boxes for
                your loved ones. We offer a variety of gift boxes along with customization.</p>
            </div>
          </div>
        </div>

        <div class="col-lg-4 mt-4 mt-lg-0" data-aos="fade-up" data-aos-delay="600">
          <div class="card box bg-transparent">
            <h3 class = "fa fa-gift"></h3>
            <div class="card-body">
              <p class="card-text">Provide exceptional decor for every event. Plan, manage and control all
                the little details of your event.</p>
            </div>
          </div>
        </div>

      </div>

    </div>

  </section><!-- End Values Section -->

  <!-- =======Section ======= -->
  <section>

    <div class="container" data-aos="fade-up">

    </div>

  </section><!-- End Values Section -->  

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
  <script src = "{{ asset('js/aboutus.js') }}"></script>

</body>

</html>