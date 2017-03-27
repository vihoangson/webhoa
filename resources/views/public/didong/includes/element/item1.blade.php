<div class="product-col">
    <div class="image">
        <img src="/{{$product->image->find($product->main_img)->url or ''}}" alt="product" class="img-responsive img-center-sm img-center-xs" />
    </div>
    <div class="caption">
        <h4>
            <a href="/product/{{$product->id}}">{{$product->title}}</a>
        </h4>
        <div class="price">
            @if($product->price_sale)
                <span class="price-new">{{$product->price_sale_formated}}</span>
                <span class="price-old">{{$product->price_formated}}</span>
                @if($product->date_end_sale_formated_countdown)
                    <div data-countdown="{{$product->date_end_sale_formated_countdown}}"></div>
                @endif
            @else
                <span class="price-new">{{$product->price_formated}}</span>
            @endif
        </div>
        <div class="cart-button button-group">
            <a href="/product/add_cart/{{$product->id}}" class="btn btn-cart">
                <i class="fa fa-shopping-cart"></i>
                @lang('common.order_button')
            </a>
            <button type="button" title="Wishlist" class="btn btn-wishlist">
                <i class="fa fa-heart"></i>
            </button>
            <button type="button" title="Compare" class="btn btn-compare">
                <i class="fa fa-bar-chart-o"></i>
            </button>
        </div>
    </div>
</div>