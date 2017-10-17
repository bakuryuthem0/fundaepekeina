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
                <div class="text-center">
                    <h2> {{ Lang::get('lang.history_text') }}</h2>
                </div>
                <div class="col-xs-12 center-block padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    @foreach($hist as $h)
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            @if(!is_null($h->imagenes->first()))
                            <img src="{{ asset('images/news/'.$h->imagenes->first()->image) }}" class="img-responsive img-hist">
                            @endif
                            <div class="text-justify">
                                <h3 class="text-pink">{{ $h->titles->first()->text }}</h3>
                                <h5 class="text-blue">{{ date('d/m/Y H:i:s',strtotime($h->updated_at)) }}</h5>
                                <p>{{ substr(strip_tags($h->descriptions->first()->text), 0, 100) }}...</p>
                                <a href="{{ URL::to('quienes-somos/historias-epekeinas/'.$h->slugs->first()->text) }}"><span class="bolder">{{ Lang::get('lang.read_interview') }}</span></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

@stop