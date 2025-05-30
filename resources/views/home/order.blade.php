<!DOCTYPE html>
<html>
   <head>
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

      <style>
        .center
        {
            margin: auto;
            width: 70%;
            margin-top: 30px;
            margin-bottom: 30px;
            text-align: center;
        }

        table,th,td
        {
            border: 1px solid black;
        }

        .th_deg
        {
            padding: 10px;
            background-color:  rgb(228, 169, 30);
            font-size: 20px;
            font-weight: bold;
        }
      </style>
   </head>
   <body>
      <div>
         <!-- header section strats -->
         @include('home.header')

         <div >
            <table class="center">
                <tr>
                    <th class="th_deg">Product Title</th>
                    <th class="th_deg">Quantity</th>
                    <th class="th_deg">Price</th>
                    <th class="th_deg">Payment Status</th>
                    <th class="th_deg">Delivery Status</th>
                    <th class="th_deg">Image</th>
                    <th class="th_deg">Cancel Order</th>
                </tr>

                @foreach ($order as $order)

                <tr>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>
                        <img src="product/{{$order->image}}" alt="Product Img" style="height:150px; width:120px; margin:5px;">
                    </td>
                    <td>
                        @if($order->delivery_status == 'Processing')

                        <a onclick="return confirm('Are You Sure to Cancel This Order?')" class="btn btn-danger" href="{{url('cancel_order',$order->id)}}">Cancel Order</a>

                        @else
                        <p style="color:blue;">Not Allowed</p>
                        @endif
                    </td>
                </tr>

                @endforeach
            </table>
         </div>

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

