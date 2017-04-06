
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
    <link href="{{config('templates.'.$template_name.'.template_path')}}http://fonts.googleapis.com/css?family=Oswald:400,700,300" rel="stylesheet" type="text/css">
    <link href="{{config('templates.'.$template_name.'.template_path')}}http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,700,300,600,800,400" rel="stylesheet" type="text/css">

    <!-- CSS Files -->
    <link href="{{config('templates.'.$template_name.'.template_path')}}font-awesome/css/font-awesome.min.css" rel="stylesheet">
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
                            <span id="cart-total">0 item(s) - $0.00</span>
                            <i class="fa fa-angle-down"></i>
                        </button>
                        <ul class="dropdown-menu">
                            <li>
                                <p class="text-center">Your shopping cart is empty!</p>
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
<div id="main-container" class="container">
@yield('content')
</div>
<div id="main-container" class="container hidden">
    <!-- Breadcrumb Starts -->
    <ol class="breadcrumb">
        <li><a href="{{config('templates.'.$template_name.'.template_path')}}index.html">Home</a></li>
        <li class="active">Register</li>
    </ol>
    <!-- Breadcrumb Ends -->
    <!-- Main Heading Starts -->
    <h2 class="main-heading text-center">
        Register <br />
        <span>Create New Account</span>
    </h2>
    <!-- Main Heading Ends -->
    <!-- Registration Section Starts -->
    <section class="registration-area">
        <div class="row">
            <div class="col-sm-6">
                <!-- Registration Block Starts -->
                <div class="panel panel-smart">
                    <div class="panel-heading">
                        <h3 class="panel-title">Personal Information</h3>
                    </div>
                    <div class="panel-body">
                        <!-- Registration Form Starts -->
                        <form class="form-horizontal" role="form">
                            <!-- Personal Information Starts -->
                            <div class="form-group">
                                <label for="inputFname" class="col-sm-3 control-label">First Name :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputFname" placeholder="First Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputLname" class="col-sm-3 control-label">Last Name :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputLname" placeholder="Last Name">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputEmail" class="col-sm-3 control-label">Email :</label>
                                <div class="col-sm-9">
                                    <input type="email" class="form-control" id="inputEmail" placeholder="Email">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPhone" class="col-sm-3 control-label">Phone :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPhone" placeholder="Phone">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputFax" class="col-sm-3 control-label">Fax :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputFax" placeholder="Fax">
                                </div>
                            </div>
                            <!-- Personal Information Ends -->
                            <h3 class="panel-heading inner">
                                Delivery Information
                            </h3>
                            <!-- Delivery Information Starts -->
                            <div class="form-group">
                                <label for="inputCompany" class="col-sm-3 control-label">Company :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputCompany" placeholder="Company">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputCompanyId" class="col-sm-3 control-label">Company ID :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputCompanyId" placeholder="Company ID">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress1" class="col-sm-3 control-label">Address/1 :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputAddress1" placeholder="Address/1">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputAddress2" class="col-sm-3 control-label">Address/2 :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputAddress2" placeholder="Address/2">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputCity" class="col-sm-3 control-label">City :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputCity" placeholder="City">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputPostCode" class="col-sm-3 control-label">Postal Code :</label>
                                <div class="col-sm-9">
                                    <input type="text" class="form-control" id="inputPostCode" placeholder="Postal Code">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputCountry" class="col-sm-3 control-label">Country :</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="inputCountry">
                                        <option>- All Countries -</option>
                                        <option>India</option>
                                        <option>USA</option>
                                        <option>UK</option>
                                        <option>China</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputRegion" class="col-sm-3 control-label">Region :</label>
                                <div class="col-sm-9">
                                    <select class="form-control" id="inputRegion">
                                        <option>- All Regions -</option>
                                    </select>
                                </div>
                            </div>
                            <!-- Delivery Information Ends -->
                            <h3 class="panel-heading inner">
                                Password
                            </h3>
                            <!-- Password Area Starts -->
                            <div class="form-group">
                                <label for="inputPassword" class="col-sm-3 control-label">Password :</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputPassword" placeholder="Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="inputRePassword" class="col-sm-3 control-label">Re-Password :</label>
                                <div class="col-sm-9">
                                    <input type="password" class="form-control" id="inputRePassword" placeholder="Re-Password">
                                </div>
                            </div>
                            <div class="form-group">
                                <span class="col-sm-3 control-label">Newsletter :</span>
                                <div class="col-sm-9">
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios1" value="option1" checked>
                                            Subscribe
                                        </label>
                                    </div>
                                    <div class="radio">
                                        <label>
                                            <input type="radio" name="optionsRadios" id="optionsRadios2" value="option1">
                                            Unsubscribe
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <div class="checkbox">
                                        <label>
                                            <input type="checkbox"> I'v read and agreed on Conditions
                                        </label>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-3 col-sm-9">
                                    <button type="submit" class="btn btn-black">
                                        Register
                                    </button>
                                </div>
                            </div>
                            <!-- Password Area Ends -->
                        </form>
                        <!-- Registration Form Starts -->
                    </div>
                </div>
                <!-- Registration Block Ends -->
            </div>
            <div class="col-sm-6">
                <!-- Guest Checkout Panel Starts -->
                <div class="panel panel-smart">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Checkout as Guest
                        </h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            Checkout as a guest instead!
                        </p>
                        <button class="btn btn-black">As Guest</button>
                    </div>
                </div>
                <!-- Guest Checkout Panel Ends -->
                <!-- Conditions Panel Starts -->
                <div class="panel panel-smart">
                    <div class="panel-heading">
                        <h3 class="panel-title">
                            Conditions
                        </h3>
                    </div>
                    <div class="panel-body">
                        <p>
                            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including  versions of Lorem Ipsum.
                        </p>
                        <ol>
                            <li>Lorem ipsum dolor sit amet</li>
                            <li>Consectetur adipiscing elit</li>
                            <li>Integer molestie lorem at massa</li>
                            <li>Facilisis in pretium nisl aliquet</li>
                            <li>Nulla volutpat aliquam velit</li>
                            <li>Faucibus porta lacus fringilla vel</li>
                            <li>Aenean sit amet erat nunc</li>
                            <li>Eget porttitor lorem</li>
                        </ol>
                        <p>
                            HTML Nullam varius, turpis et commodo pharetra, est eros bibendum elit, nec luctus magna felis sollicitudin mauris.
                        </p>
                        <p>
                            Integer in mauris eu nibh euismod gravida. Duis ac tellus et risus vulputate vehicula. Donec lobortis risus a elit. Etiam tempor. Ut ullamcorper, ligula eu tempor congue, eros est euismod turpis, id tincidunt sapien risus a quam. Maecenas fermentum consequat mi. Donec fermentum. Pellentesque malesuada nulla a mi. Duis sapien sem, aliquet nec, commodo eget, consequat quis, neque.
                        </p>
                        <p>
                            Aliquam faucibus, elit ut dictum aliquet, felis nisl adipiscing sapien, sed malesuada diam lacus eget erat. Cras mollis scelerisque nunc. Nullam arcu. Aliquam consequat. Curabitur augue lorem, dapibus quis, laoreet et, pretium ac, nisi.
                        </p>
                        <p>
                            Aenean magna nisl, mollis quis, molestie eu, feugiat in, orci. In hac habitasse platea dictumst.
                        </p>
                    </div>
                </div>
                <!-- Conditions Panel Ends -->
            </div>
        </div>
    </section>
    <!-- Registration Section Ends -->
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