<!DOCTYPE html>
<html lang="en">
    <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .center
        {
            margin: auto;
            width: 50%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
        }

        .font_size
        {
            text-align:center;
            font-size: 40px;
            padding-top: 20px;
        }

        .img_size
        {
            width: 150px;
            height: 150px;
        }

        .tr_style
        {
            border: 1px solid white;
        }

        .th_color
        {
            background: rgb(228, 169, 30);
        }

        .th_des
        {
            padding: 15px;
            padding-left: 30px;
            padding-right: 30px;
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

                    @if(session()->has('message'))

                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{session()->get('message')}}
                    </div>

                    @endif

                    <h2 class="font_size">All Products</h2>
                    <table class="center">
                        <tr class="th_color">
                            <th class="th_des">Product Title</th>
                            <th class="th_des">Description</th>
                            <th class="th_des">Quantity</th>
                            <th class="th_des">Category</th>
                            <th class="th_des">Price</th>
                            <th class="th_des">Discount Price</th>
                            <th class="th_des">Product Image</th>
                            <th class="th_des">Delete</th>
                            <th class="th_des">Edit</th>
                        </tr>

                        @foreach($product as $product)

                        <tr class="tr_style">
                            <th>{{$product->title}}</th>
                            <th>{{$product->description}}</th>
                            <th>{{$product->quantity}}</th>
                            <th>{{$product->category}}</th>
                            <th>{{$product->price}}</th>
                            <th>{{$product->discount_price}}</th>
                            <th>
                                <img class="img_size" src="/product/{{$product->image}}" alt="Product Image">
                            </th>
                            <th>
                                <a class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')" href="{{url('delete_product',$product->id)}}">Delete</a>
                            </th>
                            <th>
                                <a class="btn btn-success" href="{{url('update_product',$product->id)}}">Edit</a>
                            </th>
                        </tr>

                        @endforeach
                    </table>

                </div>
            </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
    </body>
</html>
