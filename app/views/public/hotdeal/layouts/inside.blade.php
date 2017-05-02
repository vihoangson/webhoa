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
            <div class="col-md-3 hidden">
                <aside class="sidebar-left">

                    <ul class="nav nav-tabs nav-stacked nav-coupon-category">
                        @foreach($data_category as $key => $value)
                            <li class="{{(preg_match('/category\/'.$value->slug.'/',Request::url())==true?"active":"")}}">
                                <a href="/category/{{$value->slug}}"><i class="fa fa-cutlery"></i>{{$value->name}}
                                    <span>{{count($value->product)}}</span></a></li>
                        @endforeach
                    </ul>
                    <div class="sidebar-box">
                        <h5>Filter By Price</h5>
                        <input type="text" id="price-slider">
                    </div>
                    <div class="sidebar-box">
                        <h5>Product Feature</h5>
                        <ul class="checkbox-list">
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">On Sale</label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">New</label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">Ending Soon</label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">High Rating</label>
                            </li>
                            <li class="checkbox">
                                <label>
                                    <input type="checkbox" class="i-check">Free Shipping</label>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-box">
                        <h5>Recent Viewed</h5>
                        <ul class="thumb-list">
                            <li>
                                <a href="#">
                                    <img src="/assets/themes/remtsoy/img/urbex_esch_lux_with_laney_and_laaaaag_70x70.jpg"
                                         alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag"/>
                                </a>
                                <div class="thumb-list-item-caption">
                                    <h5 class="thumb-list-item-title"><a href="#">Best Camera Lenthes</a></h5>
                                    <p class="thumb-list-item-price">$343</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/assets/themes/remtsoy/img/amaze_70x70.jpg" alt="Image Alternative text" title="AMaze"/>
                                </a>
                                <div class="thumb-list-item-caption">
                                    <h5 class="thumb-list-item-title"><a href="#">New Glass Collection</a></h5>
                                    <p class="thumb-list-item-price">$402</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/assets/themes/remtsoy/img/waipio_valley_70x70.jpg"
                                         alt="Image Alternative text" title="waipio valley"/>
                                </a>
                                <div class="thumb-list-item-caption">
                                    <h5 class="thumb-list-item-title"><a href="#">Awesome Vacation</a></h5>
                                    <p class="thumb-list-item-price">$387</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                    <div class="sidebar-box">
                        <h5>Popular</h5>
                        <ul class="thumb-list">
                            <li>
                                <a href="#">
                                    <img src="/assets/themes/remtsoy/img/food_is_pride_70x70.jpg"
                                         alt="Image Alternative text" title="Food is Pride"/>
                                </a>
                                <div class="thumb-list-item-caption">
                                    <h5 class="thumb-list-item-title"><a href="#">Best Pasta</a></h5>
                                    <p class="thumb-list-item-price">$472</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/assets/themes/remtsoy/img/old_no7_70x70.jpg" alt="Image Alternative text" title="Old No7"/>
                                </a>
                                <div class="thumb-list-item-caption">
                                    <h5 class="thumb-list-item-title"><a href="#">Fancy Coffe Cup</a></h5>
                                    <p class="thumb-list-item-price">$243</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="/assets/themes/remtsoy/img/the_hidden_power_of_the_heart_70x70.jpg"
                                         alt="Image Alternative text" title="The Hidden Power of the Heart"/>
                                </a>
                                <div class="thumb-list-item-caption">
                                    <h5 class="thumb-list-item-title"><a href="#">Beach Holidays</a></h5>
                                    <p class="thumb-list-item-price">$408</p>
                                </div>
                            </li>
                        </ul>
                    </div>
                </aside>
            </div>
            <div class="col-md-9">
                {{--@yield('breadcrumb')--}}

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


                    <div class="sidebar-box">

                        <h5>Newsletter singup</h5>
                        <form class="sign-up">
                            <input type="text" class="form-control" placeholder="E-mail">
                            <small class="help-block">*We never send spam</small>
                            <input type="submit" class="btn btn-primary" value="Subscribe">
                        </form>
                    </div>


                    <div class="sidebar-box">
                        <h5>Recent Posts</h5>
                        <ul class="thumb-list">
                            <li>
                                <a href="#">
                                    <img src="img/urbex_esch_lux_with_laney_and_laaaaag_70x70.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag">
                                </a>
                                <div class="thumb-list-item-caption">
                                    <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                    <h5 class="thumb-list-item-title"><a href="#">Dictumst penatibus</a></h5>
                                    <p class="thumb-list-item-desciption">Placerat est sociosqu felis hac</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/amaze_70x70.jpg" alt="Image Alternative text" title="AMaze">
                                </a>
                                <div class="thumb-list-item-caption">
                                    <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                    <h5 class="thumb-list-item-title"><a href="#">Lectus velit</a></h5>
                                    <p class="thumb-list-item-desciption">Suscipit amet congue mattis taciti</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/the_hidden_power_of_the_heart_70x70.jpg" alt="Image Alternative text" title="The Hidden Power of the Heart">
                                </a>
                                <div class="thumb-list-item-caption">
                                    <p class="thumb-list-item-meta">Jul 18, 2014</p>
                                    <h5 class="thumb-list-item-title"><a href="#">Ligula non</a></h5>
                                    <p class="thumb-list-item-desciption">Vestibulum lectus sit sagittis facilisis</p>
                                </div>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-box">
                        <h5>Twitter Feed</h5>
                        <!-- START TWITTER -->
                        <div class="twitter" id="twitter"></div>
                        <!-- END TWITTER -->
                    </div>

                    <div class="sidebar-box">
                        <h5>Popular Tags</h5>
                        <ul class="tags-list">
                            <li><a href="#">Lifestyle</a>
                            </li>
                            <li><a href="#">Design</a>
                            </li>
                            <li><a href="#">Business</a>
                            </li>
                            <li><a href="#">Travel</a>
                            </li>
                            <li><a href="#">Discounts</a>
                            </li>
                            <li><a href="#">Shopping</a>
                            </li>
                        </ul>
                    </div>

                    <div class="sidebar-box">
                        <h5>Recent Comments</h5>
                        <ul class="thumb-list thumb-list-right">
                            <li>
                                <a href="#">
                                    <img src="img/gamer_chick_50x50.jpg" alt="Image Alternative text" title="Gamer Chick" class="rounded">
                                </a>
                                <div class="thumb-list-item-caption">
                                    <p class="thumb-list-item-meta">8 minutes ago</p>
                                    <h5 class="thumb-list-item-title"><a href="#">Oliver Ross</a></h5>
                                    <p class="thumb-list-item-desciption">Ipsum tortor leo...</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/ana_29_50x50.jpg" alt="Image Alternative text" title="Ana 29"
                                         class="rounded">
                                </a>
                                <div class="thumb-list-item-caption">
                                    <p class="thumb-list-item-meta">8 minutes ago</p>
                                    <h5 class="thumb-list-item-title"><a href="#">John Doe</a></h5>
                                    <p class="thumb-list-item-desciption">Habitasse velit consectetur auctor
                                        elementum...</p>
                                </div>
                            </li>
                            <li>
                                <a href="#">
                                    <img src="img/afro_50x50.jpg" alt="Image Alternative text" title="Afro"
                                         class="rounded">
                                </a>
                                <div class="thumb-list-item-caption">
                                    <p class="thumb-list-item-meta">7 minutes ago</p>
                                    <h5 class="thumb-list-item-title"><a href="#">Leah Kerr</a></h5>
                                    <p class="thumb-list-item-desciption">Nisi potenti fermentum vehicula
                                        eleifend...</p>
                                </div>
                            </li>
                        </ul>
                    </div>

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
                            <form>
                                <div class="form-group mb10">
                                    <label>E-mail</label>
                                    <input type="text" class="form-control"/>
                                </div>
                                <p class="mb10">Facilisis penatibus integer lacinia semper nibh ullamcorper</p>
                                <input type="submit" class="btn btn-primary" value="Sign Up"/>
                            </form>
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
</div>
</body>

</html>
