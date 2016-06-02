@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="col-xs-12 col-md-8 col-md-offset-2 box box-bordered">
    <h2>Nuevo Artículo.</h2>
    <hr>
    @if(Session::has('success'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      {{ Session::get('success') }}
    </div>
    @endif
		<form class="" method="POST" action="{{ URL::to('administrador/nuevo-usuario/enviar') }}" enctype="multipart/form-data">
      <div class="col-xs-12 input-group no-padding">
        <div class="formulario col-xs-12">
          <label for="inputPassOld" class="text-left control-label">Nombre de Usuario</label>
          <input type="text" name="username" class="form-control" placeholder="Nombre de Usuario" required value="{{ Input::old('username') }}">
          @if($errors->has('username'))
            @foreach($errors->get('username') as $err)
            <div class="clearfix"></div>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $err }}
            </div>
            @endforeach
          @endif
        </div>
        <div class="formulario col-xs-12">
          <label for="inputPassOld" class="text-left control-label">Contraseña</label>
          <input type="password" name="password" class="form-control" placeholder="Contraseña">
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
        <div class="formulario col-xs-12 sedes-group">
          <label for="password_confirmation" class="text-left control-label">Repita la contraseña</label>
          <input type="password" name="password_confirmation" class="form-control" placeholder="Repita la Contraseña">
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
        <div class="formulario col-xs-12 sedes-group">
          <label for="password_confirmation" class="text-left control-label">Roles</label>
          <select name="role" class="form-control">
            <option value="">Seleccione una opción...</option>
            @foreach($role as $r)
              <option value="{{ $r->id }}" @if(Input::old('role') == $r->id) selected @endif>{{ ucfirst(strtolower($r->descripcion)) }}</option>
            @endforeach
          </select>
          @if($errors->has('role'))
            @foreach($errors->get('role') as $err)
            <div class="clearfix"></div>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $err }}
            </div>
            @endforeach
          @endif
        </div>
      <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-send-new-product">Enviar</button>
      </div>
    </form>
	</div>
</div>
@stop

@section('postscript')
<script type="text/javascript">
  jQuery(document).ready(function($) {
    $(".textarea").wysihtml5();
    $('.btn-send-new-product').on('click', function(event) {
      $(this).attr('disabled',true);
      $('form').submit()
    });
  });
</script>
@stop