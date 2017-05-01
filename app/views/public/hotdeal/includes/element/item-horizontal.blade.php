<div class="product-thumb product-thumb-horizontal">
    <header class="product-header">
        <img src="/{{$product->image->find($product->main_img)->url or ''}}" alt="Image Alternative text" title="{{$product->slug}}">
    </header>
    <div class="product-inner">
        <ul class="icon-group icon-list-rating" title="3.2/5 rating">
            <li><i class="fa fa-star"></i>
            </li>
            <li><i class="fa fa-star"></i>
            </li>
            <li><i class="fa fa-star"></i>
            </li>
            <li><i class="fa fa-star-half-empty"></i>
            </li>
            <li><i class="fa fa-star-o"></i>
            </li>
        </ul>
        <h5 class="product-title">{{$product->slug}}</h5>
        <div class="product-desciption">{{$product->description}}</div>
        <div class="product-meta">

            @if($product->price_sale_formated)
                @if($product->date_end_sale_formated_countdown)
                    <div data-countdown="{{$product->date_end_sale_formated_countdown}}"></div>
                @endif
                    <ul class="product-price-list">
                        <li><span class="product-price">{{$product->price_sale_formated}}</span>
                        </li>
                        <li><span class="product-old-price">{{$product->price_formated}}</span>
                        </li>
                        <li><span class="product-save">Tiết kiệm {{$product->price_save}}</span>
                        </li>
                    </ul>
            @else
                <ul class="product-price-list">
                    <li><span class="product-price">{{$product->price_formated}}</span>
                    </li>
                </ul>
            @endif

            <ul class="product-actions-list">
                <li><a class="btn btn-sm" href="/product/add_cart/{{$product->slug}}"><i class="fa fa-shopping-cart"></i> To Cart</a>
                </li>
                <li><a class="btn btn-sm" href="/product/{{$product->slug}}"><i class="fa fa-bars"></i> Details</a>
                </li>
            </ul>
        </div>
    </div>
</div>