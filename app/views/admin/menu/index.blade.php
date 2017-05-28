@extends('layouts.admin.master')
@section('custom_header')
    <style>
        .menu-table tr.parent-level{
            background: #dcdcdc;
        }

        .menu-table tr.child-level {
            background: #f1f1f1;
        }

        .menu-table tr.child-level td:first-child {
            padding-left: 40px;
        }

    </style>
@endsection


@section('content')
    <h1>Category</h1>

    <table class="footable table table-stripped toggle-arrow-tiny menu-table" data-page-size="15">
        <thead class="hidden">
        <tr>
            <th data-sort-ignore="true"></th>
            <th data-toggle="true">Product Name</th>
            <th data-hide="phone">Model</th>
            <th data-hide="all">Description</th>
            <th data-hide="phone">Price</th>
            <th data-hide="phone,tablet" >Quantity</th>
            <th data-hide="phone">Status</th>
            <th class="text-right" data-sort-ignore="true">Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($group_name as $group)
            <p><a href="{{route('admin.menu.list',['menu'=>$group->group_name])}}">{{$group->group_name}}</a></p>
        @endforeach
        </tbody>

    </table>
    <div><a href="/admin/menu/create" class="btn btn-primary"><i class="glyphicon-plus"></i> Create menu</a> <a href="{{route('admin.menu.sort',['menu'=>$group->group_name])}}" class="btn btn-primary"> Sort</a></div>

@endsection