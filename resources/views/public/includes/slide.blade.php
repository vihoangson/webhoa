<!-- Latest Products Starts -->
<section class="product-carousel">
    <div class="container">
        <!-- Heading Starts -->
        <h2 class="product-head">Latest Products</h2>
        <!-- Heading Ends -->
        <!-- Products Row Starts -->
        <div class="row">
            <div class="col-xs-12">
<!-- Product Carousel Starts -->
<div id="owl-product" class="owl-carousel">
    @foreach($products as $key => $product)
        <div class="item">
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
                        <span class="price-new">{{number_format($product->price_sale)}}đ</span>
                        <span class="price-old">{{number_format($product->price)}}đ</span>
                    </div>
                    <div class="cart-button button-group">
                        <a href="/product/add_cart/{{$product->id}}" class="btn btn-cart">
                            Đặt hoa
                        </a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach
</div>
<!-- Product Carousel Ends -->
            </div>
        </div>
        <!-- Products Row Ends -->
    </div>
</section>
<!-- Latest Products Ends -->