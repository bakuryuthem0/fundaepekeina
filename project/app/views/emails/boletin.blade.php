<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Boletin | Fundaepekeina</title>
    <link href="{{ asset('html/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('html/css/font-awesome.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('html/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('html/css/responsive.css') }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <style type="text/css">
        .img-boletin
        {
            max-height: 312px;
        }

    </style>
    <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>
    <![endif]-->       
    <link rel="shortcut icon" href="images/ico/favicon.ico">
    <link rel="apple-touch-icon-precomposed" sizes="144x144" href="images/ico/apple-touch-icon-144-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="images/ico/apple-touch-icon-114-precomposed.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="images/ico/apple-touch-icon-72-precomposed.png">
    <link rel="apple-touch-icon-precomposed" href="images/ico/apple-touch-icon-57-precomposed.png">
</head><!--/head-->

<body>
    <!--<div class="logo-image" style="margin-bottom: 50px;">                                
       <a href="index.html"><img class="img-responsive" src="{{ asset('images/logo.png') }}" alt=""> </a> 
    </div>-->
     <section id="" class="boletin">        
         <div class="">
            <div class="row" style="margin-bottom: 50px">
                <img src="{{ asset('images/boletin/btn_cabeza.jpg') }}" class="img-responsive center-block">
            </div>
            <div class="row">
                <div class="col-xs-12 col-md-9 fixedheight">
                    <?php $j = 1; ?>
                    @if(!empty($principal))
                    <div class="col-xs-12 bg bg-blue formulario">
                        @if(!is_null($article->first()->imagenes->first()['image']))
                            <img src="{{ asset('images/news/'.$principal->imagenes->first()['image']) }}" class="img-responsive center-block img-boletin">
                        @else
                            <img src="{{ asset('images/logo.png') }}" class="img-responsive center-block img-boletin" alt="{{ $article->first()->title }}">
                        @endif
                        <div class="content">
                            <h2 class="boletin-title">{{ $principal->title }}</h2>
                            <p class="text-justify">{{ substr(strip_tags($principal->descripcion), 0, 300) }} [...]</p>
                            <a target="_blank" href="{{ URL::to('noticias/'.$principal->id) }}" class="btn btn-default btn-xs pull-right">Leer más</a>
                            <div class="clearfix"></div>
                        </div>
                    </div>
                    @endif
                    <div class="row">
                        <?php $k = 0;?>
                        @foreach($article as $a)
                            @if($k == 4)
                                <?php $k = 0;?>
                            @endif
                            @if(!empty($principal))
                                @if($a->id != $principal->id)
                                    <div class="col-xs-12 col-md-6 bg bg-{{ $colors[$k] }} formulario fixedHeight">
                                        @if(!is_null($a->imagenes->first()['image']))
                                            <img src="{{ asset('images/news/'.$a->imagenes->first()['image']) }}" class="img-responsive center-block img-boletin" alt="{{ $a->title }}">
                                        @else
                                            <img src="{{ asset('images/logo.png') }}" class="img-responsive center-block img-boletin" alt="{{ $a->title }}">
                                        @endif
                                        <div class="content">
                                            <h2 class="boletin-title">{{ $a->title }}</h2>
                                            <p class="text-justify">{{ substr(strip_tags($a->descripcion), 0, 300) }} [...]</p>
                                            <a target="_blank" href="{{ URL::to('noticias/'.$a->id) }}" class="btn btn-default btn-xs pull-right">Leer más</a>
                                            <div class="clearfix"></div>

                                        </div>
                                    </div>
                                @endif
                            @else
                                <div class="col-xs-12 col-md-6 bg bg-{{ $colors[$k] }} formulario fixedHeight">
                                    @if(!is_null($a->imagenes->first()['image']))
                                        <img src="{{ asset('images/news/'.$a->imagenes->first()['image']) }}" class="img-responsive center-block img-boletin" alt="{{ $a->title }}">
                                    @else
                                        <img src="{{ asset('images/logo.png') }}" class="img-responsive center-block img-boletin" alt="{{ $a->title }}">
                                    @endif
                                    <div class="content">
                                        <h2 class="boletin-title">{{ $a->title }}</h2>
                                        <p class="text-justify">{{ substr(strip_tags($a->descripcion), 0, 300) }} [...]</p>
                                        <a target="_blank" href="{{ URL::to('noticias/'.$a->id) }}" class="btn btn-default btn-xs pull-right">Leer más</a>
                                        <div class="clearfix"></div>
                                    </div>
                                </div>
                            @endif
                        <?php $j++; ?>
                        <?php $k++; ?>
                    @endforeach
                    </div>
                </div>
                <div class="col-xs-12 col-md-3">
                    <a href="{{ URL::to('contacto/donaciones') }}"><img src="{{ asset('images/boletin/btn_dona.jpg') }}" class="img-responsive" style="width:100%;"></a>
                    <div class="social-container">
                        <h3>Siguenos en:</h3>
                        <hr>
                        <ul>
                            <li><a href="{{ URL::to('https://twitter.com/fundaepekeina') }}"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="{{ URL::to('') }}"><i class="fa fa-instagram"></i></a></li>
                            <li><a href="{{ URL::to('https://www.facebook.com/funda.epekeina') }}"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="{{ URL::to('https://www.youtube.com/user/fundaepekeina') }}"><i class="fa fa-youtube-play"></i></a></li>
                        </ul>
                    </div>
                    <br>
                    <h2 class="text-blue">Historias Epékeinas</h2>
                    <br>
                    <img src="{{ asset('images/news/'.$hist->imagenes->first()->image) }}" class="img-responsive" alt="{{ $hist->title }}">
                    <div class="bg-green">
                        <h2 class="hist-title">{{ $hist->title }}@if(!is_null($hist->subtitle)){{ $hist->subtitle->subtitulo }}@endif</h2>
                    </div>
                    <hr>
                    <div class="text-justify">
                        {{ substr(strip_tags($hist->descripcion), 0, 1600) }}[...]
                        <br>
                        <a href="{{ URL::to('quienes-somos/historias-epekeinas/'.$hist->id) }}" class="pull-right">Leer más</a>
                    </div>
                </div>
            </div>
        </div>       
    </section>

    <section id="coming-soon-footer" class="container">
        <div class="row">
            <div class="col-xs-12">
                <div class="text-center">
                        <p>&copy; Derechos Reservados Funda Epékeina 2016.</p>
                </div>
            </div>
        </div>       
    </section>
    <div class="row" style="margin:0;">
        <div class="col-xs-3 bg-square bg-blue">
        </div>
        <div class="col-xs-3 bg-square bg-yellow">
        </div>
        <div class="col-xs-3 bg-square bg-green">
        </div>
        <div class="col-xs-3 bg-square bg-pink">
        </div>
    </div>

    
</body>
</html>