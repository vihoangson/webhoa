@extends('layouts.admin.master')
@section('content')
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <div class="row">
        @if(isset($menu->id))
            {!! Form::open(['url' => '/admin/menu/'.$menu->id, 'method' => 'PUT','class'=>'form-horizontal', 'files' => true]) !!}
        @else
            {!! Form::open(['url' => '/admin/menu', 'method' => 'post','class'=>'form-horizontal', 'files' => true]) !!}
        @endif
        <div class="hr-line-dashed"></div>
        <div class="form-menu"><label class="col-sm-2 control-label">{!! Form::label('name','Name:') !!}</label>
            <div class="col-sm-10">
                {!! Form::text('name',(isset($menu->name)?$menu->name:''),['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-menu"><label class="col-sm-2 control-label">{!! Form::label('link','Link:') !!}</label>
            <div class="col-sm-10">
                {!! Form::text('link',(isset($menu->link)?$menu->link:''),['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="hr-line-dashed"></div>
        <div class="form-menu"><label class="col-sm-2 control-label">{!! Form::label('group_name','Group name:') !!}</label>
            <div class="col-sm-10">
                {!! Form::text('group_name',(isset($menu->group_name)?$menu->group_name:''),['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-menu">
            <div class="col-sm-4 col-sm-offset-2">
                <button class="btn btn-white" type="submit">Cancel</button>
                <button class="btn btn-primary" type="submit">Save changes</button>
            </div>
        </div>

        {!! Form::close() !!}
    </div>
@endsection

@section('custom_header')

@endsection

@section('custom_footer')

@endsection
