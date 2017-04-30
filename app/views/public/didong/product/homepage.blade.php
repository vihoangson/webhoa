@extends('public.'.$template_name.'.layouts.homepage')
@section('content')
    <!-- Top Section Starts -->
    <div class="row">
    <!-- Slider Starts -->
    <div class="col-sm-8 col-xs-12">
        <div id="main-carousel" class="carousel slide slider" data-ride="carousel">
            <!-- Wrapper For Slides Starts -->
            <div class="carousel-inner">
                <div class="item active">
                    <img src="/assets/themes/mobile-shoppe/images/slider-imgs/slide1-img.jpg" alt="Slider" class="img-responsive img-center-xs" />
                </div>
                <div class="item">
                    <img src="/assets/themes/mobile-shoppe/images/slider-imgs/slide2-img.jpg" alt="Slider" class="img-responsive img-center-xs" />
                </div>
            </div>
            <!-- Wrapper For Slides Ends -->
            <!-- Controls Starts -->
            <a class="left carousel-control" href="#main-carousel" role="button" data-slide="prev">
                <span class="glyphicon glyphicon-chevron-left"></span>
            </a>
            <a class="right carousel-control" href="#main-carousel" role="button" data-slide="next">
                <span class="glyphicon glyphicon-chevron-right"></span>
            </a>
            <!-- Controls Ends -->
        </div>
    </div>
    <!-- Slider Ends -->
    <!-- Banners Starts -->
    <div class="col-sm-4 col-xs-12">
        <ul class="list-unstyled top-banners">
            <li><img src="/assets/themes/mobile-shoppe/images/banners/top-banner1.jpg" alt="banners" class="img-responsive img-center-xs" /></li>
            <li><img src="/assets/themes/mobile-shoppe/images/banners/top-banner2.jpg" alt="banners" class="img-responsive img-center-xs" /></li>
        </ul>
    </div>
    <!-- Banners Ends -->
    </div>


    <!-- Top Section Ends -->
    <!-- Latest Products Starts -->
    <section class="product-carousel">
        <!-- Heading Starts -->
        <h2 class="product-head">Latest Products</h2>
        <!-- Heading Ends -->
        <!-- Products Row Starts -->
        <div class="row">
            <div class="col-xs-12">
                <!-- Product Carousel Starts -->
                <div id="owl-product" class="owl-carousel">
                    @foreach($products as $product)
                        @include('public.'.$template_name.'.includes.element.item2')
                    @endforeach
                </div>
                <!-- Product Carousel Ends -->
            </div>
        </div>
        <!-- Products Row Ends -->
    </section>
    <!-- Latest Products Ends -->
    <!-- 1 Column Banners Starts -->
    <div class="col1-banners">
        <img src="/assets/themes/mobile-shoppe/images/banners/1col-banner1.jpg" alt="banners" class="img-responsive img-center-sm img-center-xs" />
    </div>
    <!-- 1 Column Banners Ends -->
    <!-- Featured Products Starts -->
    <section class="products-list">
        <!-- Heading Starts -->
        <h2 class="product-head">Featured Products</h2>
        <!-- Heading Ends -->
        <!-- Products Row Starts -->
        <div class="row">
            <!-- Product #1 Starts -->
            <div class="col-md-4 col-sm-6">
                @foreach($products as $product)
                    @include('public.'.$template_name.'.includes.element.item1')
                @endforeach
            </div>
        </div>
        <div class="row hidden">
            <!-- Product #1 Starts -->
            <div class="col-md-4 col-sm-6">
                <div class="product-col">
                    <div class="image">
                        <img src="/assets/themes/mobile-shoppe/images/product-images/9.jpg" alt="product" class="img-responsive img-center-sm img-center-xs" />
                    </div>
                    <div class="caption">
                        <h4>
                            <a href="/assets/themes/mobile-shoppe/product-full.html">Digital Electro Goods</a>
                        </h4>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-cart">
                                <i class="fa fa-shopping-cart"></i>
                                Add to cart
                            </button>
                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" title="Compare" class="btn btn-compare">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #1 Ends -->
            <!-- Product #2 Starts -->
            <div class="col-md-4 col-sm-6">
                <div class="product-col">
                    <div class="image">
                        <img src="/assets/themes/mobile-shoppe/images/product-images/10.jpg" alt="product" class="img-responsive img-center-sm img-center-xs" />
                    </div>
                    <div class="caption">
                        <h4>
                            <a href="/assets/themes/mobile-shoppe/product-full.html">Digital Electro Goods</a>
                        </h4>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-cart">
                                <i class="fa fa-shopping-cart"></i>
                                Add to cart
                            </button>
                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" title="Compare" class="btn btn-compare">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #2 Ends -->
            <!-- Product #3 Starts -->
            <div class="col-md-4 col-sm-6">
                <div class="product-col">
                    <div class="image">
                        <img src="/assets/themes/mobile-shoppe/images/product-images/11.jpg" alt="product" class="img-responsive img-center-sm img-center-xs" />
                    </div>
                    <div class="caption">
                        <h4>
                            <a href="/assets/themes/mobile-shoppe/product-full.html">Digital Electro Goods</a>
                        </h4>
                        <div class="price">
                            <span class="price-new">$199.50</span>
                            <span class="price-old">$249.50</span>
                        </div>
                        <div class="cart-button button-group">
                            <button type="button" class="btn btn-cart">
                                <i class="fa fa-shopping-cart"></i>
                                Add to cart
                            </button>
                            <button type="button" title="Wishlist" class="btn btn-wishlist">
                                <i class="fa fa-heart"></i>
                            </button>
                            <button type="button" title="Compare" class="btn btn-compare">
                                <i class="fa fa-bar-chart-o"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Product #3 Ends -->
        </div>
        <!-- Products Row Ends -->
    </section>
    <!-- Featured Products Ends -->
@endsection

