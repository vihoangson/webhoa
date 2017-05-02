<div class="sidebar-box">
    <h5>Bài viết mới</h5>
    <ul class="thumb-list">
        @foreach($widget_recent_posts as $post)
            <li>
                <a href="#" class="hidden">
                    <img src="img/urbex_esch_lux_with_laney_and_laaaaag_70x70.jpg" alt="Image Alternative text" title="Urbex Esch/Lux with Laney and Laaaaag">
                </a>
                <div class="thumb-list-item-caption">
                    <h5 class="thumb-list-item-title"><a href="/post/{{$post->slug}}">{{$post->title}}</a></h5>
                    <p class="thumb-list-item-meta">{{$post->date_formated}}</p>
                    <p class="thumb-list-item-desciption">{{$post->summary}}</p>
                </div>
            </li>
        @endforeach
    </ul>
</div>