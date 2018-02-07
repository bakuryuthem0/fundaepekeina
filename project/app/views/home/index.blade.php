@extends('layouts.default')

@section('postcss')
	<link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet"> 
@stop

@section('content')
@include('partials.main-banner')
<div class="row bg-white pt-3 wow fadeIn" data-wow-duration="500ms" data-wow-delay="600ms">
	<div class="owl-carousel campaing-carousel">
		<div class="center-align campaing-content">
			<img src="{{ asset('images/logo.png') }}" class="allies-logo mr-1">
			<p>APÓYANOS CON NUESTRA CAMPAÑA.<br> SÍ ESTÁS LISTO</p>
			<a href="{{ URL::to('contacto/donaciones') }}" class="btn btn-xs bg-red ml-1">
				{{ Lang::get('lang.donate') }}
			</a>
		</div>
		<div class="center-align campaing-content">
			<img src="{{ asset('images/logo.png') }}" class="allies-logo mr-1">
			<p>ÚNETE A NOSOTROS,<br> ES HORA DE ACTUAR</p>
			<a href="{{ URL::to('contacto/voluntariado') }}" class="btn btn-xs bg-red ml-1">
				{{ Lang::get('lang.join') }}
			</a>
		</div>
	</div>
</div>

<div class="row bg-turquesa pt-4 pb-4 wow fadeIn" data-wow-duration="500ms" data-wow-delay="900ms">
	<div class="contenedor pl-0 pr-0 news">
        @foreach($article as $a)
			<div class="col s12 m6 l3 mb-2">
				@include('partials.article')
			</div>
		@endforeach
		<div class="col s12 center-align">
			<a href="{{ URL::to('noticias/buscar') }}" class="btn bg-red">
				{{ Lang::get('lang.see_all') }}
			</a>
		</div>
	</div>
</div>
<div id="allies"></div>
<div class="row bg-white pt-2 pb-0 mb-0 wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
    <div class="contenedor">
    	<div class="col s12">
    		<div class="valign-wrapper-on-med-and-up">
    			<div class="col s12 m4 mb-2 valign-wrapper">
    				<img src="{{ asset('images/logo.png') }}" class="allies-logo mr-1 hide-on-small-only">
    				<p>ELLOS NOS APOYAN</p>
    				<a href="{{ URL::to('contacto/donaciones') }}" class="btn btn-xs bg-red ml-1">{{ Lang::get('lang.donate') }}</a>
    			</div>
    			<div class="col s12 m8 mb-2">
    				<div class="owl-carousel valign-wrapper">
    					<div class="owl-content center-align valign-wrapper">
                            <img src="{{ asset('images/allies/pnud.png') }}" class="d-block mx-auto">
                        </div>
                        <div class="owl-content center-align valign-wrapper">
                            <img src="{{ asset('images/allies/ulalogo.jpg') }}" class="d-block mx-auto">
                        </div>
                        <div class="owl-content center-align valign-wrapper">
                            <img src="{{ asset('images/allies/corpoula.jpg') }}" class="d-block mx-auto">
                        </div>
                        <div class="owl-content center-align valign-wrapper">
                            <img src="{{ asset('images/allies/mision.jpg') }}" class="d-block mx-auto">
                        </div>
                        <div class="owl-content center-align valign-wrapper">
                            <img src="{{ asset('images/allies/eu.jpg') }}" class="d-block mx-auto">
                        </div>
                        <div class="owl-content center-align valign-wrapper">
                            <img src="{{ asset('images/allies/fmam.png') }}" class="d-block mx-auto">
                        </div>
                        <div class="owl-content center-align valign-wrapper">
                            <img src="{{ asset('images/allies/sgp.png') }}" class="d-block mx-auto">
                        </div>
                        <div class="owl-content center-align valign-wrapper">
                            <a href="{{ URL::to('http://redjovenvenezuela.com') }}">
                            	<img src="{{ asset('images/allies/redjoven.png') }}" class="d-block mx-auto">
                            </a>
                        </div>
                        <div class="owl-content center-align valign-wrapper">
                            <img src="{{ asset('images/allies/ecv.jpg') }}" class="d-block mx-auto">
                        </div>
                        <div class="owl-content center-align valign-wrapper">
                            <img src="{{ asset('images/allies/zerolo.jpg') }}" class="d-block mx-auto">
                        </div>
                        <div class="owl-content center-align valign-wrapper">
                            <img src="{{ asset('images/allies/ofigrapa.png') }}" class="d-block mx-auto">
                        </div>
    				</div>
    			</div>
    		</div>
    	</div>
    </div>
</div>
@stop

@section('postscript')
	<script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.campaing-carousel').owlCarousel({
			loop: true,
            margin: 10,
            autoplay: true,
            autoplayTimeout: 6000,
            autoplayHoverPause: true,
            items: 1
		});
		$(".owl-carousel").owlCarousel({
            margin: 10,
            nav: false,
            dots: false,
            loop: true,
            autoplay: false,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            responsive:{
                0:{
                    items:2
                },
                768:
                {
                	items: 3
                },
                1240:{
                    items:5
                }
            }
		});
	});
	</script>
@stop