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
   <div class="logo-image" style="margin-bottom: 50px;">                                
       <a href="index.html"><img class="img-responsive" src="images/logo.png" alt=""> </a> 
    </div>
     <section id="">        
         <div class="container">
            <div class="row">
                <div class="text-center" style="margin-bottom:50px;">
                    <h1>Boletín oficial</h1>
                </div>
                @foreach($article as $a)
                <div class="col-sm-12 col-md-6 fixedheight">
                    <div class="panel panel-success">
                        <div class="panel-heading">
                            <h3 class="panel-title">{{ $a->title }}</h3>
                        </div>
                        <div class="panel-body">
                            <p>{{ substr(strip_tags($a->descripcion), 0, 300) }} [...]</p>
                            <a href="{{ URL::to('fundaepekeina.org/noticias/'.$a->id) }}" class="btn btn-primary">Leer mas</a>
                        </div>
                    </div>
                </div>
                @endforeach
                <div class="text-center">
                    Estén atentos a nuestra próxima entrega. Gracias.
                </div>
            </div>
        </div>       
    </section>

    <section id="coming-soon-footer" class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="text-center">
                        <p>&copy; Derechos Reservados Funda Epékeina 2016.</p>
                </div>
            </div>
        </div>       
    </section>
    

    <script type="text/javascript" src="{{ ('html/js/jquery.js') }}"></script>
    <script type="text/javascript" src="{{ ('html/js/bootstrap.min.js') }}"></script>
    <script type="text/javascript" src="{{ ('html/js/coundown-timer.js') }}"></script>
    <script type="text/javascript" src="{{ ('html/js/wow.min.js') }}"></script>
    <script type="text/javascript" src="{{ ('html/js/main.js') }}"></script>
    <script type="text/javascript">
            //Countdown js
         $("#countdown").countdown({
                date: "10 march 2015 12:00:00",
                format: "on"
            },      
            function() {
                // callback function
        });
    </script>
    
</body>
</html>