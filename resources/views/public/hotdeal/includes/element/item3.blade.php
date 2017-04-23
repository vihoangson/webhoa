<a class="col-md-4" href="/product/{{$product->slug}}">
    <div class="product-thumb">
        <header class="product-header">
            <img src="/{{$product->image->find($product->main_img)->url or ''}}"
                 alt="Image Alternative text" title="a turn"/>
        </header>
        <div class="product-inner">
            <h5 class="product-title">{{$product->title}}</h5>
            <p class="product-desciption">Tortor parturient id fermentum dictum enim maecenas
                curabitur</p>
            <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 2 days 7 h remaining</span>
                <ul class="product-price-list">
                    <li><span class="product-price">{{$product->price_sale_formated}}</span>
                    </li>
                    <li><span class="product-old-price">{{$product->price_formated}}</span>
                    </li>
                    <li><span class="product-save">Save 64%</span>
                    </li>
                </ul>
            </div>
            <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
        </div>
    </div>
</a>
