@extends('layouts.main')

@section('content')
<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="">
                        <div class="col-sm-12">
                            <h1 class="title">{{ Lang::get('lang.donations') }}</h1>
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
                                    <p class="text-justify">
                                        {{ Lang::get('lang.donation_text1') }}
                                    </p>
                                    <hr>
                                    <h3>{{ Lang::get('lang.donation_text2') }}</h3>
                                    <p class="text-justify">
                                        {{ Lang::get('lang.donation_text3') }}
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 formulario">
                            <img src="{{ asset('images/info/donaciones_sedeprincipal.jpg') }}" class="center-block img-responsive">
                        </div>
                        <div class="col-sm-12 col-md-6 formulario">
                            <img src="{{ asset('images/info/donaciones_acacias.jpg') }}" class="center-block img-responsive">
                        </div>
                        <div class="col-sm-12 col-md-6 formulario">
                            <img src="{{ asset('images/info/donaciones_laboyera.jpg') }}" class="center-block img-responsive">
                        </div>
                        <div class="col-sm-12 col-md-6 formulario">
                            <img src="{{ asset('images/info/donaciones_sacerdotal.jpg') }}" class="center-block img-responsive">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
@stop
