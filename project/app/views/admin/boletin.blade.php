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
    <form method="POST" action="{{ URL::to('generar-boletin/enviar') }}">
      <div class="col-sm-12 formulario">
        <input type="text" name="name" class="form-control">
      </div>
  		<div class="col-xs-12 formulario">
        <div class="table-responsive">
          <table id="example1" class="table table-bordered table-striped">
            <thead>
              <tr>
                <th class="text-center">Id</th>
                <th class="text-center">Nombre</th>
                <th class="text-center">Ver</th>
                <th class="text-center">Seleccionar</th>
                <th class="">Principal</th>
              </tr>
            </thead>
            <tbody>
              @foreach($article as $a)
              <tr>
                <td>{{ $a->id }}</td>
                <td>{{ $a->titles->first()->text }}</td>
                <td><a target="_blank" href="{{ URL::to('administrador/ver-articulo/'.$a->slugs->first()->text) }}" class="btn btn-xs btn-primary">Ver</a></td>
                <td>
                  <input type="checkbox" name="art[]" value="{{ $a->id }}">
                </td>
                <td>
                  <input type="checkbox"  class="principal"  name="principal" value="{{ $a->id }}">
                </td>
              </tr>
              @endforeach
            </tbody>
          </table>
        </div>
      </div>
      <div class="col-xs-12 formulario">
        <button class="btn btn-success">Enviar</button>
      </div>
    </form>
    <div class="clearfix"></div>
	</div>
</div>
@stop

