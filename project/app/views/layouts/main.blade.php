<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>{{ $title }}</title>
    <link href="{{ asset('html/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('html/css/font-awesome.min.css') }}" rel="stylesheet">
    <link href="{{ asset('html/css/animate.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/owl.carousel.css') }}" rel="stylesheet"> 
    <link href="{{ asset('css/owl.theme.default.min.css') }}" rel="stylesheet"> 
	<link href="{{ asset('html/css/main.css') }}" rel="stylesheet">
	<link href="{{ asset('html/css/responsive.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('plugins/fancybox/source/jquery.fancybox.css?v=2.1.5') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('plugins/fancybox/source/helpers/jquery.fancybox-buttons.css?v=1.0.5') }}" type="text/css" media="screen" />
    <link rel="stylesheet" href="{{ asset('plugins/fancybox/source/helpers/jquery.fancybox-thumbs.css?v=1.0.7') }}" type="text/css" media="screen" />
    <link href="{{ asset('css/custom.css?v=0.2') }}" rel="stylesheet">


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
    <div class="contLoading">
        <img src="{{ asset('images/ajax-loader.gif') }}">
    </div>
	<header id="header">      
        <div class="container">
            <div class="row">
                <div class="col-sm-12 overflow">
                   <div class="social-icons pull-right">
                        <ul class="nav nav-pills">
                            <li><a target="_blank" href="https://twitter.com/fundaepekeina"><i class="fa fa-twitter"></i></a></li>
                            <li><a target="_blank" href="https://www.facebook.com/funda.epekeina"><i class="fa fa-facebook"></i></a></li>
                            <li><a target="_blank" href="https://plus.google.com/117070883489363053262/posts"><i class="fa fa-google-plus"></i></a></li>
                            <li><a target="_blank" href="https://www.youtube.com/user/fundaepekeina"><i class="fa fa-youtube"></i></a></li>
                            <li><a href="mailto:fundaepekeina@gmail.com"><i class="fa fa-envelope"></i></a></li>
                        </ul>
                    </div> 
                </div>
             </div>
        </div>
        <div class="navbar navbar-inverse" role="banner">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>

                    <a class="navbar-brand" href="{{ URL::to('/') }}">
                    	<h1><img src="{{ asset('images/logo.png') }}" alt="logo"></h1>
                    </a>
                    
                </div>
                <div class="collapse navbar-collapse">
                    <ul class="nav navbar-nav navbar-right navbar-menu">
                        <li class="@if($active == 'inicio') active @endif"><a href="{{ URL::to('/') }}">Inicio</a></li>
                        <li class="@if($active == 'about') active @endif dropdown">
                            <a href="{{ URL::to('quienes-somos') }}" class="visible-md-block visible-lg-block">Quiénes somos <i class="fa fa-angle-down"></i></a>
                            <a href="#!" class="hidden-md hidden-lg">Conócenos <i class="fa fa-angle-down"></i></a>
                            <ul role="menu" class="sub-menu">
                                
                                <li><a href="{{ URL::to('quienes-somos') }}" class="hidden-md hidden-lg">Quiénes Somos</a></li>
                                <li><a href="{{ URL::to('noticias/que-hacemos') }}">¿Qué hacemos?</a></li>
                                <!--<li><a href="localizacion">¿Donde estamos?</a></li>-->
                                <li><a href="{{ URL::to('organigrama') }}">Organigrama</a></li>
                            </ul>
                        </li>                    
                        <li class="@if($active == 'noticias') active @endif dropdown">
                            <a href="{{ URL::to('noticias')}}" class="visible-md-block visible-lg-block">Noticias <i class="fa fa-angle-down"></i></a>
                            <a href="#!" class="hidden-md hidden-lg">Noticias <i class="fa fa-angle-down"></i></a>

                            <ul role="menu" class="sub-menu">
                                <li><a href="{{ URL::to('noticias')}}" class="hidden-md hidden-lg">Todas</a></li>
                                <li><a href="{{ URL::to('noticias/sedes') }}">Por sede</a></li>
                                <li><a href="{{ URL::to('noticias/proyectos') }}">Proyectos</a></li>
                            </ul>
                        </li> 
                        </li>                         
                        <li class="@if($active == 'galeria') active @endif"><a href="{{ URL::to('galeria') }}">Galeria</a>
                        </li>
                        <li class="@if($active == 'contacto') active @endif dropdown">
                            <a href="{{ URL::to('contacto/apoyenos') }}" class="visible-md-block visible-lg-block">Qué puedes hacer tú <i class="fa fa-angle-down"></i></a>
                            <a href="#!" class="hidden-md hidden-lg">Qué puedes hacer tú <i class="fa fa-angle-down"></i></a>

                             <ul role="menu" class="sub-menu">
                                <li><a href="{{ URL::to('contacto') }}">Contactenos</a></li>
                                <li><a href="{{ URL::to('contacto/apoyenos') }}" class="hidden-md hidden-lg">Qué puedes hacer tú</a></li>
                                <li><a href="{{ URL::to('contacto/donaciones') }}">Donaciones</a></li>
                            </ul>
                        </li>                    
                    </ul>
                </div>
                <div class="search">
                    <form role="form" method="GET" action="{{ URL::to('buscar') }}">
                        <i class="fa fa-search"></i>
                        <div class="field-toggle">
                            <input type="text" class="search-form" autocomplete="off" name="busq" placeholder="Buscar">
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </header>
    <!--/#header-->

    @yield('content')

    <footer id="footer">
        <div class="container">
            <div class="row valign-wrapper">
                <div class="col-xs-12 col-md-4 footer-colum">
                    <div class="contact-info bottom">
                        <h2>Contacts</h2>
                        <address>
                        E-mail: <a href="mailto:fundaepekeina@gmail.com">fundaepekeina@gmail.com</a> <br> 
                        Phone: +58 0212-3077281 <br> 
                        </address>
                    </div>
                </div>
                <div class="col-xs-8 center-block col-md-4 footer-colum cont-twitter">
                    <a class="twitter-timeline" href="https://twitter.com/fundaepekeina" data-widget-id="731203540258062336">Tweets por el @fundaepekeina.
                     </a>
                    <script>!function(d,s,id){var js,fjs=d.getElementsByTagName(s)[0],p=/^http:/.test(d.location)?'http':'https';if(!d.getElementById(id)){js=d.createElement(s);js.id=id;js.src=p+"://platform.twitter.com/widgets.js";fjs.parentNode.insertBefore(js,fjs);}}(document,"script","twitter-wjs");</script>
                </div>
                <div class="col-xs-12 col-md-4 footer-colum">
                    <div class="contact-form bottom">
                        <h2>Suscríbete a nuestro boletín</h2>
                        <form id="main-contact-form" name="contact-form" method="post" action="">
                            <div class="form-group">
                                <div class="input-group full-leght">
                                  <input type="text" class="form-control subscriber-input" placeholder="Subscribeme">
                                  <span class="input-group-btn">
                                    <button class="btn btn-primary send-subscriber" type="button">
                                        <i class="fa fa-check subscriber-check"></i>
                                        <i class="fa fa-times subscriber-times hidden"></i>
                                        <img src="{{ asset('images/ajax-loader.gif') }}" class="btn-loader">
                                    </button>
                                  </span>
                                </div><!-- /input-group -->
                                <p><small>No se preocupe, no usaremos su email para spam</small></p>
                            </div>
                        </form>
                    </div>
                </div>
                
            </div>
            <div class="row">
                <div class="col-sm-12 no-float">
                    <div class="copyright-text text-center">
                        <p>&copy; Derechos Reservados Funda Epékeina 2016.</p>
                    </div>
                </div>
            </div>
        </div>
    </footer>
    <!--/#footer-->

    <script type="text/javascript" src="{{ asset('html/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ asset('html/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('js/owl.carousel.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset('html/js/wow.min.js') }}"></script>

    <script type="text/javascript" src="{{ asset('plugins/fancybox/lib/jquery.mousewheel-3.0.6.pack.js') }}"></script>
    <!-- Add fancyBox -->
    <script type="text/javascript" src="{{ asset('plugins/fancybox/source/jquery.fancybox.pack.js?v=2.1.5') }}"></script>
    <!-- Optionally add helpers - button, thumbnail and/or media -->
    <script type="text/javascript" src="{{ asset('plugins/fancybox/source/helpers/jquery.fancybox-buttons.js?v=1.0.5')}}"></script>
    <script type="text/javascript" src="{{ asset('plugins/fancybox/source/helpers/jquery.fancybox-media.js?v=1.0.6') }}"></script>
    <script type="text/javascript" src="{{ asset('plugins/fancybox/source/helpers/jquery.fancybox-thumbs.js?v=1.0.7') }}"></script>

    @yield('postscript')
    <script type="text/javascript" src="{{ asset('html/js/main.js') }}"></script>   
    <script type="text/javascript" src="{{ asset('js/custom.js') }}"></script>   
    <!-- Add mousewheel plugin (this is optional) -->
</body>
</html>
