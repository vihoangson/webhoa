@extends('layouts.admin.master')
@section('content')
    <h1>Post</h1>

    <table class="footable table table-stripped toggle-arrow-tiny" data-page-size="15">
        <thead>
        <tr>
            <th data-sort-ignore="true"></th>
            <th data-toggle="true">Product Name</th>
            <th data-hide="phone">Model</th>
            <th data-hide="all">Description</th>
            <th data-hide="phone">Price</th>
            <th data-hide="phone,tablet">Quantity</th>
            <th data-hide="phone">Status</th>
            <th class="text-right" data-sort-ignore="true">Action</th>
        </tr>
        </thead>
        <tbody>
        @if(isset($posts))
            @foreach($posts as $post)
                <tr>
                    <td>
                    </td>
                    <td>
                        {{$post->title}}
                    </td>
                    <td>
                        {{$post->summary}}
                    </td>
                    <td>
                        {{$post->slug}}
                    </td>
                    <td>

                    </td>
                    <td>

                    </td>
                    <td>
                        {!! ($post->active == 1 ?'<span class="label label-primary">Enable</span>':'<span class="label label-danger">Disable</span>') !!}
                    </td>
                    <td class="text-right">
                        <div class="btn-group">
                            <a href="/post/{{$post->id}}" target="_blank" class="btn-white btn btn-xs">View</a>
                            <a href="/admin/post/{{$post->id}}/edit" class="btn-white btn btn-xs">Edit</a>
                            {!! Form::open(['url' => '/admin/post/'.$post->id, 'method' => 'delete' ,'class'=>'confirm-action']) !!}
                            <button type="submit" name="id" value="{{$post->id}}"
                                    href="/admin/post/{{$post->id}}/destroy" class="btn-white btn btn-xs">Delete
                            </button>
                            {!! Form::close() !!}
                        </div>
                    </td>
                </tr>
            @endforeach
        @endif
        </tbody>
        <tfoot>
        <tr>
            <td colspan="6">
                {!! $posts->render() !!}
                {{--<ul class="pagination pull-right"></ul>--}}
            </td>
        </tr>
        </tfoot>
    </table>
    <div><a href="/admin/post/create" class="btn btn-primary"><i class="glyphicon-plus"></i> Create post</a></div>
@endsection