@extends('layouts.admin.master')
@section('content')
    <h1>Product</h1>

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
                    <td>{{$coupon->starts_at}}</td>
                    <td>{{$coupon->ends_at}}</td>
                    <td>{!! ($coupon->active==1?'<span class="label label-success">Active</span>':'<span class="label label-danger">Close</span>') !!}</td>
                </tr>
            @endforeach
        @endif
        </tbody>
        <tfoot>
        <tr>
            <td colspan="6">
                {!! $coupons->render() !!}
                {{--<ul class="pagination pull-right"></ul>--}}
            </td>
        </tr>
        </tfoot>
    </table>
    <div><a href="/admin/product/create" class="btn btn-primary"><i class="glyphicon-plus"></i> Create product</a></div>
@endsection

@section('custom_footer')
@endsection