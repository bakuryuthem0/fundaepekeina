@extends('layouts.default')

@section('content')
    <div class="mt-4 mb-4"></div>
    <div class="row">
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
    <div class="row">
        <div class="col s12 voluntariado relative">
            <div class="col s12 m3 pl-0 pr-0 relative center-align voluntario" data-text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.">
                <img src="http://lorempixel.com/g/380/520/people/1" class="responsive-img">
                <img src="http://lorempixel.com/380/520/people/1" class="responsive-img alt">
            </div>
            <div class="col s12 m3 pl-0 pr-0 relative center-align voluntario" data-text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.">
                <img src="http://lorempixel.com/g/380/520/people/2" class="responsive-img">
                <img src="http://lorempixel.com/380/520/people/2" class="responsive-img alt">
            </div>
            <div class="col s12 m3 pl-0 pr-0 relative center-align voluntario" data-text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.">
                <img src="http://lorempixel.com/g/380/520/people/3" class="responsive-img">
                <img src="http://lorempixel.com/380/520/people/3" class="responsive-img alt">
            </div>
            <div class="col s12 m3 pl-0 pr-0 relative center-align voluntario" data-text="Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.">
                <img src="http://lorempixel.com/g/380/520/people/4" class="responsive-img">
                <img src="http://lorempixel.com/380/520/people/4" class="responsive-img alt">
            </div>
            <div class="voluntario-text justify-align pl-4 pt-4 pr-4 pb-4 text-white">
            </div>
        </div>
    </div>
    <div class="mt-4 mb-4"></div>
    <div class="row valign-wrapper">
            <img src="{{ asset('images/logo.png') }}" class="ml-auto">
            <p class="mr-auto">{{ Lang::get('lang.volunteer_text5') }}</p>
    </div>
    <div class="mt-4 mb-4"></div>
@stop

@section('postscript')

@stop