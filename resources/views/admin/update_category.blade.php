<!DOCTYPE html>
<html lang="en">

<head>
    <base href="/public">

    @include('admin.css')

    <style type="text/css">
        .div_center {
            text-align: center;
            padding-top: 40px;
        }
        .h1_font {
            font-size: 40px;
            padding-bottom: 40px;
            color:#d20cec;
        }
        .input_color {
            color: black;
        }
        .center {
            margin: auto;
            width: 50%;
            text-align: center;
            margin-top: 30px;
            border: 3px solid green;
        }
        .label {
            font-size: 20px;
            color: #e2a2eb;
        }
        .span {
            color: #e2a2eb;
            font-size: 25px;
        }
        .form {
            margin-top: 70px;
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

                <div class="div_center">




                    <h1 class="h1_font">Update category</h1>

                    <form class="form" action="{{ url('/update_category_confirm', $category->id) }}" method="POST">

                        @csrf
                        <label class="label">Tape The New Category Name <span class="span">:</span></label><br>
                        <input type="text" class="input_color" name="category"
                            value="{{ $category->category_name }}">
                        <input type="submit" name="submit" class="btn btn-primary" value="Update category">
                    </form>

                </div>



            </div>

        </div>
    </div>
        <!-- container-scroller -->
        <!-- plugins:js -->

        @include('admin.script')
</body>

</html>
