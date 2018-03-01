@extends('layouts.default')
@section('postcss')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css">
@stop
@section('content')
<div class="row contenedor wow fadeIn mt-4 pb-4" data-wow-duration="500ms" data-wow-delay="300ms">
    <div class="col s12">
        <img src="{{ asset('images/icons/quienes_somos.png') }}" class="d-block mx-auto about-images" alt="">
        <h1 class="center-align about-title mt-2">{{ Lang::get('lang.about_menu') }}</h1>
    </div>
    <div class="col s12 text-colum-2">
        <p class="justify-align mt-0">
            <strong>{{ Lang::get('lang.epekeina') }}</strong>: {{ Lang::get('lang.epekeina_means') }}
        </p>
        <p class="justify-align wow fadeIn">
            <strong>Funda Epékeina</strong> {{ Lang::get('lang.epekeina_about') }}
        </p>
    </div>
</div>
<div class="row contenedor wow fadeIn mt-4 pb-4" data-wow-duration="500ms" data-wow-delay="600ms">
    <div class="col s12 m6 about-column">
        <img src="{{ asset('images/icons/mision.png') }}" class="d-block mx-auto about-images" alt="">

        <h2 class="center-align about-title">{{ Lang::get('lang.mission') }}</h2>
        <p class="justify-align">
            {{ Lang::get('lang.mission_text') }}
        </p>
    </div>
    <div class="col s12 m6 about-column">
        <img src="{{ asset('images/icons/vision.png') }}" class="d-block mx-auto about-images" alt="">

        <h2 class="center-align wow fadeIn about-title">
            {{ Lang::get('lang.vision') }}
        </h2>
        <p class="justify-align">
            {{ Lang::get('lang.vision_text') }}
        </p>
    </div>
</div>
<div class="row contenedor wow fadeIn mt-4 pb-4" data-wow-duration="500ms" data-wow-delay="300ms">
    <div class="col s12">
        <img src="{{ asset('images/icons/estrategias_creo.png') }}" class="d-block mx-auto about-images" alt="">

        <h2 class="center-align about-title">{{ Lang::get('lang.strategy_title') }}</h2>
        @for($i = 1; $i <= 3; $i++)
        <p class="justify-align">
            {{ Lang::get('lang.strategy_text'.$i) }}
        </p>
        @endfor
    </div>
</div>
<div class="row contenedor wow fadeIn mt-4 pb-4" data-wow-duration="500ms" data-wow-delay="300ms">
    <div class="col s12 m6 about-column">
        <img src="{{ asset('images/icons/obj_gen.png') }}" class="d-block mx-auto about-images" alt="">

        <h2 class="center-align about-title">{{ Lang::get('lang.objetive_primary') }}</h2>
        <p class="justify-align">{{ Lang::get('lang.objetive_text1') }}</p>
    </div>
    <div class="col s12 m6 about-column">
        <img src="{{ asset('images/icons/obj_esp.png') }}" class="d-block mx-auto about-images" alt="">

        <h2 class="center-align about-title">{{ Lang::get('lang.objetive_specific') }}</h2>
        @for($i = 2; $i <= 5; $i++)
        <p class="justify-align"><strong>{{ Lang::get('lang.objeive_title'.$i) }}</strong> {{ Lang::get('lang.objetive_text'.$i) }}</p>
        @endfor
        </p>
    </div>
</div>
<div class="row contenedor wow fadeIn mt-4 pb-4" data-wow-duration="500ms" data-wow-delay="300ms">
    <div class="col s12 m6 about-column">
        <img src="{{ asset('images/icons/lineas_accion.png') }}" class="d-block mx-auto about-images" alt="">

        <h2 class="center-align about-title">{{ Lang::get('lang.action_lines_title') }}</h2>
        <ul class="browser-default">
            @for($i = 1; $i <= 10; $i++)
                <li>{{ Lang::get('lang.action_lines_text'.$i) }}</li>
            @endfor
        </ul>
    </div>
    <div class="col s12 m6 about-column">
        <img src="{{ asset('images/icons/valores.png') }}" class="d-block mx-auto about-images" alt="">

        <h2 class="center-align about-title">{{ Lang::get('lang.values_title') }}</h2>
        <ul class="browser-default">
            @for($i = 1; $i <= 10; $i++)
                <li>{{ Lang::get('lang.values_text'.$i) }}</li>
            @endfor
        </ul>
    </div>
</div>
<div id="organigrama"></div>
<div class="row contenedor wow fadeIn mt-4 pb-4" data-wow-duration="500ms" data-wow-delay="300ms" >
    <div class="col s12">
        <a href="{{ asset('images/organigrama_pc.jpg') }}" class="fancybox">
            <picture>
                <source  media="(min-width:1024px)" srcset="{{ asset('images/organigrama_pc.jpg') }}">
                <source  media="(min-width:426px) and (max-width:1023px)" srcset="{{ asset('images/organigrama_tablet.jpg') }}">
                <img src="{{ asset('images/organigrama_phone.jpg') }}" class="responsive-img organigrama">
            </picture>
        </a>
    </div>
</div>
@stop
@section('postscript')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>

<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.fancybox').fancybox();
    });
</script>
@stop