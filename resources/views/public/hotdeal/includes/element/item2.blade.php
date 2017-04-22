<a class="col-md-3" href="/product/{{$product->slug}}">
    <div class="product-thumb">
        <header class="product-header">
            <img src="/{{$product->image->find($product->main_img)->url or ''}}" alt="Image Alternative text"
                 title="Food is Pride"/>
        </header>
        <div class="product-inner">
            <h5 class="product-title">{{$product->title}}</h5>
            <p class="product-desciption">Morbi justo turpis ornare ridiculus justo parturient mauris</p>
            <div class="product-meta"><span class="product-time"><i
                            class="fa fa-clock-o"></i> 3 days 35 h remaining</span>
                <ul class="product-price-list">
                    <li><span class="product-price">{{$product->price_formated}}</span>
                    </li>
                    <li><span class="product-old-price">{{$product->price_sale_formated}}</span>
                    </li>
                    <li><span class="product-save">Save 38%</span>
                    </li>
                </ul>
            </div>
            <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
        </div>
    </div>
</a>