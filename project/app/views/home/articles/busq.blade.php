@extends('layouts.main')

@section('content')
<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="">
                        <div class="col-sm-12">
                            <h1 class="title">{{ ucfirst( $subtitle) }}</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="blog" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-7 news-container">
                    <div class="row">
                        @if(count($article) < 1)
                        <div class="col-xs-12">
                            <h3>No hay noticias para: @if($type == 'sedes') esta sede @elseif($type == 'proyectos') este proyecto @elseif($type == 'que-hacemos') {{ $busq }} @endif</h3>
                        </div>
                        @endif
                        @foreach($article as $a)
                         <div class="col-sm-12 col-md-12 no-padding">
                            <div class="single-blog single-column">
                                <div class="post-thumb index col-xs-12 col-sm-6">
                                    @if($type != 'sedes/proyectos')
                                    <a href="{{ URL::to('noticias/'.$type.'/'.$a->id) }}">
                                    @else
                                    <a href="{{ URL::to('noticias/'.$a->id) }}">
                                    @endif
                                        @if(!is_null($a->imagenes->first()['image']))
                                            <img data-original="{{ asset('images/news/'.$a->imagenes->first()['image']) }}" class="lazy img-responsive" alt="{{ $a->title }}">
                                        @else
                                            <img data-original="{{ asset('images/logo.png') }}" class="center-block new-no-image lazy img-responsive" alt="{{ $a->title }}">
                                        @endif
                                    </a>
                                    <div class="post-overlay">
                                       <span class="uppercase">
                                        @if($type != 'sedes/proyectos')
                                            <a href="{{ URL::to('noticias/'.$type.'/'.$a->id) }}">
                                        @else
                                            <a href="{{ URL::to('noticias/'.$a->id) }}">
                                        @endif
                                            <?php 
                                                $aux2 = explode(' ',$a->created_at);
                                                $aux  = explode('-',$aux2[0]);
                                            ?>
                                            {{ $aux[2] }} <br><small>{{ date('M',strtotime($aux2[0])); }}</small>
                                            </a>
                                        </span>
                                   </div>
                                </div>
                                <div class="post-content overflow col-xs-12 col-sm-6">
                                    @if($type != 'sedes/proyectos')
                                    <h2 class="post-title bold"><a href="{{ URL::to('noticias/'.$type.'/'.$a->id) }}">{{ $a->title }}</a></h2>
                                    @else
                                    <h2 class="post-title bold"><a href="{{ URL::to('noticias/'.$a->id) }}">{{ $a->title }}</a></h2>
                                    @endif
                                    <h3 class="post-author"><p class="no-pointer">{{ substr(strip_tags($a->descripcion), 0, 300) }} [...]</p></h3>
                                    @if($type != 'sedes/proyectos')
                                    <a href="{{ URL::to('noticias/'.$type.'/'.$a->id) }}" class="read-more">Leer mas</a>
                                    @else
                                    <a href="{{ URL::to('noticias/'.$a->id) }}" class="read-more">Leer mas</a>
                                    @endif
                                </div>
                                <div class="post-bottom index overflow col-xs-12">
                                    <ul class="nav navbar-nav post-nav">
                                        <li>
                                            <div>
                                                <a href="https://twitter.com/share" class="twitter-share-button" data-via="fundaepekeina" data-hashtags="fundaepekeina" data-dnt="true">Tweet</a>
                                        <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                                            </div>
                                        </li>
                                        <!--<li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>-->
                                        @if($a->likeCount->first()['aggregate'])
                                        <li><a href="#!"><i class="fa fa-heart"></i></i>{{ $a->likeCount->first()['aggregate'] }} Hearth</a></li>
                                        @endif
                                    </ul>
                                    <div class="pull-right visible-md-block visible-lg-block">Creado: {{ date('d-m-Y',strtotime($a->created_at)) }}</div>
                                    <div class="pull-left hidden-md hidden-lg">Creado: {{ date('d-m-Y',strtotime($a->created_at)) }}</div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </div>
            </div>
            {{ View::make('partials.sideBar')->with('menu',$menu)->with('type', $type) }}
            <div class="clearfix"></div>
            <div class="blog-pagination">
                <nav role="navigation">
                    <?php  $presenter = new Illuminate\Pagination\BootstrapPresenter($article); ?>
                    @if ($article->getLastPage() > 1)
                        <ul class="pagination">
                        <?php
                            $beforeAndAfter = 3;
                            $currentPage = $article->getCurrentPage();
                            $lastPage = $article->getLastPage();
                            $start = $currentPage - $beforeAndAfter;
                            if($start < 1)
                            {
                                $pos = $start - 1;
                                $start = $currentPage - ($beforeAndAfter + $pos);
                            }
                            $end = $currentPage + $beforeAndAfter;
                            if($end > $lastPage)
                            {
                                $pos = $end - $lastPage;
                                $end = $end - $pos;
                            }
                            if ($currentPage <= 1)
                            {
                                echo '<li class="disabled"><a href="#">&laquo; Primera</a></li>';
                            }
                            else
                            {
                                $url = $article->getUrl(1);
                                echo '<li><a class="" href="'.$url.'">&laquo; Primera</a></li>';
                            }
                            if (($currentPage-1) < $start) {
                                echo '<li class="disabled"><a href="#">&laquo;</a></li>';   
                            }else
                            {
                                echo '<li><a href="'.$article->getUrl($currentPage-1).'">&laquo;</a></li>';
                            }
                            for($i = $start; $i<=$end;$i++)
                            {
                                if ($currentPage == $i) {
                                    echo '<li class="active"><a href="#">'.$i.'</a></li>';
                                }else
                                {
                                    echo '<li><a href="'.$article->getUrl($i).'">'.$i.'</a></li>';
                                }
                            }
                            if (($currentPage+1) > $end) {
                                echo '<li class="disabled"><a href="#">&raquo;</a href="#"></li>' ;
                            }else
                            {
                                echo '<li><a href="'.$article->getUrl($currentPage+1).'">&raquo;</a></li>';
                            }
                            if ($currentPage >= $lastPage)
                            {
                                echo '<li class="disabled"><a href="#">Última &raquo;</a></li>';
                            }
                            else
                            {
                                $url = $article->getUrl($lastPage);
                                echo '<li><a class="" href="'.$url.'">Última &raquo;</a></li>';
                            }
                        ?>
                        </ul>
                    @endif
                </nav>
            </div>
        </div>
    </div>
</section>
<!--/#blog-->
@stop

@section('postscript')
    <script type="text/javascript" src="{{ asset('plugins/lazyload/jquery.lazyload.min.js') }}">
    </script>
    <script type="text/javascript">
        $(document).ready(function() {
            $('.lazy').lazyload(
            {
                effect : "fadeIn",
            });
        });
    </script>
@stop