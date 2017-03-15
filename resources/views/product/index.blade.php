@extends('layouts.admin.master')
@section('content')
    <h1>Product</h1>
    <div class="row show-grid">
        <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
    </div>

    <div class="row">
        <div class="col-lg-12">
            <div class="ibox float-e-margins">
                <div class="ibox-title">
                    <h5>Mobile and desktop</h5>
                    <div class="ibox-tools">
                        <a class="collapse-link">
                            <i class="fa fa-chevron-up"></i>
                        </a>
                        <a class="dropdown-toggle" data-toggle="dropdown" href="#">
                            <i class="fa fa-wrench"></i>
                        </a>
                        <ul class="dropdown-menu dropdown-user">
                            <li><a href="#">Config option 1</a>
                            </li>
                            <li><a href="#">Config option 2</a>
                            </li>
                        </ul>
                        <a class="close-link">
                            <i class="fa fa-times"></i>
                        </a>
                    </div>
                </div>
                <div class="ibox-content">

                    <p>Don't want your columns to simply stack in smaller devices? Use the extra small and medium device grid classes by adding
                        <code>.col-xs-*</code>
                        <code>.col-md-*</code> to your columns. See the example below for a better idea of how it all works.</p>
                    <div class="row show-grid">
                        <div class="col-xs-12 col-md-8">.col-xs-12 .col-md-8</div>
                        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                    </div>
                    <div class="row show-grid">
                        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                        <div class="col-xs-6 col-md-4">.col-xs-6 .col-md-4</div>
                    </div>
                    <div class="row show-grid">
                        <div class="col-xs-6">.col-xs-6</div>
                        <div class="col-xs-6">.col-xs-6</div>
                    </div>
                </div>
            </div>
        </div>

    </div>

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
@endsection