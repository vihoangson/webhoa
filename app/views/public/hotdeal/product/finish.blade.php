@extends('public.'.$template_name.'.layouts.inside')
@section('content')
    <div class="text-center">
        <h2>Đơn hàng của bạn đã được gửi đến chúng tôi.</h2>
        <hr>

        <h3>Cảm ơn bạn đã mua hàng mã số đơn hàng của bạn là: {{$code_order}}</h3>
        <p>Bạn sẽ nhận được email chi tiết đơn hàng.</p>

        <a class="btn btn-primary" href="{{route('product.check_order',$code_order)}}"><i class="fa fa-eye"></i> Kiểm tra trạng thái đơn hàng</a>
    </div>
@endsection

@section('custom_header')

@endsection

@section('custom_footer')

@endsection