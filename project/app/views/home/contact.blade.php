@extends('layouts.main')

@section('content')
	<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="">
                        <div class="col-sm-12">
                            <h1 class="title">Contáctenos</h1>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="">
        <div class="container">
            <div class="col-sm-12 col-md-6 info-contact">
                <h2>Contactos</h2>
                <address>
                <i class="fa fa-envelope-o"></i> E-mail: <a href="mailto:fundaepekeina@gmail.com">fundaepekeina@gmail.com</a> <br> 
                <i class="fa fa-phone"></i> Telefono: +58 0212-3077281<br> 
                </address>

                <h2>Dirección</h2>
                <address>
                Av. Valencia Edif. Rossini, Apto 9, Entrada B.<br>
                Urb. Las Acacias Caracas.<br>
                Z.P 1040.
                </address>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="alert responseAjax">
                    <p>
                    </p>
                </div>
            </div>
            <div class="col-md-6 col-sm-12">
                <div class="contact-form bottom">
                    <h2>Envienos un correo</h2>
                    
                    <div class="form-group">
                        <input type="text" name="name" class="name form-control" required="required" placeholder="Nombre">
                        <small class="response-danger response-danger-name"></small>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="subject form-control" required="required" placeholder="Asunto">
                        <small class="response-danger response-danger-subject"></small>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="email form-control" required="required" placeholder="Email">
                        <small class="response-danger response-danger-email"></small>
                    </div>
                    <div class="form-group">
                        <textarea name="msg" class="msg form-control" id="msg" required="required" rows="8" placeholder="Escriba aqui su mensaje"></textarea>
                        <small class="response-danger response-danger-msg"></small>
                    </div>                        
                    <div class="form-group">
                        <button class="submit btn btn-submit btn-contact">
                            <p>Enviar</p>
                            <img src="{{ asset('images/ajax-loader.gif') }}" class="miniLoader">
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section> <!--/#map-section-->     
@stop

@section('postscript')
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <script type="text/javascript" src="{{ asset('html/js/gmaps.js') }}"></script>
    
@stop