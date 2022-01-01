<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Privacy Policy</title>
    <meta content="" name="description">

    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Script+MT+Bold&display=swap" rel="stylesheet" />

    <!--Font awesome-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="{{ asset('vendor/bootstrap-social/bootstrap-social.css') }}" rel="stylesheet">

    <!-- Jquery -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Vendor CSS Files -->
    <link href="{{ asset('vendor/animate.css/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/bootstrap-icons/bootstrap-icons.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/boxicons/css/boxicons.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/glightbox/css/glightbox.min.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/remixicon/remixicon.css') }}" rel="stylesheet">
    <link href="{{ asset('vendor/swiper/swiper-bundle.min.css') }}" rel="stylesheet">

    <!-- Template Main CSS File -->

    <link href="{{ asset('css/step2.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body>



    <!-- ======= Hero Section ======= -->
    <section id="hero" class="hero">
        <div class="container-fluid px-5">
            @include('components.topBar')
            <div class="d-flex flex-column justify-content-around">
                <div class="text-center mt-5">
                    <h1>BOOK AN EVENT</h1>
                </div>
                <div class="d-flex flex-row justify-content-between mx-5 px-5 my-4">
                    <h2>Select an event</h2>
                    <a href="#"><i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="d-flex flex-column flex-lg-row justify-content-center align-items-center">
                    <a href="{{ route('step3') }}" class="mx-5 my-3">
                        <div class="card">
                            <img src="{{ asset('img/step2/pic1.png') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h3 class="card-text">WEDDING</h3>
                            </div>
                        </div>
                    </a>
                    <a href="{{ route('step3') }}" class="mx-5 my-3">
                        <div class="card">
                            <img src="{{ asset('img/step2/pic2.png') }}" class="card-img-top" alt="...">
                            <div class="card-body text-center">
                                <h3 class="card-text">BIRTHDAY</h3>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
            <div class="text-end">
                <h1>2 / 6</h1>
            </div>
        </div>

    </section><!-- End Hero -->


    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Template Main JS File -->
    <script src="{{ asset('js/step2.js') }}"></script>

</body>

</html>