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
                                @if(!is_null($article->imagenes->first()['image']))
                                    @if(count($article->imagenes) < 2)
                                    <div class="post-thumb">
                                        <a href="#"><img src="{{ asset('images/news/'.$article->imagenes->first()['image']) }}" class="center-block img-responsive" alt="{{ $article->title }}"></a>
                                        <div class="post-overlay">
                                            <span class="uppercase"><a href="#">
                                                <?php 
                                                    $aux2 = explode(' ',$article->created_at);
                                                    $aux  = explode('-',$aux2[0]);
                                                ?>
                                                {{ $aux[2] }} <br><small>{{ date('M',strtotime($aux2[0])); }}</small>
                                            </a></span>
                                        </div>
                                    </div>
                                    @else
                                    <div class="slider-for">
                                        @foreach($article->imagenes as $i)
                                            <div><img src="{{ asset('images/news/'.$i->image) }}" class="center-block img-responsive"></div>
                                        @endforeach
                                    </div>
                                    <div class="slider-nav">
                                        @foreach($article->imagenes as $i)
                                            <div><img src="{{ asset('images/news/'.$i->image) }}" class="center-block img-responsive"></div>
                                        @endforeach
                                    </div>
                                    @endif
                                @endif
                                <div class="post-content ">
                                    <h2 class="post-title bold"><a href="#"><strong>{{ $article->title }}</strong></a></h2>
                                    <p>
                                        {{ $article->descripcion }}
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
                                            <li><a href="#"><i class="fa fa-tag"></i>Creative</a></li>
                                        </ul>
                                        <div class="pull-right visible-md-block visible-lg-block">Creado: {{ date('d-m-Y',strtotime($article->created_at)) }}</div>
                                        <div class="pull-left hidden-md hidden-lg">Creado: {{ date('d-m-Y',strtotime($article->created_at)) }}</div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                {{ View::make('partials.sideBar')->with('menu',$menu)->with('type', $type) }}
            </div>
        </div>
    </section>
    <!--/#blog-->
@stop

@section('postscript')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/slick/slick.css') }}"/>
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/slick/slick-theme.css') }}"/>
    <script type="text/javascript" src="{{ asset('plugins/slick/slick.min.js') }}"></script>

    <script type="text/javascript">

        $(document).ready(function(){
             $('.slider-for').slick({
              slidesToShow: 1,
              slidesToScroll: 1,
              arrows: false,
              fade: true,
              asNavFor: '.slider-nav'
            });
            $('.slider-nav').slick({
              slidesToShow: 3,
              slidesToScroll: 1,
              asNavFor: '.slider-for',
              dots: true,
              centerMode: true,
              focusOnSelect: true,
              margin:30,
              stagePadding: 0,

            });
        });
    </script>
@stop