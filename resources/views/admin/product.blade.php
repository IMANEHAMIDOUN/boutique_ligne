<!DOCTYPE html>
<html lang="en">
  <head>

   @include('admin.css')

   <style type="text/css">
    .div_center {
        text-align: center;
        padding-top: 40px;
    }
    .h1 {
        font-size: 45px;
        color: #d20cec;
        padding-bottom: 40px;
    }
    .text_color {
        color: #e70c7a ;
        padding-bottom: 20px;
        width: 250px;
    }
    .label {
        font-size: 20px
    }
    .span {
        font-size: 25px;
        color: #e70c7a;
    }
    label {
        display: inline-block;
        width: 250px;
    }
    .div_design {
        padding-bottom: 10px;
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

                @if (session()->has('message'))
                        <div class="alert alert-success">
                            {{ session()->get('message') }}
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        </div>
                    @endif


                <div class="div_center">
                    <h1 class="h1">Add Product</h1>

                    <form action="{{url('add_product')}}" method="POST" enctype="multipart/form-data">

                        @csrf

                    <div class="div_design">
                    <label class="label">Product Title <span class="span">:</span></label>
                    <input class="text_color" type="text" name="title" placeholder="Write a title" required="">
                    </div>

                    <div class="div_design">
                    <label class="label">Product Description <span class="span">:</span></label>
                    <input class="text_color" type="text" name="description" placeholder="Write a description" required="">
                    </div>

                    <div class="div_design">
                    <label class="label">Product Price <span class="span">:</span></label>
                    <input class="text_color" type="number" name="price" placeholder="Write a price" required="">
                    </div>

                    <div class="div_design">
                     <label class="label">Discount Price <span class="span">:</span></label>
                     <input class="text_color" type="number" name="dis_price" placeholder="Write a discount ">
                     </div>

                    <div class="div_design">
                    <label class="label">Product Quantity <span class="span">:</span></label>
                    <input class="text_color" type="number" min="0" name="quantity" placeholder="Write a quantity" required="">
                    </div>

                    <div class="div_design">
                    <label class="label">Product Category <span class="span">:</span></label>
                    <select class="text_color" name="category" id="" required="">
                    <option value="" selected="">Add a category here</option>

                    @foreach($category as $category)

                    <option value="{{$category->category_name}}">{{$category->category_name}}</option>
                    @endforeach



                    </select>
                    </div>

                    <div class="div_design">
                    <label class="label">Product Image Here <span class="span">:</span></label>
                    <input  type="file" name="image">
                    </div>

                    <div class="div_design">
                    <input type="submit" value="Add Product" class="btn btn-primary">
                    </div>

                    </form>

                </div>

            </div>

        </div>



    <!-- container-scroller -->
    <!-- plugins:js -->

    @include('admin.script')
</body>
</html>
