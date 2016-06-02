@extends('layouts.admin')

@section('content')

<div class="container">
  <div class="row">
    <div class="col-xs-12 text-center">
      <h2 class="light-text"><b>Sistema de administracion de <strong>fundaepekeina.org</strong></b></h2>
    </div><!-- /.login-logo -->
    <div class="col-xs-12 col-md-6 bg-light box login-box">
      <div class="box-header">
        <h3>Iniciar Sesión</h3>
      </div>
      <div class="alert responseAjax @if(Session::has('success')) alert-success active @elseif(Session::has('danger')) alert-danger active @endif">
        <p>@if(Session::has('success')) {{ Session::get('success') }} @elseif(Session::has('danger')) {{ Session::get('danger') }} @endif</p>
      </div>
      @if ($errors->has('username') || $errors->has('password'))
        <div class="alert alert-danger">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <ul>
            @if($errors->has('username'))
              @foreach($errors->get('username') as $err)
                <li>{{ $err }}</li>
              @endforeach
            @endif
            @if($errors->has('password'))
              @foreach($errors->get('password') as $err)
                <li>{{ $err }}</li>
              @endforeach
            @endif
          </ul>
        </div>
      @endif
      <form action="{{ URL::to('administrador/login/enviar') }}" method="post">
        <div class="input-group">
          <input type="text" name="username" class="form-control" placeholder="Usuario" aria-describedby="basic-addon2" value="{{ Input::old('username') }}">
          <span class="input-group-addon" id="basic-addon2"><i class="fa fa-envelope"></i></span>
        </div>
        <div class="input-group">
          <input type="password" name="password" class="form-control" placeholder="Contraseña" aria-describedby="basic-addon3">
          <span class="input-group-addon" id="basic-addon3"><i class="fa fa-key"></i></span>
        </div>
        {{ Form::token() }}
      <div class="row">
        <div class="col-xs-6 pull-right">
          <button type="submit" class="btn btn-primary btn-block btn-flat logMeIn">Iniciar Sesión</button>
        </div><!-- /.col -->
      </div>
      </form>

      <a href="#">Olvide mi contraseña</a><br>

    </div><!-- /.login-box-body -->
  </div>
</div><!-- /.login-box -->
@stop

@section('postscript')

@stop