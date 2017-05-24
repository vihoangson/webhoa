<div class="col-md-4 item3">
    <div class="product-thumb">
        <header class="product-header">
            <a href="/product/{{$product->slug}}">
            <img src="/{{$product->image->find($product->main_img)->url or ''}}"
                 alt="Image Alternative text" title="a turn"/>
            </a>
        </header>
        <div class="product-inner">
            <a href="/product/{{$product->slug}}">
            <h5 class="product-title">{{$product->title}}</h5>
            </a>
            <p class="product-desciption"></p>
            <div class="product-meta">
                @if($product->price_sale_formated)
                    @if($product->date_end_sale_formated_countdown)
                        <div class="is-countdown" data-countdown="{{$product->date_end_sale_formated_countdown}}"></div>
                    @else
                        <div class="no-countdown"></div>
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
                    <div class="no-countdown"></div>
                    <ul class="product-price-list">
                        <li><span class="product-price">{{$product->price_formated}}</span>
                        </li>
                    </ul>
                @endif
                    <hr class="dot-hr">
            </div>
            <a href="/product/add_cart/{{$product->slug}}" class="btn btn-primary btn-block "><i class="fa fa-shopping-cart"></i> Mua ngay</a>
            <p class="product-location"><i class="fa fa-map-marker"></i> {{$product->place_sale}}</p>
        </div>
    </div>
</div>
