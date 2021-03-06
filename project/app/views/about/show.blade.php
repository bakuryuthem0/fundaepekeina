@extends('layouts.default')

@section('content')
@include('partials.main-banner')
<div class="row contenedor">
    <div class="col s12">
        <h4 class="center-align line-height-medium-titles"> {{ Lang::get('lang.history_text') }}</h4>
    </div>
</div>
<div class="row contenedor">
    @foreach($hist as $h)    
        <div class="col s12 m6 l3 mb-2 wow fadeIn news" data-wow-duration="600ms" data-wow-delay="300ms">
            <div class="card hoverable bg-white mt-0 mb-0">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="#!">
                        @if(!is_null($h->imagenes->first()))
                            <img src="{{ asset('images/news/'.$h->imagenes->first()->image) }}" class="img-responsive img-hist">
                        @endif
                    </a>
                </div>
                <div class="card-content waves-effect waves-block pt-1 pb-1">
                    <h3 class="mt-1 mb-0">
                        <span class="card-title truncate">
                            {{ $h->titles->first()->text }}
                        </span>
                    </h3>
                    <p class="m-0">{{ date('d / m / Y',strtotime($h->created_at)) }}</p>
                    <a href="{{ URL::to('entrevistas/historias-epekeinas/'.$h->slugs->first()->text) }}" class="text-darkgray read-more">{{ Lang::get('lang.read_interview') }}</a> 
                </div>
            </div>
        </div>
    @endforeach
</div>

@stop