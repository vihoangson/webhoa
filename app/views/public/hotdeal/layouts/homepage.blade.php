<!DOCTYPE HTML>
<html>

<head>
    <title>@yield('title_page','Xem Ngay Mua Ngay')</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="{{$keyword_page or get_setting('default_keyword','string')}}"/>
    <meta name="description" content="{{$description_page or get_setting('default_description','string')}}">
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
    <link rel="alternate stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/apple.css" title="apple" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/pink.css" title="pink" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/teal.css" title="teal" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/gold.css" title="gold" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/downy.css" title="downy" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/atlantis.css" title="atlantis" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/red.css" title="red" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/violet.css" title="violet" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/pomegranate.css" title="pomegranate" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/violet-red.css" title="violet-red" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/mexican-red.css" title="mexican-red" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/victoria.css" title="victoria" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/orient.css" title="orient" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/jgger.css" title="jgger" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/de-york.css" title="de-york" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/blaze-orange.css" title="blaze-orange" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="{{config('templates.'.$template_name.'.template_path')}}css/schemes/hot-pink.css" title="hot-pink" media="all"/>
    <!-- END Demo Examples -->

</head>

<body class="boxed bg-cover">

<div class="global-wrap">

@include('public.hotdeal.includes.header_top')

<!-- //////////////////////////////////
//////////////PAGE CONTENT/////////////
////////////////////////////////////-->


    <div class="container">
        {{--Sidebar and week feature--}}
        <div class="row">
            <div class="col-md-3">
                @include("public.hotdeal.includes.siderbar",['menu'=>$data_category])
            </div>
            <div class="col-md-9">
                <h1 class="mb20">Mặt hàng giảm giá
                    <small><a href="/khuyen-mai-hot">Xem tất cả</a></small>
                </h1>
                @yield('feature')
            </div>
        </div>

        <div class="gap gap-small"></div>

        @yield('content')

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

    @include('vendor.common.modal')
    @if( \Session::has('modal_message_error'))
        <script type="text/javascript">
            $(document).ready(function() {
                $('#popupmodal .modal-title').html('Error');
                $('#popupmodal .modal-body').html('{{\Session::get('modal_message_error')}}');
                $('#popupmodal').modal();
            });
        </script>
    @endif

</div>
</body>

</html>
