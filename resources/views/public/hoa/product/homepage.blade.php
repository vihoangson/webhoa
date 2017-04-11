@extends('public.'.$template_name.'.layouts.homepage')
@section('content')
    <form class="form-horizontal" role="form" method="POST" action="{{ url('/login') }}">
    {{ csrf_field() }}
        <input id="email" type="email" class="form-control" name="email" value="{{ old('email') }}">
        <input id="password" type="password" class="form-control" name="password">
        <input type="checkbox" name="remember"> Remember Me
        <button type="submit" class="btn btn-primary">
            <i class="fa fa-btn fa-sign-in"></i> Login
        </button>
    </form>
    @include('public.'.$template_name.'.includes.slide')
    @include('public.'.$template_name.'.includes.banner')
    @include('public.'.$template_name.'.includes.product_list')
@endsection

