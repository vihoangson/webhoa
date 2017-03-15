@extends('layouts.homepage')
@section("title_page","Homepage")
@section('custom_header')
    <link rel="stylesheet" href="{!! asset('assets/styles/homepage.css') !!}">
@endsection
@section('content')
    <h1 class="cover-heading">Full screen background cover page.</h1>

    <p class="lead">Cover is a one-page template for building simple and
        beautiful home pages. Download, edit the text, and add your own
        fullscreen background color and photo to make it your own.

        <small>    <br> <a href="http://bootsnipp.com/iframe/g6GWQ" target=
            "_blank">Best viewed on full screen</a></small>

    </p>

    <p class="lead"><a class="btn btn-lg btn-info" href="#">Learn
            more</a></p>
@endsection
