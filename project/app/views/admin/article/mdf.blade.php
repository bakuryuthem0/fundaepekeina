@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="col-xs-12 col-md-8 col-md-offset-2 box box-bordered">
    <h2>Modificar Artículo.</h2>
    <hr>
    @if(Session::has('success'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      {{ Session::get('success') }}
    </div>
    @endif
    @if(count($errors->getMessageBag()) > 0)
    <div class="alert alert-danger">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
        @foreach($errors->all() as $err)
            <li>{{ $err }}</li>
        @endforeach
      </ul>
    </div>
    @endif
		<form class="" method="POST" action="{{ URL::to('administrador/ver-articulo/enviar') }}" enctype="multipart/form-data">
      <input type="hidden" name="id" value="{{ $article->id }}">
      <div class="col-xs-12 input-group no-padding">
        @foreach($lang as $l)
        <div class="formulario col-xs-12 col-md-6">
          <label for="inputPassOld" class="text-left control-label">Titulo ({{ $l->names->first()->text }})</label>
          @foreach($article->titlesAll as $t)
            @if($t->lang_id == $l->id)
              <input type="text" name="title[{{ $t->id }}]" class="form-control" placeholder="Titulo ({{ $l->names->first()->text }})" required value="{{ $t->text }}">
            @endif
          @endforeach
        </div>
        @endforeach
        <div class="formulario col-xs-12">
          <label for="inputPassOld" class="text-left control-label">Sede/Proyecto</label>
          <select class="form-control sedes" name="sede">
            <option value="">Seleccione una opción...</option>
            @foreach($sede as $s)
              <option value="{{ $s->id }}" @if($article->tipo == $s->id) selected @endif>{{ ucfirst(strtolower($s->descriptions->first()->text)) }}</option>
            @endforeach
          </select>
        </div>
          @foreach($lang as $l)
          <div class="formulario col-xs-12 col-md-6 @if($article->cat_id != 3 && empty($article->subtitle)) hidden @endif subtitle-container">
            <label>Subtitulo ({{ $l->names->first()->text }})</label>
            @if(count($article->subtitl) > 0)
              @foreach($article->subtitle->titles as $t)
                @if($t->lang_id == $l->id)
                  <input type="text" name="subtitle[{{ $t->id }}]" class="form-control" placeholder="Subtitulo ({{ $l->names->first()->text }})" required value="{{ $t->text }}">
                @endif
              @endforeach
            @else
                <input type="text" name="subtitle[{{ $l->id }}]" class="form-control" placeholder="Subtitulo ({{ $l->names->first()->text }})" required value="">

            @endif
          </div>
          @endforeach
        <div class="formulario col-xs-12 sedes-group">
          <div class="form-group">
              <div class="input-group full-leght">
                <select name="cat" class="response-content form-control">
                  <option value="">Seleccione una opción...</option>
                  @foreach($cat as $c)
                    <option class="response-option" value="{{ $c->id }}" @if($article->cat_id == $c->id) selected @endif>{{ ucfirst(strtolower($c->title)) }}</option>
                  @endforeach
                </select>
                <span class="input-group-btn">
                  <button class="btn btn-primary" type="button">
                    <i class="fa fa-check loading-fa"></i>
                    <img src="{{ asset('images/ajax-loader.gif') }}" class="btn-loader hidden">
                  </button>
                </span>
              </div><!-- /input-group -->
          </div>
        </div>
        @foreach($lang as $l)
        <div class="formulario col-xs-12">
          <label>Descripción ({{ $l->names->first()->text }})</label>
          @foreach($article->descriptionsAll as $t)
            @if($t->lang_id == $l->id)
              <textarea name="desc[{{ $t->id }}]" class="textarea" placeholder="Place some text here" style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;" required>{{ $t->text }}</textarea>
            @endif
          @endforeach
        </div>
        @endforeach
        <div class="col-xs-12 formulario">
          <div clas="col-xs-12 no-padding">
            <label>Imagen: </label>
          </div>
          <div class="col-xs-12 no-padding">
            @foreach($article->imagenes as $i)
            <div class="col-xs-12 col-md-6 formulario no-padding-half">
              <div><button type="button" class="close btn-elim-image" data-toggle="modal" data-target="#elimItems" data-id="{{ $i->id }}" data-url="{{ URL::to('administrador/ver-articulos/eliminar-imagen') }}" data-what-to-elim="imagen">&times;</button></div>
              <input type="file" name="file[{{ $i->id }}]">
              <div class="col-xs-12 no-padding item-img"><img src="{{ asset('images/news/'.$i->image) }}"></div>
            </div>
            @endforeach
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
<div class="modal fade" id="elimItems">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Eliminar <span class="what-to-elim"></span></h4>
      </div>
      <div class="modal-body">
        ¿Seguro desea realizar esta acción?, los cambios son irreversibles.
        <div class="alert responseAjax">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <p></p>
        </div>
      </div>
      <div class="modal-footer">
        <img src="{{ asset('images/ajax-loader.gif') }}" class="miniLoader">
        <button type="button" class="btn btn-danger btn-elim-thing-modal">Eliminar</button>
      </div>
    </div>
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