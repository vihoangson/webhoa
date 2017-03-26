<div class="product-col">
    <div class="image">
        <a href="/product/{{$product->id}}"><img src="/{{$product->image->find($product->main_img)->url or ''}}" alt="product" class="img-responsive" /></a>
    </div>
    <div class="caption">
        <h4><a href="/product/{{$product->id}}">{{$product->title}}</a></h4>
        <div class="description">
            {{$product->summary}}
        </div>
        <div class="price">
            @if($product->price_sale)
                <span class="price-new">{{$product->price_sale_formated}}</span>
                <span class="price-old">{{$product->price_formated}}</span>
            @else
                <span class="price-new">{{$product->price_formated}}</span>
            @endif
        </div>
        <div class="cart-button button-group">
            <a href="/product/add_cart/{{$product->id}}" class="btn btn-cart">
                @lang('common.order_button')
            </a>
        </div>
    </div>
</div>