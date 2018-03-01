@extends('layouts.default')

@section('content')
    <div class="mt-4 mb-4"></div>
    <div class="row contenedor">
        <div class="col s12 center-align">
            <div class="d-inline-block left-align">
                <blockquote>
                    <i class="fa fa-quote-left"></i> <em>{{ Lang::get('lang.volunteer_quote2') }}</em> <i class="fa fa-quote-right"></i>
                </blockquote>
                <p><strong>Para completar</strong></p>
            </div>
        </div>
    </div>
    <div class="mt-4 mb-4"></div>
    <div class="row contenedor">
        <div class="col s12 voluntariado relative">
            <div class="col s12 m3 pl-0 pr-0 relative center-align voluntario position-relative" data-text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.">
                <img src="{{ asset('images/volunteers/volunteer_alt_1.jpg') }}" class="responsive-img">
                <img src="{{ asset('images/volunteers/volunteer1.jpg') }}" class="responsive-img alt">
                <div class="voluntario-text mb-2 pt-1 pl-1 pr-1 pb-1"></div>
            </div>
            <div class="col s12 m3 pl-0 pr-0 relative center-align voluntario position-relative" data-text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.">
                <img src="{{ asset('images/volunteers/volunteer_alt_2.jpg') }}" class="responsive-img">
                <img src="{{ asset('images/volunteers/volunteer2.jpg') }}" class="responsive-img alt">
                <div class="voluntario-text mb-2 pt-1 pl-1 pr-1 pb-1"></div>
            </div>
            <div class="col s12 m3 pl-0 pr-0 relative center-align voluntario position-relative" data-text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.">
                <img src="{{ asset('images/volunteers/volunteer_alt_3.jpg') }}" class="responsive-img">
                <img src="{{ asset('images/volunteers/volunteer3.jpg') }}" class="responsive-img alt">
                <div class="voluntario-text mb-2 pt-1 pl-1 pr-1 pb-1"></div>
            </div>
            <div class="col s12 m3 pl-0 pr-0 relative center-align voluntario position-relative" data-text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat.">
                <img src="{{ asset('images/volunteers/volunteer_alt_4.jpg') }}" class="responsive-img">
                <img src="{{ asset('images/volunteers/volunteer4.jpg') }}" class="responsive-img alt">
                <div class="voluntario-text mb-2 pt-1 pl-1 pr-1 pb-1"></div>
            </div>
        </div>
    </div>
    <div class="mt-4 mb-4"></div>
    <div class="row contenedor">
            <div class="col s12 m6 center-align right-align-m pl-2"><img src="{{ asset('images/logo.png') }}" class=""></div>
            <div class="col s12 m6 pr-2 center-align left-align-m"><p class="">{{ Lang::get('lang.volunteer_text5') }}</p></div>
    </div>
    <div class="mt-4 mb-4"></div>
@stop

@section('postscript')

@stop