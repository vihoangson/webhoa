@extends('public.'.$template_name.'.layouts.inside')
@section('breadcrumb')
    {!! Breadcrumbs::render('product_detail',$product->title) !!}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div id="review-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
                <h3>Add a Review</h3>
                <form>
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" placeholder="e.g. John Doe" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>E-mail</label>
                        <input type="text" placeholder="e.g. jogndoe@gmail.com" class="form-control">
                    </div>
                    <div class="form-group">
                        <label>Review</label>
                        <textarea class="form-control"></textarea>
                    </div>
                    <div class="form-group">
                        <label>Rating</label>
                        <ul class="icon-list icon-list-inline star-rating" id="star-rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                        </ul>
                    </div>
                    <input type="submit" class="btn btn-primary" value="Submit">
                </form>
            </div>
            <div class="row">
                <div class="col-md-7">

                    <div class="fotorama" data-nav="thumbs" data-allowfullscreen="1" data-thumbheight="150" data-thumbwidth="150">
                        @if($product->main_img)
                            <img src="/{{$product->image->find($product->main_img)->url}}" alt="Image Alternative text2" title="Gamer Chick" />
                        @endif
                        @foreach($product->image as $img)
                            @if( $img->url != $product->image->find($product->main_img)->url)
                                <img src="/{{$img->url}}" alt="Image Alternative text" title="Gamer Chick" />
                            @endif
                        @endforeach
                        {{--<img src="img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />--}}
                        {{--<img src="img/amaze_800x600.jpg" alt="Image Alternative text" title="AMaze" />--}}
                        {{--<img src="img/urbex_esch_lux_with_laney_and_laaaaag_800x600.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag" />--}}
                        {{--<img src="img/food_is_pride_800x600.jpg" alt="Image Alternative text" title="Food is Pride" />--}}
                    </div>
                </div>
                <div class="col-md-5">
                    <div class="product-info box">
                        <ul class="icon-group icon-list-rating text-color" title="4.5/5 rating">
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star"></i>
                            </li>
                            <li><i class="fa fa-star-half-empty"></i>
                            </li>
                        </ul>	<small><a href="#" class="text-muted">based on 8 reviews</a></small>
                        <h3>{{$product->title}}</h3>
                        <p class=" hidden product-info-price">{{$product->price_formated}}</p>
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
                        <p class="text-smaller text-muted"></p>
                        <ul class="icon-list list-space product-info-list hidden">
                            <li><i class="fa fa-check"></i>Pulvinar nulla</li>
                        </ul>
                        <ul class="list-inline">
                            <li><a href="#" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Add to cart</a>
                            </li>
                            <li><a href="#" class="btn"><i class="fa fa-star"></i> To Wishlist</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <div class="tabbable">
                <ul class="nav nav-tabs" id="myTab">
                    <li class="active"><a href="#tab-1" data-toggle="tab"><i class="fa fa-pencil"></i>Desciption</a>
                    </li>
                    <li class=""><a href="#tab-2" data-toggle="tab"><i class="fa fa-comments"></i>Reviews</a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane fade active in" id="tab-1">
                        <p>Vel dictumst interdum nam risus viverra aenean nostra lobortis class malesuada et himenaeos vivamus ullamcorper quis fermentum nostra taciti sagittis per lobortis libero neque eros massa erat suspendisse laoreet dolor id sociis aliquam mauris justo eleifend interdum ultricies litora est inceptos inceptos condimentum penatibus gravida in lectus nunc class tincidunt</p>
                        <p>At tortor viverra habitasse auctor pharetra tempor quam ante placerat class mus commodo cum magna primis sed risus interdum purus et scelerisque porta natoque blandit ultricies platea phasellus gravida id</p>
                        <p>Eleifend aliquet odio tempus pharetra congue at orci suspendisse taciti duis imperdiet conubia risus dictumst fringilla fermentum sem nascetur dis sagittis lectus libero dolor himenaeos nullam lectus at interdum sodales</p>
                    </div>

                    <div class="tab-pane fade " id="tab-2">
                        <ul class="comments-list">
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="img/gamer_chick_50x50.jpg" alt="Image Alternative text" title="Gamer Chick">
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul><span class="comment-author-name">Alison Mackenzie</span>
                                        <p class="comment-content">Potenti diam ridiculus enim per orci aliquet quam proin sit neque porta conubia nam iaculis phasellus nam dignissim tincidunt sapien eros nam bibendum nunc vehicula accumsan lacus</p>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="img/ana_29_50x50.jpg" alt="Image Alternative text" title="Ana 29">
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="5/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                        </ul><span class="comment-author-name">Olivia Slater</span>
                                        <p class="comment-content">Nisl justo natoque pharetra adipiscing ultricies aliquam erat in condimentum hendrerit vulputate lacus fames aliquet volutpat habitasse himenaeos adipiscing sociosqu tincidunt</p>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="img/afro_50x50.jpg" alt="Image Alternative text" title="Afro">
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul><span class="comment-author-name">Oliver Ross</span>
                                        <p class="comment-content">Vivamus lacinia accumsan facilisi feugiat lectus etiam nostra dis curabitur conubia pulvinar nascetur</p>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="img/bubbles_50x50.jpg" alt="Image Alternative text" title="Bubbles">
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul><span class="comment-author-name">Frank Mills</span>
                                        <p class="comment-content">Montes venenatis maecenas aptent tellus tempus praesent pretium elit porttitor penatibus mi tempus erat facilisi ante massa tristique bibendum inceptos feugiat lobortis vulputate</p>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="img/me_with_the_uke_50x50.jpg" alt="Image Alternative text" title="Me with the Uke">
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="5/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                        </ul><span class="comment-author-name">Alison Mackenzie</span>
                                        <p class="comment-content">Bibendum faucibus dictumst suspendisse imperdiet pharetra vel euismod hac at at vitae</p>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="img/amaze_50x50.jpg" alt="Image Alternative text" title="AMaze">
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul><span class="comment-author-name">Dylan Taylor</span>
                                        <p class="comment-content">Erat sagittis scelerisque molestie dignissim massa tristique id purus euismod non netus enim nisi ac himenaeos nascetur interdum porta leo adipiscing dictumst quisque aliquet lobortis torquent</p>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="img/chiara_50x50.jpg" alt="Image Alternative text" title="Chiara">
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="5/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                        </ul><span class="comment-author-name">Joseph Hudson</span>
                                        <p class="comment-content">Urna dui lectus erat massa velit mattis lobortis arcu sagittis proin malesuada senectus montes bibendum vehicula</p>
                                    </div>
                                </article>
                            </li>
                            <li>
                                <!-- REVIEW -->
                                <article class="comment">
                                    <div class="comment-author">
                                        <img src="img/andrea_50x50.jpg" alt="Image Alternative text" title="Andrea">
                                    </div>
                                    <div class="comment-inner">
                                        <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star"></i>
                                            </li>
                                            <li><i class="fa fa-star-o"></i>
                                            </li>
                                        </ul><span class="comment-author-name">Frank Mills</span>
                                        <p class="comment-content">Porta fusce litora id enim montes neque facilisi sit class vel commodo est vel diam massa ultrices netus fusce</p>
                                    </div>
                                </article>
                            </li>
                        </ul><a class="popup-text btn btn-primary" href="#review-dialog" data-effect="mfp-zoom-out"><i class="fa fa-pencil"></i> Add a review</a>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <h3>Related Porducts</h3>
            <div class="gap gap-mini"></div>
            <div class="row row-wrap">
                @foreach($product_relate as $key => $product)
                    @if($key % 3 == 0)</div><div class="row row-wrap">@endif
                    @include('public.hotdeal.includes.element.item1',['product'=>$product])
                @endforeach
            </div>

            <div class="gap gap-small"></div>
        </div>
        <div class="col-md-3 hidden">
            <aside class="sidebar-right">
                <div class="sidebar-box">
                    <h5>Recent Viewed</h5>
                    <ul class="thumb-list">
                        <li>
                            <a href="#">
                                <img src="img/urbex_esch_lux_with_laney_and_laaaaag_70x70.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag">
                            </a>
                            <div class="thumb-list-item-caption">
                                <h5 class="thumb-list-item-title"><a href="#">Best Camera Lenthes</a></h5>
                                <p class="thumb-list-item-price">$336</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-box">
                    <h5>Popular</h5>
                    <ul class="thumb-list">
                        <li>
                            <a href="#">
                                <img src="img/food_is_pride_70x70.jpg" alt="Image Alternative text" title="Food is Pride">
                            </a>
                            <div class="thumb-list-item-caption">
                                <h5 class="thumb-list-item-title"><a href="#">Best Pasta</a></h5>
                                <p class="thumb-list-item-price">$184</p>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="sidebar-box">
                    <h5>Recent Reviews</h5>
                    <ul class="thumb-list">
                        <li>
                            <a href="#">
                                <img src="img/hot_mixer_70x70.jpg" alt="Image Alternative text" title="Hot mixer">
                            </a>
                            <div class="thumb-list-item-caption">
                                <ul class="icon-group icon-list-rating" title="5/5 rating">
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                    <li><i class="fa fa-star"></i>
                                    </li>
                                </ul>
                                <h5 class="thumb-list-item-title"><a href="#">Modern DJ Set</a></h5>
                                <p class="thumb-list-item-author">by Cyndy Naquin</p>
                            </div>
                        </li>
                    </ul>
                </div>
            </aside>
        </div>
    </div>
@endsection
@section('content2')
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