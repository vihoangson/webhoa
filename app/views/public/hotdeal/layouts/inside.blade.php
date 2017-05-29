<!DOCTYPE HTML>
<html>

<head>
    <title>@yield('title_page',$title_default)</title>
    <!-- meta info -->
    <meta content="text/html; charset=utf-8" http-equiv="Content-Type">
    <meta name="keywords" content="{{$keyword_page or $keyword_default}}"/>
    <meta name="description" content="{{$description_page or $description_default}}">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Google fonts -->
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:400,600,700,300' rel='stylesheet' type='text/css'>
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,100,300' rel='stylesheet' type='text/css'>
    <!-- Bootstrap styles -->
    <link rel="stylesheet" href="/assets/themes/remtsoy/css/boostrap.css">
    <!-- Font Awesome styles (icons) -->
    <link rel="stylesheet" href="/assets/themes/remtsoy/css/font_awesome.css">
    <!-- Main Template styles -->
    <link rel="stylesheet" href="/assets/themes/remtsoy/css/styles.css">
    <!-- IE 8 Fallback -->
    <!--[if lt IE 9]>
    <link rel="stylesheet" type="text/css" href="/assets/themes/remtsoy/css/ie.css"/>
    <![endif]-->

    <!-- Your custom styles (blank file) -->
    <link rel="stylesheet" href="/assets/themes/remtsoy/css/mystyles.css">

    <link rel="stylesheet" href="/assets/themes/remtsoy/css/switcher.css">
    <!-- Demo Examples -->
    <link rel="alternate stylesheet" type="text/css" href="/assets/themes/remtsoy/css/schemes/apple.css" title="apple" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="/assets/themes/remtsoy/css/schemes/pink.css" title="pink" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="/assets/themes/remtsoy/css/schemes/teal.css" title="teal" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="/assets/themes/remtsoy/css/schemes/gold.css" title="gold" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="/assets/themes/remtsoy/css/schemes/downy.css" title="downy" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="/assets/themes/remtsoy/css/schemes/atlantis.css" title="atlantis" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="/assets/themes/remtsoy/css/schemes/red.css" title="red" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="/assets/themes/remtsoy/css/schemes/violet.css" title="violet" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="/assets/themes/remtsoy/css/schemes/pomegranate.css" title="pomegranate" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="/assets/themes/remtsoy/css/schemes/violet-red.css" title="violet-red" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="/assets/themes/remtsoy/css/schemes/mexican-red.css" title="mexican-red" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="/assets/themes/remtsoy/css/schemes/victoria.css" title="victoria" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="/assets/themes/remtsoy/css/schemes/orient.css" title="orient" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="/assets/themes/remtsoy/css/schemes/jgger.css" title="jgger" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="/assets/themes/remtsoy/css/schemes/de-york.css" title="de-york" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="/assets/themes/remtsoy/css/schemes/blaze-orange.css" title="blaze-orange" media="all"/>
    <link rel="alternate stylesheet" type="text/css" href="/assets/themes/remtsoy/css/schemes/hot-pink.css" title="hot-pink" media="all"/>
    <!-- END Demo Examples -->

</head>

<body>


<div class="global-wrap">


@include('public.hotdeal.includes.header_top')



<!-- //////////////////////////////////
//////////////PAGE CONTENT/////////////
////////////////////////////////////-->

    <div class="container">
        <div class="row">

            <div class="col-md-9">
                @include('flash::message')

                {{--@yield('breadcrumb')--}}
                <h1>@yield('title-header')</h1>
                @yield('content')
            </div>
            <div class="col-md-3">
                <aside class="hidden-phone">
                    <div class="sidebar-box">
                        <h5>Nhóm sản phẩm</h5>
                        <ul class="icon-list blog-category-list">
                            @foreach($data_category as $key => $value)
                                <li>
                                    <a href="/category/{{$value->slug}}"><i class="fa fa-angle-right"></i>{{$value->name}}
                                        <span>{{count($value->product)}}</span></a>
                                </li>
                            @endforeach
                        </ul>
                    </div>

                    @include('public.hotdeal.includes.element.widget.newletter-signup')

                    @include('public.hotdeal.includes.element.widget.promotion-product')

                    @include('public.hotdeal.includes.element.widget.recent-posts')

                    @include('public.hotdeal.includes.element.widget.popular-tags')

                </aside>


            </div>
        </div>

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
    <script src="/assets/themes/remtsoy/js/jquery.js"></script>
    <script src="/assets/themes/remtsoy/js/boostrap.min.js"></script>
    <script src="/assets/themes/remtsoy/js/flexnav.min.js"></script>
    <script src="/assets/themes/remtsoy/js/magnific.js"></script>
    <script src="/assets/themes/remtsoy/js/tweet.min.js"></script>
    <script src="https://maps.googleapis.com/maps/api/js?v=3.exp&sensor=false"></script>
    <script src="/assets/themes/remtsoy/js/fitvids.min.js"></script>
    <script src="/assets/themes/remtsoy/js/mail.min.js"></script>
    <script src="/assets/themes/remtsoy/js/ionrangeslider.js"></script>
    <script src="/assets/themes/remtsoy/js/icheck.js"></script>
    <script src="/assets/themes/remtsoy/js/fotorama.js"></script>
    <script src="/assets/themes/remtsoy/js/card-payment.js"></script>
    <script src="/assets/themes/remtsoy/js/owl-carousel.js"></script>
    <script src="/assets/themes/remtsoy/js/masonry.js"></script>
    <script src="/assets/themes/remtsoy/js/nicescroll.js"></script>
    <script src="/bower_components/jquery.countdown/dist/jquery.countdown.js"></script>
    <script src='https://www.google.com/recaptcha/api.js?hl=vi'></script>
    <!-- Custom scripts -->
    <script src="/assets/themes/remtsoy/js/custom.js"></script>
    <script src="/assets/themes/remtsoy/js/switcher.js"></script>

    @include('vendor.common.modal')

    @if( \Session::has('modal_message_error'))
        <script type="text/javascript">
            $(document).ready(function() {
                $('#popupmodal .modal-body').html('{{\Session::get('modal_message_error')}}');
                $('#popupmodal').modal();
            });
        </script>
    @endif

</div>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-100102308-1', 'auto');
  ga('send', 'pageview');

</script>

</body>

</html>
