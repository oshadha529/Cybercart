<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .title_deg
        {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom:40px;
        }

        .table-deg
        {
            border: solid 2px white;
            width: 100%;
            margin: auto;
            text-align:center;
        }

        .th_deg
        {
            background: rgb(228, 169, 30);
        }

        .img_size
        {
            width: 200px;
            height: 150px;
        }
    </style>
    </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->
      @include('admin.header')
      <!-- partial -->
      <div class="main-panel">
        <div class="content-wrapper">
            <h1 class="title_deg">All Orders</h1>

            <div style="padding-left: 350px; padding-bottom:30px;">
                <form action="{{url('search')}}" method="get">
                    @csrf
                    <input style="color: black;  border-radius:5px; width:50%; margin:10px;" type="text" name="search" placeholder="Search Here">
                    <input type="submit" value="Search" style="height: 38px;" class="btn btn-outline-primary">
                </form>
            </div>

            <table class="table-deg">
                <tr class="th_deg">
                    <th style="padding: 10px;">Name</th>
                    <th style="padding: 10px;">Email</th>
                    <th style="padding: 10px;">Address</th>
                    <th style="padding: 10px;">Phone</th>
                    <th style="padding: 10px;">Product Title</th>
                    <th style="padding: 10px;">Quantity</th>
                    <th style="padding: 10px;">Price</th>
                    <th style="padding: 10px;">Payment Status</th>
                    <th style="padding: 10px;">Delivery Status</th>
                    <th style="padding: 10px;">Image</th>
                    <th style="padding: 10px;">Delivered</th>
                </tr>

                @forelse($order as $order)
                <tr>
                    <td>{{$order->name}}</td>
                    <td>{{$order->email}}</td>
                    <td>{{$order->address}}</td>
                    <td>{{$order->phone}}</td>
                    <td>{{$order->product_title}}</td>
                    <td>{{$order->quantity}}</td>
                    <td>{{$order->price}}</td>
                    <td>{{$order->payment_status}}</td>
                    <td>{{$order->delivery_status}}</td>
                    <td>
                        <img class="img_size" src="/product/{{$order->image}}" alt="Product Image">
                    </td>

                    @if ($order->delivery_status=='Processing')

                        <td>
                            <a onclick="return confirm('Has this product been successfully delivered to the customer?')" href="{{url('delivered',$order->id)}}" class="btn btn-primary">Delivered</a>
                        </td>

                    @else

                        <td>
                            <p style="color: lightgreen;">Delivered</p>
                        </td>

                    @endif

                </tr>

                @empty
                <tr>
                    <td colspan="16">
                        No Data Found
                    </td>
                </tr>

                @endforelse

            </table>
        </div>
      </div>
    <!-- plugins:js -->
    @include('admin.script')
    <!-- End custom js for this page -->
  </body>
</html>
