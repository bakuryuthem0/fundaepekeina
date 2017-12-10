@extends('layouts.main')
@section('content')
<section id="page-breadcrumb">
    <div class="vertical-center sun">
        <div class="container">
            <div class="row">
                <div class="">
                    <div class="col-sm-12">
                        <h1 class="title">{{ ucfirst($subtitle) }}</h1>
                        <p></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!--/#page-breadcrumb-->
<section id="blog-details" class="padding-top">
    <div class="container">
        <div class="row">
            <div class="col-md-9 col-sm-7">
                <div class="row">
                    <div class="col-md-12 col-sm-12">
                        <div class="single-blog blog-details two-column">
                            @if(count($article->imagenes) > 0)
                            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                                <!-- Indicators -->
                                <ol class="carousel-indicators">
                                    @foreach($article->imagenes as $i => $img)
                                    @if($img->id == $article->imagenes->first()->id)
                                    <li data-target="#carousel-example-generic" data-slide-to="{{ $i }}" class="active"></li>
                                    @else
                                    <li data-target="#carousel-example-generic" data-slide-to="{{ $i }}"></li>
                                    @endif
                                    @endforeach
                                </ol>
                                <!-- Wrapper for slides -->
                                <div class="carousel-inner" role="listbox">
                                    @foreach($article->imagenes as $img)
                                    @if($img->id == $article->imagenes->first()->id)
                                    <div class="item active">
                                        @else
                                        <div class="item">
                                            @endif
                                            <img src="{{ asset('images/news/'.$img->image) }}" class="center-block img-responsive news-images fancybox" data-fancybox-gallery="gallery">
                                        </div>
                                        @endforeach
                                    </div>
                                    <!-- Controls -->
                                    <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                                        <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                                        <span class="sr-only">Previous</span>
                                    </a>
                                    <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                                        <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                                        <span class="sr-only">Next</span>
                                    </a>
                                </div>
                                @else
                                <div class="post-thumb">
                                    <a href="#">
                                    <img src="{{ asset('images/logo.png') }}" class="center-block img-responsive" alt="{{ $article->title }}"></a>
                                    @if($type != "que-hacemos")
                                    <div class="post-overlay">
                                        <span class="uppercase"><a href="#">
                                            <?php
                                            $aux2 = explode(' ',$article->created_at);
                                            $aux  = explode('-',$aux2[0]);
                                            ?>
                                            {{ $aux[2] }} <br><small>{{ date('M',strtotime($aux2[0])); }}</small>
                                        </a></span>
                                    </div>
                                    @endif
                                </div>
                                @endif
                                <div class="post-content text-justify">
                                    <h2 class="post-title bold"><a href="#"><strong>{{ $article->titles->first()->text }}</strong></a></h2>
                                    <p>
                                        {{ $article->descriptions->first()->text }}
                                    </p>
                                    <div class="post-bottom over-popover">
                                        <ul class="nav navbar-nav post-nav">
                                            <li>
                                                <div>
                                                    <a href="https://twitter.com/share" class="twitter-share-button" data-via="fundaepekeina" data-hashtags="fundaepekeina" data-dnt="true">Tweet</a>
                                                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                                                </div>
                                            </li>
                                            <li>
                                                <a href="#!" class="love" data-id="{{ $article->id }}" data-toggle="popover" data-placement="top" data-title="" data-content="">
                                                    <span class="like-span">
                                                        <i class="fa {{ $fa }} fa-add-love"></i> Heart
                                                    </span>
                                                </a>
                                            <img src="{{ asset('images/ajax-loader.gif') }}" class="miniLoader"></li>
                                        </ul>
                                        <div class="pull-right visible-md-block visible-lg-block">{{ Lang::get('lang.created_at') }}: {{ date('d-m-Y',strtotime($article->created_at)) }}</div>
                                        <div class="pull-left hidden-md hidden-lg">{{ Lang::get('lang.created_at') }}: {{ date('d-m-Y',strtotime($article->created_at)) }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{ View::make('partials.sideBar')->with('menu',$menu) }}
            </div>
        </div>
    </section>
    <!--/#blog-->
    @stop
    @section('postscript')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/fancybox/source/jquery.fancybox.css?v=2.1.5') }}" media="screen" />
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5') }}" />
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7') }}" />
    <script type="text/javascript" src="{{ asset('plugins/fancybox/source/jquery.fancybox.js?v=2.1.5') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6') }}"></script>
    <script type="text/javascript">
    $(document).ready(function(){
    $('.fancybox').fancybox();
    });
    </script>
    @stop