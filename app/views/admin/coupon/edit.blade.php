@extends('layouts.admin.master')
@section('content')
    <h1>Add coupon</h1>

    <div class="row">
        <div class="col-xs-12 col-md-8">
            @if(isset($coupon->id))
                {!! Form::open(['route' => ['admin.coupon.update',$coupon->id], 'method' => 'PUT','class'=>'form-horizontal', 'files' => true]) !!}
            @else
                {!! Form::open(['route' => 'admin.coupon.store', 'method' => 'post','class'=>'form-horizontal', 'files' => true]) !!}
            @endif


            <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('active','Active:') !!}</label>
                <div class="col-sm-10">
                    <input type="checkbox" name="active"  value="1" class="js-switch" {{(isset($coupon->active) && $coupon->active == 1?'checked':'')}} />
                </div>
            </div>

            <div class="hr-line-dashed"></div>
            <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('title','Mã code:') !!}</label>
                <div class="col-sm-10">
                    {!! Form::text('code',(isset($coupon->code)?$coupon->code:''),['class'=>'form-control','required' => 'required','disabled'=>isset($coupon->id)?true:false]) !!}
                </div>
            </div>

                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('title','Discount:') !!}</label>
                    <div class="col-sm-10">
                        {!! Form::text('discount',(isset($coupon->discount)?$coupon->discount:''),['class'=>'form-control','required' => 'required']) !!}
                    </div>
                </div>

                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('title','Thời gian áp dụng:') !!}</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="input-daterange input-group" id="datepicker">
                                <input type="text" class="input-sm form-control" name="starts_at" value="{{(isset($coupon->starts_at_formated)?$coupon->starts_at_formated:'')}}"/>
                                <span class="input-group-addon">to</span>
                                <input type="text" class="input-sm form-control" name="ends_at" value="{{(isset($coupon->ends_at_formated)?$coupon->ends_at_formated:'')}}" />
                            </div>

                        </div>
                    </div>
                </div>

            <div class="form-group">
                <div class="col-sm-4 col-sm-offset-2">
                    <a class="btn btn-white" href="{{route('admin.coupon.index')}}">Cancel</a>
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