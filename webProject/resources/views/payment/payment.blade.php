<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Privacy Policy</title>
    <meta content="" name="description" />

    <meta content="" name="keywords" />

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
    <link href="{{ asset('css/payStepBar.css') }}" rel="stylesheet">
    <link href="{{ asset('css/eventPayment.css') }}" rel="stylesheet">
    <link href="{{ asset('css/giftCartCard.css') }}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: FlexStart - v1.9.0
  * Template URL: https://bootstrapmade.com/flexstart-bootstrap-startup-template/
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->

</head>

<body>

    <div class="container-fluid main">
        <div class="row no-gutter h-100">
            <!-- The image half -->
            <div class="col-lg-6 d-flex d-md-flex flex-column text-center align-items-center justify-content-evenly bg-image py-4 h-100">
                <div class="text-start col-12"><a href="{{ url()->previous() }}" class="back-arrow"><i class="text-white fa fa-angle-left px-3"></i></a></div>
                <div class="d-flex flex-column justify-content-around h-100 col-12 col-md-11 col-lg-10">
                    <div class="text-center mt-5">
                        <h1>CHECK OUT</h1>
                    </div>

                    <div class="my-20 h-75 d-flex flex-column justify-content-around">
                        <div class="stepwizard">
                            <div class="stepwizard-row setup-panel">
                                <div class="stepwizard-step">
                                    <a href="#step1" onclick="step1();return false;" type="button" class="s1 btn btn-circle">1</a>
                                    <p>Profile Info</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="step2" onclick="step2();return false;" type="button" class="s2 btn btn-default btn-circle" disabled="disabled">2</a>
                                    <p>Payment Details</p>
                                </div>
                                <div class="stepwizard-step">
                                    <a href="#step3" onclick="step3();return false;" type="button" class="s3 btn btn-default btn-circle" disabled="disabled">3</a>
                                    <p>Checkout</p>
                                </div>
                            </div>
                        </div>

                        @include('layouts.paymentstep1')
                        @include('layouts.paymentstep2')
                        @include('layouts.paymentstep3')

                        <div class="end-bar">
                            <div class="row">
                                <div class="col-6 text-start">
                                    <a class="text-start edit-a" href="#" onclick="editPressed()"><img src="{{asset('img/account/editimage.jpg')}}" class="rounded-circle edit-icon"></a>
                                </div>
                                <div class="col-6 text-end">
                                    <a class="text-center next-step" href="step2" onclick="step2();return false;"><img src="{{asset('img/payment/pic1.jpg')}}" class="rounded-circle next-icon"></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


            <!-- The content half -->
            <div class="col-lg-6 content px-5 hero">
                <a href="{{route('home')}}" class="home me-3">
                    <span class="fa fa-home display-5 position-absolute my-4"></span>
                </a>
                @if($event)
                <div class="d-flex flex-column justify-content-center h-100">
                    <div class="text-center my-5">
                        <h1>Event Details</h1>
                    </div>
                    <div>
                        <table class="col-12">
                            <tbody>
                                <tr class="first">
                                    <td>Type:</td>
                                    <td>{{$event->type}}</td>
                                </tr>
                                <tr>
                                    <td>Theme:</td>
                                    <td>{{$event->theme}}</td>
                                </tr>
                                <tr>
                                    <td>Location: </td>
                                    <td>{{$event->location}}</td>
                                </tr>
                                <tr>
                                    <td>Date and Time: </td>
                                    <td>{{$event->time}}</td>
                                </tr>
                                <tr>
                                    <td>Number of Guests: </td>
                                    <td>{{$event->guestsExpected}}</td>
                                </tr>
                                <tr class="last">
                                    <td>Description: </td>
                                    <td>{{$event->description}}</td>
                                </tr>
                                <tr>
                                    <td>
                                        <h1 class="text-start">Total:</h1>
                                    </td>
                                    <td>
                                        <h1 class="text-start">Rs. 50000</h1>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>

                </div>
                @elseif($orders)
                <div class="container-fluid scroll">
                    <div class="d-flex flex-column justify-content-around">
                        <div class="text-center mt-5">
                            <h1>My Cart</h1>
                        </div>
                        <br><br>
                        <hr>
                        <div class="my-5">
                            @php
                            $total = 0;
                            @endphp

                            @foreach($orders as $order)
                            <div class="single-item">
                                <div class="left-set col-6 ps-3 less-padding">
                                    <img src="{{asset($order->gift->image)}}" alt="" srcset="">
                                </div>
                                <div class="right-set col-6">
                                    <div class="lead fw-bold">{{$order->gift->name}}</div>
                                    <div class="">{{$order->gift->name}}</div>
                                    <div class="">Vase-{{$order->vase?'Yes':'No'}}</div>
                                    <div class="">QTY: {{$order->quantity}}</div>
                                    <div class="lead fw-bold text-end">Rs. {{$order->gift->price}}</div>
                                </div>
                                <div class="clear"></div>
                            </div>
                            @php
                            $total += $order->gift->price * $order->quantity;
                            @endphp

                            @endforeach
                        </div>
                    </div>
                    <div class="mt-3">
                        <hr>
                        <br>
                        <div>
                            <div class="d-flex justify-content-between total">
                                <p class="text-center">Total</p>
                                <p>Rs. {{$total}}</p>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div><!-- End -->

        </div>
    </div>

    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <!-- Main Js file -->
    <script src="{{asset('js/payment.js')}}"></script>

</body>

</html>