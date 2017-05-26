@extends('layouts.admin.master')
@section('content')
    <div class="dd">
        <ol class="dd-list">
            @foreach($menus as $menu)
                <li class="dd-item" data-id="{{$menu->id}}">
                    <a href="#" class="dd-handle">{{$menu->id}} - {{$menu->name}}</a>
                    @if($menu->children()->get())
                        <ol>
                            @foreach($menu->children()->get() as $menu_1)
                                <li class="dd-item" data-id="{{$menu_1->id}}"><a href="#"
                                                                                  class="dd-handle">{{$menu_1->id}} - {{$menu_1->name}}</a>
                                </li>
                            @endforeach
                        </ol>
                    @endif
                </li>
            @endforeach
        </ol>
    </div>
    <hr>
<div><a href="/admin/menu" class="btn btn-default">Back</a></div>
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
            $.post('/admin/update_ajax', {'process': 'sort_menu', 'db': json_sort}, function (data) {
                console.log(data);
            });
        });
    </script>
@endsection
