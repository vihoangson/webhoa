@extends('public.'.$template_name.'.layouts.homepage')
@section('content')
    @include('public.'.$template_name.'.includes.slide')
    @include('public.'.$template_name.'.includes.banner')
    @include('public.'.$template_name.'.includes.product_list')
@endsection

