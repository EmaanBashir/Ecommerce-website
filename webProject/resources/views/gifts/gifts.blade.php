<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Source+Serif+Pro&display=swap" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Tangerine" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Script+MT+Bold&display=swap" rel="stylesheet" />

    <!--Font awesome-->
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
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
    <link rel="stylesheet" href="{{asset('css/navbarDark.css')}}">
    <link rel="stylesheet" href="{{asset('css/gifts.css')}}">

    <title>Buy Gifts</title>
</head>

<body>

    @include('layouts.navbarDark')

    <!-- PAGE HEADING -->
    <h2 class="gift-heading">GIFTS</h2>

    <!-- PRODUCT LISTING -->
    <div class="gifts col-10">
        <!-- <div class="col-12">
            <input type="button" value="Categories" class="btn ">
            
        </div> -->
        <div class="col-12 dHeader">
            <!-- DROP DROPDOWN -->
            <div class="dropdown dBody">
                <select class="form-select col-3" aria-label=".form-select-lg example" onchange="
                let x = '{{route('giftsCategory', '1')}}';
                
                    location.href= x.replace('1', $(this).val());
                ">
                    <option>Categories</option>
                    @php
                    $all = $selectedCategory == 'all';
                    @endphp
                    <option value="all" @if($all) selected @endif>All</option>
                    @foreach($categories as $category)
                    @php
                    $selected = $selectedCategory == $category->id;
                    @endphp
                    <option value="{{$category->id}}" @if($selected) selected @endif>{{$category->category}}</option>
                    @endforeach
                </select>
            </div>

            <!-- CART ICON -->
            <div class="cart"><img onclick="location.href='{{route('giftCart')}}';" src="{{asset('img/gifts/my cart icon.png')}}" alt="" srcset="" class="cartIcon pt-2"></div>
        </div>


        @php
        $count = 0;
        @endphp

        @foreach($gifts as $gift)
        @if($count %4 == 0)
        <div class="card-group">
            @endif

            <div class="card ">
                <img class="card-img-top" src="{{asset($gift->image)}}" alt="Card image cap">
                <div class="card-body">
                    <h5 class="card-title">{{$gift->name}}</h5>
                    <p class="card-text">Rs. {{$gift->price}}</p>
                </div>
                <p><input type="button" value="Add to Cart" class="btn" onclick="location.href='{{route('giftPage', $gift->id)}}';"></p>
            </div>

            @if($count % 4 == 3)
        </div>
        @endif
        @php
        $count ++;
        @endphp
        @endforeach

        @for ($i = 0; $i < 4 - ($count % 4); $i++) <div class="card">
    </div>
    @endfor

    </div>
    <!-- end class group -->
    </div>

    <!-- PAGINATION -->
    <ul class="pagination justify-content-center mt-3">
        <!-- <li class="page-item disabled">
          <a class="page-link" href="#" tabindex="-1">Previous</a>
        </li> -->
        <li class="page-item"><a class="page-link" href="#">1</a></li>
        <li class="page-item"><a class="page-link" href="#">2</a></li>
        <li class="page-item"><a class="page-link" href="#">3</a></li>
        <li class="page-item">
            <a class="page-link" href="#">&gt;&gt;</a>
        </li>
    </ul>





    <!-- jQuery library -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

    <!-- Latest compiled JavaScript -->
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>

    <script src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" data-auto-replace-svg="nest"></script>
    <!-- Vendor JS Files -->
    <script src="{{ asset('vendor/purecounter/purecounter.js') }}"></script>
    <script src="{{ asset('vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/glightbox/js/glightbox.min.js') }}"></script>
    <script src="{{ asset('vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
    <script src="{{ asset('vendor/swiper/swiper-bundle.min.js') }}"></script>
    <script src="{{ asset('vendor/waypoints/noframework.waypoints.js') }}"></script>
    <script src="{{ asset('vendor/php-email-form/validate.js') }}"></script>

    <script src="{{asset('js/aboutus.js')}}"></script>
    <script src="{{asset('js/gifts.js')}}"></script>
</body>

</html>