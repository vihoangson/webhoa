<!-- //////////////////////////////////
//////////////MAIN HEADER/////////////
////////////////////////////////////-->
<div class="main_header">
    <div class="top-main-area text-center">
        <div class="container">
            <a href="/assets/themes/remtsoy/index.html" class="logo mt5">
                <img src="/assets/themes/remtsoy/img/logo-small-dark.png" alt="Image Alternative text"
                     title="Image Title"/>
            </a>
        </div>
    </div>
    <header class="main">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <!-- MAIN NAVIGATION -->
                    <div class="flexnav-menu-button" id="flexnav-menu-button">Menu</div>
                    <nav>
                        <ul class="nav nav-pills flexnav" id="flexnav" data-breakpoint="800">
                            @foreach($menu_main as $key => $value)
                                @if(is_array($value))
                                    <li class="dropdown">
                                        <a href="/assets/themes/flower-shoppe/category-list.html"
                                           class="dropdown-toggle" data-toggle="dropdown" data-hover="dropdown"
                                           data-delay="10">
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
                                <li class="active hidden"><a
                                            href="{{config('templates.'.$template_name.'.template_path')}}index.html">Home</a>
                                </li>
                            @endforeach


                        </ul>
                    </nav>
                    <!-- END MAIN NAVIGATION -->
                </div>
                <div class="col-md-6">
                    <!-- LOGIN REGISTER LINKS -->
                    <ul class="login-register">
                        <li class="shopping-cart"><a href="/assets/themes/remtsoy/page-cart.html"><i
                                        class="fa fa-shopping-cart"></i>My Cart</a>
                            <div class="shopping-cart-box">
                                <ul class="shopping-cart-items">
                                    <li>
                                        <a href="/assets/themes/remtsoy/product-shop-sidebar.html">
                                            <img src="/assets/themes/remtsoy/img/amaze_70x70.jpg"
                                                 alt="Image Alternative text" title="AMaze"/>
                                            <h5>New Glass Collection</h5><span
                                                    class="shopping-cart-item-price">$150</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="/assets/themes/remtsoy/product-shop-sidebar.html">
                                            <img src="/assets/themes/remtsoy/img/gamer_chick_70x70.jpg"
                                                 alt="Image Alternative text" title="Gamer Chick"/>
                                            <h5>Playstation Accessories</h5><span class="shopping-cart-item-price">$170</span>
                                        </a>
                                    </li>
                                </ul>
                                <ul class="list-inline text-center">
                                    <li><a href="/assets/themes/remtsoy/page-cart.html"><i
                                                    class="fa fa-shopping-cart"></i> View Cart</a>
                                    </li>
                                    <li><a href="/assets/themes/remtsoy/page-checkout.html"><i
                                                    class="fa fa-check-square"></i> Checkout</a>
                                    </li>
                                </ul>
                            </div>
                        </li>
                        <li><a class="popup-text" href="#login-dialog" data-effect="mfp-move-from-top"><i
                                        class="fa fa-sign-in"></i>Sign in</a>
                        </li>
                        <li><a class="popup-text" href="#register-dialog" data-effect="mfp-move-from-top"><i
                                        class="fa fa-edit"></i>Sign up</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </header>

    <!-- LOGIN REGISTER LINKS CONTENT -->
    <div id="login-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
        <i class="fa fa-sign-in dialog-icon"></i>
        <h3>Member Login</h3>
        <h5>Welcome back, friend. Login to get started</h5>
        <form class="dialog-form">
            <div class="form-group">
                <label>E-mail</label>
                <input type="text" placeholder="email@domain.com" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="My secret password" class="form-control">
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox">Remember me
                </label>
            </div>
            <input type="submit" value="Sign in" class="btn btn-primary">
        </form>
        <ul class="dialog-alt-links">
            <li><a class="popup-text" href="#register-dialog" data-effect="mfp-zoom-out">Not member yet</a>
            </li>
            <li><a class="popup-text" href="#password-recover-dialog" data-effect="mfp-zoom-out">Forgot password</a>
            </li>
        </ul>
    </div>


    <div id="register-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
        <i class="fa fa-edit dialog-icon"></i>
        <h3>Member Register</h3>
        <h5>Ready to get best offers? Let's get started!</h5>
        <form class="dialog-form">
            <div class="form-group">
                <label>E-mail</label>
                <input type="text" placeholder="email@domain.com" class="form-control">
            </div>
            <div class="form-group">
                <label>Password</label>
                <input type="password" placeholder="My secret password" class="form-control">
            </div>
            <div class="form-group">
                <label>Repeat Password</label>
                <input type="password" placeholder="Type your password again" class="form-control">
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="form-group">
                        <label>Your Area</label>
                        <input type="password" placeholder="Boston" class="form-control">
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="form-group">
                        <label>Postal/Zip</label>
                        <input type="password" placeholder="12345" class="form-control">
                    </div>
                </div>
            </div>
            <div class="checkbox">
                <label>
                    <input type="checkbox">Get hot offers via e-mail
                </label>
            </div>
            <input type="submit" value="Sign up" class="btn btn-primary">
        </form>
        <ul class="dialog-alt-links">
            <li><a class="popup-text" href="#login-dialog" data-effect="mfp-zoom-out">Already member</a>
            </li>
        </ul>
    </div>


    <div id="password-recover-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
        <i class="icon-retweet dialog-icon"></i>
        <h3>Password Recovery</h3>
        <h5>Fortgot your password? Don't worry we can deal with it</h5>
        <form class="dialog-form">
            <label>E-mail</label>
            <input type="text" placeholder="email@domain.com" class="span12">
            <input type="submit" value="Request new password" class="btn btn-primary">
        </form>
    </div>
    <!-- END LOGIN REGISTER LINKS CONTENT -->


    <!-- SEARCH AREA -->
    <form class="search-area form-group">
        <div class="container">
            <div class="row">
                <div class="col-md-8 clearfix">
                    <label><i class="fa fa-search"></i><span>@lang('common.I_am_searching_for')</span>
                    </label>
                    <div class="search-area-division search-area-division-input">
                        <input class="form-control" type="text" placeholder=""/>
                    </div>
                </div>
                <div class="col-md-3 clearfix">
                    <label><i class="fa fa-map-marker"></i><span>Tại</span>
                    </label>
                    <div class="search-area-division search-area-division-location">
                        <input class="form-control" type="text" placeholder="Tp.HCM"/>
                    </div>
                </div>
                <div class="col-md-1">
                    <button class="btn btn-block btn-white search-btn" type="submit">@lang('common.search')</button>
                </div>
            </div>
        </div>
    </form>
    <!-- END SEARCH AREA -->

    <div class="gap"></div>
</div>
<!-- //////////////////////////////////
//////////////END MAIN HEADER//////////
////////////////////////////////////-->