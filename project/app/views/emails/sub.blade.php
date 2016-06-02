<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <title>Coming Soon | Triangle</title>
    <link href="{{ asset('html/css/bootstrap.min.css') }}" rel="stylesheet">
    <link href="{{ asset('html/css/font-awesome.min.css') }}" rel="stylesheet"> 
    <link href="{{ asset('html/css/main.css') }}" rel="stylesheet">
    <link href="{{ asset('html/css/responsive.css') }}" rel="stylesheet">

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
     <section id="coming-soon">        
         <div class="container">
            <div class="row">
                <div class="col-sm-8 col-sm-offset-2">                    
                    <div class="text-center coming-content">
                        <h1>Gracias por suscribirse</h1>
                        <p>Le estaremos enviando nuestras ultimas noticias. Siganos en nuestras redes.</p>                           
                        <div class="social-link">
                            <span><a href="https://www.facebook.com/funda.epekeina" target="_blank"><i class="fa fa-facebook"></i></a></span>
                            <span><a href="https://twitter.com/fundaepekeina" target="_blank"><i class="fa fa-twitter"></i></a></span>
                            <span><a href="https://plus.google.com/117070883489363053262" target="_blank"><i class="fa fa-google-plus"></i></a></span>
                            <span><a href="https://www.youtube.com/user/fundaepekeina" target="_blank"><i class="fa fa-youtube"></i></a></span>

                        </div>
                    </div>                    
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