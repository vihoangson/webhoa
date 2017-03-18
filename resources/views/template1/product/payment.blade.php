@extends('layouts.public.master')
@section('content')
    <h1>Payment</h1>
    {!! Form::open(['url'=>'/product/payment','method'=>'post']) !!}
    Name:
    <input name="name" class="form-control">
    Address:
    <input name="address" class="form-control">
    Tel:
    <input name="tel" class="form-control">
    <div><button type="submit" class="btn btn-primary">Finish</button></div>
    {!! Form::close() !!}
@endsection

@section('custom_header')

@endsection

@section('custom_footer')

@endsection