<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <title>{{ $title }}</title>
    <!-- Tell the browser to be responsive to screen width -->
    <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
    <link href="{{ asset('html/css/font-awesome.min.css') }}" rel="stylesheet">
    
    <!-- Bootstrap 3.3.5 -->
    {{ HTML::style("html/css/bootstrap.min.css") }}
    {{ HTML::style("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css") }}

    {{ HTML::style('css/custom-admin.css') }}
    <!-- Font Awesome -->
    <!-- Ionicons -->
    <!-- Theme style -->

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>
  <body class="@if(!Auth::check()) bg-dark @endif">
    <input type="hidden" class="baseUrl" value="{{ URL::to('/') }}">
    @if(Auth::check())
    <nav class="navbar navbar-default">
      <div class="container-fluid">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand admin-navbar-brand" href="{{ URL::to('administrador') }}"><img src="{{ asset('images/logo.png') }}"></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
          <ul class="nav navbar-nav">
            <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Artículos <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ URL::to('administrador/nuevo-articulo') }}"><i class="fa fa-plus"></i> Nuevo Artículo</a></li>
                <li><a href="{{ URL::to('administrador/mostrar-articulos') }}"><i class="fa fa-list"></i> Ver Artículos</a></li>
              </ul>
            </li>
            @if(Auth::user()->role == 1)
            <li class="dropdown">
             <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Usuarios <span class="caret"></span></a>
              <ul class="dropdown-menu">
                <li><a href="{{ URL::to('administrador/nuevo-usuario') }}"><i class="fa fa-plus"></i> Nueva Usuario</a></li>
                <li><a href="{{ URL::to('administrador/ver-usuarios') }}"><i class="fa fa-list"></i> Ver Usuarios</a></li>
              </ul>
            </li>
            @endif
          </ul>
          <ul class="nav navbar-nav navbar-right">
            <li class="dropdown">
              <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">
                {{ Auth::user()->username }}
                <span class="caret"></span>
              </a>
              <ul class="dropdown-menu">
                <li><a href="{{ URL::to('administrador/change-password') }}">Cambiar Contraseña</a></li>
                <li role="separator" class="divider"></li>
                <li><a href="{{ URL::to('administrador/logout') }}">Cerrar Sesión</a></li>
              </ul>
            </li>
          </ul>
        </div><!-- /.navbar-collapse -->
      </div><!-- /.container-fluid -->
    </nav>
    @endif
    @yield('content')
    <!-- jQuery 2.1.4 -->
    <script type="text/javascript" src="{{ asset('html/js/jquery.js') }}"></script>
    <!-- Bootstrap 3.3.5 -->
    {{ HTML::script("html/js/bootstrap.min.js") }}
    {{ HTML::script("plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js") }}

    {{ HTML::script("js/custom-admin.js") }}
    @yield('postscript')
  </body>
</html>
