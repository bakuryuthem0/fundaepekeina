@extends('layouts.default')

@section('postcss')
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.1.25/jquery.fancybox.min.css">
@stop
@section('content')
<div class="row">
    <form method="GET" action="{{ URL::to('biblioteca-virtual?').$paginatorFilter }}">
        <div class="col s12 pl-0 pr-0">
            <h1 class="center-align" style="font-size: 24px;">Filtros</h1>
        </div>
        <div class="col s12 m8">
            <input type="text" name="busq" class="form-control" placeholder="Palabras claves" @if(isset($busq)) value="{{ $busq }}" @endif>
        </div>
        <div class="col s9 m3">
            <select name="type" class="form-control">
                <option value="">Tipo de documento</option>
                <option value="libros" @if(isset($type) && $type == "libros") selected @endif>Libros</option>
                <option value="articulos-de-investigacion" @if(isset($type) && $type == "articulos-de-investigacion") selected @endif>Articulos de investigacion</option>
                <option value="informes" @if(isset($type) && $type == "informes") selected @endif>Informes</option>
                <option value="boletin" @if(isset($type) && $type == "boletin") selected @endif>Boletin</option>
            </select>
        </div>
        <div class="col s3 m1">
            <button class="btn bg-red pl-1 pr-1">
                <i class="fa fa-search"></i>
            </button>
        </div>
    </form>
</div>
<div class="row">
    @if(count($collection) < 1)
        <div class="col s12 mb-2"><h2>No se han encontrado resultados para la busqueda.</h2></div>
    @else
        <div class="col s12 mb-2"><h1 class="" style="font-size: 24px;">Resultados.</h1></div>
    @endif
    @foreach($collection as $f)
        <div class="col s12 m6 l4">
            <div class="card horizontal valign-wrapper">
                <div class="card-image img-horizontal valign-wrapper">
                    @if(!is_null($f->portada) && !empty($f->portada))
                        <img src="{{ asset('redjoven/biblioteca/images/'.$f->portada) }}">
                    @else
                        <img src="http://via.placeholder.com/360x480">
                    @endif
                </div>
                <div class="card-stacked">
                    <div class="card-content">
                        <strong><span>{{ $f->title }}</span></strong>
                        <br>
                        @if(!empty($f->autor))
                            <small><i class="fa fa-pencil"></i> {{ $f->autor }}</small>
                            <br>
                        @endif
                        @if(!empty($f->publication_date))
                            <small><i class="fa fa-calendar"></i> {{ date('d/m/Y',strtotime($f->publication_date)) }}</small>
                            <br>
                        @endif
                        @if(!empty($f->description))
                            <p class="justify-align">
                                {{ substr(strip_tags($f->description), 0, 40) }}
                            </p>
                            <br>
                        @endif
                        <a href="{{ URL::to('biblioteca/descargar/'.$f->id) }}" target="_blank" class="btn bg-red">{{ Lang::get('lang.download') }}</a>
                    </div>
                </div>
            </div>
        </div>
    @endforeach    
</div>
<div class="row">
    <div class="col s12">
        @include('partials.pagination')
    </div>
</div>
                
@stop

@section('postscript')
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/fancybox/3.2.5/jquery.fancybox.min.js"></script>
<script type="text/javascript">
    jQuery(document).ready(function($) {
        $('.fancybox').fancybox();
        $('select').material_select();
    });
</script>
@stop