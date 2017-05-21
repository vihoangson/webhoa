@extends('layouts.admin.master')
@section('content')
    <h1>Product</h1>

    <div><a href="/admin/product/create" class="btn btn-primary"><i class="glyphicon-plus"></i> Create product</a></div>

    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
        <thead>
        <tr>
            <th data-hide="phone">Slug</th>
            <th data-sort-ignore="true"></th>
            <th data-toggle="true">Product Name</th>
            <th data-hide="phone">Brand</th>
            <th data-hide="all">Price</th>
            <th data-hide="phone">Price sale</th>
            <th data-hide="phone,tablet" >Categirt</th>
            <th data-hide="phone">Status</th>
            <th class="text-right" data-sort-ignore="true">Action</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($products))
            @foreach($products as $product)
                <tr>
                    <td>
                        {{$product->slug}}
                    </td>
                    <td>
                        <div class="" style="width:40px; height:40px;background:url('/{{$product->image->find($product->main_img)->url or ''}}') center center no-repeat;background-size: 100% ;"></div>
                    </td>
                    <td>
                        {{$product->title}}
                    </td>
                    <td>
                        {{$product->brand}}
                    </td>
                    <td>
                        {{$product->price_formated}}
                    </td>
                    <td>
                        {{$product->price_sale_formated}}
                    </td>
                    <td>
                        @if(isset($product->category ))
                            @foreach($product->category as $cat)
                                <div class="label label-success">{{$cat->name}}</div>
                            @endforeach
                        @endif
                    </td>
                    <td>
                        {!! ($product->active == 1 ?'<span class="label label-primary">Enable</span>':'<span class="label label-danger">Disable</span>') !!}
                        {!! ($product->homepage == 1 ?'<span class="label label-info">Trang chủ</span>':'') !!}
                        {!! ($product->promotion == 1 ?'<span class="label label-warning">Quảng cáo</span>':'') !!}
                    </td>
                    <td class="text-right col-md-1">
                        <div class="btn-group">
                            <a href="/product/{{$product->id}}" target="_blank" class="btn-white btn btn-xs">View</a>
                            <a href="/admin/product/{{$product->id}}/edit" class="btn-white btn btn-xs">Edit</a>
                            {!! Form::open(['url' => '/admin/product/'.$product->id, 'method' => 'delete','class'=>'confirm-action']) !!}
                            <button type="submit" name="id" value="{{$product->id}}" href="/admin/product/{{$product->id}}/destroy" class="btn-white btn btn-xs">Delete</button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
        <tfoot>
        <tr>
            <td colspan="6">
                {!! $products->render() !!}
                {{--<ul class="pagination pull-right"></ul>--}}
            </td>
        </tr>
        </tfoot>
    </table>
    <div><a href="/admin/product/create" class="btn btn-primary"><i class="glyphicon-plus"></i> Create product</a></div>
@endsection

@section('custom_footer')
@endsection