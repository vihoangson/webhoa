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
        @if(isset($group->id))
            {!! Form::open(['url' => '/admin/group/'.$group->id, 'method' => 'PUT','class'=>'form-horizontal', 'files' => true]) !!}
        @else
            {!! Form::open(['url' => '/admin/group', 'method' => 'post','class'=>'form-horizontal', 'files' => true]) !!}
        @endif
        <div class="hr-line-dashed"></div>
        <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('name','Name:') !!}</label>
            <div class="col-sm-10">
                {!! Form::text('name',(isset($group->name)?$group->name:''),['class'=>'form-control']) !!}
            </div>
        </div>
        <div class="form-group">
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
