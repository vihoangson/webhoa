@extends('public.layouts.homepage')
@section('content')
    {!! Breadcrumbs::render('home') !!}
    {!! Breadcrumbs::render('contact') !!}
    {!! Breadcrumbs::render('contact2') !!}

    @include('public.includes.slide')
    @include('public.includes.banner')
    @include('public.includes.product_list')
@endsection

