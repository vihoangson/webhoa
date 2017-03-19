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
    <link href="/assets/flower-shoppe/css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link href='http://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>

    <!-- CSS Files -->
    <link href="/assets/flower-shoppe/font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="/assets/flower-shoppe/css/owl.carousel.css" rel="stylesheet">
    <link href="/assets/flower-shoppe/css/style.css" rel="stylesheet">
    <link href="/assets/flower-shoppe/css/my_style.css" rel="stylesheet">
    <link href="/assets/flower-shoppe/css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="/assets/flower-shoppe/js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="/assets/flower-shoppe/https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="/assets/flower-shoppe/https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Fav and touch icons -->
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="/assets/flower-shoppe/images/fav-144.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="/assets/flower-shoppe/images/fav-114.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="/assets/flower-shoppe/images/fav-72.png">
    <link rel="apple-touch-icon-precomposed" href="/assets/flower-shoppe/images/fav-57.png">
    <link rel="shortcut icon" href="/assets/flower-shoppe/images/fav.png">

</head>
<body>

@include('public.includes.header_top')

<!-- Main Container Starts -->
<div id="main-container" class="container">
    <div class="row">
        <!-- Primary Content Starts -->
        <div class="col-md-12">
            <!-- Breadcrumb Starts -->
            <ol class="breadcrumb">
                <li><a href="/">Home</a></li>
                <li class="active">flowers bouquet</li>
            </ol>
            <!-- Breadcrumb Ends -->
            @yield('content')
        </div>
        <!-- Primary Content Ends -->
    </div>
</div>
<!-- Main Container Ends -->
@include('public.includes.footer_bottom')

<!-- Footer Section Ends -->
<!-- JavaScript Files -->
<script src="/assets/flower-shoppe/js/jquery-1.11.1.min.js"></script>
<script src="/assets/flower-shoppe/js/jquery-migrate-1.2.1.min.js"></script>
<script src="/assets/flower-shoppe/js/bootstrap.min.js"></script>
<script src="/assets/flower-shoppe/js/bootstrap-hover-dropdown.min.js"></script>
<script src="/assets/flower-shoppe/js/jquery.magnific-popup.min.js"></script>
<script src="/assets/flower-shoppe/js/owl.carousel.min.js"></script>
<script src="/assets/flower-shoppe/js/custom.js"></script>
</body>
</html>