@extends('layouts.admin')

@section('content')
<div class="container">
	<form action="{{ URL::to('administrador/enviar-campaña') }}" method="POST">
		<div class="panel panel-primary col-sm-12 col-md-6 center-block" style="padding:left-0;padding-right:0;">
			<div class="panel-heading">
				<h3 class="panel-title">Texto de Campaña</h3>
			</div>
			<div class="panel-body">
					<div class="input-field">
						<label>Campaña (Español)</label>
						<input type="text" class="form-control" name="title[{{ count($campaingEs) < 1 ? 1 : $campaingEs->titles->first()->id }}]" value="{{ count($campaingEs) < 1 ? "" : $campaingEs->titles->first()->text }}">
					</div>
					<div class="input-field">
						<label>Campaña (Ingles)</label>
						<input type="text" class="form-control" name="title[{{ count($campaingEn) < 1 ? 2 : $campaingEn->titles->first()->id }}]" value="{{ count($campaingEn) < 1 ? "" : $campaingEn->titles->first()->text }}">
					</div>
			</div>
			<div class="panel-footer">
				<button type="submit" class="btn btn-success">Enviar</button>
			</div>
		</div>
	</form>
</div>
@stop