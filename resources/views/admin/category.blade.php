<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style type="text/css">
        .div_center
        {
            text-align: center;
            padding-top:40px;
        }

        .h2_font
        {
            font-size:40px;
            padding-bottom: 40px;
        }

        .input_color
        {
            color: black;
        }

        /* .center
        {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid white;
        } */
    </style>
    <style>
        body {
            font-family: 'Arial', sans-serif;
            background-color: #f5f5f5; /* Slightly off-white background */
            color: #333; /* Dark gray text color */
        }

        .center {
            border-radius: 5px;
            width: 50%;
            margin: auto;
            margin-top: 30px;
            background-color: #f0f0f0; /* Slightly off-white table background */
            border-collapse: collapse;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1); /* Subtle box shadow for depth */
        }

        .center th,
        .center tr,
        .center td {
            border: 1px solid #1e1b1b; /* Light gray border */
            padding: 10px;
            text-align: left;
        }

        .center th {
            background-color: #333; /* Dark gray header background */
            color: #fff; /* White header text color */
        }

        .btn-danger {
            background-color: #d9534f; /* Delete button background color */
            border: 1px solid #d9534f;
            color: #fff; /* White button text color */
            padding: 8px 12px;
            text-decoration: none;
            display: inline-block;
            border-radius: 4px;
            transition: background-color 0.3s ease; /* Smooth transition on hover */
        }

        .btn-danger:hover {
            background-color: #c9302c; /* Darker red on hover */
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

                <div class="div_center">
                    <h2 class="h2_font">Add Category</h2>

                    <form action="{{url('/add_category')}}" method="POST">

                        @csrf

                        <input type="text" name="category" placeholder="Write Category Name" class="input_color">

                        <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                    </form>
                </div>

                <table class="center">
                    <tr>
                        <td>Category Name</td>
                        <td>Action</td>
                    </tr>

                    @foreach ( $data as $data )

                    <tr>
                        <td>{{$data->category_name}}</td>
                        <td  style="width:100px; margin-right:auto; margin-left:auto; display: flex; justify-content: center; margin-top:5px; margin-bottom:5px;"class="btn btn-danger">
                            <a onclick="return confirm('Are you sure you want to delete this record?')" href="{{url('delete_category',$data->id)}}">Delete</a>
                        </td>
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
