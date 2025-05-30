<!DOCTYPE html>
<html>
   <head>
    <base href="/public">
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/cybercart.png" type="">
      <title>Cybercart</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->

      <div class="col-sm-6 col-md-4 col-lg-4" style="border:solid black; margin: auto; width:25%; padding:30px;">

            <div class="img-box" style="padding:20px; text-align:center;">
                <img src="product/{{$product->image}}" alt="" style="width:90%; height:70%;" >
            </div>
            <div class="detail-box">
                <h5 style="text-align:center;">
                    {{$product->title}}
                </h5>

                @if ($product->discount_price!=null)

                <h6 style="color: red;">
                    Discount Price : Rs.{{$product->discount_price}}.00/=
                </h6>

                <h6 style="color:blue; text-decoration: line-through;">
                    Price : Rs.{{$product->price}}.00/=
                </h6>

                @else

                <h6 style="color:blue;">
                    Price : Rs.{{$product->price}}.00/=
                </h6>

                @endif

                <h6>Product Category : {{$product->category}}</h6>
                <h6>Product Details : {{$product->description}}</h6>
                <h6>Available : {{$product->quantity}}</h6>

                <form action="{{url('add_cart',$product->id)}}" method="Post">

                    @csrf

                    <div class="row" style="margin-top:20px;">
                        <div class="" style="text-align:center; margin-left:auto; margin-right:auto;">
                            <input type="number" name="quantity" style="width: 80px;" value="1" min="1">
                        </div>
                        <div class="" style="text-align:center; margin-left:auto; margin-right:auto;">
                            <input type="submit" value="Add To Cart">
                        </div>
                    </div>
                </form>

            </div>
        </div>
    </div>

      <!-- footer start -->
      @include('home.footer')
      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2024 All Rights Reserved By <a href="">Cybercart</a></p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>

