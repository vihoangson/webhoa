@extends('public.'.$template_name.'.layouts.inside')

@section('title_page'){{$category->name}}@endsection

@section('keyword_page'){{$category->keyword or 'Xem ngay mua ngay'}}@endsection

@section('description_page'){{$category->descripton or 'Xem ngay mua ngay'}}@endsection

@section('breadcrumb')
    {!! Breadcrumbs::render('category',$category->name) !!}
@endsection

@section('content')
    <div class="row">
        <div class="col-md-3">
            <div class="product-sort">
                <span class="product-sort-selected">sort by <b>Price</b></span>
                <a href="#" class="product-sort-order fa fa-angle-down"></a>
                <ul>
                    <li><a href="#">sort by Name</a>
                    </li>
                    <li><a href="#">sort by Date</a>
                    </li>
                    <li><a href="#">sort by Popularity</a>
                    </li>
                    <li><a href="#">sort by Rating</a>
                    </li>
                </ul>
            </div>
        </div>
        <div class="col-md-2 col-md-offset-7">
            <div class="product-view pull-right">
                <a class="fa fa-th-large active" href="#"></a>
                <a class="fa fa-list" href="/assets/themes/remtsoy/category-page-thumbnails-shop-horizontal.html"></a>
            </div>
        </div>
    </div>
    <div class="row row-wrap">
        @foreach($products as $product)
            @include('public.hotdeal.includes.element.item1',['product'=>$product])
        @endforeach
    </div>
    <ul class="pagination">
        <li class="prev disabled">
            <a href="#"></a>
        </li>
        <li class="active"><a href="#">1</a>
        </li>
        <li><a href="#">2</a>
        </li>
        <li><a href="#">3</a>
        </li>
        <li><a href="#">4</a>
        </li>
        <li><a href="#">5</a>
        </li>
        <li class="next">
            <a href="#"></a>
        </li>
    </ul>
    <div class="gap"></div>
@endsection

