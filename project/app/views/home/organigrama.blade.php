@extends('layouts.main')

@section('content')
	<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="">
                        <div class="col-sm-12">
                            <h1 class="title">{{ Lang::get('lang.organization_chart') }}</h1>
                        </div>                        
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="map-section">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <img src="{{ asset('images/orgranigrama.png') }}" class="img-responsive">
                </div>
            </div>
        </div>
    </section> <!--/#map-section-->     
@stop
