@extends('layouts.admin.master')
@section('content')
    <h1>Add store</h1>

    <div class="row">
        <div class="col-xs-12 col-md-8">
            @if(isset($store->id))
                {!! Form::open(['route' => ['admin.store.update',$store->id], 'method' => 'PUT','class'=>'form-horizontal', 'files' => true]) !!}
            @else
                {!! Form::open(['route' => 'admin.store.store', 'method' => 'post','class'=>'form-horizontal', 'files' => true]) !!}
            @endif


            <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('active','Active:') !!}</label>
                <div class="col-sm-10">
                    <input type="checkbox" name="active"  value="1" class="js-switch" {{(isset($store->active) && $store->active == 1?'checked':'')}} />
                </div>
            </div>

            <div class="hr-line-dashed"></div>
            <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('title','Tên gian hàng:') !!}</label>
                <div class="col-sm-10">
                    {!! Form::text('name',(isset($store->name)?$store->name:''),['class'=>'form-control']) !!}
                </div>
            </div>

                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('summary','Giới thiệu về gian hàng:') !!}</label>
                    <div class="col-sm-10">
                        {!! Form::textarea('summary',(isset($store->summary)?$store->summary:''),['class'=>'form-control']) !!}
                    </div>
                </div>

            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                    <a class="btn btn-white" href="{{route('admin.store.index')}}">Cancel</a>
                    <button class="btn btn-primary" type="submit">Save changes</button>
                </div>
            </div>
            {!! Form::close() !!}
        </div>
    </div>
@endsection

@section('custom_header')
    <link href="{{$template_admin_path}}css/plugins/switchery/switchery.css" rel="stylesheet">

    <link href="{{$template_admin_path}}css/plugins/datapicker/datepicker3.css" rel="stylesheet">
@endsection

@section('custom_footer')

    <script src="{{$template_admin_path}}js/plugins/switchery/switchery.js"></script>
    <script>

        var elem = document.querySelector('.js-switch');
        var switchery = new Switchery(elem, { color: '#1AB394' });
    </script>

    <script src="{{$template_admin_path}}js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <script>

        // datepicker
        $('.input-daterange').datepicker({
            format: "dd/mm/yyyy",
            keyboardNavigation: false,
            forceParse: false,
            autoclose: true
        });
    </script>

@endsection