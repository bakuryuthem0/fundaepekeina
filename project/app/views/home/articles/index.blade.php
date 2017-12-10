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
                        @if(count($article) > 0)
                            @foreach($article as $a)
                             <div class="col-sm-12 col-md-12 no-padding">
                                <div class="single-blog single-column">
                                    <div class="post-thumb index col-xs-12 col-sm-6">
                                        <a href="{{ URL::to('noticias/ver/'.$a->slugs->first()->text) }}">
                                            @if(!is_null($a->imagenes->first()))
                                                <img data-original="{{ asset('images/news/'.$a->imagenes->first()->image) }}" class="lazy img-responsive" alt="{{ $a->title }}">
                                            @else
                                                <img data-original="{{ asset('images/logo.png') }}" class="lazy center-block new-no-image img-responsive" alt="{{ $a->title }}">
                                            @endif
                                        </a>
                                        @if($type != "que-hacemos")
                                        <div class="post-overlay">
                                           <span class="uppercase">
                                                <a href="{{ URL::to('noticias/ver/'.$a->slugs->first()->text) }}">
                                                    {{ date("d",strtotime($a->created_at)) }}
                                                    <br>
                                                    <small>{{ date("M",strtotime($a->created_at)) }}</small>
                                                </a>
                                            </span>
                                       </div>
                                       @endif
                                    </div>
                                    <div class="post-content overflow col-xs-12 col-sm-6">
                                        <h2 class="post-title bold">
                                            <a href="{{ URL::to('noticias/ver/'.$a->slugs->first()->text) }}">
                                                @if($a->titles->first())
                                                {{ $a->titles->first()->text }}
                                                @endif
                                            </a>
                                        </h2>
                                        <h3 class="post-author">
                                            <p class="no-pointer">
                                                {{ substr(strip_tags($a->descriptions->first()->text), 0, 300) }} [...]
                                            </p>
                                        </h3>
                                       
                                        <a href="{{ URL::to('noticias/ver/'.$a->slugs->first()->text) }}" class="read-more">{{ Lang::get('lang.read_more') }}</a>
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
                                            <li><a href="#!"><i class="fa fa-heart"></i></i>{{ $a->likeCount->first()['aggregate'] }} Heart</a></li>
                                            @endif
                                        </ul>
                                        @if($type != "que-hacemos")

                                        <div class="pull-right visible-md-block visible-lg-block">{{ Lang::get('lang.created_at') }}: {{ date('d-m-Y',strtotime($a->created_at)) }}</div>

                                        <div class="pull-left hidden-md hidden-lg">{{ Lang::get('lang.created_at') }}: {{ date('d-m-Y',strtotime($a->created_at)) }}</div>
                                        @endif
                                    </div>
                                </div>
                            </div>
                            @endforeach
                        @else
                        <div class="col-xs-12">
                            <h3>{{ Lang::get('lang.no_paginate',array(
                                'text' => $type == 'sedes' ? Lang::get('lang.this_sede'): Lang::get('lang.this_project')
                            )) }} </h3>
                        </div>
                        @endif
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
                                echo '<li class="disabled"><a href="#">&laquo; '.Lang::get('lang.first').'</a></li>';
                            }
                            else
                            {
                                $url = $article->getUrl(1);
                                echo '<li><a class="" href="'.$url.'">&laquo; '.Lang::get('lang.first').'</a></li>';
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
                                echo '<li class="disabled"><a href="#">'.Lang::get('lang.last').' &raquo;</a></li>';
                            }
                            else
                            {
                                $url = $article->getUrl($lastPage);
                                echo '<li><a class="" href="'.$url.'">'.Lang::get('lang.last').' &raquo;</a></li>';
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
                failure_limit: 6,
            });
        });
    </script>
@stop