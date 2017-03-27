@extends('layouts.admin.master')
@section('content')
{!! Form::open(['method'=>'post']) !!}
    Tempalte_name: {!! Form::text('template_name',$tempalte_name,['class'=>'form-control']) !!}
    {!! Form::submit() !!}
{!! Form::close() !!}
@endsection