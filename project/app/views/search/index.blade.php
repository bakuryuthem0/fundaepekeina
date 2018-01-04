@extends('layouts.default')

@section('content')
@include('partials.main-banner')
@if(count($collection) > 0)
	<div class="row bg-turquesa pt-4 pb-4 wow fadeIn" data-wow-duration="500ms" data-wow-delay="600ms">
		<div class="col s12 pl-0 pr-0 news">
	        @foreach($collection as $a)
				<div class="col s12 m6 l3 mb-2">
					@include('partials.article')
				</div>
			@endforeach
		</div>
	</div>
	<div class="row wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
		<div class="col s12">
			 @include('partials.pagination')
		</div>
	</div>
@else
	<div class="row valign-wrapper pt-4 pb-4 wow fadeIn" data-wow-duration="500ms" data-wow-delay="600ms">
		<div class="col s12 pl-0 pr-0 center-align">
	        <h2>{{ 'No se encontraron resultados para la busqueda' }}</h2>
	        <i class="fa fa-search fa-4x"></i>
		</div>
	</div>
@endif
@stop