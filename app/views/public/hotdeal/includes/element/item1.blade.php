<a class="col-md-4" href="/product/{{$product->slug}}">
    <div class="product-thumb">
        <header class="product-header">
            <img src="/{{$product->image->find($product->main_img)->url or ''}}" alt="Image Alternative text"
                 title="{{$product->title}}"/>
        </header>
        <div class="product-inner">
            <h5 class="product-title">{{$product->title}}</h5>
            <p class="product-desciption"></p>
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
            </div>
            <p class="product-location"><i class="fa fa-map-marker"></i> {{$product->place_sale}}</p>
        </div>
    </div>
</a>