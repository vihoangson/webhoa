@extends('layouts.admin.master')
@section('content')
    <div class="dd">
        <ol class="dd-list">
            @foreach($groups as $group)
                <li class="dd-item" data-id="{{$group->id}}">
                    <a href="#" class="dd-handle">{{$group->id}} - {{$group->name}}</a>
                    @if($group->children()->get())
                        <ol>
                            @foreach($group->children()->get() as $group_1)
                                <li class="dd-item" data-id="{{$group_1->id}}"><a href="#"
                                                                                  class="dd-handle">{{$group_1->id}} - {{$group_1->name}}</a>
                                </li>
                            @endforeach
                        </ol>
                    @endif
                </li>
            @endforeach
        </ol>
    </div>
    <hr>
<div><a href="/admin/group" class="btn btn-default">Back</a></div>
@endsection

@section('custom_header')
    <link href="/bower_components/jquery-sortable/source/css/bootstrap-switch.css" rel="stylesheet">
@endsection

@section('custom_footer')
    <script src='/bower_components/jquery-nestable/jquery.nestable.js'></script>
    <script>
        $('.dd').nestable({maxDepth: 2});
        $('.dd').on('change', function () {
            var json_sort = JSON.stringify($('.dd').nestable('serialize'))
            $.post('/update_ajax', {'process': 'sort_group', 'db': json_sort}, function (data) {
                console.log(data);
            });
        });
    </script>
@endsection
