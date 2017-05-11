@extends('layouts.admin.master')
@section('content')
    <div class="row">
        <div class="well col-md-4">
            <h1>Import product</h1>
            {!! Form::open(['route' => 'admin.import.process', 'method' => 'post','files'=>true]) !!}
            {!! Form::file('file', ['class' => 'form-control']) !!}
            <hr>
            {!! Form::submit('Upload file', ['class' => 'btn btn-primary btn-block']) !!}
            <a href="/file_import_sample/list.sample.xls" class="btn btn-success btn-block">Download file sample excel </a>
            {!! Form::close() !!}
        </div>
    </div>

@endsection

@section('custom_footer')
@endsection