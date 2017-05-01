@extends('public.'.$template_name.'.layouts.inside')

@section('title_page'){{$category->name}}@endsection

@section('keyword_page'){{$category->keyword or 'Xem ngay mua ngay'}}@endsection

@section('description_page'){{$category->descripton or 'Xem ngay mua ngay'}}@endsection

@section('breadcrumb')
    {!! Breadcrumbs::render('category',$category->name) !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-5">
            <div class="product-sort">
                <span class="product-sort-selected">Sắp xếp theo <b>{{$type_sort}}</b></span>
                <a href="#" class="product-sort-order fa fa-angle-down"></a>
                <ul>
                    <li><a href="?sort=by-name">Sắp xếp theo tên</a></li>
                    <li><a href="?sort=by-price">Sắp xếp theo giá tăng dần</a></li>
                    <li><a href="?sort=by-price-desc">Sắp xếp theo giá giảm dần</a></li>
                </ul>
            </div>
        </div>
        <div class="col-md-2 col-md-offset-5">
            <div class="product-view pull-right">
                <a class="fa fa-th-large {{($type_show!='th-horizontal'?'active':'')}}" href="?show=th-list"></a>
                <a class="fa fa-list {{($type_show=='th-horizontal'?'active':'')}}" href="?show=th-horizontal"></a>
            </div>
        </div>
    </div>
    <div class="row row-wrap">
        @if(count($products)>0)
            @foreach($products as $key => $product)
                @if($type_show == 'th-horizontal')
                    @include('public.hotdeal.includes.element.item-horizontal',['product'=>$product])
                @else
                    @include('public.hotdeal.includes.element.item1',['product'=>$product])
                    @if(($key+1)%3 ==0 )<div class="clearfix break-line"></div>@endif
                @endif

            @endforeach
        @else
            <div class="no-product">Không tìm thấy sản phẩm</div>
        @endif
    </div>
    <div class="gap"></div>
@endsection

