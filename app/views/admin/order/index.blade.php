@extends('layouts.admin.master')
@section('content')
    <h1>Order</h1>
    <ul class="nav nav-tabs">
        <li role="presentation" class="{{($status==-1?'active':"")}}"><a href="{{route('admin.order.show',-1)}}">All <span>{{array_sum($count_menu)}}</span></a></li>
        <li role="presentation" class="{{($status==0?'active':"")}}"><a href="{{route('admin.order.show',0)}}">Đang chờ xử lý {!! isset($count_menu[0])?'<span>'.$count_menu[0].'</span>':''!!}</a></li>
        <li role="presentation" class="{{($status==1?'active':"")}}"><a href="{{route('admin.order.show',1)}}">Đang giao hàng {!! isset($count_menu[1])?'<span>'.$count_menu[1].'</span>':''!!}</a></li>
        <li role="presentation" class="{{($status==2?'active':"")}}"><a href="{{route('admin.order.show',2)}}">Giao hàng thành công {!! isset($count_menu[2])?'<span>'.$count_menu[2].'</span>':''!!}</a></li>
        <li role="presentation" class="{{($status==-3?'active':"")}}"><a href="{{route('admin.order.show',3)}}">Đã hủy {!! isset($count_menu[3])?'<span>'.$count_menu[3].'</span>':''!!}</a></li>
    </ul>
    <table class="table table-hover">
        <thead>
        <tr>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @if(isset($orders))
            @foreach($orders as $order)
                <tr>
                    <td>
                        {{$order->id}}
                    </td>
                    <td>
                    </td>
                    <td>
                        @foreach($order->data_cache_formated as $key => $value)
                            <div>
                                <div><a href="/product/{{$value['id']}}">{{$value['name']}}</a></div>
                                <div>
                                    {{number_format($value['price'])}} x {{$value['qty']}}
                                    : {{number_format($value['subtotal'])}}
                                </div>
                            </div>
                        @endforeach
                            <hr>
                            <div><b>Tổng tiền đơn hàng: {{number_format($order->total_sum)}} đ</b></div>

                            @if($order->coupon_discount)
                                <div><span>Giảm giá: {{($order->coupon_discount?$order->coupon_discount."%":"")}}</span></div>
                                <div><b>Giá sau khi giảm: {{generate_discount($order->coupon_discount,number_format($order->total_sum),'GET_PRICE')}} đ</b></div>
                            @endif



                    </td>

                    <td>
                        <div>
                            <div>Name: {{$order->customer->name or '[Null]'}}</div>
                            <div>Address: {{$order->customer->address or '[Null]' }}</div>
                            <div>Tel: {{$order->customer->tel or '[Null]' }}</div>
                            <div>Email: {{$order->customer->email or '[Null]' }}</div>
                            <div>City: {{$order->customer->city or '[Null]'   }}</div>
                        </div>
                    </td>
                    <td>
                        {{$order->created_at}}
                    </td>
                    <td>{{$order->payment_method}}</td>
                    <td>{{($order->coupon_discount?$order->coupon_discount."%":"")}}</td>
                    <td>{{$order->coupon_code}}</td>
                    <td>{!! $order->button_change_status !!}</td>
                </tr>

            @endforeach
            <div class="clearfix"></div>
        @endif

        </tbody>
    </table>

    @if(isset($orders) && false)
        @foreach($orders as $order)
            <div class="order-detail">
                <div>
                    <h3>Chi tiết đơn hàng</h3>
                    @foreach($order->data_cache_formated as $key => $value)
                        <div>
                            <div><a href="/product/{{$value['id']}}">{{$value['name']}}</a></div>
                            <div>
                                {{number_format($value['price'])}} x {{$value['qty']}}
                                : {{number_format($value['subtotal'])}}
                            </div>
                        </div>
                    @endforeach

                    <div><b>Total: {{number_format($order->total_sum)}} đ</b></div>
                </div>
                <p>{{$order->payment_method}}</p>
                <p>{{$order->coupon_discount}}</p>
                <p>{{$order->coupon_code}}</p>
                <hr>
                <div>
                    <h3>Thông tin KH</h3>
                    <div>Name: {{$order->customer->name or '[Null]'}}</div>
                    <div>Address: {{$order->customer->address or '[Null]' }}</div>
                    <div>Tel: {{$order->customer->tel or '[Null]' }}</div>
                    <div>Email: {{$order->customer->email or '[Null]' }}</div>
                    <div>City: {{$order->customer->city or '[Null]'   }}</div>
                </div>
            </div>
        @endforeach
        <div class="clearfix"></div>
    @endif

    {!! $orders->render() !!}
@endsection