<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]>
    <meta http-equiv="X-UA-Compatible" content="IE=Edge,chrome=1">
    <![endif]-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Flowers Shoppe Stores - Bootstrap 3 E-Commerce Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{config('templates.'.$template_name.'.template_path')}}css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS Files -->
    <link href="{{config('templates.'.$template_name.'.template_path')}}font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{config('templates.'.$template_name.'.template_path')}}css/owl.carousel.css" rel="stylesheet">
    <link href="{{config('templates.'.$template_name.'.template_path')}}css/style.css" rel="stylesheet">
    <link href="{{config('templates.'.$template_name.'.template_path')}}css/my_style.css" rel="stylesheet">
    <link href="{{config('templates.'.$template_name.'.template_path')}}css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{config('templates.'.$template_name.'.template_path')}}https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="{{config('templates.'.$template_name.'.template_path')}}https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{config('templates.'.$template_name.'.template_path')}}images/fav-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{config('templates.'.$template_name.'.template_path')}}images/fav-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{config('templates.'.$template_name.'.template_path')}}images/fav-72.png">
    <link rel="apple-touch-icon-precomposed" href="{{config('templates.'.$template_name.'.template_path')}}images/fav-57.png">
    <link rel="shortcut icon" href="{{config('templates.'.$template_name.'.template_path')}}images/fav.png">

</head>
<body>

@include('public.'.$template_name.'.includes.header_top')

<!-- Main Container Starts -->
<div id="main-container" class="container">
    <div class="row">
        <!-- Primary Content Starts -->
        <div class="col-md-9">
            @yield('breadcrumb')
            @yield('content')
        </div>
        <!-- Primary Content Ends -->
        <!-- Sidebar Starts -->
        <div class="col-md-3">
            <!-- Categories Links Starts -->
            <h3 class="side-heading">Categories</h3>
            <div class="list-group">
                @foreach($menu_left as $key => $value)
                    <a href="{{$value}}" class="list-group-item">
                        <i class="fa fa-chevron-right"></i>
                        {{$key}}
                    </a>
                @endforeach
            </div>
            <!-- Categories Links Ends -->
            <!-- Shopping Options Starts -->
            <h3 class="side-heading">Shopping Options</h3>
            <div class="list-group">
                <form action="/">
                    <div class="list-group-item">
                        Brands
                    </div>
                    <div class="list-group-item">
                        <div class="filter-group">
                            <label class="checkbox">
                                <input name="filter1" type="checkbox" value="br1" checked="checked" />
                                Brand Name 1
                            </label>
                        </div>
                    </div>
                    <div class="list-group-item">
                        Manufacturer
                    </div>
                    <div class="list-group-item">
                        <div class="filter-group">
                            <label class="radio">
                                <input name="filter-manuf" type="radio" value="mr1" checked="checked" />
                                Manufacturer Name 1
                            </label>
                        </div>
                    </div>
                    <div class="list-group-item">
                        <button type="submit" class="btn btn-main">Filter</button>
                    </div>
                </form>
            </div>
            <!-- Shopping Options Ends -->
            <!-- Bestsellers Links Starts -->
            <h3 class="side-heading">Bestsellers</h3>
            @foreach($product_best_seller as $product)
                @include('public.hoa.includes.element.product.item1')
            @endforeach
            <div class="product-col hidden">
                <div class="image">
                    <img src="{{config('templates.'.$template_name.'.template_path')}}images/product-images/9.png" alt="product" class="img-responsive" />
                </div>
                <div class="caption">
                    <h4>
                        <a href="{{config('templates.'.$template_name.'.template_path')}}product-full.html">Flowers</a>
                    </h4>
                    <div class="description">
                        We are so lucky living in such a wonderful time. Our almost unlimited ...
                    </div>
                    <div class="price">
                        <span class="price-new">$199.50</span>
                        <span class="price-old">$249.50</span>
                    </div>
                    <div class="cart-button button-group">
                        <button type="button" class="btn btn-cart">
                            Add to cart
                        </button>
                    </div>
                </div>
            </div>
            <!-- Bestsellers Links Ends -->
        </div>
        <!-- Sidebar Ends -->
    </div>
</div>
<!-- Main Container Ends -->
@include('public.'.$template_name.'.includes.footer_bottom')

<!-- Footer Section Ends -->
<!-- JavaScript Files -->
<script src="{{config('templates.'.$template_name.'.template_path')}}js/jquery-1.11.1.min.js"></script>
<script src="{{config('templates.'.$template_name.'.template_path')}}js/jquery-migrate-1.2.1.min.js"></script>
<script src="{{config('templates.'.$template_name.'.template_path')}}js/bootstrap.min.js"></script>
<script src="{{config('templates.'.$template_name.'.template_path')}}js/bootstrap-hover-dropdown.min.js"></script>
<script src="{{config('templates.'.$template_name.'.template_path')}}js/jquery.magnific-popup.min.js"></script>
<script src="{{config('templates.'.$template_name.'.template_path')}}js/owl.carousel.min.js"></script>
<script src="/bower_components/jquery.countdown/dist/jquery.countdown.js"></script>
<script src="{{config('templates.'.$template_name.'.template_path')}}js/custom.js"></script>
</body>
</html>