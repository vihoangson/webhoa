@extends('public.'.$template_name.'.layouts.homepage')
@section('feature')
    <div class="row row-wrap">
        @foreach($feature_products as $key => $product) @if ($key > 2) @break; @endif
            @include('public.hotdeal.includes.element.item1',['product'=>$product])
        @endforeach
    </div>
@endsection
@section('content')
    {{--New Deals--}}
    <h1 class="mb20">Deal mới <small><a href="#">Xem tất cả</a></small></h1>
    <div class="row row-wrap">
        @foreach($feature_products as $key => $product) @if ($key > 2) @break; @endif
            @include('public.hotdeal.includes.element.item1',['product'=>$product])
        @endforeach
    </div>
    <div class="row row-wrap">
        @foreach($products as $key => $product) @if ($key > 3) @break; @endif
            @include('public.hotdeal.includes.element.item2',['product'=>$product])
        @endforeach
    </div>
    <div class="gap gap-small"></div>

    {{--Popular--}}
    <h1 class="mb20 hidden">Popular <small><a href="#">View All</a></small></h1>
    <div class="row row-wrap hidden">
        @foreach($feature_products as $key => $product) @if ($key > 2) @break; @endif
            @include('public.hotdeal.includes.element.item2',['$product'=>$product])
        @endforeach
        <a class="col-md-4" href="#">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="/assets/themes/remtsoy/img/aspen_lounge_chair_800x600.jpg" alt="Image Alternative text" title="Aspen Lounge Chair" />
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Aspen Lounge Chair</h5>
                    <p class="product-desciption">Nec dapibus at facilisis euismod senectus magnis erat</p>
                    <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 1 day 60 h remaining</span>
                        <ul class="product-price-list">
                            <li><span class="product-price">$49</span>
                            </li>
                            <li><span class="product-old-price">$136</span>
                            </li>
                            <li><span class="product-save">Save 36%</span>
                            </li>
                        </ul>
                    </div>
                    <p class="product-location"><i class="fa fa-map-marker"></i> {{$product->place_sale}}</p>
                </div>
            </div>
        </a>
        <a class="col-md-4" href="#">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="/assets/themes/remtsoy/img/gamer_chick_800x600.jpg" alt="Image Alternative text" title="Gamer Chick" />
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Playstation Accessories</h5>
                    <p class="product-desciption">Nec dapibus at facilisis euismod senectus magnis erat</p>
                    <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 8 days 59 h remaining</span>
                        <ul class="product-price-list">
                            <li><span class="product-price">$77</span>
                            </li>
                            <li><span class="product-old-price">$119</span>
                            </li>
                            <li><span class="product-save">Save 65%</span>
                            </li>
                        </ul>
                    </div>
                    <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                </div>
            </div>
        </a>
        <a class="col-md-4" href="#">
            <div class="product-thumb">
                <header class="product-header">
                    <img src="/assets/themes/remtsoy/img/nikon_prime_love_800x600.jpg" alt="Image Alternative text" title="Nikon Prime love" />
                </header>
                <div class="product-inner">
                    <h5 class="product-title">Best Camera Lenthes</h5>
                    <p class="product-desciption">Nec dapibus at facilisis euismod senectus magnis erat</p>
                    <div class="product-meta"><span class="product-time"><i class="fa fa-clock-o"></i> 4 days 32 h remaining</span>
                        <ul class="product-price-list">
                            <li><span class="product-price">$82</span>
                            </li>
                            <li><span class="product-old-price">$142</span>
                            </li>
                            <li><span class="product-save">Save 58%</span>
                            </li>
                        </ul>
                    </div>
                    <p class="product-location"><i class="fa fa-map-marker"></i> Boston</p>
                </div>
            </div>
        </a>
    </div>
@endsection

