@extends('layouts.admin.master')
@section('content')
    <h1>Order</h1>


    @if(isset($orders))
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