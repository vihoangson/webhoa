@extends('layouts.master')
@section('content')
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    {!! Form::open(['url' => '/post', 'method' => 'post']) !!}
        {!! Form::label('title','Title:') !!}
        {!! Form::text('title',null,['class'=>'form-control']) !!} <br />
        {!! Form::label('content','Content:') !!}
        {!! Form::text('content',null,['class'=>'form-control']) !!} </br>
        {!! Form::label('user_id','user_id:') !!}
        {!! Form::text('user_id',null,['class'=>'form-control']) !!} </br>
        {!! Form::label('slug','slug:') !!}
        {!! Form::text('slug',null,['class'=>'form-control']) !!} </br>
        {!! Form::submit('Them moi')!!}
    {!! Form::close() !!}
@endsection