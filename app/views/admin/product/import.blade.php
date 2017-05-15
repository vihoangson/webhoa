@extends('layouts.admin.master')
@section('content')
    <div class="row">
        <div class="col-md-3">
        </div>
        <div class="well col-md-6">
            <h1>Import product</h1>
            {!! Form::open(['route' => 'admin.import.process', 'method' => 'post','files'=>true]) !!}
            {!! Form::file('file', ['class' => 'form-control']) !!}
            <hr>
            {!! Form::submit('Upload file', ['class' => 'btn btn-primary btn-block']) !!}
            <a href="/file_import_sample/list.sample.xls" class="btn btn-success btn-block">Download file sample excel </a>
            {!! Form::close() !!}
        </div>
        <div class=" col-md-3">

        </div>
    </div>
    <div class="row">
        <div class="col-md-12">
            <h1>Hướng dẫn cách nhập ô content trong file excel</h1>
            <div dir="auto">
                <h2>Bước 1:</h2>
                <p>Xọan thảo văn bản trong trang web n&agrave;y</p>
                <p>
                    <a href="https://htmlg.com/html-editor/" target="_blank" rel="noreferrer">https://htmlg.com/html-editor/</a>
                </p>
                <h2>Bước 2:</h2>
                <p>Encode base64</p>
                <p>
                    <a href="https://www.base64encode.org/" target="_blank" rel="noreferrer">https://www.base64encode.org/</a>
                </p>
                <h2>Bước 3:</h2>
                <p>Lấy code copy v&agrave;o file excel</p>
            </div>
        </div>
    </div>
@endsection

@section('custom_footer')
@endsection