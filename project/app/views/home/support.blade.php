@extends('layouts.main')

@section('content')
<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="">
                        <div class="col-sm-12">
                            <h1 class="title">{{ Lang::get('lang.support_us') }}</h1>
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
                        <div class="col-sm-12 col-md-6 formulario">
                            <h3><strong>{{ Lang::get('lang.plan_title1') }}</strong></h3>
                            <br>
                            {{ Lang::get('lang.plan_text1') }}
                        </div>
                        <div class="col-sm-12 col-md-6 formulario">
                            <h3><strong>{{ Lang::get('lang.plan_title2') }}</strong></h3>
                            <br>
                            {{ Lang::get('lang.plan_text2') }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 col-md-6 formulario">
                            <h3><strong>{{ Lang::get('lang.plan_title3') }}</strong></h3>
                            <br>
                            {{ Lang::get('lang.plan_text3') }}
                        </div>
                        <div class="col-sm-12 col-md-6 formulario">
                            <h3><strong>{{ Lang::get('lang.plan_title4') }}</strong></h3>
                            <br>
                            {{ Lang::get('lang.plan_text4') }}
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-sm-12 formulario">
                            <h3><strong>{{ Lang::get('lang.plan_title5') }}</strong></h3>
                            <br>
                            {{ Lang::get('lang.plan_text5') }}
                        </div>
                        <div class="col-xs-12 text-center">
                            <a href="{{ URL::to('contacto/donaciones') }}" class="btn btn-info">{{ Lang::get('lang.see_accounts') }}</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
@stop
