@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="col-xs-12 col-md-8 col-md-offset-2 box box-bordered">
		@if(!is_null($articulo->imagenes->first()['image']))
            @if(count($articulo->imagenes) < 2)
            <div class="post-thumb">
                <a href="#"><img src="{{ asset('images/news/'.$articulo->imagenes->first()['image']) }}" class="center-block img-responsive" alt="{{ $articulo->title }}"></a>
            @else
            <div class="slider-for">
                @foreach($articulo->imagenes as $i)
                    <div><img src="{{ asset('images/news/'.$i->image) }}" class="center-block img-responsive"></div>
                @endforeach
            </div>
            <div class="slider-nav">
                @foreach($articulo->imagenes as $i)
                    <div><img src="{{ asset('images/news/'.$i->image) }}" class="center-block img-responsive"></div>
                @endforeach
            </div>
            @endif
        @endif
    <h2>{{ $articulo->titles->first()->text }}.</h2>
    <hr>
		<div class="col-xs-12">
	      {{ $articulo->descriptions->first()->text }}
	    </div>
	</div>
</div>
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