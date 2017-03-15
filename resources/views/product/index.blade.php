@extends('layouts.admin.master')
@section('content')
    <h1>Product</h1>

    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
        <thead>
        <tr>
            <th data-sort-ignore="true"></th>
            <th data-toggle="true">Product Name</th>
            <th data-hide="phone">Model</th>
            <th data-hide="all">Description</th>
            <th data-hide="phone">Price</th>
            <th data-hide="phone,tablet" >Quantity</th>
            <th data-hide="phone">Status</th>
            <th class="text-right" data-sort-ignore="true">Action</th>

        </tr>
        </thead>
        <tbody>
        @if(isset($products))
            @foreach($products as $product)
                <tr>
                    <td>
                        <img src="/uploads/product/{{$product->images}}">
                    </td>
                    <td>
                        {{$product->title}}
                    </td>
                    <td>
                        {{$product->title}}
                    </td>
                    <td>
                        {{$product->content}}
                    </td>
                    <td>
                        {{$product->price}}
                    </td>
                    <td>
                        1000
                    </td>
                    <td>
                        <span class="label label-primary">Enable</span>
                    </td>
                    <td class="text-right">
                        <div class="btn-group">
                            <a href="#" class="btn-white btn btn-xs">View</a>
                            <a href="#" class="btn-white btn btn-xs">Edit</a>
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