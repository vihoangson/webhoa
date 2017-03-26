@extends('public.layouts.inside')
@section('breadcrumb')
    {!! Breadcrumbs::render('category',$category->name) !!}
@endsection

@section('content')
    <!-- Main Heading Starts -->
    <h2 class="main-heading2">
        {{$category->name}}
    </h2>
    <!-- Main Heading Ends -->
    <!-- Category Intro Content Starts -->
    <div class="row cat-intro hidden">
        <div class="col-sm-3">
            <img src="/assets/flower-shoppe/images/misc/cat-thumb-img1.png" alt="Image" class="img-responsive img-thumbnail" />
        </div>
        <div class="col-sm-9 cat-body">
            <p>
                Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            </p>
            <p>
                It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.
            </p>
        </div>
    </div>
    <!-- Category Intro Content Ends -->
    <!-- Product Filter Starts -->
    <div class="product-filter">
        <div class="row">
            <div class="col-md-4">
                <div class="display">
                    <a href="/assets/flower-shoppe/category-list.html">
                        <i class="fa fa-th-list" title="List View"></i>
                    </a>
                    <a href="/assets/flower-shoppe/category-grid.html" class="active">
                        <i class="fa fa-th" title="Grid View"></i>
                    </a>
                </div>
            </div>
            <div class="col-md-2 text-right">
                <label class="control-label">Sort</label>
            </div>
            <div class="col-md-3 text-right">
                <select class="form-control">
                    <option value="default" selected="selected">Default</option>
                    <option value="NAZ">Name (A - Z)</option>
                    <option value="NZA">Name (Z - A)</option>
                </select>
            </div>
            <div class="col-md-1 text-right">
                <label class="control-label" for="input-limit">Show</label>
            </div>
            <div class="col-md-2 text-right">
                <select id="input-limit" class="form-control">
                    <option value="1">1</option>
                    <option value="2">2</option>
                    <option value="3" selected="selected">3</option>
                </select>
            </div>
        </div>
    </div>
    <!-- Product Filter Ends -->
    <!-- Product Grid Display Starts -->
    <div class="row">
        @foreach($products as $key => $product)
        <!-- Product #1 Starts -->
        <div class="col-md-4 col-sm-6">
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
                        <span class="price-new">{{$product->price}}</span>
                        <span class="price-old">{{$product->price_sale}}</span>
                    </div>
                    <div class="cart-button button-group">
                        <a href="/product/add_cart/{{$product->id}}" class="btn btn-cart">
                            Add To Cart
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <!-- Product #1 Ends -->
        @endforeach
    </div>
    <!-- Product Grid Display Ends -->
@endsection

