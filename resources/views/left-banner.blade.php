<div class="collapse navbar-collapse" id="bs-megadropdown-tabs">
    <ul class="nav navbar-nav nav_1">
        <li><a href="{{URL::to('best-product')}}">Thực phẩm uy tín</a></li>
        @foreach($categories as $cate)
        <li><a href="{{URL::to('category/'.$cate->id."/".$cate->name)}}">{{$cate->name}}</a></li>
        @endforeach

    </ul>
</div>
