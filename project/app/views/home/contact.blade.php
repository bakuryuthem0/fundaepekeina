@extends('layouts.main')

@section('content')
	<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="">
                        <div class="col-sm-12">
                            <h1 class="title">{{ Lang::get('lang.contact_us') }}</h1>
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
                <h2>{{ Lang::get('lang.contact') }}</h2>
                <address>
                <i class="fa fa-envelope-o"></i> E-mail: <a href="mailto:fundaepekeina@gmail.com">fundaepekeina@gmail.com</a> <br> 
                <i class="fa fa-phone"></i> {{ Lang::get('lang.phone') }}: +58 0212-3077281<br> 
                </address>

                <h2>{{ Lang::get('lang.address_title') }}</h2>
                <address>
                    {{ Lang::get('lang.address_text') }}
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
                    <h2>{{ Lang::get('lang.send_email') }}</h2>
                    
                    <div class="form-group">
                        <input type="text" name="name" class="name form-control" required="required" placeholder="{{ Lang::get('lang.contact_input1') }}">
                        <small class="response-danger response-danger-name"></small>
                    </div>
                    <div class="form-group">
                        <input type="text" name="subject" class="subject form-control" required="required" placeholder="{{ Lang::get('lang.contact_input2') }}">
                        <small class="response-danger response-danger-subject"></small>
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="email form-control" required="required" placeholder="{{ Lang::get('lang.contact_input3') }}">
                        <small class="response-danger response-danger-email"></small>
                    </div>
                    <div class="form-group">
                        <textarea name="msg" class="msg form-control" id="msg" required="required" rows="8" placeholder="{{ Lang::get('lang.contact_input4') }}"></textarea>
                        <small class="response-danger response-danger-msg"></small>
                    </div>                        
                    <div class="form-group">
                        <button class="submit btn btn-submit btn-contact">
                            <p>{{ Lang::get('lang.send') }}</p>
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