<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')

    <style>
        .title_deg {
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 40px;
            color: #d20cec;
        }
        table,
        th,
        td {
            border: 1px solid #f58dc1;
        }
        .table_deg {
            border: 2px solid #f58dc1;
            width: 100%;
            margin: auto;
            text-align: center;
        }
        .th_deg {
            background: #e70c7a;
        }
        .img_size {
            width: 50px;
            height: 50px;
        }
        .text {
            font-size: 12px;
        }
        .a {
            margin-top: 20px;
        }
        .div {
            margin-top: 50px;
            /* display: grid;
            grid-template-columns: repeat(2,1fr); */
            display: flex;
            justify-content: space-evenly;
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

                <table class="table_deg">

                    <tr class="th_deg">

                        <th style="padding: 5px">Name</th>
                        <th style="padding: 5px">Email</th>
                        <th style="padding: 5px">Address</th>
                        <th style="padding: 5px">Phone</th>
                        <th style="padding: 5px">Product Title</th>
                        <th style="padding: 5px">Quantity</th>
                        <th style="padding: 5px">Price</th>
                        <th style="padding: 5px">Payment Status</th>
                        <th style="padding: 5px">Delivery Status</th>
                        <th style="padding: 5px">image</th>
                        <th style="padding: 5px">Delivered</th>
                    </tr>

                    @foreach ($order as $order)
                        <tr>
                            <td class="text">{{ $order->name }}</td>
                            <td class="text">{{ $order->email }}</td>
                            <td class="text">{{ $order->adress }}</td>
                            <td class="text">{{ $order->phone }}</td>
                            <td class="text">{{ $order->product_title }}</td>
                            <td class="text">{{ $order->quantity }}</td>
                            <td class="text">{{ $order->price }}</td>
                            <td class="text">{{ $order->payment_status }}</td>
                            <td class="text">{{ $order->delivery_status }}</td>
                            <td>
                                <img class="img_size" src="/product/{{$order->image}}" alt="">
                            </td>

                            <td>
                                @if ($order->delivery_status == 'processing')
                                    <a href="{{ url('delivered', $order->id) }}" class="btn btn-primary"
                                        onclick="return confirm('Are you sure this product is delivered !!!')">Delivered</a>
                                @else
                                    <p style="color: #d20cec;">Deliverd</p>
                                @endif

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
