@extends('layouts.default')

@section('content')
@include('partials.main-banner')
@if(count($collection) > 0)
	<div class="bg-turquesa pt-4 pb-4 wow fadeIn" data-wow-duration="500ms" data-wow-delay="600ms">
		<div class="row contenedor">
			<div class="col s12 pl-0 pr-0 news">
		        @foreach($collection as $a)
					<div class="col s12 m6 l3 mb-2">
						@include('partials.article')
					</div>
				@endforeach
			</div>
		</div>
	</div>
	<div class="wow fadeIn bg-turquesa" style="margin-top:-1px;margin-bottom:-1px;" data-wow-duration="500ms" data-wow-delay="300ms">
		<div class="row contenedor mb-0">
			<div class="col s12">
				 @include('partials.pagination')
			</div>
		</div>
	</div>
@else
	<div class="valign-wrapper pt-4 pb-4 wow fadeIn" data-wow-duration="500ms" data-wow-delay="600ms">
		<div class="row contenedor">
			<div class="col s12 pl-0 pr-0 center-align">
		        <h2>{{ 'No se encontraron resultados para la busqueda' }}</h2>
		        <i class="fa fa-search fa-4x"></i>
			</div>
		</div>
	</div>
@endif
@stop