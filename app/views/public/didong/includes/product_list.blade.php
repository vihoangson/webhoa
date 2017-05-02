<!-- Featured Products Starts -->
<section class="products-list">
    <div class="container">
        <!-- Heading Starts -->
        <h2 class="product-head">@lang('common.Featured Products')</h2>
        <!-- Heading Ends -->
        <!-- Products Row Starts -->
        <div class="row">
        @foreach($feature_products as $key => $product)
            <!-- Product #1 Starts -->
            <div class="col-md-3 col-sm-6">
                @include('public.'.$template_name.'.includes.element.product.item2')
            </div>
            <!-- Product #1 Ends -->
        @endforeach

        </div>
        <!-- Products Row Ends -->
    </div>
</section>
<!-- Featured Products Ends -->