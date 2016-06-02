@extends('layouts.main')

@section('content')
<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="">
                        <div class="col-sm-12">
                            <h1 class="title">Escuela de campo para agricultores La Laguna</h1>
                            <p></p>
                        </div>                                                                                
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->

    <section id="blog-details" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                            <div class="single-blog blog-details two-column">
                                <div class="post-content overflow">
                                    <div class="col-xs-12 col-sm-4">
                                        <div class="portfolio-wrapper">
                                            <div class="portfolio-single">
                                                <div class="">
                                                    <img src="{{ asset('images/projects/laguna.jpg') }}" class="center-block img-responsive" alt="La laguna">
                                                </div>
                                                <div class="portfolio-view">
                                                    <ul class="nav nav-pills">
                                                        <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/projects/laguna.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                                    </ul>
                                                </div>
                                            </div>
                                        </div>
                                        
                                    </div>
                                    <p class="text-justify">
                                        El viernes 26 de febrero iniciamos formalmente el Proyecto de recuperación del Paisaje Productivo de la aldea La Laguna ubicada en Canaguá, estado Mérida en alianza con el PNUD y con el apoyo técnico de la Universidad de Los Andes (ULA).​ ​Al acto de instalación y a la primera clase de la Escuela de Campo para Agricultores “La Laguna” asistieron nuestro presidente el Padre Honegger Molina y el rector de la ULA, Mario Bonucci R.
                                    </p>
                                    <p class="text-justify">
                                        Según los profesores, ha sido excelente el trabajo de los participantes en el diagnóstico participativo con las herramientas propuestas: diagrama de flujo, mapa de la comunidad, croquis de las parcelas, mapa agropecuario, entre otras. Todo con el objetivo de alcanzar el mejoramiendo de la productividad agrícola en el Sector La Laguna en Canaguá.
                                    </p>
                                    <p class="text-justify">
                                        Las organizaciones de agricultores familiares que forman parte del proyecto fortalecerán sus capacidades mediante la metodología de Escuelas de Campo de Agricultores (ECA), para producir semillas de calidad y con​ ​procesos respetuosos​ ​con el medio ambiente.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
@stop

@section('postscript')
    <script type="text/javascript">
    $(document).ready(function() {
        $(".fancybox").fancybox();
    });
</script> 
@stop