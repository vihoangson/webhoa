@extends('layouts.admin.master')

@section('content')

    <h1>Order</h1>

        @if($setting->id)
            {!! Form::open(['route' => 'admin.setting.process.edit_setting', 'method' => 'post']) !!}
            {!! Form::hidden('id', $setting->id, ['id' => 'id']) !!}
        @else
            {!! Form::open(['route' => 'admin.setting.process.add_setting', 'method' => 'post']) !!}
        @endif

        {!! Form::text('key', (isset($setting->setting_key)?$setting->setting_key:'') , ['class' => 'form-control']) !!}
        <textarea class="summernote" name="value">{{$setting->setting_value or ''}}</textarea>
        {!! Form::submit('Submit', ['class' => 'btn btn-primary']) !!}
    {!! Form::close() !!}

@endsection
@section('custom_header')
    <link href="/bower_components/summernote/dist/summernote.css" rel="stylesheet">
@endsection
@section('custom_footer')
    <script src="/bower_components/summernote/dist/summernote.min.js"></script>
    <script>
        function uploadImage(image) {
            var data = new FormData();
            data.append("image_editor", image);
            $.ajax({
                url: '{{route('photo.ajax.upload')}}',
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

    </script>
@endsection
