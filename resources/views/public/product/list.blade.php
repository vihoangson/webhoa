@extends('public.layouts.master')
@section('content')
    <!-- Product Carousel Starts -->
    <div id="owl-product" class="owl-carousel">
        @foreach($products as $key => $product)
            <div class="item">
                <div class="product-col">
                    <div class="image">
                        <img src="/{{$product->image->find($product->main_img)->url or ''}}" alt="product" class="img-responsive" />
                    </div>
                    <div class="caption">
                        <h4><a href="/assets/flower-shoppe/product.html">{{$product->title}}</a></h4>
                        <div class="description">
                            {{$product->summary}}
                        </div>
                        <div class="price">
                            <span class="price-new">{{$product->price_sale}}</span>
                            <span class="price-old">{{$product->price}}</span>
                        </div>
                        <div class="cart-button button-group">
                            <a href="/product/add_cart/{{$product->id}}" class="btn btn-cart">
                                Add To Cart
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
    <!-- Product Carousel Ends -->

@endsection

