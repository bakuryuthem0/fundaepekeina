@extends('layouts.admin')

@section('content')
<div class="container">
  <div class="col-xs-12 col-md-8 col-md-offset-2 box box-bordered">
    <h2>Nueva Galeria.</h2>
    <hr>
    @if(Session::has('success'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      {{ Session::get('success') }}
    </div>
    @endif
    <div class="col-xs-12 formulario">
      <div class="alert alert-warning">
        <i class="fa fa-exclamation-triangle" aria-hidden="true"></i> Podra ingresar la cantidad de imagenes que desee, pero recuerde que mientras mayor sea la cantidad de imagenes mas tiempo tardara en realizar la acción.
      </div>
    </div>
    <form class="" method="POST" action="{{ URL::to('administrador/galeria/nueva-galeria/enviar') }}" enctype="multipart/form-data">
      <div class="col-xs-12 input-group no-padding">
        <div class="formulario col-xs-12">
          <label for="inputPassOld" class="text-left control-label">Nombre</label>
          <input type="text" name="name" class="form-control" placeholder="Nombre" required value="{{ Input::old('name') }}">
          @if($errors->has('name'))
            @foreach($errors->get('name') as $err)
            <div class="clearfix"></div>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $err }}
            </div>
            @endforeach
          @endif
        </div>
      </div>
      <div class="col-xs-12 input-group no-padding">
        <div class="formulario col-xs-12">
          <label for="inputPassOld" class="text-left control-label">Icono</label>
          <input type="file" name="icon" required>
          @if($errors->has('icon'))
            @foreach($errors->get('icon') as $err)
            <div class="clearfix"></div>
            <div class="alert alert-danger">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              {{ $err }}
            </div>
            @endforeach
          @endif
        </div>
      </div>
      <div class="formulario col-xs-12">
        <div class="alert alert-info">
          <i class="fa fa-info-circle" aria-hidden="true"></i> Si desea agregar imagenes puede seleccionarlas utilizando el boton "agregar archivo(s)" y seleccionar 1 o multiples imagenes.
        </div>
        <span class="btn btn-success fileinput-button">
            <i class="glyphicon glyphicon-plus"></i>
            <span>Add files...</span>
            <!-- The file input field used as target for the file upload widget -->
            <input id="fileupload" type="file" name="files[]" multiple>
        </span>
        <br>
        <br>
        <!-- The global progress bar -->
        <div id="progress" class="progress">
            <div class="progress-bar progress-bar-success"></div>
        </div>
        <!-- The container for the uploaded files -->
        <div id="files" class="files"></div>
        <br>
      </div>
      <div class="col-xs-12">
          <button type="submit" class="btn btn-primary btn-send-new-product">Enviar</button>
      </div>
    </form>
  </div>
</div>
@stop

@section('postscript')

<link rel="stylesheet" type="text/css" href="{{ asset('plugins/jquery-file-upload/css/jquery.fileupload.css') }}">
<!-- The jQuery UI widget factory, can be omitted if jQuery UI is already included -->
<script type="text/javascript" src="{{ asset('plugins/jquery-file-upload/js/vendor/jquery.ui.widget.js') }}"></script>
<!-- The Load Image plugin is included for the preview images and image resizing functionality -->
<script type="text/javascript" src="{{ asset('plugins/jquery-file-upload/js/load-image.all.min.js') }}"></script>

<!-- Bootstrap JS is not required, but included for the responsive demo navigation -->
<script type="text/javascript" src="{{ asset('plugins/jquery-file-upload/js/jquery.iframe-transport.js') }}"></script>
<!-- The basic File Upload plugin -->
<script type="text/javascript" src="{{ asset('plugins/jquery-file-upload/js/jquery.fileupload.js') }}"></script>
<!-- The File Upload processing plugin -->
<script type="text/javascript" src="{{ asset('plugins/jquery-file-upload/js/jquery.fileupload-process.js') }}"></script>
<!-- The File Upload image preview & resize plugin -->
<script type="text/javascript" src="{{ asset('plugins/jquery-file-upload/js/jquery.fileupload-image.js') }}"></script>
<!-- The File Upload audio preview plugin -->
<script type="text/javascript" src="{{ asset('plugins/jquery-file-upload/js/jquery.fileupload-audio.js') }}"></script>
<!-- The File Upload video preview plugin -->
<script type="text/javascript" src="{{ asset('plugins/jquery-file-upload/js/jquery.fileupload-video.js') }}"></script>
<!-- The File Upload validation plugin -->
<script type="text/javascript" src="{{ asset('plugins/jquery-file-upload/js/jquery.fileupload-validate.js') }}"></script>
<script>
/*jslint unparam: true, regexp: true */
/*global window, $ */
$(function () {
    'use strict';
    var base = $('.baseUrl').val();
    $('#fileupload').fileupload({
        url: base+'/administrador/chequear-imagen',
        dataType: 'json',
        autoUpload: true,
        acceptFileTypes: /(\.|\/)(gif|jpe?g|png)$/i,
        maxFileSize: 999000,
        // Enable image resizing, except for Android and Opera,
        // which actually support image resizing, but fail to
        // send Blob objects via XHR requests:
        disableImageResize: /Android(?!.*Chrome)|Opera/
            .test(window.navigator.userAgent),
        previewMaxWidth: 300,
        previewMaxHeight: 300,
        replaceFileInput: false,
        dropZone: "",
        previewCrop: true
    }).on('fileuploadadd', function (e, data) {
        data.context = $('<div/>').addClass('col-xs-12 col-md-6').appendTo('#files');
        $.each(data.files, function (index, file) {
            var node = $('<p/>')
                    .append($('<span/>').text(file.name));
            if (!index) {
                node
                    .append('<br>')
            }
            node.appendTo(data.context);
        });
    }).on('fileuploadprocessalways', function (e, data) {
        var index = data.index,
            file = data.files[index],
            node = $(data.context.children()[index]);
        if (file.preview) {
            node
                .prepend('<br>')
                .prepend(file.preview);
        }
        if (file.error) {
            node
                .append('<br>')
                .append($('<span class="text-danger"/>').text(file.error));
        }
        if (index + 1 === data.files.length) {
            data.context.find('button')
                .text('Upload')
                .prop('disabled', !!data.files.error);
        }
    }).on('fileuploadprogressall', function (e, data) {
        var progress = parseInt(data.loaded / data.total * 100, 10);
        $('#progress .progress-bar').css(
            'width',
            progress + '%'
        );
    }).on('fileuploaddone', function (e, data) {
      console.log(data);
        $.each(data.result.files, function (index, file) {
            if (file.url) {
                var link = $('<a>')
                    .attr('target', '_blank')
                    .prop('href', file.url);
                $(data.context.children()[index])
                    .wrap(link);
            } else if (file.error) {
                var error = $('<span class="text-danger"/>').text(file.error);
                $(data.context.children()[index])
                    .append('<br>')
                    .append(error);
            }
        });
    }).on('fileuploadfail', function (e, data, xhr) {
      console.log(xhr)
        $.each(data.files, function (index) {
            var error = $('<span class="text-danger"/>').text('Error al subir la imagen.');
            $(data.context.children()[index])
                .append('<br>')
                .append(error);
        });
    }).prop('disabled', !$.support.fileInput)
        .parent().addClass($.support.fileInput ? undefined : 'disabled');
});
</script>

@stop
