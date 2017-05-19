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
                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('title','Tên sản phẩm:') !!}</label>
                    <div class="col-sm-10">
                        {!! Form::text('title',(isset($product->title)?$product->title:''),['class'=>'form-control','required' => 'required']) !!}
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('slug','Slug:') !!}</label>
                    <div class="col-sm-10">
                        <div class="alert alert-warning">Không cần nhập ô này</div>
                        {!! Form::text('slug',(isset($product->slug)?$product->slug:''),['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('price','Giá:') !!}</label>
                    <div class="col-sm-10">
                        <div class="input-group m-b"><span class="input-group-addon">$</span>
                            {!! Form::text('price',(isset($product->price)?$product->price:''),['class'=>'form-control','requied'=>'required']) !!}
                            <span class="input-group-addon">.00</span></div>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('price_sale','Giá khuyến mãi:') !!}</label>
                    <div class="col-sm-10">
                        <div class="input-group m-b"><span class="input-group-addon">$</span>
                            {!! Form::text('price_sale',(isset($product->price_sale)?$product->price_sale:''),['class'=>'form-control']) !!}
                            <span class="input-group-addon">.00</span></div>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Nhóm sản phẩm</label>
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
                <div class="form-group"><label class="col-sm-2 control-label">Giới thiệu ngắn</label>
                    <div class="col-sm-10">
                        <textarea class="form-control" name="summary">{{(isset($product->summary)?$product->summary:'')}}</textarea>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Giới thiệu chi tiết sản phẩm</label>
                    <div class="col-sm-10">
                        <textarea class="summernote" name="content">{{(isset($product->content)?$product->content:'')}}</textarea>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Images</label>
                    <div class="col-sm-10">
                        <div class="row">
                            <div class="col-md-6"><div class="alert alert-warning">Hình ảnh nên up hình vuông dàn trang sẽ đều và đẹp hơn</div></div>
                            <div class="col-md-6"><div class="alert alert-info">Bạn vui lòng up file tối đa {{ini_get('upload_max_filesize')}}</div></div>
                        </div>
                        {!! Form::file('image[]',['multiple' => "multiple" ]) !!}
                        <hr>
                        @if(isset($product->image))
                            @foreach($product->image as $img)
                                <img data-id="{{$img->id}}" class="thumb_img {{($product->main_img == $img->id?'active_box':'')}}" src="/{{$img->url}}" style="width:100px;" data-id="{{$img->id}}" data-pid="{{$product->id}}">
                            @endforeach
                        @endif
                        <button class="btn btn-danger delete-img" type="button">Delete img</button>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">{!! Form::label('brand','Thương hiệu:') !!}</label>
                    <div class="col-sm-10">
                        {!! Form::text('brand',(isset($product->brand)?$product->brand:''),['class'=>'form-control']) !!}
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Options</label>
                    <div class="col-sm-10">
                        <div class="form-group" id="data_5">
                            <label>
                            	{!! \Form::checkbox('homepage', '1', (isset($product->home)&&$product->home==1?true:false),  ['id' => 'name']) !!}
                            	Xuất hiện trang chủ
                            </label>
                            <label>
                                {!! \Form::checkbox('promotion', '1', (isset($product->home)&&$product->home==1?true:false),  ['id' => 'name']) !!}
                                Xuất hiện trang quảng cáo
                            </label>
                        </div>
                    </div>
                </div>
                <div class="hr-line-dashed"></div>
                <div class="form-group"><label class="col-sm-2 control-label">Thời hạn khuyến mãi</label>
                    <div class="col-sm-10">
                        <div class="form-group" id="data_5">
                            <div class="input-daterange input-group" id="datepicker">
                                <input type="text" class="input-sm form-control" name="date_begin_sale" value="{{(isset($product->date_begin_sale_formated)?$product->date_begin_sale_formated:'')}}"/>
                                <span class="input-group-addon">to</span>
                                <input type="text" class="input-sm form-control" name="date_end_sale" value="{{(isset($product->date_end_sale_formated)?$product->date_end_sale_formated:'')}}" />
                            </div>
                        </div>
                    </div>
                </div>

                <div class="form-group">
                    <div class="col-sm-4 col-sm-offset-2">
                        <a class="btn btn-white" href="/admin/product">Cancel</a>
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

    // Mở nút xóa hình
    $(".delete-img").click(function(){
        $(".thumb_img").each(function(){
            $(this).after("<button class='btn btn-default dl_img' type='button' data-id='"+$(this).data('id')+"'>Delete</button>");
        })

    });

    // Click vào để xóa sản phẩm
    $(document).on("click",".dl_img",function(){
        var this_btn = $(this);
        $.post('/admin/update_ajax',{'process':'delete_img_product','id':$(this).data('id')},function(data) {
            if(data.status == true){
                $(".thumb_img[data-id='"+data.id+"']").remove();
                this_btn.remove();
            }
        });

    })

    // Chọn hình chính của sản phẩm
    $(".thumb_img").click(function(){
        var this_select = $(this);
        $.post('/admin/update_ajax',{'process':'change_main_img','id':$(this).data('id'),'pid':$(this).data('pid')},function(data){
            $(".thumb_img").removeClass('active_box');
            this_select.addClass('active_box');
        })
    });

    var elem = document.querySelector('.js-switch');
    var switchery = new Switchery(elem, { color: '#1AB394' });

    // Datepicker cho input
    $('#data_5 .input-daterange').datepicker({
        format: "dd/mm/yyyy",
        keyboardNavigation: false,
        forceParse: false,
        autoclose: true
    });

    $(document).ready(function() {

        // Action upload hình ảnh của editor
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

        // Khai báo editor
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
