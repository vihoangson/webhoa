@extends('layouts.admin.master')

@section('content')
    <h1>Order</h1>
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
                <td>Edit | Delete</td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route("admin.setting.add_setting")}}">Add setting</a>

@endsection