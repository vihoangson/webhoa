<a class="col-md-4" href="/product/{{$product->slug}}">
    <div class="product-thumb">
        <header class="product-header">
            <img src="/{{$product->image->find($product->main_img)->url or ''}}" alt="Image Alternative text"
                 title="The Hidden Power of the Heart"/>
        </header>
        <div class="product-inner">
            <h5 class="product-title">{{$product->title}}</h5>
            <p class="product-desciption">Praesent netus vitae hendrerit eu tellus nulla viverra</p>
            <div class="product-meta"><span class="product-time"><i
                            class="fa fa-clock-o"></i> 10 days 11 h remaining</span>
                @if($product->price_sale_formated)
                    <ul class="product-price-list">
                        <li><span class="product-price">{{$product->price_sale_formated}}</span>
                        </li>
                        <li><span class="product-old-price">{{$product->price_formated}}</span>
                        </li>
                        <li><span class="product-save">Save 64%</span>
                        </li>
                    </ul>
                @else
                    <ul class="product-price-list">
                        <li><span class="product-price">{{$product->price_formated}}</span>
                        </li>
                    </ul>
                @endif
            </div>
            <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
        </div>
    </div>
</a>