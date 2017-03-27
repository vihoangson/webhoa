@extends('public.hoa.layouts.inside')
@section('breadcrumb')
    {!! Breadcrumbs::render('product_detail',$product->title) !!}
@endsection

@section('content')
        <!-- Breadcrumb Ends -->
        <!-- Product Info Starts -->
        <div class="row product-info">
            <!-- Left Starts -->
            <div class="col-sm-5 images-block">
                <p>
                    @if($product->main_img)
                    <img src="/{{$product->image->find($product->main_img)->url}}" alt="Image" class="img-responsive thumbnail">
                    @endif
                </p>
                <ul class="list-unstyled list-inline">
                    @foreach($product->image as $img)
                        @if( $img->url != $product->image->find($product->main_img)->url)
                        <li>
                            <img src="/{{$img->url}}" alt="Image" class="img-responsive thumbnail">
                        </li>
                        @endif
                    @endforeach
                </ul>
            </div>
            <!-- Left Ends -->
            <!-- Right Starts -->
            <div class="col-sm-7 product-details">
                <!-- Product Name Starts -->
                <h2>{{$product->title}}</h2>
                <!-- Product Name Ends -->
                <hr>
                <!-- Manufacturer Starts -->
                <ul class="list-unstyled manufacturer">
                    <li>
                        <span>@lang('common.Brand'):</span> Indian spices
                    </li>
                    <li><span>@lang('common.Reward Points'):</span> 300</li>
                    <li>
                        <span>@lang('common.Availability'):</span> <strong class="label label-success">@lang('common.In Stock')</strong>
                    </li>
                </ul>
                <!-- Manufacturer Ends -->
                <hr>
                <!-- Price Starts -->
                <div class="price">
                    @if(!$product->price_sale)
                        <span class="price-head">@lang('common.Price') :</span>
                        <span class="price-new">{{$product->price_formated}}</span>
                    @else
                        <span class="price-head">@lang('common.Price') :</span>
                        <span class="price-new">{{$product->price_sale_formated}} </span>
                        <span class="price-old">{{$product->price_formated}} </span>
                        @if($product->date_end_sale_formated_countdown)
                            <div data-countdown="{{$product->date_end_sale_formated_countdown}}"></div>
                        @endif
                    @endif

                </div>
                <!-- Price Ends -->
                <hr>
                <!-- Available Options Starts -->

                {!! Form::open(['url'=>'/product/add_cart/'.$product->id,'method'=>'get']) !!}
                <div class="options">
                    <div class="form-group">
                        <label class="control-label text-uppercase" for="input-quantity">Qty:</label>
                        <input type="text" name="quantity" value="1" size="2" id="input-quantity" class="form-control">
                    </div>
                    <div class="cart-button button-group">
                        <button type="submit" class="btn btn-cart">
                            @lang('common.order_button')
                        </button>
                    </div>
                </div>
                {!! Form::close() !!}
                <!-- Available Options Ends -->
                <hr>
            </div>
            <!-- Right Ends -->
        </div>
        <!-- product Info Ends -->
        <!-- Product Description Starts -->
        <div class="product-info-box">
            <h4 class="heading">Description</h4>
            <div class="content panel-smart">
                {!! $product->content !!}
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
                            <img src="/assets/themes/flower-shoppe/images/product-images/1.png" alt="product" class="img-responsive">
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
                            <img src="/assets/themes/flower-shoppe/images/product-images/2.png" alt="product" class="img-responsive">
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
                            <img src="/assets/themes/flower-shoppe/images/product-images/3.png" alt="product" class="img-responsive">
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