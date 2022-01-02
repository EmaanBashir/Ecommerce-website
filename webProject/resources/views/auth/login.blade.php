<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign In</title>

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
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">

</head>

<body>
    <div class="container-fluid">
        <div class="row no-gutter">
            <!-- The image half -->
            <div style="background-image: url('{{ asset('img/account/Frame 39.png')}}');" class="col-md-5 d-none d-md-flex flex-column text-center align-items-center justify-content-evenly bg-image">
                <h1>Flores Amor</h1>
                <h2>Everything you need to make your special day extraordinary</h2>
                <h2>Join us to receive a free new comer gift box</h2>
            </div>


            <!-- The content half -->
            <div class="col-md-7 content">
                <div class="login d-flex align-items-center py-5">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-10 col-xl-7 mx-auto">
                                <h3 class="signin text-center">SIGN IN</h3>
                                <form class="px-5" action="{{route('login')}}" method="post">
                                    @csrf
                                    <div class="form-group mb-3">
                                        <input id="inputUsername" name="username" type="text" placeholder="Username" required="true" class="input form-control rounded-pill px-4 py-2">
                                    </div>
                                    <div class="form-group mb-3">
                                        <input id="inputPassword" name="password" type="password" placeholder="Password" required="true" class="input form-control rounded-pill px-4 py-2">
                                        <input type="checkbox" onclick="changeState()">
                                        <label>Show Password</label>
                                    </div>
                                    <button type="submit" class="signin-btn btn btn-block mb-2 rounded-pill text-center py-2">Sign In</button>
                                    @if (Route::has('password.request'))
                                    <a class="signin-text" href="#">Forgot password?</a>
                                    @endif

                                    <p class="signin-text">New Member?<a href="{{route('register')}}" class="signin-text">Create an account</a></p>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="{{asset('js/login.js')}}"></script>
</body>

</html>