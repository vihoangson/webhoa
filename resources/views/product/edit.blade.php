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
            @if(isset($product->id))
                {!! Form::open(['url' => '/admin/product/'.$product->id, 'method' => 'PUT','class'=>'form-horizontal', 'files' => true]) !!}
            @else
                {!! Form::open(['url' => '/admin/product', 'method' => 'post','class'=>'form-horizontal', 'files' => true]) !!}
            @endif


                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('active','Active:') !!}</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="active" value="1" class="js-switch" {{(isset($product->active) && $product->active == 1?'checked':'')}} />
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('title','Title:') !!}</label>
                    <div class="col-sm-10">
                        {!! Form::text('title',(isset($product->title)?$product->title:''),['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('price','Price:') !!}</label>
                    <div class="col-sm-10">
                        <div class="input-group m-b"><span class="input-group-addon">$</span>
                            {!! Form::text('price',(isset($product->price)?$product->price:''),['class'=>'form-control']) !!}
                            <span class="input-group-addon">.00</span></div>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('price_sale','Price sale:') !!}</label>
                    <div class="col-sm-10">
                        <div class="input-group m-b"><span class="input-group-addon">$</span>
                            {!! Form::text('price_sale',(isset($product->price_sale)?$product->price_sale:''),['class'=>'form-control']) !!}
                            <span class="input-group-addon">.00</span></div>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                    @foreach($data_category as $category)
                            <label class="checkbox-inline">
                                <input type='checkbox' name='category[]' value='{{$category->id}}' {!! (isset($product->category) && $product->category->contains($category->id) == true?'checked':'') !!}>
                                 {!! $category->name !!}
                            </label>
                    @endforeach
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Summary</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="summary">{{(isset($product->summary)?$product->summary:'')}}</textarea>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                        <textarea class="summernote" name="content">{{(isset($product->content)?$product->content:'')}}</textarea>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Images</label>
                    <div class="col-sm-10">
                        {!! Form::file('image[]',['multiple' => "multiple" ]) !!}
                        @if(isset($product->image))
                            @foreach($product->image as $img)
                                <img class="thumb_img {{($product->main_img == $img->id?'active_box':'')}}" src="/{{$img->url}}" style="width:100px;" data-id="{{$img->id}}" data-pid="{{$product->id}}">
                            @endforeach
                        @endif
                    </div>
                </div>

                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Range select</label>
                    <div class="col-sm-10">
                        <div class="form-group" id="data_5">
                            <div class="input-daterange input-group" id="datepicker">
                                <input type="text" class="input-sm form-control" name="date_begin_sale" value="{{(isset($product->date_begin_sale)?$product->date_begin_sale:'')}}"/>
                                <span class="input-group-addon">to</span>
                                <input type="text" class="input-sm form-control" name="date_end_sale" value="{{(isset($product->date_end_sale)?$product->date_end_sale:'')}}" />
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
<style>
    .active_box {
        box-shadow: 0px 0 12px 3px #9c9c9c;
    }
</style>
@endsection

@section('custom_footer')
    <!-- Data picker -->
    <!-- Switchery -->
    <script src="{{$template_path}}js/plugins/switchery/switchery.js"></script>
    <script src="{{$template_path}}js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <script src="/bower_components/summernote/dist/summernote.min.js"></script>
<script>
$(".thumb_img").click(function(){
    var this_select = $(this);
    $.post('/update_ajax',{'process':'change_main_img','id':$(this).data('id'),'pid':$(this).data('pid')},function(){
        $(".thumb_img").removeClass('active_box');
        this_select.addClass('active_box');
    })
})
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
