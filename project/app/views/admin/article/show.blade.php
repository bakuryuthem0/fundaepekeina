@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="col-xs-12 center-block box box-bordered">
    <h2>Artículos.</h2>
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
              <th class="text-center">Nombre</th>
              <th class="text-center">Ver</th>
              <th class="text-center">Editar</th>
              <th class="text-center">Activar/Desactivar</th>
              <th class="text-center">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($article as $a)
            <tr>
              <td>{{ $a->id }}</td>
              <td>{{ $a->titles->first()->text }}</td>
              <td><a target="_blank" href="{{ URL::to('administrador/ver-articulo/'.$a->slugs->first()->text) }}" class="btn btn-xs btn-primary">Ver</a></td>
              <td><a target="_blank" href="{{ URL::to('administrador/editar-articulo/'.$a->id) }}" class="btn btn-warning btn-xs">Editar</a></td>
              <td class="text-center">
                @if($a->state == 0)
                  <button value="{{ $a->id }}" class="btn btn-default btn-xs btn-activate">Activar</button>
                @else
                  <button value="{{ $a->id }}" class="btn btn-default dark btn-xs btn-activate">Desactivar</button>
                @endif
                <img src="{{ asset('images/ajax-loader.gif') }}" class="miniLoader">
              </td>
              <td><button value="{{ $a->id }}" class="btn btn-danger btn-xs btn-elim" data-toggle="modal" data-target="#elimThing" data-tosend="id" data-toelim="articulo" data-url="{{ URL::to('administrador/mostrar-articulos/eliminar') }}">Eliminar</button></td>
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