@extends('layouts.admin.master')
@section('content')
    <h1>Coupon</h1>

    <a class="btn btn-default " href="{{route('admin.coupon.index',['show'=>"all"])}}" >View all</a>
    <a class="btn btn-default" href="{{route('admin.coupon.index')}}" >View active</a>
    <a class="btn btn-default" href="{{route('admin.coupon.index',['show'=>"close"])}}" >View close</a>

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
        @if(isset($coupons))
            @foreach($coupons as $coupon)
                <tr>
                    <td>{{$coupon->code}}</td>
                    <td>{{$coupon->discount}}%</td>
                    <td>{{$coupon->starts_at_formated}}</td>
                    <td>{{$coupon->ends_at_formated}}</td>
                    <td>{!! ($coupon->active==1?'<span class="label label-success">Active</span>':'<span class="label label-danger">Close</span>') !!}</td>
                    <td><a href="{{route('admin.coupon.edit',$coupon->id)}}" class="btn-white btn btn-xs">Edit</a></td>
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
    <div><a href="{{route('admin.coupon.create')}}" class="btn btn-primary"><i class="glyphicon-plus"></i> Create coupon</a></div>
@endsection

@section('custom_footer')
@endsection