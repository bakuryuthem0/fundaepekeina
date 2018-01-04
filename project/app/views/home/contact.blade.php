@extends('layouts.default')

@section('content')
    <div class="mt-4 mb-4"></div>
    <div class="row  wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
        <div class="col s12 m6 mt-2">
            <h2 class="mt-0">{{ Lang::get('lang.contact') }}</h2>
            <p>E-mail: <a href="mailto:fundaepekeina@gmail.com">fundaepekeina@gmail.com</a></p> 
            <p>{{ Lang::get('lang.phone') }}: +58 0212-3077281<br> </p>
            <ul>
                <li class="d-inline ml-1 mr-1">
                    <a target="_blank" class="blue-grey-text text-darken-4" href="https://twitter.com/fundaepekeina">
                        <i class="fa fa-twitter fa-2x"></i>
                    </a>
                </li>
                <li class="d-inline ml-1 mr-1">
                    <a target="_blank" class="blue-grey-text text-darken-4" href="https://www.facebook.com/funda.epekeina">
                        <i class="fa fa-facebook fa-2x"></i>
                    </a>
                </li>
                <li class="d-inline ml-1 mr-1">
                    <a target="_blank" class="blue-grey-text text-darken-4" href="https://www.instagram.com/fundaepekeina/">
                        <i class="fa fa-instagram fa-2x"></i>
                    </a>
                </li>
            </ul>
            <p>{{ Lang::get('lang.address_title') }}</p>
            <address>
                {{ Lang::get('lang.address_text') }}
            </address>
        </div>
        <div class="col s12 m6 pl-0 pr-0">
            <div class="row mb-0 mt-2">
                <div class="col s12 input-field">
                    <input type="email" name="email" class="email form-control rounded" required="required">
                    <label class="rounded">{{ Lang::get('lang.contact_input3') }}</label>
                </div>
            </div>
            <div class="row mb-0">
                <div class="col s12 m6 input-field">
                    <input type="text" name="name" class="name form-control rounded" required="required">
                    <label class="rounded">{{ Lang::get('lang.contact_input1') }}</label>
                </div>
                <div class="col s12 m6 input-field">
                    <input type="text" name="subject" class="subject form-control rounded" required="required">
                    <label class="rounded">{{ Lang::get('lang.contact_input2') }}</label>
                </div>
            </div>
            <div class="row mb-0">
                <div class="col s12 input-field">
                    <textarea name="msg" class="msg form-control rounded materialize-textarea" id="msg" required="required" rows="8"></textarea>
                    <label class="rounded">{{ Lang::get('lang.contact_input4') }}</label>
                </div>                        
            </div>
            <div class="row">
                <div class="col s12 m6 valign-wrapper">
                    <button class="submit btn btn-submit btn-contact waves-effect waves-light bg-red">
                        {{ Lang::get('lang.send') }}
                    </button>
                    <div class="miniLoader ml-2">
                        {{ View::make('partials.preloader')->with('size','extra-small') }}
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-4 mb-4"></div>
    <div class="mt-4 mb-4"></div>

@stop

@section('postscript')
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <script type="text/javascript" src="{{ asset('html/js/gmaps.js') }}"></script>
    
@stop