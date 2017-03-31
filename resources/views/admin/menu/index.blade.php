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
        @if(isset($menus))
            @foreach($menus as $menu)
                <tr  class="parent-level">
                    <td>{{$menu->name}}</td>
                    <td>{{$menu->link}}</td>
                    <td>{{$menu->group_name}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="text-right">
                        <div class="btn-menu">
                            <a href="/admin/menu/{{$menu->id}}/edit" class="btn-white btn btn-xs">Edit</a>
                        </div>
                    </td>
                </tr>
                @if($menu->children()->get())

                    @foreach($menu->children()->get() as $menu_1)
                        <tr class="child-level">
                            <td>{{$menu_1->name}}</td>
                            <td>{{$menu_1->link}}</td>
                            <td>{{$menu_1->group_name}}</td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td></td>
                            <td class="text-right">
                                <div class="btn-menu">
                                    <a href="/admin/menu/{{$menu_1->id}}/edit" class="btn-white btn btn-xs">Edit</a>
                                </div>
                            </td>
                        </tr>
                    @endforeach

                @endif

            @endforeach


        @endif
        </tbody>
    </table>
    <div><a href="/admin/menu/create" class="btn btn-primary"><i class="glyphicon-plus"></i> Create menu</a> <a href="/admin/menu/sort" class="btn btn-primary"> Sort</a></div>

@endsection