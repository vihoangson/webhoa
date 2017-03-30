<!-- 3 Column Banners Starts -->
<div class="col3-banners">
    <div class="container">
        <ul class="row list-unstyled">
            @foreach($db_banner_ad as $key => $value)
                <li class="col-sm-4">
                    <a href="{{$value['url']}}"><img src="{{$value['link_img']}}" alt="banners" class="img-responsive" /></a>
                </li>
            @endforeach
        </ul>
    </div>
</div>
<!-- 3 Column Banners Ends -->