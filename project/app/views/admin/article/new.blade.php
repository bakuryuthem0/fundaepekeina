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
		<form class="" method="POST" action="{{ URL::to('administrador/nuevo-articulo/enviar') }}" enctype="multipart/form-data">
      <div class="col-xs-12 input-group no-padding">
        <div class="formulario col-xs-12 col-md-6">
          <label for="inputPassOld" class="text-left control-label">Titulo</label>
          <input type="text" name="title" class="form-control" placeholder="Titulo" required value="{{ Input::old('title') }}">
          @if($errors->has('title'))
            @foreach($errors->get('title') as $err)
            <div class="clearfix"></div>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $err }}
            </div>
            @endforeach
          @endif
        </div>
        <div class="formulario col-xs-12 col-md-6">
          <label for="inputPassOld" class="text-left control-label">Sede/Proyecto</label>
          <select class="form-control sedes" name="sede">
            <option value="">Seleccione una opción...</option>
            @foreach($sede as $s)
              <option value="{{ $s->id }}">{{ ucfirst(strtolower($s->descripcion)) }}</option>
            @endforeach
          </select>
          @if($errors->has('sede'))
            @foreach($errors->get('sede') as $err)
            <div class="clearfix"></div>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $err }}
            </div>
            @endforeach
          @endif
        </div>
        <div class="formulario col-xs-12 hidden sedes-group">
          <div class="form-group">
              <div class="input-group full-leght">
                <select class="response-content form-control">
                  <option value="">Seleccione una opción...</option>
                </select>
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">
                    <i class="fa hidden loading-fa"></i>
                    <img src="{{ asset('images/ajax-loader.gif') }}" class="btn-loader">
                  </button>
                </span>
              </div><!-- /input-group -->
          </div>
        </div>
        <div class="formulario col-xs-12">
          <label>Descripción</label>
          <textarea name="desc" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>{{ Input::old('desc') }}</textarea>
          @if($errors->has('desc'))
            @foreach($errors->get('desc') as $err)
            <div class="clearfix"></div>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $err }}
            </div>
            @endforeach
          @endif
        </div>
        <div class="col-xs-12 formulario">
          <div clas="col-xs-12 no-padding">
            <label>Imagen: </label>
          </div>
          <div class="col-xs-12 no-padding">
            <div class="col-xs-12 col-md-6 formulario no-padding-half">
              <input type="file" name="file[]">
            </div>
            <div class="col-xs-12 col-md-6 formulario no-padding-half new-img to-clone">
              <button type="button" class="close dimiss-cloned">&times;</button>
              <input type="file" name="">
            </div>
          </div>
          <div class="col-xs-12 no-padding">
            <button type="button" class="btn btn-primary btn-clone" data-target="new-img" data-name="file[]">
              Agregar Imagen
            </button>
          </div>
        </div>
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