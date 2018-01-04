@extends('layouts.default')

@section('content')
@include('partials.main-banner')
<div class="row">
    <div class="col s12">
        <h3 class="center-align"> {{ Lang::get('lang.history_text') }}</h3>
    </div>
</div>
<div class="row">
    @foreach($hist as $h)    
        <div class="col s12 m6 l3 mb-2 wow fadeIn" data-wow-duration="600ms" data-wow-delay="300ms">
            <div class="card hoverable bg-white mt-0 mb-0">
                <div class="card-image waves-effect waves-block waves-light">
                    <a href="#!">
                        @if(!is_null($h->imagenes->first()))
                            <img src="{{ asset('images/news/'.$h->imagenes->first()->image) }}" class="img-responsive img-hist">
                        @endif
                    </a>
                </div>
                <div class="card-content waves-effect waves-block">
                    <h3 class="truncate text-red">{{ $h->titles->first()->text }}</h3>
                    <h5 class="text-blue">{{ date('d/m/Y H:i:s',strtotime($h->updated_at)) }}</h5>
                    <p class="truncate">{{ substr(strip_tags($h->descriptions->first()->text), 0, 100) }}...</p>
                    <a href="{{ URL::to('entrevistas/historias-epekeinas/'.$h->slugs->first()->text) }}"><span class="bolder">{{ Lang::get('lang.read_interview') }}</span></a> 
                </div>
            </div>
        </div>
    @endforeach
</div>

@stop