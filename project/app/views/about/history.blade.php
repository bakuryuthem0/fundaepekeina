@extends('layouts.main')

@section('content')
	<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="">
                        <div class="col-sm-12">
                            <h1 class="title">{{ Lang::get('lang.history_menu') }}</h1>
                        </div>
                     </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="services">
        <div class="container">
            <div class="row">
                
                <div class="col-xs-12 center-block padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    @if(count($hist->imagenes) < 2)
                        <div class="post-thumb">
                            @if(!is_null($hist->imagenes->first()))
                            <a href="#">
                                <img src="{{ asset('images/news/'.$hist->imagenes->first()->image) }}" class="center-block img-responsive" alt="{{ $hist->title }}">
                            </a>
                            @endif
                        </div>
                    @else
                        <ul class="pgwSlideshow">
                            @foreach($hist->imagenes as $i)
                                <li>
                                    <img src="{{ asset('images/news/'.$i->image) }}" class="center-block img-responsive news-images fancybox" data-fancybox-gallery="gallery">
                                </li>
                            @endforeach
                        </ul>
                    @endif
                    <div class="single-service">
                        <h1 class="veronica text-center">
                            <span class="text-pink"><strong>{{ $hist->titles->first()->text }}</strong></span>
                        </h1>   
                        @if(!is_null($hist->subtitle))
                        <h2 class="text-center">
                            <span class="text-blue"><strong>{{ $hist->subtitle->subtitulo }}</strong></span>
                        </h2>
                        @endif
                        <div class="col-xs-12 text-justify">
                            {{ $hist->descriptions->first()->text }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

@stop
@section('postscript')
    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/pgwslide/pgwslideshow.min.css') }}"/>
    <script type="text/javascript" src="{{ asset('plugins/pgwslide/pgwslideshow.min.js') }}"></script>

    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/fancybox/source/jquery.fancybox.css?v=2.1.5') }}" media="screen" />

    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5') }}" />

    <link rel="stylesheet" type="text/css" href="{{ asset('plugins/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7') }}" />

    <script type="text/javascript" src="{{ asset('plugins/fancybox/source/jquery.fancybox.js?v=2.1.5') }}"></script>


    <script type="text/javascript" src="{{ asset('plugins/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5') }}"></script>

    <script type="text/javascript" src="{{ asset('plugins/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7') }}"></script>

    <script type="text/javascript" src="{{ asset('plugins/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6') }}"></script>
    <script type="text/javascript">

        $(document).ready(function(){
            $('.pgwSlideshow').pgwSlideshow({
                maxHeight: 500,
            });
            $('.fancybox').fancybox();
        });
    </script>
@stop