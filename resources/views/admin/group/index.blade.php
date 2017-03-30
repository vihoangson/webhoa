@extends('layouts.admin.master')
@section('content')
    <h1>Category</h1>

    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
        <thead>
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
        @if(isset($groups))
            @foreach($groups as $group)
                <tr>
                    <td>{{$group->name}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="text-right">
                        <div class="btn-group">
                            <a href="/group/{{$group->id}}" class="btn-white btn btn-xs" target="_blank">View</a>
                            <a href="/admin/group/{{$group->id}}/edit" class="btn-white btn btn-xs">Edit</a>
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div><a href="/admin/group/create" class="btn btn-primary"><i class="glyphicon-plus"></i> Create group</a> <a href="/admin/group/sort" class="btn btn-primary"> Sort</a></div>

@endsection