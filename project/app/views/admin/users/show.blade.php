@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="col-xs-12 center-block box box-bordered">
    <h2>Usuarios.</h2>
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
              <th class="text-center">Contraseña</th>
              <th class="text-center">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($users as $u)
            <tr>
              <td>{{ $u->id }}</td>
              <td>{{ $u->username }}</td>
              <td class="text-center"><a href="{{ URL::to('administrador/cambiar-password/'.$u->id) }}" class="btn btn-warning btn-xs">Cambiar</a></td>
              <td class="text-center"><button value="{{ $u->id }}" class="btn btn-danger btn-xs btn-elim-user" data-url="{{ URL::to('administrador/ver-usuarios/eliminar') }}" data-toggle="modal" data-target="#elimArt">Eliminar</button></td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
	</div>
</div>
<div class="modal fade" id="elimArt">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
        <h4 class="modal-title">Eliminar</h4>
      </div>
      <div class="modal-body">
        ¿Seguro desea realizar esta accion?, tenga en cuenta que es irreversible.
        <div class="alert responseAjax">
          <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
          <p></p>
        </div>
      </div>
      <div class="modal-footer">
        <img src="{{ asset('images/ajax-loader.gif') }}" class="miniLoader">
        <button type="button" class="btn btn-danger btn-xs btn-modal-elim-user">Eliminar</button>
      </div>
    </div>
  </div>
</div>
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