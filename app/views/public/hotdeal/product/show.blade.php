@extends('public.'.$template_name.'.layouts.inside')
@section('title_page'){{$product->title}}@endsection
@section('keyword_page'){{$product->keyword or 'Xem ngay mua ngay'}}@endsection
@section('description_page'){{$product->descripton or 'Xem ngay mua ngay'}}@endsection
@section('breadcrumb')
    {!! Breadcrumbs::render('product_detail',$product->title) !!}
@endsection
@section('content')
    <div class="row">
        <div class="col-md-12">
            <div id="review-dialog" class="mfp-with-anim mfp-hide mfp-dialog clearfix">
                <h3>Đánh giá sản phẩm</h3>

                {!! Form::open(['url' => '/product/process_review', 'method' => 'POST','class'=>'form-horizontal','id'=>'add-a-review', 'files' => false]) !!}
                <input type="hidden" name="backlink" value="/product/{{$product->slug}}">
                <input id='star-vote' type="hidden" name="starvote" value="0">

                <div class="form-group">
                    <label>Họ và tên</label>
                    <input type="text" required="required" name="name" placeholder="e.g. John Doe" class="form-control">
                </div>
                <div class="form-group">
                    <label>E-mail</label>
                    <input type="email" required="required" name="email" placeholder="e.g. jogndoe@gmail.com" class="form-control">
                </div>
                <div class="form-group">
                    <label>Nội dung</label>
                    <textarea class="form-control" required="required" name="note-review"></textarea>
                </div>
                <div class="form-group">
                    <label>Đánh giá</label>
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
                {!! Form::close() !!}

            </div>
            <div class="row">
                <div class="col-md-5">

                    <div class="fotorama" data-nav="thumbs" data-allowfullscreen="1" data-thumbheight="100" data-thumbwidth="100">
                        @if($product->main_img)
                            <img src="/{{$product->image->find($product->main_img)->url}}" alt="Image Alternative text2" title="Gamer Chick"/>
                        @endif
                        @foreach($product->image as $img)
                            @if( $img->url != $product->image->find($product->main_img)->url)
                                <img src="/{{$img->url}}" alt="Image Alternative text" title="Gamer Chick"/>
                            @endif
                        @endforeach
                    </div>
                </div>
                <div class="col-md-7">
                    <div class="product-info box">

                        @if(count($product->reviews)>0)
                            <ul class="icon-group icon-list-rating text-color" title="4.5/5 rating">
                                @for($i=0;$i<5;$i++)
                                    @if($i<$product->total_star_review)
                                        <li><i class="fa fa-star"></i></li>
                                    @else
                                        <li><i class="fa fa-star-o"></i></li>
                                    @endif
                                @endfor
                            </ul>
                            <small><a href="#" class="text-muted">Đã có {{count($product->reviews)}} đánh giá</a>
                            </small>
                        @endif
                        <h3>{{$product->title}} @if ( ! \Auth::guard()->guest() ) (<a href="{{route('admin.product.edit',$product->id)}}">Sửa</a>)@endif </h3>
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
                            <li>
                                <a href="/product/add_cart/{{$product->slug}}" class="btn btn-primary"><i class="fa fa-shopping-cart"></i> Mua hàng</a>
                            </li>
                            <li>
                                <a href="javascript:void(0)" class="add_wishlist" data-id="{{$product->id}}" data-title="{{$product->title}}">
                                    @if($in_favorite==true)
                                        <i class="fa fa-heart"></i>
                                    @else
                                        <i class="fa fa-heart-o"></i>
                                    @endif
                                </a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="gap"></div>
            <div class="tabbable">
                <ul class="nav nav-tabs" id="myTab">
                    @if($product->content)
                        <li class="active">
                            <a href="#tab-1" data-toggle="tab"><i class="fa fa-pencil"></i>Chi tiết về sản phẩm</a></li>
                    @endif
                    <li class=" "><a href="#tab-2" data-toggle="tab"><i class="fa fa-comments"></i>Đánh giá</a></li>
                </ul>
                <div class="tab-content">
                    @if($product->content)
                        <div class="tab-pane fade active in" id="tab-1">
                            {!! $product->content or '' !!}
                        </div>
                    @endif
                    <div class="tab-pane fade " id="tab-2">
                        <ul class="comments-list">
                            @foreach($product->reviews as $review)
                                <li>
                                    <!-- REVIEW -->
                                    <article class="comment">
                                        <div class="comment-author">
                                            @php
                                                $hash_email_for_gravatar = md5( strtolower( trim( $review->email ) ) );
                                            @endphp

                                            <img src="http://www.gravatar.com/avatar/{{$hash_email_for_gravatar}}" alt="Image Alternative text" title="Gamer Chick">
                                        </div>
                                        <div class="comment-inner">
                                            <ul class="icon-group icon-list-rating comment-review-rate" title="4/5 rating">
                                                @for($i=0;$i<5;$i++)
                                                    @if($i<$review->star)
                                                        <li><i class="fa fa-star"></i></li>
                                                    @else
                                                        <li><i class="fa fa-star-o"></i></li>
                                                    @endif
                                                @endfor
                                            </ul>
                                            <span class="comment-author-name">{{$review->name}}</span>
                                            <p class="comment-content">{{$review->note_review}}</p>
                                        </div>
                                    </article>
                                </li>
                            @endforeach
                        </ul>
                        <a class="popup-text btn btn-primary" href="#review-dialog" data-effect="mfp-zoom-out"><i class="fa fa-pencil"></i> Đánh giá sản phẩm</a>
                    </div>
                </div>
            </div>

            @if($product_relate)
            <div>
                <div class="gap"></div>
                <h3>Sản phẩm liên quan</h3>
                <div class="gap gap-mini"></div>
                <div class="row row-wrap">
                    @foreach($product_relate as $key => $product)
                        @if($key % 3 == 0)</div>
                <div class="row row-wrap">@endif
                    @include('public.hotdeal.includes.element.product.item1',['product'=>$product])
                    @endforeach
                </div>

                <div class="gap gap-small"></div>
            </div>
            @endif
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