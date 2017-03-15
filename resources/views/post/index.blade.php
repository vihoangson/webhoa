@extends('layouts.master')
@section('content')
    <h1>Post</h1>
    @foreach($posts as $post)
        <h3>{{$post->title}}</h3>
        <p>{!! $post->content !!}</p>
    @endforeach
    {!! $posts->render() !!}
@endsection