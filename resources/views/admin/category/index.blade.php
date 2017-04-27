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
        @if(isset($categories))
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->name}}</td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td></td>
                    <td class="text-right">
                        <div class="btn-group">
                            <a href="/category/{{$category->id}}" class="btn-white btn btn-xs" target="_blank">View</a>
                            <a href="/admin/category/{{$category->id}}/edit" class="btn-white btn btn-xs">Edit</a>
                            {!! Form::open(['url' => '/admin/category/'.$category->id, 'method' => 'delete','class'=>'confirm-action']) !!}
                            <button type="submit" name="id" value="{{$category->id}}" href="/admin/product/{{$category->id}}/destroy" class="btn-white btn btn-xs">Delete</button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
    </table>
    <div><a href="/admin/category/create" class="btn btn-primary"><i class="glyphicon-plus"></i> Create category</a></div>
@endsection