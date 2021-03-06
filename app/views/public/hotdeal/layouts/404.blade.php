<!DOCTYPE HTML>
<html>

<head>
    <title>@yield('title_page','Xem Ngay Mua Ngay')</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="{{$keyword_page or 'Xem Ngay Mua Ngay'}}"/>
    <meta name="description" content="{{$description_page or 'Xem Ngay Mua Ngay'}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="{{config('templates.'.$template_name.'.template_path')}}css/boostrap.css">
    <!-- Font Awesome styles (icons) -->
    <link rel="stylesheet" href="{{config('templates.'.$template_name.'.template_path')}}css/font_awesome.css">
    <!-- Main Template styles -->
    <link rel="stylesheet" href="{{config('templates.'.$template_name.'.template_path')}}css/styles.css">
    <!-- IE 8 Fallback -->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/ie.css"/>
    <![endif]-->

    <!-- Your custom styles (blank file) -->
    <link rel="stylesheet" href="{{config('templates.'.$template_name.'.template_path')}}css/mystyles.css">

    <link rel="stylesheet" href="{{config('templates.'.$template_name.'.template_path')}}css/switcher.css">
    <!-- Demo Examples -->
    <link rel="alternate stylesheet" type="text/css"
          href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/apple.css" title="apple"
          media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/pink.css" title="pink" media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/teal.css" title="teal" media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/gold.css" title="gold" media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/downy.css" title="downy"
          media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/atlantis.css" title="atlantis"
          media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/red.css" title="red" media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/violet.css" title="violet"
          media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/pomegranate.css" title="pomegranate"
          media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/violet-red.css" title="violet-red"
          media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/mexican-red.css" title="mexican-red"
          media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/victoria.css" title="victoria"
          media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/orient.css" title="orient"
          media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/jgger.css" title="jgger"
          media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/de-york.css" title="de-york"
          media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/blaze-orange.css"
          title="blaze-orange" media="all"/>
    <link rel="alternate stylesheet" type="text/css"
          href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/hot-pink.css" title="hot-pink"
          media="all"/>
    <!-- END Demo Examples -->

</head>

<body class="boxed bg-cover" style="background-image: url(img/backgrounds/wood.jpg)">

<div class="global-wrap">


    <div class="demo_changer" id="demo_changer">
        <div class="demo-icon fa fa-sliders"></div>
        <div class="form_holder">
            <div class="line"></div>
            <p>Color Scheme</p>
            <div class="predefined_styles" id="styleswitch_area">
                <a href="{{config('templates.'.$template_name.'.template_path')}}?default=true" class="styleswitch"
                   style="background:#2A8FBD"></a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}" data-source="apple"
                   class="styleswitch" style="background:#56AD48"></a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}" data-source="pink"
                   class="styleswitch" style="background:#FF0066"></a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}" data-source="teal"
                   class="styleswitch" style="background:#1693A5"></a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}" data-source="gold"
                   class="styleswitch" style="background:#FBB829"></a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}" data-source="downy"
                   class="styleswitch" style="background:#6dcda7"></a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}" data-source="atlantis"
                   class="styleswitch" style="background:#8cc732"></a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}" data-source="red" class="styleswitch"
                   style="background:#FF0000"></a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}" data-source="violet"
                   class="styleswitch" style="background:#D31996"></a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}" data-source="pomegranate"
                   class="styleswitch" style="background:#F02311"></a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}" data-source="violet-red"
                   class="styleswitch" style="background:#F23A65"></a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}" data-source="mexican-red"
                   class="styleswitch" style="background:#9b2139"></a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}" data-source="victoria"
                   class="styleswitch" style="background:#544AA1"></a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}" data-source="orient"
                   class="styleswitch" style="background:#025D8C"></a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}" data-source="jgger"
                   class="styleswitch" style="background:#420943"></a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}" data-source="de-york"
                   class="styleswitch" style="background:#8CCA91"></a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}" data-source="blaze-orange"
                   class="styleswitch" style="background:#FF6600"></a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}" data-source="hot-pink"
                   class="styleswitch" style="background:#FF5EAA"></a>
            </div>
            <div class="line"></div>
            <p>Layout</p>
            <div class="predefined_styles">
                <a href="#" class="btn btn-sm" id="btn-wide">Wide</a>
                <a href="#" class="btn btn-sm" id="btn-boxed">Boxed</a>
            </div>
            <div class="line"></div>
            <p>Background patterns</p>
            <div class="predefined_styles" id="patternswitch_area">
                <a href="#" class="patternswitch" style="background-image: url('img/patterns/binding_light.png')"></a>
                <a href="#" class="patternswitch" style="background-image: url('img/patterns/binding_dark.png')"></a>
                <a href="#" class="patternswitch" style="background-image: url('img/patterns/dark_fish_skin.png')"></a>
                <a href="#" class="patternswitch" style="background-image: url('img/patterns/dimension.png')"></a>
                <a href="#" class="patternswitch" style="background-image: url('img/patterns/escheresque_ste.png')"></a>
                <a href="#" class="patternswitch" style="background-image: url('img/patterns/food.png')"></a>
                <a href="#" class="patternswitch" style="background-image: url('img/patterns/giftly.png')"></a>
                <a href="#" class="patternswitch" style="background-image: url('img/patterns/grey_wash_wall.png')"></a>
                <a href="#" class="patternswitch" style="background-image: url('img/patterns/ps_neutral.png')"></a>
                <a href="#" class="patternswitch" style="background-image: url('img/patterns/pw_maze_black.png')"></a>
                <a href="#" class="patternswitch" style="background-image: url('img/patterns/pw_pattern.png')"></a>
                <a href="#" class="patternswitch" style="background-image: url('img/patterns/simple_dashed.png')"></a>
            </div>
            <div class="line"></div>
            <p>Background images</p>
            <div class="predefined_styles" id="bgimageswitch_area">
                <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/bike.jpg')"
                   data-source="img/backgrounds/bike.jpg"></a>
                <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/flowers.jpg')"
                   data-source="img/backgrounds/flowers.jpg"></a>
                <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/wood.jpg')"
                   data-source="img/backgrounds/wood.jpg"></a>
                <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/taxi.jpg')"
                   data-source="img/backgrounds/taxi.jpg"></a>
                <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/phone.jpg')"
                   data-source="img/backgrounds/phone.jpg"></a>
                <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/road.jpg')"
                   data-source="img/backgrounds/road.jpg"></a>
                <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/keyboard.jpg')"
                   data-source="img/backgrounds/keyboard.jpg"></a>
                <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/beach.jpg')"
                   data-source="img/backgrounds/beach.jpg"></a>
                <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/street.jpg')"
                   data-source="img/backgrounds/street.jpg"></a>
                <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/nature.jpg')"
                   data-source="img/backgrounds/nature.jpg"></a>
                <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/bridge.jpg')"
                   data-source="img/backgrounds/bridge.jpg"></a>
                <a href="#" class="bgimageswitch" style="background-image: url('img/switcher/cameras.jpg')"
                   data-source="img/backgrounds/cameras.jpg"></a>
            </div>
            <div class="line"></div>
        </div>
    </div>
@include('public.hotdeal.includes.header_top')


    <!-- //////////////////////////////////
//////////////PAGE CONTENT/////////////
////////////////////////////////////-->


    <div class="container">
        <h1 class="title-hero">
            404
        </h1>
        <h1>Xin lỗi, trang này không được tìm thấy.</h1>
        <div class="gap gap-small"></div><a href="/" class="btn btn-primary btn-mega">Trở về trang chủ</a>
        <div class="gap"></div>
    </div>


    <!-- //////////////////////////////////
//////////////END PAGE CONTENT/////////
////////////////////////////////////-->


    <!-- //////////////////////////////////
//////////////MAIN FOOTER//////////////
////////////////////////////////////-->

@include('public.hotdeal.includes.footer_bottom')
    <!-- //////////////////////////////////
//////////////END MAIN  FOOTER/////////
////////////////////////////////////-->


    <!-- Scripts queries -->
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/jquery.js"></script>
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/boostrap.min.js"></script>
    {{--<script src="{{config('templates.'.$template_name.'.template_path')}}js/countdown.min.js"></script>--}}
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/flexnav.min.js"></script>
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/magnific.js"></script>
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/tweet.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/fitvids.min.js"></script>
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/mail.min.js"></script>
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/ionrangeslider.js"></script>
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/icheck.js"></script>
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/fotorama.js"></script>
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/card-payment.js"></script>
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/owl-carousel.js"></script>
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/masonry.js"></script>
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/nicescroll.js"></script>
    <script src="/bower_components/jquery.countdown/dist/jquery.countdown.js"></script>

    <!-- Custom scripts -->
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/custom.js"></script>
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/switcher.js"></script>
</div>
</body>

</html>
