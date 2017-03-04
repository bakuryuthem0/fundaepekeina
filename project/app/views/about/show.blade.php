@extends('layouts.main')

@section('content')
	<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="">
                        <div class="col-sm-12">
                            <h1 class="title">Historias Epékeinas</h1>
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
                    <h2> En esta sección podras encontrar reportajes, entrevistas y testimoniales de aquellos que han compartido con nosotros.</h2>
                </div>
                <div class="col-xs-12 center-block padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    @foreach($hist as $h)
                        <div class="col-xs-12 col-sm-6 col-lg-3">
                            <img src="{{ asset('images/news/'.$h->imagenes->first()->image) }}" class="img-responsive">
                            <div class="text-justify">
                                <h3 class="text-pink">{{ $h->title }}</h3>
                                <h5 class="text-blue">{{ date('d/m/Y H:i:s',strtotime($h->updated_at)) }}</h5>
                                <p>{{ substr(strip_tags($h->descripcion), 0, 100) }}...</p>
                                <a href="{{ URL::to('quienes-somos/historias-epekeinas/'.$h->id) }}"><span class="bolder">Leer entrevista</span></a>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

@stop