@extends('layouts.default')

@section('content')
    <div class="mt-4 mb-4"></div>
    <div class="row  wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
        <div class="col s12 m3 center-align">
            <h2 class="center-align">{{ Lang::get('lang.subscription_title') }}</h2>
            <small>{{ Lang::get('lang.subscription_subtitle') }}</small>
        </div>
        <div class="col s12 m6 pl-0 pr-0">
            <form method="POST" action="{{ URL::to('contacto/suscribete/enviar') }}">
                <div class="row mb-0">
                    <div class="col s12 input-field">
                        <input type="text" name="name" class="name form-control rounded" required="required" value="{{ Input::old('name') }}">
                        <label class="rounded">{{ Lang::get('lang.contact_input1') }} (*)</label>
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col s12 input-field">
                        <input type="text" name="lastname" class="name form-control rounded" required="required" value="{{ Input::old('lastname') }}">
                        <label class="rounded">{{ Lang::get('lang.contact_input5') }} (*)</label>
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col s12 input-field">
                        <input type="email" name="email" class="email form-control rounded" required="required" value="{{ Input::old('email') }}">
                        <label class="rounded">{{ Lang::get('lang.contact_input3') }} (*)</label>
                    </div>
                </div>
                <div class="row">
                    <div class="col s12 ">
                        <p>
                          <input type="checkbox" name="accept" class="filled-in" id="accept" @if(Input::old('accept')) checked="checked" @endif />
                          <label for="accept">{{ Lang::get('lang.subscription_text1') }}</label>
                        </p>
                    </div>
                </div>
                <div class="row mb-0">
                    <div class="col s12 m6 valign-wrapper">
                        <button class="submit btn waves-effect waves-light bg-red">
                            {{ Lang::get('lang.send') }}
                        </button>
                        <div class="miniLoader ml-2">
                            {{ View::make('partials.preloader')->with('size','extra-small') }}
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class="col s12 m3"></div>
    </div>
    <div class="mt-4 mb-4"></div>
    <div class="row">
        <div class="col s12">
            <p class="center-align">{{ Lang::get('lang.subscription_text2') }}</p>
        </div>
    </div>
    <div class="mt-4 mb-4"></div>
    <div class="mt-4 mb-4"></div>

@stop

@section('postscript')
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=true"></script>

    <script type="text/javascript" src="{{ asset('html/js/gmaps.js') }}"></script>
    @if(Session::has('danger') || Session::has('success'))
        <input type="hidden" class="response" value="{{ Session::has('success') ? Session::get('success') : Session::get('danger') }}" data-type="{{ Session::has('success') ? 'success' : 'danger' }}">
        <script type="text/javascript">
            jQuery(document).ready(function($) {
                var $content = $("<p/>").html($('.response').val());
                if ($('.response').data('type') == "succewss") {
                    type = "green darken-1";
                }else
                {
                    var type = 'red lighten-1';
                }
                
                Materialize.toast($content,6000,type);
            });
        </script>
    @endif
@stop