@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="col-xs-12 center-block box box-bordered">
    <h2>Ver cuentas bancarias.</h2>
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
              <th class="text-center">Nombre de la cuenta</th>
              <th class="text-center">Numero de cuenta</th>
              <th class="text-center">Tipo de cuenta</th>
              <th class="text-center">Nombre del banco</th>
              <th class="text-center">Rasón social</th>
              <th class="text-center">Rif</th>
              <th class="text-center">Editar</th>
              <th class="text-center">Eliminar</th>
            </tr>
          </thead>
          <tbody>
            @foreach($acc as $a)
            <tr>
              <td>{{ $a->id }}</td>
              <td>{{ $a->name }}</td>
              <td>{{ $a->number }}</td>
              <td>{{ $a->type }}</td>
              <td>{{ $a->bank }}</td>
              <td>{{ $a->social_name }}</td>
              <td>{{ $a->rif }}</td>              
              <td><a target="_blank" href="{{ URL::to('administrador/editar-cuenta/'.$a->id) }}" class="btn btn-warning btn-xs">Editar</a></td>
              <td><button value="{{ $a->id }}" class="btn btn-danger btn-xs btn-elim" data-toggle="modal" data-target="#elimThing" data-tosend="id" data-url="{{ URL::to('administrador/ver-cuentas/eliminar') }}" data-toelim="cuenta bancaria">Eliminar</button></td>
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