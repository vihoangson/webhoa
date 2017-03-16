@extends('layouts.admin.master')
@section('content')
    @if($errors->any())
        <ul>
            @foreach($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    @endif
    <div class="row">
        <div class="col-xs-12 col-md-8">
            {!! Form::open(['url' => '/admin/product', 'method' => 'post','class'=>'form-horizontal']) !!}
                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('title','Title:') !!}</label>
                    <div class="col-sm-10">
                        {!! Form::text('title',null,['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('price','Price:') !!}</label>
                    <div class="col-sm-10">
                        <div class="input-group m-b"><span class="input-group-addon">$</span>
                            {!! Form::text('price',null,['class'=>'form-control']) !!}
                            <span class="input-group-addon">.00</span></div>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                    @foreach($data_category as $category)
                            <label class="checkbox-inline">{!! Form::checkbox('category[]',$category->id) !!} {!! $category->name !!} </label>
                    @endforeach
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                        <div class="summernote"> 1231</div>
                    </div>
                </div>
                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <button class="btn btn-white" type="submit">Cancel</button>
                        <button class="btn btn-primary" type="submit">Save changes</button>
                    </div>
                </div>

            {!! Form::close() !!}

        </div>


        <div class="col-xs-6 col-md-4">
            <form class="form-horizontal">
                <div class="form-group"><label class="col-sm-2 control-label">Normal</label>
                    <div class="col-sm-10"><input type="text" class="form-control"></div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Input groups</label>

                    <div class="col-sm-10">
                        <div class="input-group m-b"><span class="input-group-addon">$</span> <input type="text" class="form-control"> <span class="input-group-addon">.00</span></div>
                    </div>
                </div>
            </form>
        </div>
    </div>
@endsection