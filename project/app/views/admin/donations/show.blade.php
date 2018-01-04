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
              <th class="text-center">Cuenta</th>
              <th class="text-center">Nombre</th>
              <th class="text-center">Email</th>
              <th class="text-center">Fecha de transacción</th>
              <th class="text-center">Monto</th>
              <th class="text-center">Numero de referencia</th>

            </tr>
          </thead>
          <tbody>
            @foreach($donations as $d)
            <tr>
              <td class="text-center">{{ $d->id }}</td>
              <td class="text-center">{{ $d->accounts->name }}</td>
              <td class="text-center">{{ $d->fullname }}</td>
              <td class="text-center">{{ $d->email }}</td>
              <td class="text-center">{{ $d->transaction_date }}</td>
              <td class="text-center">{{ $d->amount }}</td>
              <td class="text-center">{{ $d->reference_number }}</td>
            </tr>
            @endforeach
          </tbody>
        </table>
      </div>
    </div>
    <div class="clearfix"></div>
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