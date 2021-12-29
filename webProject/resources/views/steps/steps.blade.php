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
  <link href="{{ asset('css/steps.css') }}" rel="stylesheet">
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
  <section id="hero" class="hero d-flex flex-column mt-5">
    <div class="container">
      <div class="text-center mt-5">
        <h1>BOOK AN EVENT</h1>
        <h2 class = "font-italic mt-5">
          Note : you have to inform us 10 days before the event to get the best of our services.
        </h2>
      </div>
      <div class = "mt-5">
        <p>Follow the steps given below;</p>
        <ol class = "mt-4">
          <li>
            <p>Book an event online or consult with our team in-person/online.</p>
          </li>
          <li>
            <p>Select the event.</p>
          </li>
          <li>
            <p>Choose a theme that suits you best or customize the theme of your event.</p>
          </li>
          <li>
            <p>Enter the venue and time.</p>
          </li>
          <li>
            <p>Wait for confirmation. This takes 3 business days. Our team analyzes the details and let our
              customers know what works best for them.</p>
          </li>
          <li>
            <p>After confirmation, you may recheck the details and select payment process.</p>
          </li>
        </ol>
        <div class = "mt-5">
          <p class = "ending">
            Our team will stay in-touch with you during the whole process, you can modify the details according
                      to your liking because You are our number one priority and we want what’s best for you.
                      
          </p>
          <p class = "ending">See you soon. Thank you.</p>
        </div>
        <p class = "mt-5 last">
          Read more about our company’s policy, <strong><u>privacy policy</u></strong>
        </p>
        <div class = "check">
          <input type="checkbox" name="check" id="check" onchange="changeState();">
          <label for="check">
            By ticking this checkbox, you accept our policy and agree to our rules.
          </label>
        </div>
        <p class = "small mt-5">
          You may press next to start the booking process.
        </p>
      </div>

      <div class = "text-center">
        <form action="{{ route('step1') }}">
          <input type="submit" value = "Next" class = "next rounded-pill" disabled>
        </form>
      </div>
    </div>

  </section><!-- End Hero -->

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
  <script src = "{{ asset('js/steps.js') }}"></script>

</body>

</html>