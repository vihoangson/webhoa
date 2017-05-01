@extends('layouts.public.master')
@section('title_page'){{$product->title}}@endsection
@section('keyword_page'){{$product->keyword or 'Xem ngay mua ngay'}}@endsection
@section('description_page'){{$product->descripton or 'Xem ngay mua ngay'}}@endsection
@section('breadcrumb')
    {!! Breadcrumbs::render('category') !!}
@endsection

@section('content')

@endsection

@section('custom_header')

@endsection

@section('custom_footer')
@endsection