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
                
                <div class="col-xs-12 center-block padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <h1 class="veronica text-center">
                            <span class="text-pink"><strong>{{ $hist->title }}</strong></span>
                        </h1>   
                        @if(!is_null($hist->subtitle))
                        <h2 class="text-center">
                            <span class="text-blue"><strong>{{ $hist->subtitle->subtitulo }}</span>
                        </h2>
                        @endif
                        <div class="col-xs-12 text-justify">
                            {{ $hist->descripcion }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

@stop