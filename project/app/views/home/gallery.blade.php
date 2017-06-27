@extends('layouts.main')

@section('content')
<section id="page-breadcrumb" class="formulario">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="">
                        <div class="col-sm-12">
                            <h1 class="title">
                                Galería
                                <a href="#!" class="back-link pull-right">Volver atras</a>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        @foreach($gallery as $g)
                            <div class="col-xs-12 col-sm-6 col-lg-3 album-container formulario">
                                <div class="portfolio-album">
                                    <div class="portfolio-wrapper">
                                        <div class="portfolio-view album" data-target=".gallery_{{ $g->id }}">
                                            <img src="{{ asset('images/gallery/icon/'.$g->icon) }}" class="text-center" alt="{{ $g->name }}" title="{{ $g->name }}">
                                        </div>
                                    </div>
                                </div>
                            </div>
                            @if(!is_null($g->imagenes->first()))
                            <div class="portfolio-items">
                                @foreach($g->imagenes as $i)
                                <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item gallery_{{ $g->id }} logos">
                                    <div class="portfolio-wrapper">
                                        <div class="portfolio-single">
                                            <div class="portfolio-thumb">
                                                <img src="{{ asset('images/gallery/'.$g->name.'/'.$i->image) }}" class="img-responsive" alt="">
                                            </div>
                                            <div class="portfolio-view">
                                                <ul class="nav nav-pills">
                                                    <li>
                                                        <a href="#!" rel="gallery-gallery_{{ $g->id }}" class="fancybox" data-fancybox-href="{{ asset('images/gallery/'.$g->name.'/'.$i->image) }}"><i class="fa fa-eye"></i></a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                @endforeach
                            </div>
                            @endif
                        @endforeach
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#projects-->
@stop

@section('postscript')
    <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox();
        });
    </script> 
@stop