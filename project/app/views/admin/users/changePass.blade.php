@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="col-xs-12 col-md-6 col-md-offset-3 box box-bordered">
    <h2>Cambio de contraseña.</h2>
    <h5>Usuario <strong>{{ $user->username }}</strong></h5>
    <hr>
    @if(Session::has('success'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      {{ Session::get('success') }}
    </div>
    @endif
		<form class="" method="POST" action="{{ URL::to('administrador/cambiar-password/enviar/'.$user->id) }}">
      <div class="col-xs-12 input-group">
        <div class="input-group col-xs-12">
          <label for="inputEmail" class="text-left control-label">Nueva Contraseña<br><small>(minimo 4 caracteres, Maximo 16)</small></label>
          <input type="password" name="password" class="form-control" id="" placeholder="Nueva Contraseña">
          @if($errors->has('password'))
            @foreach($errors->get('password') as $err)
            <div class="clearfix"></div>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $err }}
            </div>
            @endforeach
          @endif
        </div>
      </div>
      <div class="col-xs-12 input-group">
        <div class="input-group col-xs-12">
          <label for="inputEmail" class="text-left control-label">Repita la Contraseña</label>
          <input type="password" name="password_confirmation" class="form-control" id="" placeholder="Repita la Contraseña">
          @if($errors->has('password_confirmation'))
            @foreach($errors->get('password_confirmation') as $err)
            <div class="clearfix"></div>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $err }}
            </div>
            @endforeach
          @endif
        </div>
      </div>
      <div class="col-xs-12 input-group">
          <button type="submit" class="btn btn-danger">Enviar</button>
      </div>
    </form>
	</div>
</div>
@stop