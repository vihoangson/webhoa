@extends('public.'.$template_name.'.layouts.inside')
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
                    <img src="/{{$product->image->find($product->main_img)->url}}" alt="Image"
                         class="img-responsive thumbnail">
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
                <li class="hidden">
                    <span>@lang('common.Brand'):</span> Indian spices
                </li>
                <li class="hidden"><span>@lang('common.Reward Points'):</span> 300</li>
                <li>
                    <span>@lang('common.Availability'):</span> <strong
                            class="label label-success">@lang('common.In Stock')</strong>
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
                    <label class="control-label text-uppercase" for="input-quantity">@lang('common.qty'):</label>
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
    @if($product->content)
        <!-- Product Description Starts -->
        <div class="product-info-box">
            <h4 class="heading">Description</h4>
            <div class="content panel-smart">
                {!! $product->content !!}
            </div>
        </div>
    @endif
    <!-- Product Description Ends -->

    <!-- Related Products Starts -->
    <div class="product-info-box">
        <h4 class="heading">@lang("common.Related Products")</h4>
        <!-- Products Row Starts -->
        <div class="row">
            @foreach($product_relate as $item)
            <!-- Product Starts -->
                <div class="col-md-4 col-sm-6">
                    @include('public.hoa.includes.element.product.item1',['product'=>$item])
                </div>
            <!-- Product Ends -->
            @endforeach
        </div>
        <!-- Products Row Ends -->
    </div>
    <!-- Related Products Ends -->
@endsection