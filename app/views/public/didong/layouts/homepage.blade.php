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

    <title>Mobile Shoppe Stores - Bootstrap 3 Template</title>

    <!-- Bootstrap Core CSS -->
    <link href="{{config('templates.'.$template_name.'.template_path')}}css/bootstrap.min.css" rel="stylesheet">

    <!-- Google Web Fonts -->
    <link href="{{config('templates.'.$template_name.'.template_path')}}http://fonts.googleapis.com/css?family=Roboto+Condensed:300italic,400italic,700italic,400,300,700" rel="stylesheet" type="text/css">
    <link href="{{config('templates.'.$template_name.'.template_path')}}http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400" rel="stylesheet" type="text/css">

    <!-- CSS Files -->
    <link href="{{config('templates.'.$template_name.'.template_path')}}font-awesome/css/font-awesome.min.css" rel="stylesheet">
    <link href="{{config('templates.'.$template_name.'.template_path')}}css/owl.carousel.css" rel="stylesheet">
    <link href="{{config('templates.'.$template_name.'.template_path')}}css/style.css" rel="stylesheet">
    <link href="{{config('templates.'.$template_name.'.template_path')}}css/responsive.css" rel="stylesheet">

    <!--[if lt IE 9]>
    <script src="{{config('templates.'.$template_name.'.template_path')}}js/ie8-responsive-file-warning.js"></script>
    <![endif]-->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="{{config('templates.'.$template_name.'.template_path')}}https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
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
<!-- Header Section Starts -->
<header id="header-area">
    <!-- Nested Container Starts -->
    <div class="container">
        <!-- Header Top Starts -->
        <div class="header-top text-uppercase">
            <div class="row">
                <!-- Header Links Starts -->
                <div class="col-sm-5 col-xs-12">
                    <div class="header-links">
                        <ul class="nav navbar-nav">
                            <li>
                                <a href="{{config('templates.'.$template_name.'.template_path')}}index.html">
                                    <i class="fa fa-home hidden-lg hidden-md" title="Home"></i>
                                    <span class="hidden-sm hidden-xs">
											Home
										</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-heart hidden-lg hidden-md" title="Wish List"></i>
                                    <span class="hidden-sm hidden-xs">
											Wish List (0)
										</span>
                                </a>
                            </li>
                            <li>
                                <a href="#">
                                    <i class="fa fa-user hidden-lg hidden-md" title="My Account"></i>
                                    <span class="hidden-sm hidden-xs">
											My Account
										</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{config('templates.'.$template_name.'.template_path')}}login.html">
                                    <i class="fa fa-lock hidden-lg hidden-md" title="Login"></i>
                                    <span class="hidden-sm hidden-xs">
											Login
										</span>
                                </a>
                            </li>
                            <li>
                                <a href="{{config('templates.'.$template_name.'.template_path')}}register.html">
                                    <i class="fa fa-unlock hidden-lg hidden-md" title="Register"></i>
                                    <span class="hidden-sm hidden-xs">
											Register
										</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Header Links Ends -->
                <div class="col-sm-3 col-xs-12 hidden-md hidden-sm hidden-xs text-center msg">
                    <span>Welcome to our online store!</span>
                </div>
                <!-- Currency & Languages Starts -->
                <div class="col-lg-4 col-sm-7 col-xs-12 text-right">
                    <!-- Languages Starts -->
                    <div class="btn-group">
                        <button class="btn btn-link dropdown-toggle text-uppercase" data-toggle="dropdown">
                            Language: <span>English</span>
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <ul class="pull-right dropdown-menu">
                            <li>
                                <a tabindex="-1" href="#">English</a>
                            </li>
                            <li>
                                <a tabindex="-1" href="#">French</a>
                            </li>
                        </ul>
                    </div>
                    <!-- Languages Ends -->
                    <!-- Currency Starts -->
                    <div class="btn-group">
                        <button class="btn btn-link dropdown-toggle text-uppercase" data-toggle="dropdown">
                            Currency: <span>USD</span>
                            <i class="fa fa-caret-down"></i>
                        </button>
                        <ul class="pull-right dropdown-menu">
                            <li><a tabindex="-1" href="#">Pound </a></li>
                            <li><a tabindex="-1" href="#">US Dollar</a></li>
                            <li><a tabindex="-1" href="#">Euro</a></li>
                        </ul>
                    </div>
                    <!-- Currency Ends -->
                </div>
                <!-- Currency & Languages Ends -->
            </div>
        </div>
        <!-- Header Top Ends -->
        <!-- Main Header Starts -->
        <div class="main-header">
            <div class="row">
                <!-- Logo Starts -->
                <div class="col-md-6 col-xs-12">
                    <div id="logo">
                        <a href="{{config('templates.'.$template_name.'.template_path')}}index.html"><img src="{{config('templates.'.$template_name.'.template_path')}}images/logo.png" title="Mobile Shoppe" alt="Mobile Shoppe" class="img-responsive" /></a>
                    </div>
                </div>
                <!-- Logo Starts -->
                <!-- Search Starts -->
                <div class="col-md-3 col-xs-12">
                    <div id="search">
                        <div class="input-group">
                            <input type="text" class="form-control input-lg" placeholder="Search">
                            <span class="input-group-btn">
								<button class="btn btn-lg" type="button">
									<i class="fa fa-search"></i>
								</button>
							  </span>
                        </div>
                    </div>
                </div>
                <!-- Search Ends -->
                <!-- Shopping Cart Starts -->
                <div class="col-md-3 col-xs-12">
                    <div id="cart" class="btn-group btn-block">
                        <button type="button" data-toggle="dropdown" class="btn btn-block btn-lg dropdown-toggle">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="hidden-md">Cart:</span>
                            <span id="cart-total">2 item(s) - $340.00</span>
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <table class="table hcart">
                                    <tr>
                                        <td class="text-center">
                                            <a href="{{config('templates.'.$template_name.'.template_path')}}product.html">
                                                <img src="{{config('templates.'.$template_name.'.template_path')}}images/product-images/hcart-thumb1.jpg" alt="image" title="image" class="img-thumbnail img-responsive" />
                                            </a>
                                        </td>
                                        <td class="text-left">
                                            <a href="{{config('templates.'.$template_name.'.template_path')}}product-full.html">
                                                Seeds
                                            </a>
                                        </td>
                                        <td class="text-right">x 1</td>
                                        <td class="text-right">$120.68</td>
                                        <td class="text-center">
                                            <a href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td class="text-center">
                                            <a href="{{config('templates.'.$template_name.'.template_path')}}product.html">
                                                <img src="{{config('templates.'.$template_name.'.template_path')}}images/product-images/hcart-thumb2.jpg" alt="image" title="image" class="img-thumbnail img-responsive" />
                                            </a>
                                        </td>
                                        <td class="text-left">
                                            <a href="{{config('templates.'.$template_name.'.template_path')}}product-full.html">
                                                Organic
                                            </a>
                                        </td>
                                        <td class="text-right">x 2</td>
                                        <td class="text-right">$240.00</td>
                                        <td class="text-center">
                                            <a href="#">
                                                <i class="fa fa-times"></i>
                                            </a>
                                        </td>
                                    </tr>
                                </table>
                            </li>
                            <li>
                                <table class="table table-bordered total">
                                    <tbody>
                                    <tr>
                                        <td class="text-right"><strong>Sub-Total</strong></td>
                                        <td class="text-left">$1,101.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                        <td class="text-left">$4.00</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>VAT (17.5%)</strong></td>
                                        <td class="text-left">$192.68</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Total</strong></td>
                                        <td class="text-left">$1,297.68</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p class="text-right btn-block1">
                                    <a href="{{config('templates.'.$template_name.'.template_path')}}cart.html">
                                        View Cart
                                    </a>
                                    <a href="#">
                                        Checkout
                                    </a>
                                </p>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Shopping Cart Ends -->
            </div>
        </div>
        <!-- Main Header Ends -->
    </div>
    <!-- Nested Container Ends -->
</header>
<!-- Header Section Ends -->
<!-- Main Menu Starts -->
<nav id="main-menu" class="navbar" role="navigation">
    <div class="container">
        <!-- Nav Header Starts -->
        <div class="navbar-header">
            <button type="button" class="btn btn-navbar navbar-toggle" data-toggle="collapse" data-target=".navbar-cat-collapse">
                <span class="sr-only">Toggle Navigation</span>
                <i class="fa fa-bars"></i>
            </button>
        </div>
        <!-- Nav Header Ends -->
        <!-- Navbar Cat collapse Starts -->
        <div class="collapse navbar-collapse navbar-cat-collapse">
            <ul class="nav navbar-nav">
                <li><a href="{{config('templates.'.$template_name.'.template_path')}}category-list.html">Digital Cameras</a></li>
                <li class="dropdown">
                    <a href="{{config('templates.'.$template_name.'.template_path')}}category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                        Sound Devices
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a tabindex="-1" href="#">Music System</a></li>
                        <li><a tabindex="-1" href="#">DTS</a></li>
                        <li><a tabindex="-1" href="#">Home Theater</a></li>
                    </ul>
                </li>
                <li class="dropdown">
                    <a href="{{config('templates.'.$template_name.'.template_path')}}category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">Televisions </a>
                    <div class="dropdown-menu">
                        <div class="dropdown-inner">
                            <ul class="list-unstyled">
                                <li class="dropdown-header">Sub Category</li>
                                <li><a tabindex="-1" href="#">item 1</a></li>
                                <li><a tabindex="-1" href="#">item 2</a></li>
                                <li><a tabindex="-1" href="#">item 3</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li class="dropdown-header">Sub Category</li>
                                <li><a tabindex="-1" href="#">item 1</a></li>
                                <li><a tabindex="-1" href="#">item 2</a></li>
                                <li><a tabindex="-1" href="#">item 3</a></li>
                            </ul>
                            <ul class="list-unstyled">
                                <li class="dropdown-header">Sub Category</li>
                                <li><a tabindex="-1" href="#">item 1</a></li>
                                <li><a tabindex="-1" href="#">item 2</a></li>
                                <li><a tabindex="-1" href="#">item 3</a></li>
                            </ul>
                        </div>
                    </div>
                </li>
                <li><a href="{{config('templates.'.$template_name.'.template_path')}}category-list.html">Computers </a></li>
                <li><a href="{{config('templates.'.$template_name.'.template_path')}}category-list.html">Washing Machines</a></li>
                <li><a href="{{config('templates.'.$template_name.'.template_path')}}category-list.html">Accessories </a></li>
                <li><a href="{{config('templates.'.$template_name.'.template_path')}}category-list.html">Mobile Phones  </a></li>
                <li class="dropdown">
                    <a href="{{config('templates.'.$template_name.'.template_path')}}category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                        Pages
                    </a>
                    <ul class="dropdown-menu" role="menu">
                        <li><a tabindex="-1" href="{{config('templates.'.$template_name.'.template_path')}}index.html">Home</a></li>
                        <li><a tabindex="-1" href="{{config('templates.'.$template_name.'.template_path')}}about.html">About</a></li>
                        <li><a tabindex="-1" href="{{config('templates.'.$template_name.'.template_path')}}category-list.html">Category List</a></li>
                        <li><a tabindex="-1" href="{{config('templates.'.$template_name.'.template_path')}}category-grid.html">Category Grid</a></li>
                        <li><a tabindex="-1" href="{{config('templates.'.$template_name.'.template_path')}}product.html">Product</a></li>
                        <li><a tabindex="-1" href="{{config('templates.'.$template_name.'.template_path')}}product-full.html">Product Full Width</a></li>
                        <li><a tabindex="-1" href="{{config('templates.'.$template_name.'.template_path')}}cart.html">Cart</a></li>
                        <li><a tabindex="-1" href="{{config('templates.'.$template_name.'.template_path')}}login.html">Login</a></li>
                        <li><a tabindex="-1" href="{{config('templates.'.$template_name.'.template_path')}}compare.html">Compare Products</a></li>
                        <li><a tabindex="-1" href="{{config('templates.'.$template_name.'.template_path')}}typography.html">Typography</a></li>
                        <li><a tabindex="-1" href="{{config('templates.'.$template_name.'.template_path')}}register.html">Register</a></li>
                        <li><a tabindex="-1" href="{{config('templates.'.$template_name.'.template_path')}}contact.html">Contact</a></li>
                        <li><a tabindex="-1" href="{{config('templates.'.$template_name.'.template_path')}}404.html">404</a></li>
                    </ul>
                </li>
            </ul>
        </div>
        <!-- Navbar Cat collapse Ends -->
    </div>
</nav>
<!-- Main Menu Ends -->
<!-- Main Container Starts -->
<div id="main-container" class="container home">
    <!-- Nested Row Starts -->
    <div class="row">
        <!-- Sidebar Starts -->
        <div class="col-md-3">
            <!-- Categories Links Starts -->
            <h3 class="side-heading">Categories</h3>
            <div class="list-group categories">
                <a href="{{config('templates.'.$template_name.'.template_path')}}category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>
                    Digital Cameras
                </a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>
                    Sound Devices
                </a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>
                    Televisions
                </a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>
                    Computers
                </a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>
                    Washing Machines
                </a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>
                    Accessories
                </a>
                <a href="{{config('templates.'.$template_name.'.template_path')}}category-grid.html" class="list-group-item">
                    <i class="fa fa-chevron-right"></i>
                    Mobile Phones
                </a>
            </div>
            <!-- Categories Links Ends -->
            <!-- Banner #1 Starts -->
            <a href="#"><img src="{{config('templates.'.$template_name.'.template_path')}}images/banners/side-banner1.jpg" alt="Side Banner" class="img-responsive img-center-sm img-center-xs" /></a>
            <br>
            <!-- Banner #1 Ends -->
            <!-- Shopping Options Starts -->
            <h3 class="side-heading">Shopping Options</h3>
            <div class="list-group">
                <div class="list-group-item">
                    Brands
                </div>
                <div class="list-group-item">
                    <div class="filter-group">
                        <label class="checkbox">
                            <input name="filter1" type="checkbox" value="br1" checked="checked" />
                            Brand Name 1
                        </label>
                        <label class="checkbox">
                            <input name="filter2" type="checkbox" value="br2" />
                            Brand Name 2
                        </label>
                        <label class="checkbox">
                            <input name="filter3" type="checkbox" value="br3" />
                            Brand Name 3
                        </label>
                        <label class="checkbox">
                            <input name="filter4" type="checkbox" value="br4" />
                            Brand Name 4
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
                        <label class="radio">
                            <input name="filter-manuf" type="radio" value="mr2" />
                            Manufacturer Name 2
                        </label>
                        <label class="radio">
                            <input name="filter-manuf" type="radio" value="mr3" />
                            Manufacturer Name 3
                        </label>
                    </div>
                </div>
                <div class="list-group-item">
                    <button type="button" class="btn btn-black">Filter</button>
                </div>
            </div>
            <!-- Shopping Options Ends -->
            <!-- Banner #2 Starts -->
            <img src="{{config('templates.'.$template_name.'.template_path')}}images/banners/side-banner2.jpg" alt="Side Banner" class="img-responsive img-center-sm img-center-xs" />
            <br>
            <!-- Banner #2 Ends -->
        </div>
        <!-- Sidebar Ends -->
        <!-- Primary Content Starts -->
        <div class="col-md-9">
                @yield('content')
        </div>
        <!-- Primary Content Ends -->
    </div>
    <!-- Nested Row Ends -->
</div>
<!-- Main Container Ends -->
<!-- Footer Section Starts -->
<footer id="footer-area">
    <!-- Footer Links Starts -->
    <div class="footer-links">
        <!-- Container Starts -->
        <div class="container">
            <!-- Information Links Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>Information</h5>
                <ul>
                    <li><a href="{{config('templates.'.$template_name.'.template_path')}}about.html">About Us</a></li>
                    <li><a href="#">Delivery Information</a></li>
                    <li><a href="#">Privacy Policy</a></li>
                    <li><a href="#">Terms &amp; Conditions</a></li>
                </ul>
            </div>
            <!-- Information Links Ends -->
            <!-- My Account Links Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>My Account</h5>
                <ul>
                    <li><a href="#">My orders</a></li>
                    <li><a href="#">My merchandise returns</a></li>
                    <li><a href="#">My credit slips</a></li>
                    <li><a href="#">My addresses</a></li>
                    <li><a href="#">My personal info</a></li>
                </ul>
            </div>
            <!-- My Account Links Ends -->
            <!-- Clearfix Spacer Starts -->
            <div class="clearfix visible-sm"></div>
            <!-- Clearfix Spacer Ends -->
            <!-- Customer Service Links Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>Service</h5>
                <ul>
                    <li><a href="{{config('templates.'.$template_name.'.template_path')}}contact.html">Contact Us</a></li>
                    <li><a href="#">Returns</a></li>
                    <li><a href="#">Site Map</a></li>
                    <li><a href="#">Affiliates</a></li>
                    <li><a href="#">Specials</a></li>
                </ul>
            </div>
            <!-- Customer Service Links Ends -->
            <!-- Follow Us Links Starts -->
            <div class="col-md-2 col-sm-6">
                <h5>Follow Us</h5>
                <ul>
                    <li><a href="#">Facebook</a></li>
                    <li><a href="#">Twitter</a></li>
                    <li><a href="#">RSS</a></li>
                    <li><a href="#">YouTube</a></li>
                </ul>
            </div>
            <!-- Follow Us Links Ends -->
            <!-- Contact Us Starts -->
            <div class="col-md-4 col-sm-12 last">
                <h5>Contact Us</h5>
                <ul>
                    <li>My Company</li>
                    <li>
                        1247 LB Nagar Road, Hyderabad, Telangana - 35
                    </li>
                    <li>
                        Email: <a href="#">info@demolink.com</a>
                    </li>
                </ul>
                <h4 class="lead">
                    Tel: <span>1(234) 567-9842</span>
                </h4>
            </div>
            <!-- Contact Us Ends -->
        </div>
        <!-- Container Ends -->
    </div>
    <!-- Footer Links Ends -->
    <!-- Copyright Area Starts -->
    <div class="copyright">
        <!-- Container Starts -->
        <div class="container">
            <!-- Starts -->
            <p class="pull-left">
                &copy; 2015 Mobile Shoppe Stores. Designed By <a href="{{config('templates.'.$template_name.'.template_path')}}http://sainathchillapuram.com">Sainath Chillapuram</a>
            </p>
            <!-- Ends -->
            <!-- Payment Gateway Links Starts -->
            <ul class="pull-right list-inline">
                <li>
                    <img src="{{config('templates.'.$template_name.'.template_path')}}images/payment-icon/cirrus.png" alt="PaymentGateway" />
                </li>
                <li>
                    <img src="{{config('templates.'.$template_name.'.template_path')}}images/payment-icon/paypal.png" alt="PaymentGateway" />
                </li>
                <li>
                    <img src="{{config('templates.'.$template_name.'.template_path')}}images/payment-icon/visa.png" alt="PaymentGateway" />
                </li>
                <li>
                    <img src="{{config('templates.'.$template_name.'.template_path')}}images/payment-icon/mastercard.png" alt="PaymentGateway" />
                </li>
                <li>
                    <img src="{{config('templates.'.$template_name.'.template_path')}}images/payment-icon/americanexpress.png" alt="PaymentGateway" />
                </li>
            </ul>
            <!-- Payment Gateway Links Ends -->
        </div>
        <!-- Container Ends -->
    </div>
    <!-- Copyright Area Ends -->
</footer>
<!-- Footer Section Ends -->
<!-- JavaScript Files -->
<script src="{{config('templates.'.$template_name.'.template_path')}}js/jquery-1.11.1.min.js"></script>
<script src="{{config('templates.'.$template_name.'.template_path')}}js/jquery-migrate-1.2.1.min.js"></script>
<script src="{{config('templates.'.$template_name.'.template_path')}}js/bootstrap.min.js"></script>
<script src="{{config('templates.'.$template_name.'.template_path')}}js/bootstrap-hover-dropdown.min.js"></script>
<script src="{{config('templates.'.$template_name.'.template_path')}}js/jquery.magnific-popup.min.js"></script>
<script src="{{config('templates.'.$template_name.'.template_path')}}js/owl.carousel.min.js"></script>
<script src="{{config('templates.'.$template_name.'.template_path')}}js/custom.js"></script>
</body>
</html>