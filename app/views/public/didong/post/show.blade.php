@extends('public.'.$template_name.'.layouts.inside')
@section('breadcrumb')
    {!! Breadcrumbs::render('post_detail',$post->title) !!}
@endsection
@section('content')
        <!-- Breadcrumb Ends -->
        <!-- Product Info Starts -->
        <div class="row product-info">
            <!-- Right Starts -->
            <div class="col-sm-12 product-details">
                <!-- Product Name Starts -->
                <h2>{{$post->title}}</h2>
                <!-- Available Options Ends -->

                <div class="summary">{!! $post->summary !!}</div>

                <div class="content-page">{!! $post->content !!}</div>

            </div>
            <!-- Right Ends -->
        </div>
        <!-- product Info Ends -->
        <!-- Product Description Starts -->
        <div class="product-info-box hidden">
            <h4 class="heading">Description</h4>
            <div class="content panel-smart">
            </div>
        </div>
        <!-- Product Description Ends -->

@endsection