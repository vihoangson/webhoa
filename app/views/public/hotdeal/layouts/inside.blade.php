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

    <footer class="main" id="main-footer">
        <div class="footer-top-area">
            <div class="container">
                <div class="row row-wrap">
                    <div class="col-md-3">
                        <a href="/assets/themes/remtsoy/index.html">
                            <img src="/assets/themes/remtsoy/img/logo.png" alt="logo" title="logo" class="logo">
                        </a>
                        <ul class="list list-social">
                            <li>
                                <a class="fa fa-facebook box-icon" href="#" data-toggle="tooltip" title="Facebook"></a>
                            </li>
                            <li>
                                <a class="fa fa-twitter box-icon" href="#" data-toggle="tooltip" title="Twitter"></a>
                            </li>
                            <li>
                                <a class="fa fa-flickr box-icon" href="#" data-toggle="tooltip" title="Flickr"></a>
                            </li>
                            <li>
                                <a class="fa fa-linkedin box-icon" href="#" data-toggle="tooltip" title="LinkedIn"></a>
                            </li>
                            <li>
                                <a class="fa fa-tumblr box-icon" href="#" data-toggle="tooltip" title="Tumblr"></a>
                            </li>
                        </ul>
                        <p>Curae primis aliquet sapien pellentesque velit tristique taciti tincidunt adipiscing pharetra
                            massa at quisque fermentum faucibus ultrices mi fames himenaeos</p>
                    </div>
                    <div class="col-md-3">
                        <h4>Sign Up to the Newsletter</h4>
                        <div class="box">
                            {!! Form::open(['url' => '/register_email', 'method' => 'POST','class'=>'form-horizontal', 'files' => false]) !!}
                                <div class="form-group mb10">
                                    <label>E-mail</label>
                                    <input type="email" class="form-control"/>
                                </div>
                                <p class="mb10">Facilisis penatibus integer lacinia semper nibh ullamcorper</p>
                                <input type="submit" class="btn btn-primary" value="Sign Up"/>
                            {!! Form::close() !!}
                        </div>
                    </div>
                    <div class="col-md-3">
                        <h4>Couponia on Twitter</h4>
                        <!-- START TWITTER -->
                        <div class="twitter-ticker" id="twitter-ticker"></div>
                        <!-- END TWITTER -->
                    </div>
                    <div class="col-md-3">
                        <h4>Recent News</h4>
                        <ul class="thumb-list">
                            <li>
                                <a href="#">
                                    <img src="/assets/themes/remtsoy/img/urbex_esch_lux_with_laney_and_laaaaag_70x70.jpg"
                                         alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag"/>
                                </a>
                                <div class="thumb-list-item-caption">
                                    <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                    <h5 class="thumb-list-item-title"><a href="#">Nunc ad</a></h5>
                                    <p class="thumb-list-item-desciption">Ornare commodo luctus curabitur mi</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/assets/themes/remtsoy/img/amaze_70x70.jpg" alt="Image Alternative text" title="AMaze"/>
                                </a>
                                <div class="thumb-list-item-caption">
                                    <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                    <h5 class="thumb-list-item-title"><a href="#">Aliquet aliquam</a></h5>
                                    <p class="thumb-list-item-desciption">Nec sollicitudin fames cubilia elit</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/assets/themes/remtsoy/img/the_hidden_power_of_the_heart_70x70.jpg"
                                         alt="Image Alternative text" title="The Hidden Power of the Heart"/>
                                </a>
                                <div class="thumb-list-item-caption">
                                    <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                    <h5 class="thumb-list-item-title"><a href="#">Donec nostra</a></h5>
                                    <p class="thumb-list-item-desciption">Cum nullam porta dignissim tortor</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <p>Copyright © 2014, <a href="/assets/themes/remtsoy/">Your Store</a>, All Rights Reserved</p>
                    </div>
                    <div class="col-md-6 col-md-offset-2">
                        <div class="pull-right">
                            <ul class="list-inline list-payment">
                                <li>
                                    <img src="/assets/themes/remtsoy/img/payment/american-express-curved-32px.png"
                                         alt="Image Alternative text" title="Image Title"/>
                                </li>
                                <li>
                                    <img src="/assets/themes/remtsoy/img/payment/cirrus-curved-32px.png"
                                         alt="Image Alternative text" title="Image Title"/>
                                </li>
                                <li>
                                    <img src="/assets/themes/remtsoy/img/payment/discover-curved-32px.png"
                                         alt="Image Alternative text" title="Image Title"/>
                                </li>
                                <li>
                                    <img src="/assets/themes/remtsoy/img/payment/ebay-curved-32px.png"
                                         alt="Image Alternative text" title="Image Title"/>
                                </li>
                                <li>
                                    <img src="/assets/themes/remtsoy/img/payment/maestro-curved-32px.png"
                                         alt="Image Alternative text" title="Image Title"/>
                                </li>
                                <li>
                                    <img src="/assets/themes/remtsoy/img/payment/mastercard-curved-32px.png"
                                         alt="Image Alternative text" title="Image Title"/>
                                </li>
                                <li>
                                    <img src="/assets/themes/remtsoy/img/payment/visa-curved-32px.png"
                                         alt="Image Alternative text" title="Image Title"/>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </footer>
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
</body>

</html>
