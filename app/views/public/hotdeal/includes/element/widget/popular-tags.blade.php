<div class="sidebar-box">
    <h5>Tags</h5>
    <ul class="tags-list">
        @foreach($widget_tags as $tag)
            <li><a href="{{route('tags.show',$tag->tag)}}">{{$tag->tag}}</a></li>
        @endforeach
    </ul>
</div>