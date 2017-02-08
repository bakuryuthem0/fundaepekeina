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
     <section id="">        
         <div class="container">
            <div class="row" style="margin-bottom: 50px">
                <img src="{{ asset('images/slides/boletin_banner.jpg') }}" class="img-responsive center-block">
            </div>
            <div class="row">
                <div class="text-center" style="margin-bottom:50px;">
                    <h1>Boletín oficial</h1>
                </div>
                <?php $j = 1; ?>
                @if(!empty($principal))
                <div class="col-xs-12 fixedheight">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ $principal->title }}</h3>
                        </div>
                        <div class="panel-body">
                                @if(!is_null($principal->imagenes->first()['image']))
                                    <img src="{{ asset('images/news/'.$principal->imagenes->first()['image']) }}" class="img-responsive center-block img-boletin">
                                @else
                                    <img src="{{ asset('images/logo.png') }}" class="img-responsive center-block img-boletin" alt="{{ $principal->title }}">
                                @endif
                            <p>{{ substr(strip_tags($principal->descripcion), 0, 300) }} [...]</p>
                            <a target="_blank" href="{{ URL::to('noticias/'.$principal->id) }}" class="btn btn-primary">Leer mas</a>
                        </div>
                    </div>
                </div>
                @endif
                @foreach($article as $a)
                    @if(!empty($principal))
                        @if($a->id != $principal->id)
                            <div class="col-xs-12 col-md-6 fixedheight">
                                <div class="panel panel-success">
                                    <div class="panel-heading">
                                        <h3 class="panel-title">{{ $a->title }}</h3>
                                    </div>
                                    <div class="panel-body">
                                            @if(!is_null($a->imagenes->first()['image']))
                                                <img src="{{ asset('images/news/'.$a->imagenes->first()['image']) }}" class="img-responsive center-block img-boletin">
                                            @else
                                                <img src="{{ asset('images/logo.png') }}" class="img-responsive center-block img-boletin" alt="{{ $a->title }}">
                                            @endif
                                        <p>{{ substr(strip_tags($a->descripcion), 0, 300) }} [...]</p>
                                        <a target="_blank" href="{{ URL::to('noticias/'.$a->id) }}" class="btn btn-primary">Leer mas</a>
                                    </div>
                                </div>
                            </div>
                        @endif
                    @else
                    <div class="col-xs-12 col-md-6 fixedheight">
                        <div class="panel panel-success">
                            <div class="panel-heading">
                                <h3 class="panel-title">{{ $a->title }}</h3>
                            </div>
                            <div class="panel-body">
                                    @if(!is_null($a->imagenes->first()['image']))
                                        <img src="{{ asset('images/news/'.$a->imagenes->first()['image']) }}" class="img-responsive center-block img-boletin">
                                    @else
                                        <img src="{{ asset('images/logo.png') }}" class="img-responsive center-block img-boletin" alt="{{ $a->title }}">
                                    @endif
                                <p>{{ substr(strip_tags($a->descripcion), 0, 300) }} [...]</p>
                                <a target="_blank" href="{{ URL::to('noticias/'.$a->id) }}" class="btn btn-primary">Leer mas</a>
                            </div>
                        </div>
                    </div>
                    @endif
                    @if($j%2 == 0)
                        <div class="clearfix"></div>
                    @endif
                    <?php $j++; ?>
                @endforeach
                <div class="col-xs-12">
                    <div class="text-center">
                        Estén atentos a nuestra próxima entrega. Gracias.
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
    

    
</body>
</html>