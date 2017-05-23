@extends('public.'.$template_name.'.layouts.inside')
@section('content')
    <div class="text-center">
        <h2>Đơn hàng <b>{{encode_code_order($order_code)}}</b> đang ở trạng thái</h2>
        <hr>
        <h3>{{$string_status}}</h3>

        <a class="btn btn-primary" href="{{route('product.index')}}"><i class="fa fa-home"></i> Trở lại trang chủ</a>
    </div>
@endsection

@section('custom_header')

@endsection

@section('custom_footer')

@endsection