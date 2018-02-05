@extends('layouts.default')

@section('postcss')
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css">
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet">
@stop
@section('content')

@if(count($article->imagenes) > 0)
    @include('partials.articleSlider')
@else
<img src="http://via.placeholder.com/1440x600" class="responsive-img">        
@endif
<div class="row">
    <div class="col s12">
        <h1 class="center-align">
            <strong>{{ $article->titles->first()->text }}</strong>
        </h1>   
        @if(!is_null($article->subtitle))
        <h2 class="center-align">
            <strong>{{ $article->subtitle->subtitulo }}</strong>
        </h2>
        @endif
        <div class="justify-align">
            {{ $article->descriptions->first()->text }}
        </div>
    </div>
</div>

@stop
@section('postscript')
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
    <script type="text/javascript">

        $(document).ready(function(){
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
            $('.fancybox').fancybox();
        });
    </script>
@stop