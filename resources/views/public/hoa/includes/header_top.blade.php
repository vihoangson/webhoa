<!-- Header Section Starts -->
<header id="header-area">
    <!-- Starts -->
    <div class="container">
        <!-- Header Top Starts -->
        <div class="header-top  hidden">
            <div class="row">
                <!-- Header Links Starts -->
                <div class="col-sm-8 col-xs-12 hidden">
                    <div class="header-links  hidden">
                        <ul class="nav navbar-nav pull-left hidden">
                            <li>
                                <a href="/">
                                    <i class="fa fa-home hidden-lg hidden-md" title="Home"></i>
                                    <span class="hidden-sm hidden-xs">
											@lang('common.homepage')
										</span>
                                </a>
                            </li>
                            <li class="hidden">
                                <a href="#">
                                    <i class="fa fa-heart hidden-lg hidden-md" title="Wish List"></i>
                                    <span class="hidden-sm hidden-xs">
											Wish List(0)
										</span>
                                </a>
                            </li>
                            <li class="hidden">
                                <a href="#">
                                    <i class="fa fa-user hidden-lg hidden-md" title="My Account"></i>
                                    <span class="hidden-sm hidden-xs">
											My Account
										</span>
                                </a>
                            </li>
                            <li class="hidden">
                                <a href="/assets/flower-shoppe/cart.html">
                                    <i class="fa fa-shopping-cart hidden-lg hidden-md" title="Shopping Cart"></i>
                                    <span class="hidden-sm hidden-xs">
											Shopping Cart
										</span>
                                </a>
                            </li>
                            <li class="hidden">
                                <a href="/">
                                    <i class="fa fa-unlock hidden-lg hidden-md" title="Register"></i>
                                    <span class="hidden-sm hidden-xs">
                                            @lang('common.register')
                                    </span>
                                </a>
                            </li>
                            <li class="hidden">
                                <a href="/">
                                    <i class="fa fa-lock hidden-lg hidden-md" title="Login"></i>
                                    <span class="hidden-sm hidden-xs">
											@lang('common.login')
                                    </span>
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
                <!-- Header Links Ends -->
                <!-- Currency & Languages Starts -->
                <div class="col-sm-4 col-xs-12">
                    <div class="pull-right hidden">
                        <!-- Languages Starts -->
                        <div class="btn-group">
                            <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-sm hidden-xs">Language</span>
                                <span class="hidden-lg hidden-md">EN</span>
                                <i class="fa fa-angle-double-down"></i>
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
                            <button class="btn btn-link dropdown-toggle" data-toggle="dropdown">
                                <span class="hidden-sm hidden-xs">Currency</span>
                                <span class="hidden-lg hidden-md">$</span>
                                <i class="fa fa-angle-double-down"></i>
                            </button>
                            <ul class="pull-right dropdown-menu">
                                <li><a tabindex="-1" href="#">Pound </a></li>
                                <li><a tabindex="-1" href="#">US Dollar</a></li>
                                <li><a tabindex="-1" href="#">Euro</a></li>
                            </ul>
                        </div>
                        <!-- Currency Ends -->
                    </div>
                </div>
                <!-- Currency & Languages Ends -->
            </div>
        </div>
        <!-- Header Top Ends -->
        <!-- Main Header Starts -->
        <div class="main-header">
            <div class="row">
                <!-- Search Starts -->
                <div class="col-md-3">
                    <div id="search">
                        <div class="input-group">
                            <input type="text" class="form-control input-lg" placeholder="@lang('common.search')">
                            <span class="input-group-btn">
								<button class="btn btn-lg" type="button">
									<i class="fa fa-search"></i>
								</button>
							  </span>
                        </div>
                    </div>
                </div>
                <!-- Search Ends -->
                <!-- Logo Starts -->
                <div class="col-md-5">
                    <div id="logo">
                        <a href="/"><img src="/assets/flower-shoppe/images/logo.png" title="Flower Shoppe" alt="Flower Shoppe" class="img-responsive" /></a>
                    </div>
                </div>
                <!-- Logo Starts -->
                <!-- Shopping Cart Starts -->
                <div class="col-md-4">
                    <div id="cart" class="btn-group btn-block">
                        <button type="button" data-toggle="dropdown" class="btn btn-block btn-lg dropdown-toggle">
                            <i class="fa fa-shopping-cart"></i>
                            <span class="hidden-md">@lang('common.cart'):</span>
                            @if(Cart::total()==0)
                                <span id="cart-total">@lang('common.No item')</span>
                            @else
                                <span id="cart-total">{{Cart::count()}} item(s) - {{(Cart::total())}} đ</span>
                                <i class="fa fa-caret-down"></i>
                            @endif
                        </button>
                        @if(Cart::total()!=0)
                        <ul class="dropdown-menu pull-right">
                            <li>
                                <table class="table hcart">
                                    @foreach(Cart::content() as $key => $item)
                                        <tr>
                                            <td class="text-center">
                                                <a href="/product/{{$item->id}}">
                                                    <img src="/{{$item->options->img_url}}" alt="image" title="image" class="img-thumbnail img-responsive" />
                                                </a>
                                            </td>
                                            <td class="text-left">
                                                <a href="/product/{{$item->id}}">
                                                    {{$item->name}}
                                                </a>
                                            </td>
                                            <td class="text-right">x{{$item->qty}}</td>
                                            <td class="text-right">{{number_format($item->price)}}đ</td>
                                            <td class="text-center">
                                                <a href="/product/remove_item_in_cart/{{$item->rowId}}" class="remove-item-in-cart" data-id="">
                                                    <i class="fa fa-times"></i>
                                                </a>
                                            </td>
                                        </tr>
                                    @endforeach
                                </table>
                            </li>
                            <li>
                                <table class="table table-bordered total">
                                    <tbody>
                                    <tr class="hidden">
                                        <td class="text-right"><strong>Sub-Total</strong></td>
                                        <td class="text-left">$1,101.00</td>
                                    </tr>
                                    <tr class="hidden">
                                        <td class="text-right"><strong>Eco Tax (-2.00)</strong></td>
                                        <td class="text-left">$4.00</td>
                                    </tr>
                                    <tr class="hidden">
                                        <td class="text-right"><strong>VAT (17.5%)</strong></td>
                                        <td class="text-left">$192.68</td>
                                    </tr>
                                    <tr>
                                        <td class="text-right"><strong>Total</strong></td>
                                        <td class="text-left">{{Cart::total()}}đ</td>
                                    </tr>
                                    </tbody>
                                </table>
                                <p class="text-right btn-block1">
                                    <a href="/product/checkout">
                                        View Cart
                                    </a>
                                    <a href="/product/payment">
                                        Checkout
                                    </a>
                                </p>
                            </li>
                        </ul>
                        @endif
                    </div>
                </div>
                <!-- Shopping Cart Ends -->
            </div>
        </div>
        <!-- Main Header Ends -->
        <!-- Main Menu Starts -->
        <nav id="main-menu" class="navbar" role="navigation">
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
                    @foreach($menu_main as $key => $value)
                        @if(is_array($value))
                            <li class="dropdown">
                                <a href="/assets/flower-shoppe/category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                                    {{$key}}
                                </a>
                                <ul class="dropdown-menu" role="menu">
                                    @foreach($value as $key1 => $value1)
                                        <li><a tabindex="-1" href="{{$value1}}">{{$key1}}</a></li>
                                    @endforeach
                                </ul>
                            </li>
                        @else
                            <li><a href="{{$value}}">{{$key}}</a></li>
                        @endif
                    @endforeach

                    <li class="dropdown hidden{{----}}">
                        <a href="/assets/flower-shoppe/category-list.html" class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown" data-delay="10">
                            Pages
                        </a>
                        <ul class="dropdown-menu" role="menu">
                            <li><a tabindex="-1" href="/assets/flower-shoppe/index.html">Home</a></li>
                            <li><a tabindex="-1" href="/assets/flower-shoppe/about.html">About</a></li>
                            <li><a tabindex="-1" href="/assets/flower-shoppe/category-list.html">Category List</a></li>
                            <li><a tabindex="-1" href="/assets/flower-shoppe/category-grid.html">Category Grid</a></li>
                            <li><a tabindex="-1" href="/assets/flower-shoppe/product.html">Product</a></li>
                            <li><a tabindex="-1" href="/assets/flower-shoppe/product-full.html">Product Full Width</a></li>
                            <li><a tabindex="-1" href="/assets/flower-shoppe/cart.html">Cart</a></li>
                            <li><a tabindex="-1" href="/assets/flower-shoppe/login.html">Login</a></li>
                            <li><a tabindex="-1" href="/assets/flower-shoppe/compare.html">Compare Products</a></li>
                            <li><a tabindex="-1" href="/assets/flower-shoppe/typography.html">Typography</a></li>
                            <li><a tabindex="-1" href="/assets/flower-shoppe/register.html">Register</a></li>
                            <li><a tabindex="-1" href="/assets/flower-shoppe/contact.html">Contact</a></li>
                            <li><a tabindex="-1" href="/assets/flower-shoppe/404.html">404</a></li>
                        </ul>
                    </li>
                </ul>
            </div>
            <!-- Navbar Cat collapse Ends -->
        </nav>
        <!-- Main Menu Ends -->
    </div>
    <!-- Ends -->
</header>
<!-- Header Section Ends -->