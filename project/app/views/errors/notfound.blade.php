@extends('layouts.default')
@section('content')
    <div class="mt-4 mb-4"></div>
    <div class="row valign-wrapper center-align" style="height: 80vh;">
        <div class="col s12">
            <h1 class="not_found">404</h1>
            <p>{{ Lang::get('lang.not_found') }}</p>
            <p>{{ Lang::get('lang.not_found_text') }}</p>
            <a href="{{ URL::to('/') }}" class="btn bg-red waves-effect waves-light">{{ Lang::get('lang.back_to_home') }}</a>

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
        </div>
    </div>
    <div class="mt-4 mb-4"></div>
@stop