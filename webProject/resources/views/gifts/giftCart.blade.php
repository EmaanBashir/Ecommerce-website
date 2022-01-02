<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta content="width=device-width, initial-scale=1.0" name="viewport" />

    <title>Payment Details</title>
    <meta content="" name="description" />

    <meta content="" name="keywords" />

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Script+MT+Bold&display=swap" rel="stylesheet" />

    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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

    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('css/giftCart.css')}}">
    <link rel="stylesheet" href="{{asset('css/giftCartCard.css')}}">

</head>

<body>
    <div class="container-fluid">
        <div class="row full-height">

            <!-- RIGHT HALF -->
            <div class="col-lg-6 col-m-6 event order-lg-last">
                <div class="text-start col-6 col-lg-12 d-block d-lg-none"><a href="{{ route('gifts') }}" class="back-arrow"><i class="setColor fa fa-angle-left px-3"></i></a></div>

                <a href="{{route('home')}}" class="home me-3">
                    <span class="fa fa-home display-5 position-absolute my-4"></span>
                </a>
                <!-- ======= Hero Section ======= -->
                <section id="hero" class="hero scroll">
                    <div class="container-fluid px-5">
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
                                    <div class="left-set col-6">
                                        <img src="{{asset($order->gift->image)}}" alt="" srcset="">
                                    </div>
                                    <div class="right-set col-6">
                                        <div class="lead font-weight-bold">{{$order->gift->name}}</div>
                                        <div class="">{{$order->gift->name}}</div>
                                        <div class="">Vase-{{$order->vase?'Yes':'No'}}</div>
                                        <div class="">QTY: {{$order->quantity}}</div>
                                        <div class="lead font-weight-bold text-right">Rs. {{$order->gift->price}}</div>
                                        <form action="{{route('removeFromCart', $order->id)}}" method="post">
                                            @csrf
                                            <button type="submit" class="remove rounded">Remove</button>
                                        </form>
                                    </div>
                                    <div class="clear"></div>
                                </div>
                                @php
                                $total += $order->gift->price * $order->quantity;
                                @endphp

                                @endforeach
                            </div>
                        </div>
                    </div>
                </section>
                <!-- End Hero -->
            </div>

            <div class="col-lg-6 col-m-6 checkout order-lg-first">
                <div class="text-start col-12 d-none d-lg-block"><a href="{{ route('gifts') }}" class="back-arrow"><i class="text-white fa fa-angle-left px-3"></i></a></div>
                <!-- ======= Hero Section ======= -->
                <section id="" class="hero">

                    <div class="container-fluid px-5">
                        <!-- @include('components.topBar') -->
                        <div class="d-flex flex-column justify-content-around">
                            <div class="my-5">
                                <br><br><br>
                                <hr>
                                <br><br><br>
                                <div class="content">

                                    <div class="d-flex justify-content-between">
                                        <p class="text-center ">Total</p>
                                        <p>Rs. {{$total}}</p>
                                    </div>
                                    <form action="{{route('giftCartPayment')}}">
                                        <input type="submit" value="Check Out" class="btn checkout-btn" @if(!$total) disabled @endif>
                                    </form>
                                </div>
                            </div>
                </section>
            </div>
        </div>
        <!-- end row -->
    </div>
    <!-- end container -->

    <script src="{{asset('js/gifts.js')}}"></script>

</body>

</html>