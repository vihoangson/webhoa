@extends('layouts.admin.master')

@section('content')

    <h1>Order</h1>
    {!! Form::open(['route' => 'admin.setting.process.add_setting', 'method' => 'post']) !!}
        {!! Form::text('text', 'Text', ['class' => 'form-control']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection