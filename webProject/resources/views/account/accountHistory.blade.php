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
    <link href="{{ asset('css/accountHistory.css') }}" rel="stylesheet">
</head>

<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div style="background-image: url('{{ asset('img/account/Frame 39.png')}}');" class="col-md-5 d-flex d-md-flex flex-column text-center align-items-center justify-content-evenly bg-image py-4">
                <div class="text-start w-100 d-none d-md-inline"><a href="{{ url()->previous() }}" class="back-arrow"><i class="text-pink fa fa-angle-left px-3"></i></a></div>
                <img src="{{asset('img/profile.jpg')}}" class="rounded-circle img-fluid col-3 mb-5">
                <div class="w-100">
                    <h2 class="text-start text-pink"><i class="fa fa-user-circle text-pink my-3 ps-5"></i>&nbsp;&nbsp;{{Auth::user()->username}}</h2>
                    <h2 class="text-start text-pink"><i class="fa fa-phone text-pink my-3 ps-5"></i>&nbsp;&nbsp;{{Auth::user()->number}}</h2>
                    <h2 class="text-start text-pink"><i class="fa fa-envelope text-pink my-3 ps-5"></i>&nbsp;&nbsp;{{Auth::user()->email}}</h2>
                    <h2 class="text-start text-pink"><i class="fa fa-id-card text-pink my-3 ps-5"></i>&nbsp;&nbsp;{{Auth::user()->paymentDetails->creditCardNo}}</h2>
                    <h2 class="text-start text-pink pb-2"><i class="fa fa-location-arrow text-pink my-3 ps-5"></i>&nbsp;&nbsp;{{Auth::user()->paymentDetails->address}}</h2>
                </div>
                @include('components.edit-icon')
            </div>


            <!-- The content half -->
            <div class="col-md-7 content">
                <a href="{{route('home')}}" class="home d-md-inline d-none">
                    <span class="fa fa-home display-5 position-absolute"></span>
                </a>
                <div class="login d-flex align-items-center py-5">

                    <!-- Demo content-->
                    <div class="container vertical-scrollable">
                        <div class="row">
                            <div class="row text-center d-flex flex-column justify-content-center">
                                @if($eventHistory)
                                <h3 class="signup mb-5 col-lg-10 col-xl-7 mx-auto">Order History</h3>
                                @if($orders)
                                <table class="col-11">
                                    <thead>
                                        <tr>
                                            <th>Event</th>
                                            <th>Theme</th>
                                            <th>Price</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-top">
                                        @foreach($orders as $order)
                                        <tr onclick="window.location='{{ route("eventDetails", $order) }}'">
                                            <td>{{$order->type}}</td>
                                            <td>{{$order->theme}}</td>
                                            <td>Rs. {{$order->price->price}}</td>
                                            <td><span class="{{$order->status?'approved':'pending'}} rounded px-3 py-1">{{$order->status?'Approved':'Pending'}}</span></td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <h4 class="my-5"><i class="bi bi-emoji-frown"></i> You have no order history</h4>
                                <div class="text-center mt-5">
                                    <button class="save rounded-pill" onclick="location.href='{{route('steps')}}'">ORDER NOW</button>
                                </div>
                                @endif

                                @elseif('giftHistory')

                                <h3 class="signup mb-5 col-lg-10 col-xl-7 mx-auto">Order History</h3>
                                @if($orders)
                                <table class="col-11">
                                    <thead>
                                        <tr>
                                            <th>Product</th>
                                            <th>Color</th>
                                            <th>Qty.</th>
                                            <th>Price</th>
                                        </tr>
                                    </thead>
                                    <tbody class="align-top">
                                        @foreach($orders as $order)
                                        <tr onclick="window.location='{{ route('giftPage', $order->gift_id) }}'">
                                            <td> <img src="{{asset($order->gift->image)}}" class = "img-fluid historyImage me-3"> {{$order->gift->name}}</td>
                                            <td>{{$order->color->color}}</td>
                                            <td>{{$order->quantity}}</td>
                                            <td>{{$order->gift->price}}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                                @else
                                <h4 class="my-5"><i class="bi bi-emoji-frown"></i> You have no order history</h4>
                                <div class="text-center mt-5">
                                    <button class="save rounded-pill" onclick="location.href='{{route('gifts')}}'">ORDER NOW</button>
                                </div>
                                @endif

                                @endif
                            </div>
                        </div>
                    </div><!-- End -->

                </div>
            </div><!-- End -->

        </div>
    </div>
    <script src="{{asset('js/account.js')}}"></script>
</body>

</html>