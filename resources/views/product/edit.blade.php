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
            {!! Form::open(['url' => '/admin/product', 'method' => 'post','class'=>'form-horizontal', 'files' => true]) !!}

                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('active','Active:') !!}</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="active" value="1" class="js-switch" checked />
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
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
                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('price_sale','Price sale:') !!}</label>
                    <div class="col-sm-10">
                        <div class="input-group m-b"><span class="input-group-addon">$</span>
                            {!! Form::text('price_sale',null,['class'=>'form-control']) !!}
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
                <div class="form-group"><label class="col-sm-2 control-label">Summary</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="summary"></textarea>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                        <textarea class="summernote" name="content"></textarea>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Images</label>
                    <div class="col-sm-10">
                        {!! Form::file('image[]',['multiple' => "multiple" ]) !!}
                    </div>
                </div>

                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Range select</label>
                    <div class="col-sm-10">
                        <div class="form-group" id="data_5">
                            <div class="input-daterange input-group" id="datepicker">
                                <input type="text" class="input-sm form-control" name="date_begin_sale" value=""/>
                                <span class="input-group-addon">to</span>
                                <input type="text" class="input-sm form-control" name="date_end_sale" value="" />
                            </div>
                        </div>
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

    </div>
@endsection

@section('custom_header')
    <link href="{{$template_path}}css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="/bower_components/summernote/dist/summernote.css" rel="stylesheet">
    <link href="{{$template_path}}css/plugins/switchery/switchery.css" rel="stylesheet">

@endsection

@section('custom_footer')
    <!-- Data picker -->
    <!-- Switchery -->
    <script src="{{$template_path}}js/plugins/switchery/switchery.js"></script>
    <script src="{{$template_path}}js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <script src="/bower_components/summernote/dist/summernote.min.js"></script>
<script>

    var elem = document.querySelector('.js-switch');
    var switchery = new Switchery(elem, { color: '#1AB394' });

    // datepicker
    $('#data_5 .input-daterange').datepicker({
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true
    });

    $(document).ready(function() {
        function uploadImage(image) {
            var data = new FormData();
            data.append("image_editor", image);
            $.ajax({
                url: '/up',
                cache: false,
                contentType: false,
                processData: false,
                data: data,
                type: "post",
                success: function(url) {
                    var image = $('<img>').attr('src', '/' + url);
                    $('.summernote').summernote("insertNode", image[0]);
                },
                error: function(data) {
                    console.log(data);
                }
            });
        }

        $('.summernote').summernote({
            height: 300,
            toolbar : [
                ['style',['bold','italic','underline','clear']],
                ['font',['fontsize']],
                ['color',['color']],
                ['para',['ul','ol','paragraph']],
                ['link',['link']],
                ['picture',['picture']]
            ],
            callbacks : {
                onImageUpload: function(image) {
                    uploadImage(image[0]);
                }
            }
        });
    });
</script>
@endsection
