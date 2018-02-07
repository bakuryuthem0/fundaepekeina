@extends('layouts.default')

@section('postcss')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css">
@stop
@section('content')
@include('partials.main-banner')
<div class="row contenedor">
	@foreach($images as $g)
		<div class="col s12 m3">
			<div class="card-panel">
	              <a href="{{ asset('images/gallery/'.str_replace(' ','-',strtolower($gallery->name)).'/'.$g->image) }}" class="fancybox" data-fancybox="group" title="{{ $gallery->name }}">
	              	<img src="{{ asset('images/gallery/'.str_replace(' ','-',strtolower($gallery->name)).'/'.$g->image) }}" class="text-center responsive-img" alt="{{ $gallery->name }}">
	              </a>
	      	</div>
		</div>
  	@endforeach
</div>

@stop

@section('postscript')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$('.fancybox').fancybox();
	});
</script>
@stop