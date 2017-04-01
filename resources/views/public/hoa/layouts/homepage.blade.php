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
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet'
          type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800'
          rel='stylesheet' type='text/css'>

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

<!-- Slider Section Starts -->
<div class="slider">
    <div class="container">
        <div id="main-carousel" class="carousel slide" data-ride="carousel">
            <!-- Wrapper For Slides Starts -->
            <div class="carousel-inner">
                @foreach($db_banner_top as $key => $value)
                    <div class="item {{($value['active'] == true?'active':'') }}">
                        <a href="{{$value['url']}}"><img src="{{$value['link_img']}}" alt="Slider"
                                                         class="img-responsive"/></a>
                    </div>
                @endforeach
            </div>
            <!-- Wrapper For Slides Ends -->
            <!-- Controls Starts -->
            <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <!-- Controls Ends -->
        </div>
    </div>
</div>
<!-- Slider Section Ends -->
@yield('content')
<!-- 1 Column Banners Starts -->
<div class="col1-banners">
    <div class="container">
        <a href="{{$db_banner_bottom[0]['url']}}"><img src="{{$db_banner_bottom[0]['link_img']}}" alt="banners" class="img-responsive"/></a>
    </div>
</div>
<!-- 1 Column Banners Ends -->
@include('public.'.$template_name.'.includes.footer_bottom')

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
