@extends('layouts.public.master')
@section('content')
    <h1>Checkout</h1>
    {!! Form::open(['url'=>'/product/update_cart','method'=>'post']) !!}
    <table class="table">
        <thead>
            <tr>
                <th>Name</th>
                <th>QL</th>
                <th>Price</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody>
            @foreach($cart as $row)
                <tr>
                        <td>{{$row->name}}</td>
                    <td><input class="form-control" style="width:45px;text-align: center;" name="ql[{{$row->rowId}}]" value="{{$row->qty}}"></td>
                    <td>{{number_format($row->price)}}</td>
                    <td>{{number_format($row->total)}}</td>
                </tr>
            @endforeach
        </tbody>
        <tfoot>
        <tr>
            <td colspan="2">&nbsp;</td>
            <td>Total</td>
            <td>{{Cart::total()}}</td>
        </tr>
        </tfoot>
    </table>
    <button class="btn btn-default"><span class="glyphicon glyphicon-refresh"></span> Refresh</button>
    <a href="/product/payment" class="btn btn-primary">Checkout</a>
    {!! Form::close() !!}
@endsection

@section('custom_header')

@endsection

@section('custom_footer')

@endsection