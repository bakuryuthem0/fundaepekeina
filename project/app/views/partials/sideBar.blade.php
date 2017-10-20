<div class="col-md-3 col-sm-5 @if(isset($self)) no-scroll @endif sidebar-container">
    <div class="sidebar blog-sidebar">
        <div class="sidebar-item categories">
            @if($type == 'que-hacemos')
                <h3>Sedes/Proyectos</h3>
            @else
                <h3>{{ ucwords($type) }}</h3>
            @endif
            <ul class="nav navbar-stacked">
                @foreach(SideBarController::getCategories($menu) as $c)
                    @if($c->id != 4)
                        <li><a href="{{ URL::to('noticias/'.$c->tipos->descriptions->first()->text.'/categoria/'.$c->id) }}">{{ ucwords($c->title) }}</a></li>
                    @endif
                @endforeach
            </ul>
        </div>
<!--
        <div class="sidebar-item tag-cloud">
            <h3>Tag Cloud</h3>
            <ul class="nav nav-pills">
                <li><a href="#">Corporate</a></li>
                <li><a href="#">Abstract</a></li>
                <li><a href="#">Creative</a></li>
                <li><a href="#">Business</a></li>
                <li><a href="#">Product</a></li>
            </ul>
        </div>
        -->
    </div>
</div>