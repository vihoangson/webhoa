<aside class="sidebar-left">
    <h3 class="mb20">I am Looking For</h3>
    <ul class="nav nav-tabs nav-stacked nav-coupon-category nav-coupon-category-left">
        @if($menu)
            @foreach($menu as $value)
                <li><a href="/category/{{$value->slug}}"><i class="fa fa-cutlery"></i>{{$value->name}}<span>44</span></a></li>
            @endforeach
        @endif
    </ul>
</aside>