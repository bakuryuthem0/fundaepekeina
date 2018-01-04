@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="col-xs-12 col-md-8 col-md-offset-2 box box-bordered">
    <h2>Modifcar cuenta bancaria.</h2>
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
		<form class="" method="POST" action="{{ URL::to('administrador/editar-cuenta/'.$acc->id.'/enviar') }}" enctype="multipart/form-data">
      <div class="row">
        <div class="col-sm-12">
          <div class="alert alert-info">
            <i class="fa fa-info-circle"></i> Tenga en cuenta que la información se mostrara tal cual la introduzca.
          </div>
        </div>
      </div>
      <div class="row formulario">
        <div class="col-sm-12">
          <label>Nombre de la cuenta</label>
          <input type="text" name="name" value="{{ $acc->name }}" class="form-control">
        </div>
      </div>
      <div class="row formulario">
        <div class="col-sm-12">
          <label>Numero de cuenta</label>
          <input type="text" name="number" value="{{ $acc->number }}" class="form-control">
        </div>
      </div>
      <div class="row formulario">
        <div class="col-sm-12">
          <label>Tipo de cuenta</label>
          <input type="text" name="type" value="{{ $acc->type }}" class="form-control">
        </div>
      </div>
      <div class="row formulario">
        <div class="col-sm-12">
          <label>Nombre del banco</label>
          <input type="text" name="bank" value="{{ $acc->bank }}" class="form-control">
        </div>
      </div>
      <div class="row formulario">
        <div class="col-sm-12">
          <label>Rasón social</label>
          <input type="text" name="social_name" value="{{ $acc->social_name }}" class="form-control">
        </div>
      </div>
      <div class="row formulario">
        <div class="col-sm-12">
          <label>Rif</label>
          <input type="text" name="rif" value="{{ $acc->rif }}" class="form-control">
        </div>
      </div>
      <div class="row formulario">
        <div class="col-sm-12">
            <button type="submit" class="btn btn-primary btn-send-new-product">Enviar</button>
        </div>
      </div>
    </form>
	</div>
</div>
@stop