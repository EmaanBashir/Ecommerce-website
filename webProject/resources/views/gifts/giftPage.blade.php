<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Discover your Gift</title>

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
    <link rel="stylesheet" href="{{asset('css/topBar.css')}}">
    <link rel="stylesheet" href="{{asset('css/giftPage.css')}}">
</head>

<body>

    <div class="mx-5 mt-3">@include('components.topBar')</div>
    <h2 class="text-center my-3">GIFTS</h2>

    <hr class="mt-2">
    <p class="text-center pt-2"><em>home/gifts/flower/tulips</em></p>
    <hr>

    <div class="container my-5">
        <div class="row">
            <div class="col-12 col-md-6">
                <div class="row">
                    <div class="col-12 d-flex justify-content-center m-0 p-0">
                        <img class="img-fluid image col-11" src="{{asset($gift->image)}}" alt="bouquet image" srcset="" class=" m-0 p-0">
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-6">
                <h3>{{$gift->name}}</h3>
                <p>{{$gift->description}}</p>
                <p class="font-weight-bold lead">Rs. {{$gift->price}}</p>
                <form action="{{route('giftPage', $gift->id)}}" method="post">
                    @csrf
                    @if($gift->category_id == 1)
                    <div class="lead">

                        <label>With Vase?</label>
                        <input type="radio" id="yes" name="vase" value="1">
                        <label for="yes">YES</label>

                        <input type="radio" id="no" name="vase" value="0">
                        <label for="no">NO</label><br>

                    </div>
                    @else
                    <input type="hidden" name="vase" id='vase' value="0">
                    @endif

                    <div class="lead">
                        <p>Color</p>
                        <div class="colors">
                            @php
                            $coloredItems = $gift->coloredItems;
                            $colors = [];
                            foreach($coloredItems as $item){
                            array_push($colors,$item->color);
                            }
                            @endphp
                            @foreach($colors as $color)
                            <button type="button" class="color" id="{{$color->id}}" onclick="colorClicked($(this));" style="background-color: {{$color->color}}"></button>
                            @endforeach
                            <input type="hidden" id="color" name="color" class="colorInput">
                        </div>
                    </div>


                    <div class="lead">
                        <p>Quantity</p>
                        <input type="number" id="quantity" name="quantity" class="form-control form-control-sm quantity" value="1" min="1">
                    </div>

                    <!-- BUTTONS -->
                    <input type="submit" value="Add to Cart" class="btn-p py-3 px-3 ">
                    <input type="button" value="Save for Later" class="btn-s py-3 px-3 my-2" onclick="location.href='{{route('gifts')}}';">
                </form>
            </div>
        </div>
    </div>


    <div class="container my-5">
        <h5 class="mt-5 mx-5 px-5">Similar products</h5>
        <hr>
        <div class="row mt-5">
            <!-- FIRST ROW -->
            <div class="card-group">
                @foreach($similar as $item)
                <div class="card  mx-3">
                    <img class="card-img-top" src="{{asset($item->image)}}" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title">{{$item->name}}</h5>
                        <p class="card-text">Rs. {{$item->price}}</p>
                    </div>
                    <p><input type="button" value="Add to Cart" class="btn-p" onclick="location.href='{{route('giftPage', $item->id)}}';"></p>
                </div>
                @endforeach

            </div>
        </div>
    </div>

    <script src="{{asset('js/gifts.js')}}"></script>
</body>

</html>