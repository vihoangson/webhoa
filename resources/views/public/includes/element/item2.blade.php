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
                <span class="price-new">{{number_format($product->price_sale)}}đ</span>
                <span class="price-old">{{number_format($product->price)}}đ</span>
            @else
                <span class="price-new">{{number_format($product->price)}}đ</span>
            @endif
        </div>
        <div class="cart-button button-group">
            <a href="/product/add_cart/{{$product->id}}" class="btn btn-cart">
                @lang('common.order_button')
            </a>
        </div>
    </div>
</div>