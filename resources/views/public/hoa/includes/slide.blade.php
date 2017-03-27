<!-- Latest Products Starts -->
<section class="product-carousel">
    <div class="container">
        <!-- Heading Starts -->
        <h2 class="product-head">@lang('common.new product')</h2>
        <!-- Heading Ends -->
        <!-- Products Row Starts -->
        <div class="row">
            <div class="col-xs-12">
<!-- Product Carousel Starts -->
<div id="owl-product" class="owl-carousel">
    @foreach($products as $key => $product)
        @include('public.'.$template_name.'.includes.element.item1')
    @endforeach
</div>
<!-- Product Carousel Ends -->
            </div>
        </div>
        <!-- Products Row Ends -->
    </div>
</section>
<!-- Latest Products Ends -->