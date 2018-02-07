@extends('layouts.default')
@section('postcss')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
@stop

@section('content')
<div class="row contenedor">
    <div class="col s12 hide-on-large-only wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
        @if(count($article->imagenes) > 0)
            @include('partials.articleSlider')
        @else
        <div class="">
            <img src="http://via.placeholder.com/1440x600" class="responsive-img">
        </div>
        @endif
    </div>
</div>
<div class="row contenedor wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
    <div class="col s12 m8 left pl-0 pr-0">
        <div class="col s12 news mt-4 news-self">
            <div class="hide-on-med-and-down mb-2">
                @if(count($article->imagenes) > 0)
                    @include('partials.articleSlider')
                @else
                    <div class="">
                        <img src="http://via.placeholder.com/1440x600" class="responsive-img">
                    </div>
                @endif
            </div>
            <h3 class="news-title mt-0">
                {{ $article->titles->first()->text }}
            </h3>
            <div class="news-content justify-align">
                {{ $article->descriptions->first()->text }}
            </div>
            <div class="card">
                <div class="card-content card-content-social valign-wrapper right-align">
                    <ul class="news-social">
                        <li>
                            <div>
                                <a href="https://twitter.com/share" class="twitter-share-button" data-via="fundaepekeina" data-hashtags="fundaepekeina" data-dnt="true">Tweet</a>
                                <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+'://platform.twitter.com/widgets.js';fjs.parentNode.insertBefore(js,fjs);}}(document, 'script', 'twitter-wjs');</script>
                            </div>
                        </li>
                        <li class="ml-1 mr-1">
                            <a href="#!" class="love blue-grey-text text-darken-3 tooltipped" data-position="top" data-delay="50" data-tooltip="{{ Lang::get('lang.like') }}" data-id="{{ $article->id }}" data-content="">
                                <span class="like-span">
                                    <i class="fa {{ $fa }} fa-add-love"></i>
                                </span>
                            </a>
                            <img src="{{ asset('images/ajax-loader.gif') }}" class="miniLoader">
                        </li>
                        <li>
                            {{ Lang::get('lang.created_at') }}: {{ date('d-m-Y',strtotime($article->created_at)) }}
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="col s12 m4 right mt-4">
        @include('partials.sideBar')
    </div>
</div>

@stop

@section('postscript')
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
    <script type="text/javascript">
    $(document).ready(function(){
        $('.fancybox').fancybox();
        $(".owl-carousel").owlCarousel({
            loop: true,
            margin: 10,
            nav: true,
            navText: ["<i class=\"material-icons\">chevron_left</i>","<i class=\"material-icons\">chevron_right</i>"],
            dots: true,
            loop: true,
            autoplay: false,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            items: 1
        });
    });
    </script>
@stop