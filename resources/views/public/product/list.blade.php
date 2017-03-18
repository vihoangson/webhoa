@extends('public.layouts.master')
@section('content')

<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        @foreach($products as $key => $product)
            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content product-box">
                        <a href="/product/{{$product->id}}">

                        <div class="product-imitation" style="background:url('/{{$product->image->find($product->main_img)->url or ''}}') center center no-repeat;background-size: 100% ;">
                        </div>
                    </a>
                    <div class="product-desc">
                                <span class="product-price">
                                    {{$product->price}}
                                </span>
                            <small class="text-muted">Category</small>
                            <a href="/product/{{$product->id}}" class="product-name"> {{$product->title}}</a>



                            <div class="small m-t-xs">
                                {{$product->summary}}
                            </div>
                            <div class="m-t text-righ">

                                <a href="/product/{{$product->id}}" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            @if(($key+1) % 4==0)
    </div>
    <div class="row">
            @endif
        @endforeach
    </div>
    {!! $products->render() !!}

</div>
@endsection

