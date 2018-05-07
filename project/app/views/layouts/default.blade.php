<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <!--Let browser know website is optimized for mobile-->
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ $title }}</title>
    
    <!-- Compiled and minified CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/css/materialize.min.css">
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
    <link href="//netdna.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
            
    <link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="{{ asset('css/custom.css?'.time()) }}">
    @yield('postcss')

    <!--[if lt IE 9]>
	    <script src="js/html5shiv.js"></script>
	    <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="{{ asset('images/favicon.ico') }}">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="{{ asset('html/images/ico/apple-touch-icon-144-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="{{ asset('html/images/ico/apple-touch-icon-114-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="{{ asset('html/images/ico/apple-touch-icon-72-precomposed.png') }}">
    <link rel="apple-touch-icon-precomposed" href="{{ asset('html/images/ico/apple-touch-icon-57-precomposed.png') }}">
</head><!--/head-->

<body>
    <script>
      (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
      (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
      m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
      })(window,document,'script','https://www.google-analytics.com/analytics.js','ga');

      ga('create', 'UA-79228691-1', 'auto');
      ga('send', 'pageview');

    </script>
    <input type="hidden" class="baseUrl" value="{{ URL::to('/') }}">
    <div class="contLoading valign-wrapper center-align">
        @include('partials.preloader')
    </div>
    <div class="overly">
        <div class="side-menu absolute">
            <ul class="right-align">
                <li class="row mb-0">
                    <div class="col s9 mt-1">
                        <span class="grey-text text-lighten-3 hide-on-large-only">
                            {{ Lang::get('lang.slide-to-close') }}
                        </span>
                    </div>
                    <div class="col s3 collapse center-align mt-1">
                        <a class="grey-text text-lighten-3 btn-slide-menu waves-effect waves-light" href="#!">
                            <i class="material-icons animated infinite shake">chevron_right</i>
                        </a>
                    </div>
                </li>
                <li class="row mb-0">
                    <div class="col s9 mt-1">
                        <a class="grey-text text-lighten-3 waves-effect waves-light" href="{{ URL::to('quienes-somos') }}">
                            {{ Lang::get('lang.about_menu') }}
                        </a>
                    </div>
                    <div class="col s3 collapse center-align mt-1">
                        <a class="grey-text text-lighten-3 waves-effect waves-light" href="#!"><i class="material-icons">add</i></a>
                    </div>
                    <div class="to-collapse collapsed">
                        <div class="col s12 mt-2">
                            <a class="grey-text text-lighten-3 waves-effect waves-light" href="{{ URL::to('quienes-somos/que-hacemos') }}">
                                {{ Lang::get('lang.about_menu3') }}
                            </a>
                        </div>
                        <div class="col s12 mt-2">
                            <a class="grey-text text-lighten-3 waves-effect waves-light" href="{{ URL::to('quienes-somos') }}#organigrama">
                                {{ Lang::get('lang.about_menu4') }}
                            </a>
                        </div>
                    </div>
                </li>
                <li class="">
                    <div class="row mb-0">
                        <div class="col s9 mt-1">
                            <a class="grey-text text-lighten-3 waves-effect waves-light" href="{{ URL::to('noticias/buscar')}}">
                                {{ Lang::get('lang.news_menu') }}
                            </a>
                        </div>
                        <div class="col s3 collapse center-align mt-1">
                            <a class="grey-text text-lighten-3 waves-effect waves-light" href="#!"><i class="material-icons">add</i></a>
                        </div>
                        <div class="to-collapse collapsed">
                            <div class="col s12 mt-2">
                                <a class="grey-text text-lighten-3 waves-effect waves-light" href="{{ URL::to('noticias/buscar/'.Lang::get('lang.sedes')) }}">
                                    {{ Lang::get('lang.news_menu3') }}
                                </a>
                            </div>
                            <div class="col s12 mt-2">
                                <a class="grey-text text-lighten-3 waves-effect waves-light" href="{{ URL::to('noticias/buscar/'.Lang::get('lang.proyectos')) }}">
                                    {{ Lang::get('lang.news_menu4') }}
                                </a>
                            </div>
                            <div class="col s12 mt-2">
                                <a class="grey-text text-lighten-3 waves-effect waves-light" href="{{ URL::to('noticias/buscar/'.Lang::get('lang.programas')) }}">
                                    {{ Lang::get('lang.news_menu5') }}
                                </a>
                            </div>
                            <div class="col s12 mt-2">
                                <a class="grey-text text-lighten-3 waves-effect waves-light" href="{{ URL::to('noticias/buscar/'.Lang::get('lang.regiones')) }}">
                                    {{ Lang::get('lang.news_menu6') }}
                                </a>
                            </div>
                            <div class="col s12 mt-2">
                                <a class="grey-text text-lighten-3 waves-effect waves-light" href="{{ URL::to('noticias/buscar/'.Lang::get('lang.campamentos')) }}">
                                    {{ Lang::get('lang.news_menu7') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
                <li class="">
                    <div class="row mb-0">
                        <div class="col s9 mt-1">
                            <a class="grey-text text-lighten-3 waves-effect waves-light" href="{{ URL::to('entrevistas/historias-epekeinas') }}">  
                                {{ Lang::get('lang.history_menu') }}
                            </a>
                        </div>
                        <div class="col s3 center-align mt-1">
                            <a class="grey-text text-lighten-3 waves-effect waves-light" href="#!"><i class="material-icons right invisible">add</i></a>
                        </div>
                    </div>
                </li>
                <li class="">
                    <div class="row mb-0 mt-1">
                        <div class="col s9 mt-1">
                            <a class="grey-text text-lighten-3 waves-effect waves-light" href="{{ URL::to('biblioteca-virtual') }}">  
                                {{ Lang::get('lang.library_menu') }}
                            </a>
                        </div>
                        <div class="col s3 center-align mt-1">
                            <a class="grey-text text-lighten-3 waves-effect waves-light" href="#!"><i class="material-icons right invisible">add</i></a>
                        </div>
                    </div>
                </li>
                <li class="">
                    <div class="row mb-0">
                        <div class="col s9 mt-1">
                           <a class="grey-text text-lighten-3 waves-effect waves-light" href="{{ URL::to('galeria') }}">
                                {{ Lang::get('lang.gallery_menu') }}
                            </a>
                        </div>
                        <div class="col s3 center-align mt-1">
                            <a class="grey-text text-lighten-3 waves-effect waves-light" href="#!"><i class="material-icons right invisible">add</i></a>
                        </div>
                    </div>
                </li>
                <li class="">
                    <div class="row mb-0">
                        <div class="col s9 mt-1">
                            <a class="grey-text text-lighten-3 waves-effect waves-light" href="{{ URL::to('contacto/donaciones') }}">
                                {{ Lang::get('lang.donation_menu') }}
                            </a>
                        </div>
                        <div class="col s3 collapse center-align mt-1">
                            <a class="grey-text text-lighten-3 waves-effect waves-light" href="#!"><i class="material-icons">add</i></a>
                        </div>
                        <div class="to-collapse collapsed">
                            <div class="col s12 mt-2">
                                <a class="grey-text text-lighten-3 waves-effect waves-light" href="{{ URL::to('contacto') }}">
                                    {{ Lang::get('lang.contact_us') }}
                                </a>
                            </div>
                            <div class="col s12 mt-2">
                                <a class="grey-text text-lighten-3 waves-effect waves-light" href="{{ URL::to('contacto/voluntariado') }}">
                                    {{ Lang::get('lang.voluntariado_title') }}
                                </a>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
    @if(isset($donaMenu))
    <div class="relative contenedor menu-call-to-action hide-on-med-and-down">
        <div class="row mb-0 valign-wrapper">
            <div class="col l2 bg-white center-align">
                <a href="{{ URL::to('/') }}" title="{{Lang::get('lang.home_title')}}"><img src="{{ asset('images/logo.png') }}" class="responsive-img"></a>
            </div>
            <div class="col l10 bg-image relative">
                <div class="absolute col l4 row mb-0">
                    <div class="col s12 text-white">
                        <h4 class="right-align">{{ isset($campaing)? $campaing : "Promocion y<br> campañas de la fundación" }}</h4>
                    </div>
                    <div class="col s12 right-align">
                        <a href="{{ URL::to('contacto/donaciones') }}" class="btn waves-effect bg-red">{{ Lang::get('lang.donate') }}</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    @endif
    @if(isset($citaMenu))
    <div class="relative contenedor menu-call-to-action hide-on-small-only">
        <div class="row mb-0 valign-wrapper">
            <div class="col l2 bg-white center-align">
                <a href="{{ URL::to('/') }}" title="{{Lang::get('lang.home_title')}}"><img src="{{ asset('images/logo.png') }}" class="responsive-img"></a>
            </div>
            <div class="col l10 bg-white">
                <div class="col s12">
                    <h4 class="left-align line-height-medium-titles">{{ $text }}</h4>
                </div>
            </div>
        </div>
    </div>
    @endif
    <nav class="nav-fixed row mb-0 bg-turquesa sticky">
        <div class="row contenedor">
            <div class="col s12">
                <div class="nav-wrapper">
                    <a href="{{ URL::to('/') }}" class="waves-effect pl-2 pr-2 left">
                        <i class="material-icons nav-icons">home</i>
                    </a>
                    <a href="{{ URL::to('/') }}" class="brand-logo">
                        <img src="{{ asset('images/logo.png') }}" alt="logo | fundaepekeina.com" class="hide">
                    </a>
                    <a href="#!" class="waves-effect btn-menu right d-block">
                        <i class="material-icons nav-icons">menu</i>
                    </a>
                </div>
            </div>
        </div>
    </nav>
    <div class="lang-overly valign-wrapper center-align @if(Session::has('lang')) is-hidden @endif">
        <div class="row valign-bottom">
            <div class="col s12 center-align mb-2">
                <img src="{{ asset('images/logo_lang.png') }}" alt="logo | fundaepekeina.com" class="logo">
            </div>
            <div class="col s3"></div>
            <div class="col s3 center-align">
                <a @if(!Session::has('lang')) href="#!" class="current-lang no-lang" @elseif(Session::get('lang') == "es") href="#!" class="current-lang" value="es" @else href="{{ URL::to('cambiar-lenguaje/es') }}" @endif>
                    <img src="{{ asset('images/spain.png') }}" alt="Seleccion de idioma español | fundaepekeina.com" class="lang-icon">
                </a>
            </div>
            <div class="col s3 center-align">
                <a @if(Session::has('lang') && Session::get('lang') == "en") href="#!" class="current-lang" @else href="{{ URL::to('cambiar-lenguaje/en') }}" @endif>
                    <img src="{{ asset('images/usa.png') }}" alt="Seleccion de idioma ingles | fundaepekeina.com" class="lang-icon">
                </a>
            </div>
            <div class="col s3"></div>

        </div>
    </div>
    @yield('content')
    <footer class="page-footer bg-turquesa">
        <hr>
        <div class="row">
            <div class="contenedor">
                <div class="col-s12">
                    <div class="col s12 l7 pl-0 pr-0">
                        <div class="col s12 m6 l4 pt-2">
                            <ul class="mt-0">
                                <li class="">
                                    <a class="grey-text text-lighten-3" href="{{ URL::to('quienes-somos') }}">
                                        {{ Lang::get('lang.about_menu') }}
                                    </a>
                                </li>
                                <li class="mt-1">
                                    <a class="grey-text text-lighten-3" href="{{ URL::to('noticias/buscar')}}">
                                        {{ Lang::get('lang.news_menu') }}
                                    </a>
                                </li>
                                <li class="mt-1">
                                    <a class="grey-text text-lighten-3" href="{{ URL::to('entrevistas/historias-epekeinas') }}">
                                        {{ Lang::get('lang.history_menu') }}
                                    </a>
                                </li>
                                <li class="mt-1">
                                    <a class="grey-text text-lighten-3" href="{{ URL::to('biblioteca-virtual') }}">
                                        {{ Lang::get('lang.library_menu') }}
                                    </a>
                                </li>
                                <li class="mt-1">
                                    <a class="grey-text text-lighten-3" href="{{ URL::to('galeria') }}">
                                        {{ Lang::get('lang.gallery_menu') }}
                                    </a>
                                </li>
                                <li class="mt-1">
                                    <a class="grey-text text-lighten-3" href="{{ URL::to('contacto/donaciones') }}">
                                        {{ Lang::get('lang.donation_menu') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col s12 m6 l4 pt-2">
                            <ul class="mt-0">
                                <li class="">
                                    <a class="grey-text text-lighten-3" href="{{ URL::to('contacto') }}">
                                        {{ Lang::get('lang.contact_us') }}
                                    </a>
                                </li>
                                <li class="mt-1">
                                    <a class="grey-text text-lighten-3" href="{{ URL::to('contacto/suscribete') }}">
                                        {{ Lang::get('lang.subscribe') }}
                                    </a>
                                </li>
                                <li class="mt-1">
                                    <ul>
                                        <li class="d-inline ml-1 mr-1">
                                            <a target="_blank" class="grey-text text-lighten-3" href="https://twitter.com/fundaepekeina">
                                                <i class="fa fa-twitter fa-2x"></i>
                                            </a>
                                        </li>
                                        <li class="d-inline ml-1 mr-1">
                                            <a target="_blank" class="grey-text text-lighten-3" href="https://www.facebook.com/funda.epekeina">
                                                <i class="fa fa-facebook fa-2x"></i>
                                            </a>
                                        </li>
                                        <li class="d-inline ml-1 mr-1">
                                            <a target="_blank" class="grey-text text-lighten-3" href="https://www.instagram.com/fundaepekeina/">
                                                <i class="fa fa-instagram fa-2x"></i>
                                            </a>
                                        </li>
                                        <li class="d-inline ml-1 mr-1">
                                            <a target="_blank" class="grey-text text-lighten-3" href="https://www.youtube.com/channel/UCIKDvtJy2m5jCD-cWdC25TA">
                                                <i class="fa fa-youtube fa-2x"></i>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="mt-1">
                                    <a class="grey-text text-lighten-3" href="#!">
                                        <strong>@fundaepekeina</strong>
                                    </a>
                                </li>
                                <li class="mt-1">
                                    <a class="grey-text text-lighten-3" href="{{ URL::to('/') }}">
                                        <strong>www.fundaepekeina.com</strong>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <div class="col s12 l4 hide-on-med-and-down pt-2">
                            <ul class="mt-0">
                                <li class="">
                                    <a class="grey-text text-lighten-3" href="{{ URL::to('inicio') }}#allies">
                                        {{ Lang::get('lang.our_allies') }}
                                    </a>
                                </li>
                                <li class="mt-1">
                                    <a class="grey-text text-lighten-3" href="{{ URL::to('contacto/voluntariado') }}">
                                        {{ Lang::get('lang.voluntariado_title') }}
                                    </a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col s12 l5 search-field pt-2">
                        <div class="relative">
                            <form method="GET" action="{{ URL::to('noticias/buscar') }}" class="valign-wrapper">
                                <input type="text" class="browser-default z-depth-2" name="busq">
                                <i class="fa fa-search"></i>
                                <button class="btn waves-effect waves-light pl-1 pr-1 bg-red z-depth-2">
                                    {{ Lang::get('lang.search') }}
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-copyright">
            <div class="container center-align">
                <p>&copy; {{ Lang::get('lang.copyright') }}.</p>
            </div>
        </div>
    </footer>
    <div class="fixed-action-btn horizontal click-to-toggle">
        <a class="btn-floating btn-large red lang-btn tooltipped" data-position="top" data-delay="50" data-tooltip="{{ Lang::get('language') }}">
          <i class="material-icons">language</i>
        </a>
    </div>
    <div id="open"></div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
    <!-- Compiled and minified JavaScript -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.100.2/js/materialize.min.js"></script>
    <script type="text/javascript" src="{{ asset('html/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/hammer.js/2.0.8/hammer.min.js"></script>

    <script type="text/javascript" src="{{ asset('js/functions.js?'.time()) }}"></script>
    <script type="text/javascript" src="{{ asset('js/custom.js?'.time()) }}"></script>

    @yield('postscript')
    <script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.collapsible').collapsible();
          new WOW().init();
    });
    </script>
</body>
</html>
