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
                        <div class="col-xs-12 col-sm-6 col-lg-3 album-container formulario">
                            <div class="portfolio-album">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-view album" data-target=".sacerdotal">
                                        <img src="{{ asset('images/gallery/icon/sacerdotal.jpg') }}" class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3 album-container formulario">
                            <div class="portfolio-album">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-view album" data-target=".laguna">
                                        <img src="{{ asset('images/gallery/icon/laguna.jpg') }}" class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3 album-container formulario">
                            <div class="portfolio-album">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-view album" data-target=".juvenil">
                                        <img src="{{ asset('images/gallery/icon/juvenil.jpg') }}" class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3 album-container formulario">
                            <div class="portfolio-album">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-view album" data-target=".acacias">
                                        <img src="{{ asset('images/gallery/icon/acacias.jpg') }}" class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3 album-container formulario">
                            <div class="portfolio-album">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-view album" data-target=".boyera">
                                        <img src="{{ asset('images/gallery/icon/boyera.jpg') }}" class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3 album-container formulario">
                            <div class="portfolio-album">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-view album" data-target=".campamento">
                                        <img src="{{ asset('images/gallery/icon/campamento.jpg') }}" class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3 album-container formulario">
                            <div class="portfolio-album">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-view album" data-target=".papagayos">
                                        <img src="{{ asset('images/gallery/icon/papagayos.jpg') }}" class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xs-12 col-sm-6 col-lg-3 album-container formulario">
                            <div class="portfolio-album">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-view album" data-target=".habiarte">
                                        <img src="{{ asset('images/gallery/icon/habiarte.jpg') }}" class="text-center">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="portfolio-items">
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item sacerdotal logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/sacerdotal/sacerdotal.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-sacerdotal" class="fancybox" data-fancybox-href="{{ asset('images/gallery/sacerdotal/sacerdotal.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item sacerdotal logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/sacerdotal/sacerdotal_2.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-sacerdotal" class="fancybox" data-fancybox-href="{{ asset('images/gallery/sacerdotal/sacerdotal_2.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item sacerdotal logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/sacerdotal/sacerdotal_3.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-sacerdotal" class="fancybox" data-fancybox-href="{{ asset('images/gallery/sacerdotal/sacerdotal_3.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item sacerdotal logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/sacerdotal/sacerdotal_4.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-sacerdotal" class="fancybox" data-fancybox-href="{{ asset('images/gallery/sacerdotal/sacerdotal_4.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div><div class="col-xs-6 col-sm-6 col-md-4 portfolio-item sacerdotal logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/sacerdotal/sacerdotal_5.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-sacerdotal" class="fancybox" data-fancybox-href="{{ asset('images/gallery/sacerdotal/sacerdotal_5.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item sacerdotal logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/sacerdotal/sacerdotal_6.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-sacerdotal" class="fancybox" data-fancybox-href="{{ asset('images/gallery/sacerdotal/sacerdotal_6.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item sacerdotal logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/sacerdotal/sacerdotal_7.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-sacerdotal" class="fancybox" data-fancybox-href="{{ asset('images/gallery/sacerdotal/sacerdotal_7.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item sacerdotal logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/sacerdotal/sacerdotal_8.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-sacerdotal" class="fancybox" data-fancybox-href="{{ asset('images/gallery/sacerdotal/sacerdotal_8.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item sacerdotal logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/sacerdotal/sacerdotal_9.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-sacerdotal" class="fancybox" data-fancybox-href="{{ asset('images/gallery/sacerdotal/sacerdotal_9.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item sacerdotal logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/sacerdotal/sacerdotal_10.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-sacerdotal" class="fancybox" data-fancybox-href="{{ asset('images/gallery/sacerdotal/sacerdotal_10.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item sacerdotal logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/sacerdotal/sacerdotal_11.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-sacerdotal" class="fancybox" data-fancybox-href="{{ asset('images/gallery/sacerdotal/sacerdotal_11.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item joven logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-1.png') }}" class="img-responsive"  alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-joven" class="fancybox" data-fancybox-href="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-1.png') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item joven logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-2.png') }}" class="img-responsive"  alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-joven" class="fancybox" data-fancybox-href="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-2.png') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item joven logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-3.png') }}" class="img-responsive"  alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-joven" class="fancybox" data-fancybox-href="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-3.png') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item joven logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-4.png') }}" class="img-responsive"  alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-joven" class="fancybox" data-fancybox-href="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-4.png') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item joven logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-5.png') }}" class="img-responsive"  alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-joven" class="fancybox" data-fancybox-href="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-5.png') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item joven logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-6.png') }}" class="img-responsive"  alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-joven" class="fancybox" data-fancybox-href="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-6.png') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item joven logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-7.png') }}" class="img-responsive"  alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-joven" class="fancybox" data-fancybox-href="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-7.png') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item joven logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-8.png') }}" class="img-responsive"  alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-joven" class="fancybox" data-fancybox-href="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-8.png') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item joven logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-9.png') }}" class="img-responsive"  alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-joven" class="fancybox" data-fancybox-href="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-9.png') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item joven logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-10.png') }}" class="img-responsive"  alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-joven" class="fancybox" data-fancybox-href="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-10.png') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item joven logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-11.png') }}" class="img-responsive"  alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-joven" class="fancybox" data-fancybox-href="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-11.png') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item joven logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-12.png') }}" class="img-responsive"  alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-joven" class="fancybox" data-fancybox-href="{{ asset('images/gallery/jovenes-que-inspiran/jovenes-que-inspiran-12.png') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_1.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_1.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_2.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_2.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_3.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_3.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_4.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_4.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_5.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_5.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_6.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_6.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_7.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_7.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_8.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_8.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_9.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_9.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_10.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_10.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_11.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_11.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_12.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_12.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_13.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_13.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_14.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_14.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_15.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_15.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_16.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_16.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_17.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_17.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_18.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_18.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_19.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_19.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_20.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_20.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_21.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_21.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_22.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_22.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_23.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_23.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_24.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_24.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_25.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_25.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_26.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_26.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_27.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_27.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_28.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_28.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_29.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_29.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_30.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_30.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_31.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_31.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_32.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_32.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item juvenil logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/recreacion/recreacion_33.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery" class="fancybox" data-fancybox-href="{{ asset('images/gallery/recreacion/recreacion_33.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna1.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna1.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna2.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna2.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna3.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna3.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna4.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna4.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna5.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna5.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna6.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna6.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna7.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna7.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna8.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna8.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna9.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna9.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna10.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna10.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna11.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna11.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna12.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna12.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna13.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna13.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna14.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna14.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna15.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna15.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna16.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna16.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna17.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna17.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-6 col-sm-6 col-md-4 portfolio-item laguna logos">
                                <div class="portfolio-wrapper">
                                    <div class="portfolio-single">
                                        <div class="portfolio-thumb">
                                            <img src="{{ asset('images/gallery/laguna/laguna18.jpg') }}" class="img-responsive" alt="">
                                        </div>
                                        <div class="portfolio-view">
                                            <ul class="nav nav-pills">
                                                <li><a href="#!" rel="gallery-laguna" class="fancybox" data-fancybox-href="{{ asset('images/gallery/laguna/laguna18.jpg') }}"><i class="fa fa-eye"></i></a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
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