@extends('layouts.public.master')
@section('content')

<div class="row wrapper border-bottom white-bg page-heading">
    <div class="col-lg-10">
        <h2>E-commerce grid</h2>
        <ol class="breadcrumb">
            <li>
                <a href="index.html">Home</a>
            </li>
            <li>
                <a>E-commerce</a>
            </li>
            <li class="active">
                <strong>Products grid</strong>
            </li>
        </ol>
    </div>
    <div class="col-lg-2">

    </div>
</div>
<div class="wrapper wrapper-content animated fadeInRight">
    <div class="row">
        @foreach($products as $key => $product)
            <div class="col-md-3">
                <div class="ibox">
                    <div class="ibox-content product-box">
                        <div class="product-imitation" style="background:url('/{{$product->image->first()->url or ''}}') center center no-repeat;background-size: 100% ;">
                        </div>
                        <div class="product-desc">
                                <span class="product-price">
                                    {{$product->price}}
                                </span>
                            <small class="text-muted">Category</small>
                            <a href="#" class="product-name"> {{$product->title}}</a>



                            <div class="small m-t-xs">
                                {{$product->summary}}
                            </div>
                            <div class="m-t text-righ">

                                <a href="#" class="btn btn-xs btn-outline btn-primary">Info <i class="fa fa-long-arrow-right"></i> </a>
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

