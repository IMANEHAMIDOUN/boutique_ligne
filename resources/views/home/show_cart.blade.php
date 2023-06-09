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
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Traditional Clothes</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />


      <style type="text/css">
        .center{
            margin:auto;
            width:70%;
            text-align:center;
            padding:30px;
        }
        table,th,td
        {
            border:2px solid #d98ae4;
        }
        .th_deg
        {
            font-size:25px;
            padding:5px;
            background:#e005fd;
        }
        .img_deg
        {
           height:130px;
           width:130px;
        }
        .total_deg
        {
            font-size:20px;
            width:82%;
            padding:40px;
            color:#e005fd;
        }



      </style>

   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->



      <div class="center">
            <table>
                    <tr>
                        <th class="th_deg">Product Title</th>
                        <th class="th_deg">Product Quantity</th>
                        <th class="th_deg">Price</th>
                        <th class="th_deg">Image</th>
                        <th class="th_deg">Action</th>
                    </tr>

                    <?php $Total_Price=0;  ?>


                    @foreach($cart as $cart)
                    <tr>
                        <td>{{$cart->pruduct_title}}</td>
                        <td>{{$cart->quantity}}</td>
                        <td>{{$cart->price}} DH</td>
                        <td><img class="img_deg" src="/product/{{$cart->product_image}}"></td>
                        <td><a class="btn btn-danger" onclick="return confirm('Are you sure to removing?')" href="{{url('remove_cart',$cart->id)}}">Remove Product</a></td>
                    </tr>
                    <?php $Total_Price=$Total_Price + $cart->price ?>

                    @endforeach
            </table>

                <div>
                    <h1 class="total_deg">Total Price:   {{$Total_Price}} DH</h1>
                </div>


                <div>

                <h1 style="font-size:25px; padding-bottom:20px ;  color:#e005fd;">Procced to Order</h1>
                <a href="{{url('cash_order')}}" class="btn btn-success">Cash On Delivery</a>
                
            </div>



      </div>
      <!-- footer start -->

      <!-- footer end -->
      <div class="cpy_">
         <p class="mx-auto">© 2023 All Pictures Reserved By <a href="https://www.gettyimages.fr/photos/caftan-marocain">Caftani</a><br>

            Distributed By <a href="#" target="_blank">Traditional Clothes</a>

         </p>
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
