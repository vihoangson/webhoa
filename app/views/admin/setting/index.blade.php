@extends('layouts.admin.master')

@section('content')
    <h1>Setting</h1>
    <table class="table table-hover">
        <thead>
        <tr>
            <th></th>
        </tr>
        </thead>
        <tbody>
        @foreach($settings as $setting)
            <tr>
                <td>{{$setting->id}}</td>
                <td>{{$setting->code}}</td>
                <td>{{$setting->setting_key}}</td>
                <td>{{$setting->setting_value}}</td>
                <td>{{$setting->name}}</td>
                <td>{{$setting->type}}</td>
                <td>{{$setting->data}}</td>
                <td><a class='btn-white btn btn-xs' href="{{route('admin.setting.edit_setting',['id'=>$setting->id])}}">Edit</a>
                    {!! Form::open(['url' => '/admin/setting/'.$setting->id, 'method' => 'delete','class'=>'confirm-action']) !!}
                    <button type="submit" name="id" value="{{$setting->id}}" href="/admin/setting/{{$setting->id}}/destroy" class="btn-white btn btn-xs">Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route("admin.setting.add_setting")}}">Add setting</a>

@endsection