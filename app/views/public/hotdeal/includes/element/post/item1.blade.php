<div class="hidden">
    <div>{{$post->id}}</div>
    <div>{{$post->title}}</div>
    <div>{{$post->summary}}</div>
    <div>{{$post->main_img}}</div>
    <div>{!! $post->content !!}</div>
    <div>{{$post->active}}</div>
    <div>{{$post->slug}}</div>
    <div>{{$post->created_at}}</div>
    <div>{{$post->updated_at}}</div>
</div>
<article class="post">
    <header class="post-header hidden"><a class="post-link" href="#">Google.com</a>
    </header>
    <div class="post-inner">
        <h4 class="post-title"><a href="/post/{{$post->slug}}">{{$post->title}}</a></h4>
        <ul class="post-meta">
            <li><i class="fa fa-calendar"></i><a href="#">14 July, 2014</a>
            </li>
            <li><i class="fa fa-user"></i><a href="#">Joe Smith</a>
            </li>
            <li><i class="fa fa-tags"></i><a href="#">Web</a>
            </li>
            <li><i class="fa fa-comments"></i><a href="#">18 Comments</a>
            </li>
        </ul>
        <p class="post-desciption">
            {{$post->summary}}
        </p><a class="btn btn-small btn-primary" href="/post/{{$post->slug}}">Read More</a>
    </div>
</article>