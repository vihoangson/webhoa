<!doctype html>
<html lang="en-US">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
    <link rel="shortcut icon" href="{{config('templates.'.$template_name.'.template_path')}}images/favicon.ico"/>
    <title>Organici - Organic Store | HTML Template</title>

    <link rel='stylesheet' href='{{config('templates.'.$template_name.'.template_path')}}css/bootstrap.min.css' type='text/css' media='all' />
    <link rel='stylesheet' href='{{config('templates.'.$template_name.'.template_path')}}css/owl.carousel.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{config('templates.'.$template_name.'.template_path')}}css/owl.theme.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{config('templates.'.$template_name.'.template_path')}}css/font-awesome.min.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Lato:100,300,400,700,900,300italic,400italic,700italic,900italic' type='text/css' media='all'/>
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Pacifico:100,300,400,700,900,300italic,400italic,700italic,900italic' type='text/css' media='all'/>
    <link rel='stylesheet' href='//fonts.googleapis.com/css?family=Anonymous+Pro:' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{config('templates.'.$template_name.'.template_path')}}css/style.css' type='text/css' media='all'/>
    <link rel='stylesheet' href='{{config('templates.'.$template_name.'.template_path')}}css/custom.css' type='text/css' media='all'/>
    <link rel="stylesheet" href='{{config('templates.'.$template_name.'.template_path')}}css/magnific-popup.css' type='text/css' media='all' />
    <link rel="stylesheet" href='{{config('templates.'.$template_name.'.template_path')}}css/style-selector.css' type='text/css' media='all' />
    <link id="style-main-color" rel="stylesheet" href="{{config('templates.'.$template_name.'.template_path')}}css/colors/default.css">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>
<body>
<div class="noo-spinner">
    <div class="spinner">
        <div class="cube1"></div>
        <div class="cube2"></div>
    </div>
</div>
<div class="site">
    <header class="noo-header header-2">
        <div class="noo-topbar">
            <div class="container">
                <ul>
                    <li>
                        <span><i class="fa fa-phone"></i></span>
                        <a href="#">0123-88-89-0999</a>
                    </li>
                    <li>
                        <span><i class="fa fa-envelope"></i></span>
                        <a href="{{config('templates.'.$template_name.'.template_path')}}mailto:contact@organici.com">contact@organici.com</a>
                    </li>
                </ul>
                <ul>
                    <li>
                        <span><i class="fa fa-user"></i></span>
                        <a href="{{config('templates.'.$template_name.'.template_path')}}my-account.html">My Account</a>
                    </li>
                    <li>
                        <span><i class="fa fa-heart-o"></i></span>
                        <a href="{{config('templates.'.$template_name.'.template_path')}}wishlist.html">Wishlist</a>
                    </li>
                    <li>
                        <a href="{{config('templates.'.$template_name.'.template_path')}}cart.html">
									<span class="has-cart">
										<i class="fa fa-shopping-cart"></i>
										<em>0</em>
									</span>
                        </a>
                        &nbsp; &#8209; &nbsp; <span class="amount">&#36;0.00</span>
                    </li>
                    <li>
                        <a href="#" class="fa fa-search noo-search" id="noo-search"></a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="navbar-wrapper">
            <div class="navbar navbar-default">
                <div class="container">
                    <div class="menu-position">
                        <div class="navbar-header pull-left">
                            <h1 class="sr-only">Organici</h1>
                            <div class="noo_menu_canvas">
                                <div class="btn-search noo-search topbar-has-search">
                                    <i class="fa fa-search"></i>
                                </div>
                                <div data-target=".nav-collapse" class="btn-navbar">
                                    <span></span>
                                    <span></span>
                                    <span></span>
                                </div>
                            </div>
                            <a href="{{config('templates.'.$template_name.'.template_path')}}./" class="navbar-brand">
                                <img class="noo-logo-img noo-logo-normal" src="{{config('templates.'.$template_name.'.template_path')}}images/logo.png" alt="Organic Store">
                            </a>
                        </div>
                        <nav class="pull-right noo-main-menu">
                            <ul class="nav-collapse navbar-nav">
                                <li class="menu-item-has-children current-menu-item">
                                    <a href="{{config('templates.'.$template_name.'.template_path')}}./">Home</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{config('templates.'.$template_name.'.template_path')}}index-2.html">Homepage 2</a></li>
                                        <li><a href="{{config('templates.'.$template_name.'.template_path')}}index-3.html">Homepage 3</a></li>
                                        <li><a href="{{config('templates.'.$template_name.'.template_path')}}index-4.html">Homepage 4</a></li>
                                        <li><a href="{{config('templates.'.$template_name.'.template_path')}}index-5.html">Homepage 5</a></li>
                                        <li><a href="{{config('templates.'.$template_name.'.template_path')}}index-6.html">Homepage 6</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="#">Header</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{config('templates.'.$template_name.'.template_path')}}header-1.html">Header 1</a></li>
                                        <li><a href="{{config('templates.'.$template_name.'.template_path')}}header-2.html">Header 2</a></li>
                                        <li><a href="{{config('templates.'.$template_name.'.template_path')}}header-3.html">Header 3</a></li>
                                        <li><a href="{{config('templates.'.$template_name.'.template_path')}}header-4.html">Header 4</a></li>
                                        <li><a href="{{config('templates.'.$template_name.'.template_path')}}header-5.html">Header 5</a></li>
                                        <li><a href="{{config('templates.'.$template_name.'.template_path')}}header-6.html">Header 6</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{config('templates.'.$template_name.'.template_path')}}our-story.html">Our Story</a></li>
                                <li class="menu-item-has-children noo_megamenu mega-col-columns-4">
                                    <a href="{{config('templates.'.$template_name.'.template_path')}}shop.html">Shop</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="#">Shop page</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{config('templates.'.$template_name.'.template_path')}}shop-list.html">Shop List</a></li>
                                                <li><a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">Shop Detail</a></li>
                                                <li><a href="{{config('templates.'.$template_name.'.template_path')}}my-account.html">My Account</a></li>
                                                <li><a href="{{config('templates.'.$template_name.'.template_path')}}cart.html">Cart</a></li>
                                                <li><a href="{{config('templates.'.$template_name.'.template_path')}}cart-empty.html">Empty Cart</a></li>
                                                <li><a href="{{config('templates.'.$template_name.'.template_path')}}wishlist.html">Wishlist</a></li>
                                            </ul>
                                        </li>
                                        <li class="menu-item-has-children">
                                            <div class="noo_megamenu_widget_area">
                                                <div class="widget commerce widget_products">
                                                    <h3 class="widget-title">Products</h3>
                                                    <ul class="product_list_widget">
                                                        <li>
                                                            <a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">
                                                                <img width="100" height="100" src="{{config('templates.'.$template_name.'.template_path')}}images/product/thumb/product_1.png" alt="" />
                                                                <span class="product-title">French Bread</span>
                                                            </a>
                                                            <span class="amount">&#36;10.00</span>
                                                        </li>
                                                        <li>
                                                            <a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">
                                                                <img width="100" height="100" src="{{config('templates.'.$template_name.'.template_path')}}images/product/thumb/product_2.png" alt="" />
                                                                <span class="product-title">Cookie</span>
                                                            </a>
                                                            <span class="amount">&#36;15.00</span>
                                                        </li>
                                                        <li>
                                                            <a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">
                                                                <img width="100" height="100" src="{{config('templates.'.$template_name.'.template_path')}}images/product/thumb/product_3.png" alt="" />
                                                                <span class="product-title">Brown Bread</span>
                                                            </a>
                                                            <span class="amount">&#36;12.00</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="noo_megamenu_widget_area">
                                                <div class="widget commerce widget_products">
                                                    <h3 class="widget-title">Featured</h3>
                                                    <ul class="product_list_widget">
                                                        <li>
                                                            <a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">
                                                                <img width="100" height="100" src="{{config('templates.'.$template_name.'.template_path')}}images/product/thumb/product_4.jpg" alt="" />
                                                                <span class="product-title">French Bread</span>
                                                            </a>
                                                            <span class="amount">&#36;10.00</span>
                                                        </li>
                                                        <li>
                                                            <a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">
                                                                <img width="100" height="100" src="{{config('templates.'.$template_name.'.template_path')}}images/product/thumb/product_2.png" alt="" />
                                                                <span class="product-title">Cookie</span>
                                                            </a>
                                                            <span class="amount">&#36;15.00</span>
                                                        </li>
                                                        <li>
                                                            <a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">
                                                                <img width="100" height="100" src="{{config('templates.'.$template_name.'.template_path')}}images/product/thumb/product_5.jpg" alt="" />
                                                                <span class="product-title">Brown Bread</span>
                                                            </a>
                                                            <span class="amount">&#36;12.00</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="noo_megamenu_widget_area">
                                                <div class="widget commerce widget_products">
                                                    <h3 class="widget-title">Sales</h3>
                                                    <ul class="product_list_widget">
                                                        <li>
                                                            <a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">
                                                                <img width="100" height="100" src="{{config('templates.'.$template_name.'.template_path')}}images/product/thumb/product_1.png" alt="" />
                                                                <span class="product-title">French Bread</span>
                                                            </a>
                                                            <span class="amount">&#36;10.00</span>
                                                        </li>
                                                        <li>
                                                            <a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">
                                                                <img width="100" height="100" src="{{config('templates.'.$template_name.'.template_path')}}images/product/thumb/product_2.png" alt="" />
                                                                <span class="product-title">Cookie</span>
                                                            </a>
                                                            <span class="amount">&#36;15.00</span>
                                                        </li>
                                                        <li>
                                                            <a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">
                                                                <img width="100" height="100" src="{{config('templates.'.$template_name.'.template_path')}}images/product/thumb/product_3.png" alt="" />
                                                                <span class="product-title">Brown Bread</span>
                                                            </a>
                                                            <span class="amount">&#36;12.00</span>
                                                        </li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{config('templates.'.$template_name.'.template_path')}}boxes.html">Boxes</a>
                                    <ul class="sub-menu">
                                        <li><a href="{{config('templates.'.$template_name.'.template_path')}}box-detail.html">Box Detail</a></li>
                                    </ul>
                                </li>
                                <li class="menu-item-has-children">
                                    <a href="{{config('templates.'.$template_name.'.template_path')}}blog.html">Blog</a>
                                    <ul class="sub-menu">
                                        <li class="menu-item-has-children">
                                            <a href="{{config('templates.'.$template_name.'.template_path')}}blog-masonry.html">Blog Masonry</a>
                                            <ul class="sub-menu">
                                                <li><a href="{{config('templates.'.$template_name.'.template_path')}}blog-masonry-two-columns.html">2 Columns</a></li>
                                                <li><a href="{{config('templates.'.$template_name.'.template_path')}}blog-masonry.html">3 Columns</a></li>
                                                <li><a href="{{config('templates.'.$template_name.'.template_path')}}blog-masonry-four-columns.html">4 Columns</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="{{config('templates.'.$template_name.'.template_path')}}blog.html">Blog Listing</a></li>
                                        <li><a href="{{config('templates.'.$template_name.'.template_path')}}blog-detail.html">Blog Single Default</a></li>
                                        <li><a href="{{config('templates.'.$template_name.'.template_path')}}blog-detail-video.html">Blog Single Video</a></li>
                                        <li><a href="{{config('templates.'.$template_name.'.template_path')}}blog-detail-audio.html">Blog Single SoundCloud</a></li>
                                        <li><a href="{{config('templates.'.$template_name.'.template_path')}}blog-detail-slider.html">Blog Single Slider</a></li>
                                    </ul>
                                </li>
                                <li><a href="{{config('templates.'.$template_name.'.template_path')}}contact.html">Contact</a></li>
                            </ul>
                        </nav>
                    </div>
                </div>
            </div>
        </div>
        <div class="search-header5">
            <div class="remove-form"></div>
            <div class="container">
                <form class="form-horizontal">
                    <label class="note-search">Type and Press Enter to Search</label>
                    <input type="search" name="s" class="form-control" value="" placeholder="Search...">
                    <input type="submit" value="Search"/>
                </form>
            </div>
        </div>
    </header>
    <div class="main">
        <div class="interact-banner">
            <div class="container">
                <div class="row">
                    <div class="noo-traslate-atributes col-sm-12 col-md-6 hidden-xs">
                        <div class="pt-5">
                            <div class="noo-atributes">
                                <img width="494" height="618" src="{{config('templates.'.$template_name.'.template_path')}}images/image-01.png" alt="" />
                                <div class="noo-atributes-item">
                                    <div class="noo-atributes-hover">
                                        <div class="noo-atributes-content">
                                            <strong>12 Green Apples</strong>
                                            <p>Maecenas tristique gravida, odio et sagi ttis justo </p>
                                        </div>
                                    </div>
                                    <span class="eff">
												<span class="eff1"></span>
												<span class="eff2"></span>
												<img width="64" height="64" src="{{config('templates.'.$template_name.'.template_path')}}images/organicfood-1.png" alt=""/>
											</span>
                                </div>
                                <div class="noo-atributes-item noo-atributes-item2 orange">
                                    <div class="noo-atributes-hover">
                                        <div class="noo-atributes-content">
                                            <strong>10 Orange Apples</strong>
                                            <p>Maecenas tristique gravida, odio et sagi ttis justo </p>
                                        </div>
                                    </div>
                                    <span class="eff">
												<span class="eff1"></span>
												<span class="eff2"></span>
												<img width="53" height="53" src="{{config('templates.'.$template_name.'.template_path')}}images/organicfood-2.png" alt=""/>
											</span>
                                </div>
                                <div class="noo-atributes-item noo-atributes-item4 orange">
                                    <div class="noo-atributes-hover">
                                        <div class="noo-atributes-content">
                                            <strong>15 Pear Apples</strong>
                                            <p>Maecenas tristique gravida, odio et sagi ttis justo </p>
                                        </div>
                                    </div>
                                    <span class="eff">
												<span class="eff1"></span>
												<span class="eff2"></span>
												<img width="53" height="53" src="{{config('templates.'.$template_name.'.template_path')}}images/organicfood-3.png" alt=""/>
											</span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="noo-traslate-product col-sm-12 col-md-6">
                        <div class="pt-5">
                            <div class="noo-short-intro">
                                <h4>Special fruits</h4>
                                <h2>organici store</h2>
                                <div class="price">
                                    <span>- Only -</span>
                                    $99.00
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-15 pb-11">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="noo-product-grid-wrap commerce product-style">
                            <div class="noo-sh-title">
                                <h2>Our new products</h2>
                                <p>Maecenas tristique gravida odio, et sagi ttis justo interdum porta. Duis et lacus mattis, tincidunt eronec dictum non nulla.</p>
                            </div>
                            <div class="noo-product-filter masonry-filters">
                                <ul class="noo-header-filter" data-option-key="filter">
                                    <li>
                                        <a data-option-value="*" href="#all" class="selected">
                                            <img width="30" height="26" src="{{config('templates.'.$template_name.'.template_path')}}images/filter/filter-1.png" alt="" />
                                            <span>All products</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-option-value=".organic-fruits" href="#organic-fruits">
                                            <img width="30" height="26" src="{{config('templates.'.$template_name.'.template_path')}}images/filter/filter-2.png" alt=""/>
                                            <span>Fruits</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-option-value=".vegetable" href="#vegetable">
                                            <img width="30" height="26" src="{{config('templates.'.$template_name.'.template_path')}}images/filter/filter-3.png" alt=""/>
                                            <span>Vegetable</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-option-value=".bread" href="#bread">
                                            <img width="30" height="26" src="{{config('templates.'.$template_name.'.template_path')}}images/filter/filter-4.png" alt=""/>
                                            <span>Bread</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a data-option-value=".others" href="#others">
                                            <img width="30" height="26" src="{{config('templates.'.$template_name.'.template_path')}}images/filter/filter-5.png" alt=""/>
                                            <span>Others</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <div class="noo-product-grid products row product-grid noo-grid-4">
                                <div class="fruit organic-fruits masonry-item col-md-4 col-sm-6">
                                    <div class="noo-product-inner">
                                        <div class="noo-product-thumbnail">
                                            <a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">
                                                <img width="600" height="760" src="{{config('templates.'.$template_name.'.template_path')}}images/product/product_1.jpg" alt="" />
                                            </a>
                                            <div class="noo-rating">
                                                <div class="star-rating">
                                                    <span style="width:0%"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noo-product-title">
                                            <h3><a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">Apples</a></h3>
                                            <span class="price"><span class="amount">&#36;3.95</span></span>
                                            <div class="noo-product-action">
                                                <div class="noo-action">
                                                    <a href="#" class="button product_type_simple add_to_cart_button">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="others vegetable masonry-item col-md-4 col-sm-6">
                                    <div class="noo-product-inner">
                                        <div class="noo-product-thumbnail">
                                            <a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">
                                                <img width="600" height="760" src="{{config('templates.'.$template_name.'.template_path')}}images/product/product_2.jpg" alt="" />
                                            </a>
                                            <div class="noo-rating">
                                                <div class="star-rating">
                                                    <span style="width:60%"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noo-product-title">
                                            <h3><a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">Broccoli</a></h3>
                                            <span class="price"><span class="amount">&#36;2.05</span></span>
                                            <div class="noo-product-action">
                                                <div class="noo-action">
                                                    <a href="#" class="button product_type_simple add_to_cart_button">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bread masonry-item col-md-4 col-sm-6">
                                    <div class="noo-product-inner">
                                        <div class="noo-product-thumbnail">
                                            <a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">
                                                <img width="600" height="760" src="{{config('templates.'.$template_name.'.template_path')}}images/product/product_3.jpg" alt="" />
                                            </a>
                                            <div class="noo-rating">
                                                <div class="star-rating">
                                                    <span style="width:100%"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noo-product-title">
                                            <h3><a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">Brown Bread</a></h3>
                                            <span class="price"><span class="amount">&#36;12.00</span></span>
                                            <div class="noo-product-action">
                                                <div class="noo-action">
                                                    <a href="#" class="button product_type_simple add_to_cart_button">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vegetable masonry-item col-md-4 col-sm-6">
                                    <div class="noo-product-inner">
                                        <div class="noo-product-thumbnail">
                                            <a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">
                                                <img width="600" height="760" src="{{config('templates.'.$template_name.'.template_path')}}images/product/product_4.jpg" alt="" />
                                            </a>
                                            <div class="noo-rating">
                                                <div class="star-rating">
                                                    <span style="width:20%"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noo-product-title">
                                            <h3><a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">Carrots</a></h3>
                                            <span class="price"><span class="amount">&#36;1.05</span></span>
                                            <div class="noo-product-action">
                                                <div class="noo-action">
                                                    <a href="#" class="button product_type_simple add_to_cart_button">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vegetable masonry-item col-md-4 col-sm-6">
                                    <div class="noo-product-inner">
                                        <div class="noo-product-thumbnail">
                                            <a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">
                                                <img width="600" height="760" src="{{config('templates.'.$template_name.'.template_path')}}images/product/product_5.jpg" alt="" />
                                            </a>
                                            <div class="noo-rating">
                                                <div class="star-rating">
                                                    <span style="width:0%"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noo-product-title">
                                            <h3><a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">Celery</a></h3>
                                            <span class="price"><span class="amount">&#36;2.09</span></span>
                                            <div class="noo-product-action">
                                                <div class="noo-action">
                                                    <a href="#" class="button product_type_simple add_to_cart_button">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bread masonry-item col-md-4 col-sm-6">
                                    <div class="noo-product-inner">
                                        <div class="noo-product-thumbnail">
                                            <a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">
                                                <img width="600" height="760" src="{{config('templates.'.$template_name.'.template_path')}}images/product/product_6.jpg" alt="" />
                                            </a>
                                            <div class="noo-rating">
                                                <div class="star-rating">
                                                    <span style="width:0%"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noo-product-title">
                                            <h3><a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">Cookie</a></h3>
                                            <span class="price"><span class="amount">&#36;15.00</span></span>
                                            <div class="noo-product-action">
                                                <div class="noo-action">
                                                    <a href="#" class="button product_type_simple add_to_cart_button">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="vegetable masonry-item col-md-4 col-sm-6">
                                    <div class="noo-product-inner">
                                        <div class="noo-product-thumbnail">
                                            <a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">
                                                <img width="600" height="760" src="{{config('templates.'.$template_name.'.template_path')}}images/product/product_7.jpg" alt="" />
                                            </a>
                                            <div class="noo-rating">
                                                <div class="star-rating">
                                                    <span style="width:0%"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noo-product-title">
                                            <h3><a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">Cucumbers</a></h3>
                                            <span class="price"><span class="amount">&#36;1.95</span></span>
                                            <div class="noo-product-action">
                                                <div class="noo-action">
                                                    <a href="#" class="button product_type_simple add_to_cart_button">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="bread masonry-item col-md-4 col-sm-6">
                                    <div class="noo-product-inner">
                                        <div class="noo-product-thumbnail">
                                            <a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">
                                                <img width="600" height="760" src="{{config('templates.'.$template_name.'.template_path')}}images/product/product_8.jpg" alt="" />
                                            </a>
                                            <div class="noo-rating">
                                                <div class="star-rating">
                                                    <span style="width:0%"></span>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="noo-product-title">
                                            <h3><a href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html">French Bread</a></h3>
                                            <span class="price"><span class="amount">&#36;10.00</span></span>
                                            <div class="noo-product-action">
                                                <div class="noo-action">
                                                    <a href="#" class="button product_type_simple add_to_cart_button">
                                                        <span>Add to cart</span>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feature-product">
            <div class="noo-sh-title text-center">
                <h2>Featured products</h2>
                <p>Maecenas tristique gravida odio, et sagi ttis justo interdum porta</p>
            </div>
            <div class="noo-product-masonry columns-3">
                <div class="product-masonry">
                    <img width="644" height="380" src="{{config('templates.'.$template_name.'.template_path')}}images/product/features/product_1.jpg" alt="" />
                    <div class="noo-link">
                        <div class="noo-product-table">
                            <div class="noo-product-table-cell">
                                <h4><a href="#">Cookies </a></h4>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by&hellip;
                                </p>
                                <span class="noo-sh-pmeta">
											<a href="#" class="button product_type_simple add_to_cart_button">
												<span>Add to cart</span>
											</a>
											<a class="fa fa-link" href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html"></a>
										</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-masonry">
                    <img width="644" height="380" src="{{config('templates.'.$template_name.'.template_path')}}images/product/features/product_2.jpg" alt="" />
                    <div class="noo-link">
                        <div class="noo-product-table">
                            <div class="noo-product-table-cell">
                                <h4><a href="#">Grapes </a></h4>
                                <p>
                                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of classical Latin&hellip;
                                </p>
                                <span class="noo-sh-pmeta">
											<a href="#" class="button product_type_simple add_to_cart_button">
												<span>Add to cart</span>
											</a>
											<a class="fa fa-link" href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html"></a>
										</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-masonry">
                    <img width="644" height="380" src="{{config('templates.'.$template_name.'.template_path')}}images/product/features/product_3.jpg" alt="" />
                    <div class="noo-link">
                        <div class="noo-product-table">
                            <div class="noo-product-table-cell">
                                <h4><a href="#">Jackfruit </a></h4>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by&hellip;
                                </p>
                                <span class="noo-sh-pmeta">
											<a href="#" class="button product_type_simple add_to_cart_button">
												<span>Add to cart</span>
											</a>
											<a class="fa fa-link" href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html"></a>
										</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-masonry">
                    <img width="644" height="380" src="{{config('templates.'.$template_name.'.template_path')}}images/product/features/product_4.jpg" alt="" />
                    <div class="noo-link">
                        <div class="noo-product-table">
                            <div class="noo-product-table-cell">
                                <h4><a href="#">Banana </a></h4>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by&hellip;
                                </p>
                                <span class="noo-sh-pmeta">
											<a href="#" class="button product_type_simple add_to_cart_button">
												<span>Add to cart</span>
											</a>
											<a class="fa fa-link" href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html"></a>
										</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-masonry">
                    <img width="644" height="380" src="{{config('templates.'.$template_name.'.template_path')}}images/product/features/product_5.jpg" alt="" />
                    <div class="noo-link">
                        <div class="noo-product-table">
                            <div class="noo-product-table-cell">
                                <h4><a href="#">Chicken eggs </a></h4>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by&hellip;
                                </p>
                                <span class="noo-sh-pmeta">
											<a href="#" class="button product_type_simple add_to_cart_button">
												<span>Add to cart</span>
											</a>
											<a class="fa fa-link" href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html"></a>
										</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-masonry">
                    <img width="644" height="380" src="{{config('templates.'.$template_name.'.template_path')}}images/product/features/product_7.jpg" alt="" />
                    <div class="noo-link">
                        <div class="noo-product-table">
                            <div class="noo-product-table-cell">
                                <h4><a href="#">Fruits </a></h4>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by&hellip;
                                </p>
                                <span class="noo-sh-pmeta">
											<a href="#" class="button product_type_simple add_to_cart_button">
												<span>Add to cart</span>
											</a>
											<a class="fa fa-link" href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html"></a>
										</span>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-masonry">
                    <img width="644" height="380" src="{{config('templates.'.$template_name.'.template_path')}}images/product/features/product_6.jpg" alt="" />
                    <div class="noo-link">
                        <div class="noo-product-table">
                            <div class="noo-product-table-cell">
                                <h4><a href="#">Peach </a></h4>
                                <p>
                                    There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by&hellip;
                                </p>
                                <span class="noo-sh-pmeta">
											<a href="#" class="button product_type_simple add_to_cart_button">
												<span>Add to cart</span>
											</a>
											<a class="fa fa-link" href="{{config('templates.'.$template_name.'.template_path')}}shop-detail.html"></a>
										</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="pt-11 pb-10">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="noo-sh-title noo-farmer-title">
                            <h2>Our farmer</h2>
                            <p>
                                Fusce sem enim, rhoncus volutpat condimentum ac, placerat semper ligula. Suspendisse in viverra justo ipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-4 col-sm-6">
                        <div class="noo-farmer">
                            <div class="noo-farmer-thumbnail">
                                <img width="284" height="380" src="{{config('templates.'.$template_name.'.template_path')}}images/team/team_1.png" alt="" />
                            </div>
                            <div class="noo-farmer-content">
                                <h4>Tristique</h4>
                                <p>
                                    Maecenas tristique gravida, odio et sagi ttis justo Vestibulum non justo ultrices. Donec dictum non nulla tristique gravida odio.
                                </p>
                                <span class="social">
											<a href="#" class="fa fa-facebook"></a>
											<a href="#" class="fa fa-twitter"></a>
											<a href="#" class="fa fa-google"></a>
										</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="noo-farmer">
                            <div class="noo-farmer-thumbnail">
                                <img width="330" height="380" src="{{config('templates.'.$template_name.'.template_path')}}images/team/team_2.png" alt=""/>
                            </div>
                            <div class="noo-farmer-content">
                                <h4>Alyssa Hiyama</h4>
                                <p>
                                    Maecenas tristique gravida, odio et sagi ttis justo Vestibulum non justo ultrices. Donec dictum non nulla tristique gravida odio.
                                </p>
                                <span class="social">
											<a href="#" class="fa fa-facebook"></a>
											<a href="#" class="fa fa-twitter"></a>
											<a href="#" class="fa fa-instagram"></a>
										</span>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6">
                        <div class="noo-farmer">
                            <div class="noo-farmer-thumbnail">
                                <img width="285" height="380" src="{{config('templates.'.$template_name.'.template_path')}}images/team/team_3.png" alt="" />
                            </div>
                            <div class="noo-farmer-content">
                                <h4>Alberto Trombin</h4>
                                <p>
                                    Maecenas tristique gravida, odio et sagi ttis justo Vestibulum non justo ultrices. Donec dictum non nulla tristique gravida odio.
                                </p>
                                <span class="social">
											<a href="#" class="fa fa-facebook"></a>
											<a href="#" class="fa fa-twitter"></a>
											<a href="#" class="fa fa-pinterest"></a>
										</span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="call-to-action-1">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <div class="noo-represent">
                            <img width="194" height="66" src="{{config('templates.'.$template_name.'.template_path')}}images/since.png" alt=""/>
                            <h2>Organic products!</h2>
                            <p>
                                Maecenas tristique gravida odio, et sagittis justo interdum porta. Duislacus mattis, tincidunt eros ac, consequat tortor.
                            </p>
                            <div class="noo-button-creative">
                                <a href="#">
                                    <span class="first"></span>
                                    <span class="second"></span>
                                    Shop now
                                    <span class="three"></span>
                                    <span class="four"></span>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-sm-6"></div>
                </div>
            </div>
        </div>
        <div class="pt-12 pb-8">
            <div class="container">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="noo-sh-title noo-blog-title">
                            <h2>Blog updates</h2>
                            <p>
                                Fusce sem enim, rhoncus volutpat condimentum ac, placerat semper ligula. Suspendisse in viverra justo <br />lipsum dolor sit amet, consectetur adipiscing elit.
                            </p>
                        </div>
                        <div class="masonry noo-blog">
                            <div class="row masonry-container">
                                <div class="masonry-item col-md-4 col-sm-6">
                                    <div class="blog-item">
                                        <a class="blog-thumbnail" href="{{config('templates.'.$template_name.'.template_path')}}blog-detail.html">
                                            <img width="600" height="440" src="{{config('templates.'.$template_name.'.template_path')}}images/blog/blog_1.jpg" alt=""/>
                                        </a>
                                        <div class="blog-description">
													<span class="cat">
														<a href="#">Organic Food</a>/<a href="#">Tips &amp; Guides</a>
													</span>
                                            <h3><a href="{{config('templates.'.$template_name.'.template_path')}}blog-detail.html">Tips for Ripening your Fruit</a></h3>
                                            <p class="blog_excerpt">
                                                Maecenas tristique gravida, odio et sagi ttis justo. Susp endisse ultricies nisi vel quam suscipit, et rutrum odio porttitor. Donec...
                                            </p>
                                            <a class="view-more" href="{{config('templates.'.$template_name.'.template_path')}}blog-detail.html">View more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="masonry-item col-md-4 col-sm-6">
                                    <div class="blog-item">
                                        <a class="blog-thumbnail" href="{{config('templates.'.$template_name.'.template_path')}}blog-detail.html">
                                            <img width="600" height="440" src="{{config('templates.'.$template_name.'.template_path')}}images/blog/blog_2.jpg" alt=""/>
                                        </a>
                                        <div class="blog-description">
													<span class="cat">
														<a href="#">General</a>/<a href="#">Recipes</a>
													</span>
                                            <h3><a href="{{config('templates.'.$template_name.'.template_path')}}blog-detail.html">Feeding kids organic food</a></h3>
                                            <p class="blog_excerpt">
                                                Maecenas tristique gravida, odio et sagi ttis justo. Susp endisse ultricies nisi vel quam suscipit, et rutrum odio porttitor. Donec...
                                            </p>
                                            <a class="view-more" href="{{config('templates.'.$template_name.'.template_path')}}blog-detail.html">View more</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="masonry-item col-md-4 col-sm-6">
                                    <div class="blog-item">
                                        <a class="blog-thumbnail" href="{{config('templates.'.$template_name.'.template_path')}}blog-detail.html">
                                            <img width="600" height="440" src="{{config('templates.'.$template_name.'.template_path')}}images/blog/blog_3.jpg" alt=""/>
                                        </a>
                                        <div class="blog-description">
													<span class="cat">
														<a href="#">Diet</a>/<a href="#">Organic Food</a>
													</span>
                                            <h3><a href="{{config('templates.'.$template_name.'.template_path')}}blog-detail.html">Health Benefits of a Raw Food</a></h3>
                                            <p class="blog_excerpt">
                                                As more and more people are turning to more organic lifestyles and trying to improve their health through adopting better...
                                            </p>
                                            <a class="view-more" href="{{config('templates.'.$template_name.'.template_path')}}blog-detail.html">View more</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="testimonial">
            <div class="noo_testimonial_wrap">
                <img width="328" height="851" src="{{config('templates.'.$template_name.'.template_path')}}images/image_left.png" class="image_left" alt=""/>
                <img width="329" height="789" src="{{config('templates.'.$template_name.'.template_path')}}images/image_right.png" class="image_right" alt="" />
                <div class="noo-testimonial-sync2 testimonial-three">
                    <div class="item">
                        <div class="testimonial-content">
                            <h3 class="testi-title">Taylor McCartney</h3>
                            <div>
                                <i class="fa fa-quote-left"></i>
                                <p>
                                    Maecenas tristique gravida odio, et sagi ttis justo interdum porta. Duis et lacus mattis, tincidunt ero. Donec dictum non nulla ut tris tique gravida odio lobortis tristique gravida. Aliquam erat volutpat. Pellentesque auctor, arcu id tristique.
                                </p>
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <h3 class="testi-title">Ashley Simpsons</h3>
                            <div>
                                <i class="fa fa-quote-left"></i>
                                <p>
                                    Maecenas tristique gravida odio, et sagi ttis justo interdum porta. Duis et lacus mattis, tincidunt ero. Donec dictum non nulla ut tris tique gravida odio lobortis tristique gravida. Aliquam erat volutpat. Pellentesque auctor, arcu id tristique.
                                </p>
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <h3 class="testi-title">Olivia Jolie</h3>
                            <div>
                                <i class="fa fa-quote-left"></i>
                                <p>
                                    Maecenas tristique gravida odio, et sagi ttis justo interdum porta. Duis et lacus mattis, tincidunt ero. Donec dictum non nulla ut tris tique gravida odio lobortis tristique gravida. Aliquam erat volutpat. Pellentesque auctor, arcu id tristique.
                                </p>
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div class="testimonial-content">
                            <h3 class="testi-title">Tyrion Lannister</h3>
                            <div>
                                <i class="fa fa-quote-left"></i>
                                <p>
                                    Maecenas tristique gravida odio, et sagi ttis justo interdum porta. Duis et lacus mattis, tincidunt ero. Donec dictum non nulla ut tris tique gravida odio lobortis tristique gravida. Aliquam erat volutpat. Pellentesque auctor, arcu id tristique.
                                </p>
                                <i class="fa fa-quote-right"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="noo-testimonial-sync1 testimonial-three">
                    <div class="item">
                        <div class="background_image">
                            <img class="noo_testimonial_avatar" src="{{config('templates.'.$template_name.'.template_path')}}images/avatar/avatar_1.jpg" alt=""/>
                        </div>
                        <div class="testimonial-name">
                            <h4 class="noo_testimonial_name">- Taylor -</h4>
                            <span class="noo_testimonial_position">( Web Desinger )</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="background_image">
                            <img class="noo_testimonial_avatar" src="{{config('templates.'.$template_name.'.template_path')}}images/avatar/avatar_2.jpg" alt=""/>
                        </div>
                        <div class="testimonial-name">
                            <h4 class="noo_testimonial_name">- Ashley -</h4>
                            <span class="noo_testimonial_position">( Developer )</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="background_image">
                            <img class="noo_testimonial_avatar" src="{{config('templates.'.$template_name.'.template_path')}}images/avatar/avatar_3.jpg" alt=""/>
                        </div>
                        <div class="testimonial-name">
                            <h4 class="noo_testimonial_name">- Olivia -</h4>
                            <span class="noo_testimonial_position">( Web Desinger )</span>
                        </div>
                    </div>
                    <div class="item">
                        <div class="background_image">
                            <img class="noo_testimonial_avatar" src="{{config('templates.'.$template_name.'.template_path')}}images/avatar/avatar_4.jpg" alt=""/>
                        </div>
                        <div class="testimonial-name">
                            <h4 class="noo_testimonial_name">- Tyrion Lannister -</h4>
                            <span class="noo_testimonial_position">( Ceo )</span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="newsletter">
            <div class="noo-sh-mailchimp">
                <div class="container">
                    <div class="row">
                        <div class="col-md-5 col-xs-12">
                            <h3 class="noo-mail-title">Subscribe to us!</h3>
                            <p class="noo-mail-desc">
                                Enter Your email address for our mailing list to keep yourself update.
                            </p>
                        </div>
                        <div class="col-md-7 col-xs-12">
                            <form>
                                <div class="newsletter-form-fields">
                                    <input type="email" name="EMAIL" placeholder="Email address" required />
                                    <input type="submit" value="submit"/>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="wrap-footer footer-2 colophon wigetized">
        <div class="container">
            <div class="row">
                <div class="col-md-3 col-sm-6 item-footer-four">
                    <div class="widget widget_about">
                        <div class="noo_about_widget">
                            <a href="#">
                                <img src="{{config('templates.'.$template_name.'.template_path')}}images/logo.png" alt="" />
                            </a>
                            <p>
                                Maecenas tristique gravida, odio et sagi ttis justo. Suspendisse ultricies nisi veafn. onec dictum non nulla ut lobortis tellus.
                            </p>
                        </div>
                    </div>
                    <div class="widget widget_noo_social">
                        <div class="noo_social">
                            <div class="social-all">
                                <a href="#" class="fa fa-facebook"></a>
                                <a href="#" class="fa fa-google-plus"></a>
                                <a href="#" class="fa fa-twitter"></a>
                                <a href="#" class="fa fa-youtube"></a>
                                <a href="#" class="fa fa-skype"></a>
                            </div>
                        </div>
                    </div>
                    <div class="widget widget_text">
                        <div class="textwidget">
                            <div class="copyright">
                                2015 Oganici.<br/>
                                Designed with <i class="fa fa-heart-o"></i> by TK-Themes.
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item-footer-four">
                    <div class="widget widget_text">
                        <h4 class="widget-title">Contact</h4>
                        <div class="textwidget">
                            <h5>Address</h5>
                            <p>No 13, Sky Tower Street, New York, USA</p>
                            <h5>Hotline</h5>
                            <p>
                                <a href="#">(+844) 123 456 78</a><br/>
                                <a href="#">(+844) 888 97989</a>
                            </p>
                            <h5>Email</h5>
                            <p>
                                <a href="{{config('templates.'.$template_name.'.template_path')}}mailto:contact@organicistore.com">
                                    contact@organicistore.com
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item-footer-four">
                    <div class="widget widget_flickr">
                        <h4 class="widget-title">Photo in flickr</h4>
                        <div class='flickr-badge-wrapper'></div>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6 item-footer-four">
                    <div class="widget widget_noo_openhours">
                        <h4 class="widget-title">Working time</h4>
                        <ul class="noo-openhours">
                            <li>
                                <span>Monday to Friday: </span>
                                <span>08:00am - 08:00pm </span>
                            </li>
                            <li>
                                <span>Saturday &amp; Sunday: </span>
                                <span>10:00am - 06:00pm </span>
                            </li>
                        </ul>
                    </div>
                    <div class="widget widget_noo_happyhours">
                        <h4 class="widget-title">Happy Hours</h4>
                        <ul class="noo-happyhours">
                            <li>
                                <div>Enjoy discount baked goods. </div>
                                <div>06:00 am - 08:00 pm daily </div>
                            </li>
                        </ul>
                        <span></span>
                        <span></span>
                        <span></span>
                        <span></span>
                    </div>
                </div>
            </div>
        </div>
    </footer>
</div>
<a href="#" class="go-to-top hidden-print"><i class="fa fa-angle-up"></i></a>

<script type='text/javascript' src='{{config('templates.'.$template_name.'.template_path')}}js/jquery.min.js'></script>
<script type='text/javascript' src='{{config('templates.'.$template_name.'.template_path')}}js/bootstrap.min.js'></script>
<script type='text/javascript' src='{{config('templates.'.$template_name.'.template_path')}}js/jquery-migrate.min.js'></script>
<script type='text/javascript' src='{{config('templates.'.$template_name.'.template_path')}}js/modernizr-2.7.1.min.js'></script>
<script type='text/javascript' src='{{config('templates.'.$template_name.'.template_path')}}js/off-cavnass.js'></script>
<script type='text/javascript' src='{{config('templates.'.$template_name.'.template_path')}}js/jquery.cookie.js'></script>
<script type='text/javascript' src='{{config('templates.'.$template_name.'.template_path')}}js/style.selector.js'></script>
<script type='text/javascript' src='{{config('templates.'.$template_name.'.template_path')}}js/script.js'></script>
<script type='text/javascript' src='{{config('templates.'.$template_name.'.template_path')}}js/custom.js'></script>
<script type='text/javascript' src='{{config('templates.'.$template_name.'.template_path')}}js/imagesloaded.pkgd.min.js'></script>
<script type='text/javascript' src='{{config('templates.'.$template_name.'.template_path')}}js/isotope.pkgd.min.js'></script>
<script type='text/javascript' src='{{config('templates.'.$template_name.'.template_path')}}js/portfolio.js'></script>
<script type='text/javascript' src='{{config('templates.'.$template_name.'.template_path')}}js/jquery.touchSwipe.min.js'></script>
<script type='text/javascript' src='{{config('templates.'.$template_name.'.template_path')}}js/jquery.isotope.min.js'></script>
<script type='text/javascript' src='{{config('templates.'.$template_name.'.template_path')}}js/owl.carousel.min.js'></script>
<script type='text/javascript' src='{{config('templates.'.$template_name.'.template_path')}}js/jflickrfeed.min.js'></script>
<script type='text/javascript' src='{{config('templates.'.$template_name.'.template_path')}}js/jquery.magnific-popup.js'></script>
</body>
</html>