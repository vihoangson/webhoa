@extends('public.layouts.inside')
@section('content')
        <!-- Breadcrumb Ends -->
        <!-- Product Info Starts -->
        <div class="row product-info">
            <!-- Right Starts -->
            <div class="col-sm-12 product-details">
                <!-- Product Name Starts -->
                <h2>{{$post->title}}</h2>
                <!-- Available Options Ends -->
                {!! $post->summary !!}
                <hr>
            </div>
            <!-- Right Ends -->
        </div>
        <!-- product Info Ends -->
        <!-- Product Description Starts -->
        <div class="product-info-box">
            <h4 class="heading">Description</h4>
            <div class="content panel-smart">
                {!! $post->content !!}
            </div>
        </div>
        <!-- Product Description Ends -->
        <!-- Additional Information Starts -->
        <div class="product-info-box">
            <h4 class="heading">Additional Information</h4>
            <div class="content panel-smart">
                <p>
                    Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
                </p>
            </div>
        </div>
        <!-- Additional Information Ends -->
        <!-- Related Products Starts -->
        <div class="product-info-box">
            <h4 class="heading">Related Products</h4>
            <!-- Products Row Starts -->
            <div class="row">
                <!-- Product #1 Starts -->
                <div class="col-md-4 col-sm-6">
                    <div class="product-col">
                        <div class="image">
                            <img src="/assets/flower-shoppe/images/product-images/1.png" alt="product" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h4><a href="product.html">Flowers</a></h4>
                            <div class="description">
                                We are so lucky living in such a wonderful time. Our almost unlimited ...
                            </div>
                            <div class="price">
                                <span class="price-new">$199.50</span>
                                <span class="price-old">$249.50</span>
                            </div>
                            <div class="cart-button button-group">
                                <button type="button" class="btn btn-cart">
                                    Add to cart
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
                            <img src="/assets/flower-shoppe/images/product-images/2.png" alt="product" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h4><a href="product.html">Flowers</a></h4>
                            <div class="description">
                                We are so lucky living in such a wonderful time. Our almost unlimited ...
                            </div>
                            <div class="price">
                                <span class="price-new">$199.50</span>
                                <span class="price-old">$249.50</span>
                            </div>
                            <div class="cart-button button-group">
                                <button type="button" class="btn btn-cart">
                                    Add to cart
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
                            <img src="/assets/flower-shoppe/images/product-images/3.png" alt="product" class="img-responsive">
                        </div>
                        <div class="caption">
                            <h4><a href="product.html">Flowers</a></h4>
                            <div class="description">
                                We are so lucky living in such a wonderful time. Our almost unlimited ...
                            </div>
                            <div class="price">
                                <span class="price-new">$199.50</span>
                                <span class="price-old">$249.50</span>
                            </div>
                            <div class="cart-button button-group">
                                <button type="button" class="btn btn-cart">
                                    Add to cart
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- Product #3 Ends -->
            </div>
            <!-- Products Row Ends -->
        </div>
        <!-- Related Products Ends -->
@endsection