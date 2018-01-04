@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="col-xs-12 center-block box box-bordered">
    <h2>Ver biblioteca.</h2>
    <hr>
    @if(Session::has('success'))
    <div class="alert alert-success">
      <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
      {{ Session::get('success') }}
    </div>
    @endif
		<div class="col-xs-12">
      <div class="table-responsive">
        <table id="example1" class="table table-bordered table-striped">
          <thead>
            <tr>
              <th class="text-center">Id</th>
              <th class="text-center">Titulo</th>
              <th class="text-center">Editar</th>
              <th class="text-center">Descargar</th>
              <th class="text-center">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($files as $f)
            <tr>
              <td>{{ $f->id }}</td>
              <td>{{ $f->title }}</td>
              <td><a target="_blank" href="{{ URL::to('administrador/biblioteca/editar-archivos/'.$f->id) }}" class="btn btn-warning btn-xs">Editar</a></td>
              <td><a target="_blank" href="{{ URL::to('administrador/biblioteca/ver-archivos/'.$f->id) }}" class="btn btn-success btn-xs">Descargar</a></td>
              <td><button value="{{ $f->id }}" class="btn btn-danger btn-xs btn-elim" data-url="{{ URL::to('administrador/biblioteca/ver-archivos/eliminar') }}" data-tosend="id" data-toggle="modal" data-target="#elimThing" data-toelim="archivo">Eliminar</button></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="clearfix"></div>
	</div>
</div>
@include('partials.modalElim')
@stop

@section('postscript')
  {{ HTML::style('plugins/datatables/dataTables.bootstrap.css') }}
  {{ HTML::script('plugins/datatables/jquery.dataTables.min.js') }}
  {{ HTML::script('plugins/datatables/dataTables.bootstrap.min.js') }}
  <script>
    $(function () {
      $('#example1').DataTable({
        "paging": true,
        "lengthChange": true,
        "searching": true,
        "ordering": true,
        "info": true,
        "autoWidth": true
      });
    });
  </script>

@stop