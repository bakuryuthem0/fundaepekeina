@extends('layouts.main')
@section('content')
	<section id="error-page">
        <div class="error-page-inner">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-sm-12">
                        <div class="text-center">
                            <div class="bg-404">
                                <div class="error-image">                                
                                    <img class="img-responsive" src="{{ asset('html/images/404.png') }}" alt="">  
                                </div>
                            </div>
                            <h2>Pagina no encontrada</h2>
                            <p>La pagina que esta buscando puede que no exista o se haya removido.</p>
                            <a href="{{ URL::to('/') }}" class="btn btn-error">Volver al inicio</a>
                            <div class="social-link">
                                <span><a href="#"><i class="fa fa-facebook"></i></a></span>
                                <span><a href="#"><i class="fa fa-twitter"></i></a></span>
                                <span><a href="#"><i class="fa fa-google-plus"></i></a></span>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

@stop