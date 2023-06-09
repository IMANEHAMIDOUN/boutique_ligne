<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Clothes Admin</title>
    <!-- plugins:css -->
   @include('admin.css')
    <!-- End layout styles -->

    <style type="text/css">

        .div_center{
            text-align:center;
            padding-top:40px;
        }
        .h2_font{
            font-size:40px;
            padding-bottom:40px;
            color:#d20cec;
        }
        .input_color{
            color:black;
        }
        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid #e2a2eb  ;
        }
        table,th,td
        {
            border: 1px solid #e2a2eb ;
        }
    </style>

  </head>
  <body>
    <div class="container-scroller">
      <!-- partial:partials/_sidebar.html -->
      @include('admin.sidebar')
      <!-- partial -->

        <!-- partial:partials/_navbar.html -->
        @include('admin.header')
        <!-- partial -->

        <div class="main-panel">
          <div class="content-wrapper">
            
            <div class="div_center">
                <h2 class="h2_font">Add Category</h2>

                <form action="{{url('/add_category')}}" method="POST">
                    @csrf
                    <input type="text" class="input_color" name="category" placeholder="Write category name">
                    <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                </form>
            </div>
            <table class="center">
                <tr>
                    <td>Category Name</td>
                    <td>Action</td>
                </tr>


                @foreach($data as $data)

                <tr>
                        <td>{{$data->category_name}}</td>
                        <td>
                            <a onclick="return confirm('Are You Sure to deleting')" class="btn btn-danger " href="{{url('delete_category',$data->id)}}">Delete</a>
                            <a class="btn btn-success" href="{{ url('update_category', $data->id) }}">Update</a>
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
