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
            @if(isset($post->id))
                {!! Form::open(['url' => '/admin/post/'.$post->id, 'method' => 'PUT','class'=>'form-horizontal', 'files' => true]) !!}
            @else
                {!! Form::open(['url' => '/admin/post', 'method' => 'post','class'=>'form-horizontal', 'files' => true]) !!}
            @endif


                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('active','Active:') !!}</label>
                    <div class="col-sm-10">
                        <input type="checkbox" name="active" value="1" class="js-switch" {{(isset($post->active) && $post->active == 1?'checked':'')}} />
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('title','Title:') !!}</label>
                    <div class="col-sm-10">
                        {!! Form::text('title',(isset($post->title)?$post->title:''),['class'=>'form-control','required' => 'required']) !!}
                    </div>
                </div>


                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Summary</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="summary">{{(isset($post->summary)?$post->summary:'')}}</textarea>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Category</label>
                    <div class="col-sm-10">
                        <textarea class="summernote" name="content">{{(isset($post->content)?$post->content:'')}}</textarea>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Images</label>
                    <div class="col-sm-10">
                        {!! Form::file('image[]',['multiple' => "multiple" ]) !!}
                        @if(isset($post->image))
                            @foreach($post->image as $img)
                                <img data-id="{{$img->id}}" class="thumb_img {{($post->main_img == $img->id?'active_box':'')}}" src="/{{$img->url}}" style="width:100px;" data-id="{{$img->id}}" data-pid="{{$post->id}}">
                            @endforeach
                        @endif
                        <button class="btn btn-danger delete-img" type="button">Delete img</button>
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
    <link href="{{$template_admin_path}}css/plugins/datapicker/datepicker3.css" rel="stylesheet">
    <link href="/bower_components/summernote/dist/summernote.css" rel="stylesheet">
    <link href="{{$template_admin_path}}css/plugins/switchery/switchery.css" rel="stylesheet">
<style>
    .active_box {
        box-shadow: 0px 0 12px 3px #9c9c9c;
    }
</style>
@endsection

@section('custom_footer')

    <!-- Data picker -->
    <!-- Switchery -->
    <script src="{{$template_admin_path}}js/plugins/switchery/switchery.js"></script>
    <script src="{{$template_admin_path}}js/plugins/datapicker/bootstrap-datepicker.js"></script>
    <script src="/bower_components/summernote/dist/summernote.min.js"></script>
<script>
    if($(".thumb_img").length==0){
        $(".delete-img").hide();
    }
    $(".delete-img").click(function(){
        $(".thumb_img").each(function(){
            $(this).after("<button class='btn btn-default dl_img' type='button' data-id='"+$(this).data('id')+"'>Delete</button>");
        })

    });
    $(document).on("click",".dl_img",function(){
        var this_btn = $(this);
        $.post('/admin/update_ajax',{'process':'delete_img_product','id':$(this).data('id')},function(data) {
            if(data.status == true){
                $(".thumb_img[data-id='"+data.id+"']").remove();
                this_btn.remove();
            }
        });

    })
$(".thumb_img").click(function(){
    var this_select = $(this);
    $.post('/admin/update_ajax',{'process':'change_main_img','id':$(this).data('id'),'pid':$(this).data('pid')},function(data){
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
                url: '/admin/up',
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
