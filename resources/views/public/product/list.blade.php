@extends('public.layouts.master')
@section('content')
    <!-- Latest Products Starts -->
    <section class="product-carousel">
        <div class="container">
            <!-- Heading Starts -->
            <h2 class="product-head">Latest Products</h2>
            <!-- Heading Ends -->
            <!-- Products Row Starts -->
            <div class="row">
                <div class="col-xs-12">
                    @include('public.includes.slide')
                </div>
            </div>
            <!-- Products Row Ends -->
        </div>
    </section>
    <!-- Latest Products Ends -->
    <!-- 3 Column Banners Starts -->
    <div class="col3-banners">
        <div class="container">
            <ul class="row list-unstyled">
                <li class="col-sm-4">
                    <img src="/assets/flower-shoppe/images/banners/3col-banner1.jpg" alt="banners" class="img-responsive" />
                </li>
                <li class="col-sm-4">
                    <img src="/assets/flower-shoppe/images/banners/3col-banner2.jpg" alt="banners" class="img-responsive" />
                </li>
                <li class="col-sm-4">
                    <img src="/assets/flower-shoppe/images/banners/3col-banner3.jpg" alt="banners" class="img-responsive" />
                </li>
            </ul>
        </div>
    </div>
    <!-- 3 Column Banners Ends -->
    <!-- Featured Products Starts -->
    <section class="products-list">
        <div class="container">
            <!-- Heading Starts -->
            <h2 class="product-head">Featured Products</h2>
            <!-- Heading Ends -->
            <!-- Products Row Starts -->
            <div class="row">
                <!-- Product #1 Starts -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-col">
                        <div class="image">
                            <img src="/assets/flower-shoppe/images/product-images/9.png" alt="product" class="img-responsive" />
                        </div>
                        <div class="caption">
                            <h4><a href="/assets/flower-shoppe/product.html">Flowers</a></h4>
                            <div class="description">
                                We are so lucky living in such a wonderful time. Our almost unlimited ...
                            </div>
                            <div class="price">
                                <span class="price-new">$199.50</span>
                                <span class="price-old">$249.50</span>
                            </div>
                            <div class="cart-button button-group">
                                <button type="button" class="btn btn-cart">
                                    Add To Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product #1 Ends -->
                <!-- Product #2 Starts -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-col">
                        <div class="image">
                            <img src="/assets/flower-shoppe/images/product-images/10.png" alt="product" class="img-responsive" />
                        </div>
                        <div class="caption">
                            <h4><a href="/assets/flower-shoppe/product.html">Flowers</a></h4>
                            <div class="description">
                                We are so lucky living in such a wonderful time. Our almost unlimited ...
                            </div>
                            <div class="price">
                                <span class="price-new">$199.50</span>
                                <span class="price-old">$249.50</span>
                            </div>
                            <div class="cart-button button-group">
                                <button type="button" class="btn btn-cart">
                                    Add To Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product #2 Ends -->
                <!-- Product #3 Starts -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-col">
                        <div class="image">
                            <img src="images/product-images/11.png" alt="product" class="img-responsive" />
                        </div>
                        <div class="caption">
                            <h4><a href="/assets/flower-shoppe/product.html">Flowers</a></h4>
                            <div class="description">
                                We are so lucky living in such a wonderful time. Our almost unlimited ...
                            </div>
                            <div class="price">
                                <span class="price-new">$199.50</span>
                                <span class="price-old">$249.50</span>
                            </div>
                            <div class="cart-button button-group">
                                <button type="button" class="btn btn-cart">
                                    Add To Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product #3 Ends -->
                <!-- Product #4 Starts -->
                <div class="col-md-3 col-sm-6">
                    <div class="product-col">
                        <div class="image">
                            <img src="images/product-images/12.png" alt="product" class="img-responsive" />
                        </div>
                        <div class="caption">
                            <h4><a href="/assets/flower-shoppe/product.html">Flowers</a></h4>
                            <div class="description">
                                We are so lucky living in such a wonderful time. Our almost unlimited ...
                            </div>
                            <div class="price">
                                <span class="price-new">$199.50</span>
                                <span class="price-old">$249.50</span>
                            </div>
                            <div class="cart-button button-group">
                                <button type="button" class="btn btn-cart">
                                    Add To Cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product #4 Ends -->
            </div>
            <!-- Products Row Ends -->
        </div>
    </section>
    <!-- Featured Products Ends -->

@endsection

