@extends('layouts.default')

@section('content')
    <div class="row contenedor wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
        <div class="col s12">
            <h1 class="center-align about-title">{{ Lang::get('lang.about_menu3') }}</h1>
        </div>
    </div>

    @for($i = 1; $i <=5; $i++)
    <div class="row contenedor wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
        <div class="col s12">
            <h1 class="about-title center-align">{{ Lang::get('lang.projects_title'.$i) }}</h1>
            <p class="justify-align text-colum-2">{{ Lang::get('lang.projects_text'.$i) }}</p>
        </div>
    </div>
    @endfor
@stop