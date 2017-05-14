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
                <td>

                    <!-- Button trigger modal -->
                    <button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal_{{$setting->id}}"><i class="fa fa-eye"></i>  chi tiết</button>

                    <!-- Modal -->
                    <div class="modal fade" id="myModal_{{$setting->id}}" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
                        <div class="modal-dialog" role="document">
                            <div class="modal-content">
                                <div class="modal-header">
                                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                                    <h4 class="modal-title" id="myModalLabel">Modal title</h4>
                                </div>
                                <div class="modal-body">
                                    {!! $setting->setting_value !!}
                                </div>
                                <div class="modal-footer">
                                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                                    <button type="button" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </div>
                    </div>

                </td>
                <td>{{$setting->name}}</td>
                <td>{{$setting->type}}</td>
                <td>{{$setting->data}}</td>
                <td><a class='btn-white btn btn-xs' href="{{route('admin.setting.edit_setting',['id'=>$setting->id])}}"><i class="fa fa-pencil"></i> Edit</a>
                    {!! Form::open(['url' => '/admin/setting/'.$setting->id, 'method' => 'delete','class'=>'confirm-action']) !!}
                    <button type="submit" name="id" value="{{$setting->id}}" href="/admin/setting/{{$setting->id}}/destroy" class="btn-white btn btn-xs"><i class="fa fa-trash"></i> Delete</button>
                    {!! Form::close() !!}
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
    <a href="{{route("admin.setting.add_setting")}}" class="btn btn-primary"><i class="fa fa-plus"></i> Add setting</a>




@endsection