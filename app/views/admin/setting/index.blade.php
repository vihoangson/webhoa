@extends('layouts.admin.master')

@section('content')

    <!-- Main content -->
    <section class="content">

        <!-- SELECT2 EXAMPLE -->
        <div class="box box-default">
            <div class="box-header with-border">
                <h3 class="box-title">form</h3>


                <div class="box-tools pull-right">
                    <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i></button>
                    <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-remove"></i></button>
                </div>
            </div>
            <!-- /.box-header -->

            <div class="box-body">
                <div class="col-md-12">
                    {{message()}}
                </div>
                {!! Form::open(['route'=>'admin.common.setting.add_setting','class'=>"form-horizontal"])!!}
                <div class="col-sm-12">
                    @if(App::environment('dev'))
                        <div class="col-sm-2 form-group pull-right" >
                            <button type="button" id="btn-add-more-setting" class="btn btn-primary pull-right">Add setting field</button>
                        </div>
                    @endif
                </div>
                <div class="form-group col-sm-12"  id="add-more-setting" style="display: none;">
                    <div class="row">
                        {!! Form::hidden('code',$code) !!}
                        <div class=" col-sm-2" >
                            {{--{!! Form::select('type',SettingField::getTypes(),null,['class'=>'form-control']) !!}--}}
                        </div>
                        <div class=" col-sm-2" >
                            {!! Form::text('name',null,['class'=>'form-control','placeholder'=>'Name']) !!}
                        </div>
                        <div class="col-sm-2" >
                            {!! Form::text('setting_key',null,['class'=>'form-control','placeholder'=>'Setting key']) !!}
                        </div>

                        <div class="col-sm-2" >
                            {!! Form::text('setting_value',null,['class'=>'form-control','placeholder'=>'Default value' ]) !!}
                        </div>
                        <div class="col-sm-3" >
                            {!! Form::text('data',null,['class'=>'form-control','placeholder'=>'Data text (is json if is select box' ]) !!}
                        </div>
                        <div class="col-sm-1" >
                            {!! Form::submit('Submit',['class'=>'btn btn-primary']) !!}
                        </div>
                    </div>
                    <div class="row">
                        <hr/>
                    </div>
                </div>
                <script type="text/javascript">
                    $(function(){
                        $('#btn-add-more-setting').click(function(){
                            $('#add-more-setting').toggle()
                        })
                    })
                </script>
                {!! Form::close()!!}

                {!! Form::open(['route'=>'admin.common.setting.save','class'=>"form-horizontal"])!!}
                {!! Form::hidden('code',$code) !!}
                <div class="row">
                    <div class="col-md-12">

                        @forelse ($settings as  $item)
                            <div class="form-group {{ empty($item->setting_key) ? ' has-error' : '' }}">

                                {!! Form::label($item->setting_key,$item->name,['class' => 'control-label col-sm-2']) !!}

                                <div class="col-sm-8 ">
                                    {!! Form::hidden('code',$code) !!}
                                    {{--{!! SettingField::{$item->type}($item) !!}--}}
                                    @if(App::environment('dev'))
                                        <p class="text text-danger"> get_setting('{{$item->setting_key}}')</p>
                                    @endif

                                </div>
                                @if(App::environment('dev'))
                                    <div class="col-sm-1">
                                        <a onclick="return confirm('You sure to delete ? ')" class="btn btn-danger" href="{{route('admin.common.setting.delete_setting',$item->id)}}"><i class="fa fa-remove"></i></a>
                                    </div>
                                @endif
                            </div>
                        @empty
                            <p></p>
                        @endforelse




                    </div>

                    <div class="col-md-12">
                        {!! Form::submit('Save',['class'=>'btn btn-primary']) !!}

                    </div>
                </div>

                <!-- /.row -->
                {!! Form::close() !!}
            </div>

            <!-- /.box-body -->
            <div class="box-footer">

            </div>
        </div>
        <!-- /.box -->


        <!-- /.row -->

    </section>
    <!-- /.content -->

@endsection