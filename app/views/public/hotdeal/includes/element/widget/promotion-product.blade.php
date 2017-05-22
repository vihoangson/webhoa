<div class="sidebar-box">
    <h5>Quảng cáo</h5>
    @foreach($widget_promotion_product as $product)
        @include('public.hotdeal.includes.element.product.product-promotion',['product'=>$product])
    @endforeach
</div>