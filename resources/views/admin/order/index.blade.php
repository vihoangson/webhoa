@extends('layouts.admin.master')
@section('content')
    <h1>Order</h1>

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
            <th class="text-right hidden" data-sort-ignore="true">Action</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($orders))
            @foreach($orders as $order)
                <tr>
                    <td>

                    </td>
                    <td>
                        @foreach($order->data_cache as $key => $value)
                            <div><strong>{{$key}}:</strong> {!! (is_array($value)?var_dump($value):$value) !!}</div>
                        @endforeach
                    </td>
                    <td>
                    </td>
                    <td>
                        <div>Name: {{$order->customer->name}}</div>
                        <div>Address: {{$order->customer->address}}</div>
                        <div>Tel: {{$order->customer->tel}}</div>
                        <div>Email: {{$order->customer->email}}</div>
                        <div>City: {{$order->customer->city}}</div>
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>
                    </td>
                    <td class="text-right">
                        <div class="btn-group hidden">
                            <a href="/post/{{$order->id}}" target="_blank" class="btn-white btn btn-xs">View</a>
                            <a href="/admin/post/{{$order->id}}/edit" class="btn-white btn btn-xs">Edit</a>
                            {!! Form::open(['url' => '/admin/post/'.$order->id, 'method' => 'delete']) !!}
                            <button type="submit" name="id" value="{{$order->id}}" href="/admin/post/{{$order->id}}/destroy" class="btn-white btn btn-xs">Delete</button>
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
                {!! $orders->render() !!}
                {{--<ul class="pagination pull-right"></ul>--}}
            </td>
        </tr>
        </tfoot>
    </table>
    <div><a href="/admin/post/create" class="btn btn-primary"><i class="glyphicon-plus"></i> Create post</a></div>
@endsection