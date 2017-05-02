@extends('public.'.$template_name.'.layouts.inside')

@section('title_page'){{$post->title}}@endsection

@section('keyword_page'){{$post->keyword or 'Xem ngay mua ngay'}}@endsection

@section('description_page'){{$post->descripton or 'Xem ngay mua ngay'}}@endsection

@section('breadcrumb')
    {!! Breadcrumbs::render('post_detail',$post->title) !!}
@endsection

@section('content')
    <article class="post">
        <div class="post-inner">
            <h3 class="post-title">{{$post->title}}</h3>
            <ul class="post-meta">
                <li><i class="fa fa-calendar"></i><a href="#">03 August, 2013</a>
                </li>
                <li><i class="fa fa-user"></i>by <a href="#">Oliver Ross</a>
                </li>
                <li><i class="fa fa-tags"></i><a href="#">Design</a>, <a href="#">Digital</a>
                </li>
                <li><i class="fa fa-comments"></i><a href="#">14 Comments</a>
                </li>
            </ul>
            <div class="gap gap-mini"></div>
            {!! $post->content !!}
        </div>
    </article>

@endsection