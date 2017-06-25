@extends('layouts.admin')

@section('content')
<div class="container">
	<div class="col-xs-12 center-block box box-bordered">
    <h2>Galería1: {{ $gal->name }}</h2>
    
		<div class="row">
      @foreach($gal->imagenes as $i)
        <div class="col-xs-12 col-md-6 formulario">
          <img src="{{ asset('images/gallery/'.$gal->name.'/'.$i->image) }}" class="img-responsive">
        </div>
      @endforeach
    </div>
    <div class="clearfix"></div>
	</div>
</div>

@stop
