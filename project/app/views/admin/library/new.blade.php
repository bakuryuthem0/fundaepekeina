@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="col-xs-12 col-md-8 col-md-offset-2 box box-bordered">
    <h2>Nuevo Archivo.</h2>
    <hr>
    @if(Session::has('success'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      {{ Session::get('success') }}
    </div>
    @endif
		<form class="" method="POST" action="{{ URL::to('administrador/biblioteca/nuevo-archivo/enviar') }}" enctype="multipart/form-data">
      <div class="col-xs-12 input-group no-padding">
        <div class="formulario col-xs-12 col-md-6">
          <label class="control-label">Nombre o Titulo (*)</label>
          <input type="text" name="title" class="form-control" placeholder="Nombre o Titulo" required value="{{ Input::old('title') }}">
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
          <label class="control-label">Tipo de publicación (*)</label>
          <select class="form-control" name="type">
            <option value="libros" @if(Input::old('type') && Input::old('type') == "libros") selected @endif>Libros</option>
            <option value="articulos-de-investigacion" @if(Input::old('type') && Input::old('type') == "articulos-de-investigacion") selected @endif>Artículos de Investigación</option>
            <option value="informes" @if(Input::old('type') && Input::old('type') == "informes") selected @endif>Informes</option>
            <option value="cuento" @if(Input::old('type') && Input::old('type') == "cuento") selected @endif>Cuento</option>
          </select>
          @if($errors->has('type'))
            @foreach($errors->get('type') as $err)
            <div class="clearfix"></div>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $err }}
            </div>
            @endforeach
          @endif
        </div>
        <div class="formulario col-xs-12 col-md-6">
          <label class="control-label">Autor (opcional)</label>
          <input type="text" name="autor" class="form-control" placeholder="Autor" value="{{ Input::old('autor') }}">
          @if($errors->has('autor'))
            @foreach($errors->get('autor') as $err)
            <div class="clearfix"></div>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $err }}
            </div>
            @endforeach
          @endif
        </div>
        <div class="formulario col-xs-12 col-md-6">
          <label class="control-label">fecha de publicación (opcional)</label>
          <input type="text" name="publication_date" class="form-control" placeholder="dd/mm/YYYY" value="{{ Input::old('publication_date') }}">
          @if($errors->has('publication_date'))
            @foreach($errors->get('publication_date') as $err)
            <div class="clearfix"></div>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $err }}
            </div>
            @endforeach
          @endif
        </div>
        <div class="formulario col-xs-12">
          <label class="control-label">Resumen (opcional)</label>
          <textarea class="form-control" name="description" placeholder="Breve resumen a mostrar sobre el documento">{{ Input::old('description') }}</textarea>
          @if($errors->has('description'))
            @foreach($errors->get('description') as $err)
            <div class="clearfix"></div>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $err }}
            </div>
            @endforeach
          @endif
        </div>
        <div class="formulario col-xs-12 col-md-6">
          <label class="control-label">Portada (Opcional)</label>
          <input type="file" name="portada">
          @if($errors->has('portada'))
            @foreach($errors->get('portada') as $err)
            <div class="clearfix"></div>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $err }}
            </div>
            @endforeach
          @endif
        </div>
        <div class="formulario col-xs-12 col-md-6">
          <label class="control-label">Artchivo (*)</label>
          <input type="file" name="file">
          @if($errors->has('file'))
            @foreach($errors->get('file') as $err)
            <div class="clearfix"></div>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $err }}
            </div>
            @endforeach
          @endif
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

@stop