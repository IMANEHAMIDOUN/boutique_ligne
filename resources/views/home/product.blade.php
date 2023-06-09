<section class="product_section layout_padding">
    <div class="container">
       <div class="heading_container heading_center">
          <h2>
             Our <span>products</span>
          </h2>

          <br><br>

          <div>

            <form action="{{url('product_search')}}" method="GET">

                @csrf

                <input style="width: 500px" type="text" name="search" placeholder="Search For Product ">

                <input type="submit" value="search">
            </form>
          </div>
       </div>

       <div class="row">

        @foreach ($product as $products )


          <div class="col-sm-6 col-md-4 col-lg-4">
             <div class="box">
                <div class="option_container">
                   <div class="options">
                      <a href="{{url('product_details',$products->id)}}" class="option1">
                      Product Details
                      </a>

                      <form action="{{url('add_cart',$products->id)}}" method="POST">
                        @csrf

                        <div class="row">

                            <div class="col-md-3">
                                <input type="number" name="quantity" value="1" min="1" >
                            </div>

                            <div class="col-md-3">
                                <input type="submit" value="Add to Cart" >
                            </div>

                        </div>
                      </form>
                   </div>
                </div>
                <div class="img-box">
                   <img src="product/{{$products->image}}" alt="">
                </div>
                <div class="detail-box">
                   <h5>

                     {{$products->category}}

                    </h5>

                    @if ($products->discount_price)

                    <h6 style="color:blue;">
                        Discount price
                        <br>
                        {{$products->discount_price}} DH

                    </h6>

                    <h6 style="text-decoration:line-through; color:red;" >

                        price
                        <br>
                        {{$products->price}} DH

                       </h6>

                       @else

                       <h6 style="color:red;">
                        price
                        <br>
                        {{$products->price}} DH

                       </h6>

                    @endif

                </div>
             </div>
          </div>


          @endforeach
          <span style="padding-top:20px;">
                {!!$product->withQueryString()->links('pagination::bootstrap-5')!!}
          </span>

        </div>




    </div>


 </section>
