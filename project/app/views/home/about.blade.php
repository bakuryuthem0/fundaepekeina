@extends('layouts.default')

@section('content')
<div class="row contenedor wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
    <div class="col s12">
        <h1 class="center-align about-title">{{ Lang::get('lang.about_menu') }}</h1>
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
<div class="row contenedor wow fadeIn" data-wow-duration="500ms" data-wow-delay="600ms">
    <div class="col s12 m6">
        <h2 class="center-align about-title">{{ Lang::get('lang.mission') }}</h2>
        <p class="justify-align">
            {{ Lang::get('lang.mission_text') }}
        </p>
    </div>
    <div class="col s12 m6">
        <h2 class="center-align wow fadeIn about-title">
            {{ Lang::get('lang.vision') }}
        </h2>
        <p class="justify-align">
            {{ Lang::get('lang.vision_text') }}
        </p>
    </div>
</div>
<div class="row contenedor wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
    <div class="col s12">
        <h2 class="center-align about-title">{{ Lang::get('lang.strategy_title') }}</h2>
        @for($i = 1; $i <= 3; $i++)
        <p class="justify-align">
            {{ Lang::get('lang.strategy_text'.$i) }}
        </p>
        @endfor
    </div>
</div>
<div class="row contenedor wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
    <div class="col s12 m6">
        <h2 class="center-align about-title">{{ Lang::get('lang.objetive_primary') }}</h2>
        <p class="justify-align">{{ Lang::get('lang.objetive_text1') }}</p>
    </div>
    <div class="col s12 m6">
        <h2 class="center-align about-title">{{ Lang::get('lang.objetive_specific') }}</h2>
        @for($i = 2; $i <= 5; $i++)
        <p class="justify-align"><strong>{{ Lang::get('lang.objeive_title'.$i) }}</strong> {{ Lang::get('lang.objetive_text'.$i) }}</p>
        @endfor
        </p>
    </div>
</div>
<div class="row contenedor wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
    <div class="col s12 m6">
        <h2 class="center-align about-title">{{ Lang::get('lang.action_lines_title') }}</h2>
        <ul class="browser-default">
            @for($i = 1; $i <= 10; $i++)
                <li>{{ Lang::get('lang.action_lines_text'.$i) }}</li>
            @endfor
        </ul>
    </div>
    <div class="col s12 m6">
        <h2 class="center-align about-title">{{ Lang::get('lang.values_title') }}</h2>
        <ul class="browser-default">
            @for($i = 1; $i <= 10; $i++)
                <li>{{ Lang::get('lang.values_text'.$i) }}</li>
            @endfor
        </ul>
    </div>
</div>
<div id="organigrama"></div>
<div class="row contenedor wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms" >
    <div class="col s12">
        <h2 class="center-align about-title">{{ Lang::get('lang.our_organization') }}</h2>
        <picture>
            <source  media="(min-width:1024px)" srcset="{{ asset('images/organigrama_pc.jpg') }}">
            <source  media="(min-width:426px) and (max-width:1023px)" srcset="{{ asset('images/organigrama_tablet.jpg') }}">
            <img src="{{ asset('images/organigrama_phone.jpg') }}" class="responsive-img">
        </picture>
    </div>
</div>
@stop