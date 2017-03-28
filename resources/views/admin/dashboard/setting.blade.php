@extends('layouts.admin.master')


@section('custom_header')
    <link href="{{$template_admin_path}}css/plugins/iCheck/custom.css" rel="stylesheet">
    <link href="{{$template_admin_path}}css/plugins/awesome-bootstrap-checkbox/awesome-bootstrap-checkbox.css" rel="stylesheet">
@endsection

@section('custom_footer')

    <!-- iCheck -->
    <script src="{{$template_admin_path}}js/plugins/iCheck/icheck.min.js"></script>
    <script>
        $(document).ready(function () {
            $('.i-checks').iCheck({
                checkboxClass: 'icheckbox_square-green',
                radioClass: 'iradio_square-green',
            });
        });
    </script>
@endsection


@section('content')
{!! Form::open(['method'=>'post','class'=>'form-horizontal']) !!}
<div class="form-group"><label class="col-sm-2 control-label">Checkboxes &amp; radios <br><small class="text-navy">Custom elements</small></label>
    <div class="hidden"><div class="i-checks"><label> <input type="checkbox" value=""> <i></i> Option one </label></div>
    <div class="i-checks"><label> <input type="checkbox" value="" checked=""> <i></i> Option two checked </label></div>
    <div class="i-checks"><label> <input type="checkbox" value="" disabled="" checked=""> <i></i> Option three checked and disabled </label></div>
    <div class="i-checks"><label> <input type="checkbox" value="" disabled=""> <i></i> Option four disabled </label></div>
    <div class="i-checks"><label> <input type="radio" checked="" value="option1" name="a"> <i></i> Option one </label></div>
    <div class="i-checks"><label> <input type="radio"  value="option2" name="a"> <i></i> Option two checked </label></div>
    <div class="i-checks"><label> <input type="radio" disabled="" checked="" value="option2"> <i></i> Option three checked and disabled </label></div>
    <div class="i-checks"><label> <input type="radio" disabled="" name="a"> <i></i> Option four disabled </label></div></div>
    <div class="col-sm-10">



    @foreach($templates_name_options as $key => $value)
            <div class="i-checks"><label> <input type="radio"  name="template_name" value="{{$value}}" {{$tempalte_name==$value?'checked=""':''}}> <i></i> {{$value}} </label></div>
        <div class="hidden">
            <label for="{{$value}}">{{$value}}</label>
            <input id="{{$value}}" type="radio" name="template_name" value="{{$value}}" {{$tempalte_name==$value?'checked':''}}>
        </div>
    @endforeach
    </div>
</div>
    {!! Form::submit() !!}
{!! Form::close() !!}
@endsection