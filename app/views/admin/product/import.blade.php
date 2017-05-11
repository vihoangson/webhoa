@extends('layouts.admin.master')
@section('content')
    <h1>Import product</h1>
    {!! Form::open(['route' => 'admin.import.process', 'method' => 'post','files'=>true]) !!}

        {!! Form::file('file', ['class' => 'form-control']) !!}
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}

    {!! Form::close() !!}
@endsection

@section('custom_footer')
@endsection