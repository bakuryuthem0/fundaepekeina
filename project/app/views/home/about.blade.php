@extends('layouts.main')

@section('content')
	<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="">
                        <div class="col-sm-12">
                            <h1 class="title">{{ Lang::get('lang.about_menu') }}</h1>
                        </div>
                     </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <h2>{{ Lang::get('lang.mission') }}</h2>
                        <p class="text-justify fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">{{ Lang::get('lang.mission_text') }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <h2 class="fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">{{ Lang::get('lang.vision') }}</h2>
                        <p class="text-justify fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">{{ Lang::get('lang.vision_text') }}</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->

    <section id="action" class="responsive">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1 class="title">{{ Lang::get('lang.strategy_title') }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

   <section id="">
        <div class="container">
            <div class="row">
                <div class="col-xs-12  padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        
                        <ol class="text-justify">
                        	<li>
                        		{{ Lang::get('lang.strategy_text1') }}
                        	</li>
                        	<li>
								{{ Lang::get('lang.strategy_text2') }}
                        	</li>
                        	<li>
								{{ Lang::get('lang.strategy_text3') }}
                        	</li>
                        </ol>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
    <!--/#services-->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <h2>{{ Lang::get('lang.objetive_primary') }}</h2>
                        <p class="text-justify">{{ Lang::get('lang.objetive_text1') }}</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <h2>{{ Lang::get('lang.objetive_specific') }}</h2>
                        <ol class="text-justify">
                        	<li>{{ Lang::get('lang.objetive_text2') }}</li>

							<li>{{ Lang::get('lang.objetive_text3') }}</li>

							<li>{{ Lang::get('lang.objetive_text4') }}</li>

							<li>{{ Lang::get('lang.objetive_text5') }}</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <hr>
    <!--/#services-->
    <section id="services">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-8 padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        
                        <div class="col-xs-12 fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms"><h2 class="fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">{{ Lang::get('lang.action_lines_title') }}</h2></div>
                        <div class="col-xs-12 col-sm-6 no-padding fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
	                        <ul>
		                        <li>{{ Lang::get('lang.action_lines_text1') }}</li>
								<li>{{ Lang::get('lang.action_lines_text2') }}</li>
								<li>{{ Lang::get('lang.action_lines_text3') }}</li>
								<li>{{ Lang::get('lang.action_lines_text4') }}</li>
								<li>{{ Lang::get('lang.action_lines_text5') }}</li>
								<li>{{ Lang::get('lang.action_lines_text6') }}</li>
	                        </ul>
                        </div>
                        <div class="col-xs-12 col-sm-6 no-padding">
	                        <ul class="margin-only-on-big">
								<li>{{ Lang::get('lang.action_lines_text7') }}</li>
								<li>{{ Lang::get('lang.action_lines_text8') }}</li>
								<li>{{ Lang::get('lang.action_lines_text9') }}</li>
								<li>{{ Lang::get('lang.action_lines_text10') }}</li>
	                        </ul>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-4 padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        
                        <div class="col-xs-12 fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms"><h2>{{ Lang::get('lang.values_title') }}</h2></div>
                        <div class="clearfix"></div>
                        <ul class="text-justify fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                        	<li>{{ Lang::get('lang.values_text1') }}</li>
							<li>{{ Lang::get('lang.values_text2') }}</li>
							<li>{{ Lang::get('lang.values_text3') }}</li>
							<li>{{ Lang::get('lang.values_text4') }}</li>
							<li>{{ Lang::get('lang.values_text5') }}</li>
							<li>{{ Lang::get('lang.values_text6') }}</li>
							<li>{{ Lang::get('lang.values_text7') }}</li>
							<li>{{ Lang::get('lang.values_text8') }}</li>
							<li>{{ Lang::get('lang.values_text9') }}</li>
							<li>{{ Lang::get('lang.values_text10') }}</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section id="" class="responsive action">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class="col-sm-7 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                        <h1 class="title">{{ Lang::get('lang.work_methodology') }}</h1>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#action-->

   <section id="" class="">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <p class="text-justify fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                        	{{ Lang::get('lang.work_methodology_text') }}
                        </p>
                    </div>
                </div>
               
            </div>
        </div>
    </section>
@stop