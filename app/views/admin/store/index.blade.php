@extends('layouts.admin.master')
@section('content')
    <h1>Coupon</h1>

    <a class="btn btn-default " href="{{route('admin.store.index',['show'=>"all"])}}" >View all</a>
    <a class="btn btn-default" href="{{route('admin.store.index')}}" >View active</a>
    <a class="btn btn-default" href="{{route('admin.store.index',['show'=>"close"])}}" >View close</a>

    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
        <thead>
        <tr>
            <th>Code</th>
            <th>Discount</th>
            <th>Ngày bắt đầu</th>
            <th>Ngày kết thúc</th>
            <th>Tình trạng</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($stores))
            @foreach($stores as $store)
                <tr>
                    <td>{{$store->name}}</td>
                    <td><a href="{{route('admin.store.edit',$store->id)}}" class="btn-white btn btn-xs">Edit</a></td>
                </tr>
            @endforeach
        @endif
        </tbody>
        <tfoot>
        <tr>
            <td colspan="6">

                {{--<ul class="pagination pull-right"></ul>--}}
            </td>
        </tr>
        </tfoot>
    </table>
    <div><a href="{{route('admin.store.create')}}" class="btn btn-primary"><i class="glyphicon-plus"></i> Create store</a></div>
@endsection

@section('custom_footer')
@endsection