@extends('layouts.default')

@section('content')
@include('partials.main-banner')
<div class="row contenedor pt-4">
	@foreach($gallery as $g)
		<div class="col s12 m3">
			<div class="card gallery">
	            <div class="card-image">
	              <a href="{{ URL::to('galeria/'.$g->id) }}">
	              	<img src="{{ asset('images/gallery/icon/'.$g->icon) }}" class="text-center" alt="{{ $g->name }}" title="{{ $g->name }}">
	              </a>
	            </div>
	            <div class="card-action gallery-button">
	              <a href="{{ URL::to('galeria/'.$g->id) }}" class="d-block mx-auto center-align">{{$g->name}}</a>
	            </div>
	      	</div>
		</div>
  	@endforeach
</div>

@stop