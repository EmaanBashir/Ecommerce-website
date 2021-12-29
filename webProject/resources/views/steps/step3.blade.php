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

    <link href="{{ asset('css/step3.css') }}" rel="stylesheet">

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
            <div class="d-flex flex-column justify-content-around h-75">
                <div class="text-center">
                    <h1>BOOK AN EVENT</h1>
                </div>
                <div class="container my-4 step2">
                    <div class="row px-5 my-5">
                        <h2 class="col-7 float-start">2. Select the theme</h2>
                        <a href="" class="col-5  float-end text-end">
                            <h2 class="text-decoration-underline">See More</h2>
                        </a>
                    </div>
                    <div class="row px-4 mx-5 my-5">
                        <ul class="list">
                            <li>
                                <input type="radio" name="weddingType" value="traditional" id="traditional">
                                <label for="traditional">Traditional Wedding</label>
                            </li>
                            <li>
                                <input type="radio" name="weddingType" value="bohemian" id="bohemian">
                                <label for="bohemian">Bohemian Wedding</label>
                            </li>
                            <li>
                                <input type="radio" name="weddingType" value="bohemian" id="fairytale">
                                <label for="fairytale">Fairytale Wedding</label>
                            </li>
                            <li>
                                <input type="radio" name="weddingType" value="bohemian" id="destination">
                                <label for="destination">Destination Wedding</label>
                            </li>
                            <li>
                                <input type="radio" name="weddingType" value="bohemian" id="minimalistic">
                                <label for="minimalistic">Minimalistic Wedding</label>
                            </li>
                            <li>
                                <input type="radio" name="weddingType" value="bohemian" id="customized">
                                <label for="customized">Customized Wedding</label>
                            </li>
                        </ul>
                    </div>
                    <div class="text-end px-2 pb-2">
                        <h1>2 / 6</h1>
                    </div>
                </div>

                <form method = "post" action="{{ route('step4') }}">
                    @csrf
                    <div class="container my-4 step2">
                        <div class="row px-5 my-5">
                            <h2 class="col-7 float-start">3. Enter the following details</h2>
                        </div>
                        <div class="row px-4 mx-5 my-5">
                            <input type="text" name="location" id="location" placeholder="Place/Location">
                            <input type="text" name="date" id="date" placeholder="Time - [8:00 pm]">
                            <input type="text" name="noOfGuests" id="noOfGuests" placeholder="Expected number of guests">
                            <input type="text" name="photoServices" id="photoServices" placeholder="Do you want our photography services ?">
                            <textarea name="" id="" cols="30" rows="7" placeholder="Enter a detailed description of what you want on your big day.
Color scheme, Flowers and everything you want."></textarea>
                        </div>
                        <div class="text-end px-2 pb-2">
                            <h1>3 / 6</h1>
                        </div>
                        <ul class = "ms-5 ps-5">
                            <li>
                                <h3 class="recheck"><i>Kindly recheck the details and click submit</i></h3>
                            </li>
                        </ul>
                        <div class = "text-center">
                            <input type="submit" value="Submit" class = "save rounded-pill">
                        </div>
                    </div>
                </form>
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
    <script src="{{ asset('js/step3.js') }}"></script>

</body>

</html>