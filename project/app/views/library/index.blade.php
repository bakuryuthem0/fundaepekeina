@extends('layouts.main')

@section('content')
<section id="page-breadcrumb" class="formulario">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="">
                        <div class="col-sm-12">
                            <h1 class="title">
                                Biblioteca Virtual
                                <a href="{{ URL::previous() }}" class="back-link pull-right">Volver atras</a>
                            </h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#page-breadcrumb-->

    <section id="projects">
        <div class="container">
            <div class="row">
                <div class="col-xs-12">
                    <div class="row">
                        <form method="GET" action="{{ URL::to('biblioteca-vitual?').$paginatorFilter }}">
                            <div class="col-xs-12 no-padding">
                                <h1 class="text-center">Filtros</h1>
                                <div class="col-xs-12 col-md-8">
                                    <input type="text" name="busq" class="form-control" placeholder="Palabras claves" @if(isset($busq)) value="{{ $busq }}" @endif>
                                </div>
                                <div class="col-xs-9 col-md-3">
                                    <select name="type" class="form-control">
                                        <option value="">Tipo de documento</option>
                                        <option value="libros" @if(isset($type) && $type == "libros") selected @endif>Libros</option>
                                        <option value="articulos-de-investigacion" @if(isset($type) && $type == "articulos-de-investigacion") selected @endif>Articulos de investigacion</option>
                                        <option value="informes" @if(isset($type) && $type == "informes") selected @endif>Informes</option>
                                    </select>
                                </div>
                                <div class="col-xs-3 col-md-1">
                                    <button class="btn btn-default">
                                        <i class="fa fa-search"></i>
                                    </button>
                                </div>
                            </div>
                        </form>
                        @if(count($files) < 1)
                        <div class="col-xs-12 formulario"><h2>No se han encontrado resultados para la busqueda.</h2></div>
                        @else
                        <hr>
                        <div class="col-xs-12 formulario"><h1 class="">Resultados.</h1></div>
                        @endif
                        @foreach($files as $f)
                        <div class="row book-container">
                            @if(!is_null($f->portada))
                                <div class="col-xs-12 col-md-4">
                                    <img src="{{ asset('redjoven/biblioteca/images/'.$f->portada) }}" class="img-responsive">
                                </div>
                            @endif
                            <div class="col-xs-12 @if(!is_null($f->portada)) col-md-8 @endif library-container">
                                <h2 class="hist-title library">{{ $f->title }}</h2>
                                @if(!empty($f->description))
                                    <p class="text-justify">
                                        {{ $f->description }}
                                    </p>
                                @endif
                                <small>
                                    <span><i class="fa fa-book"></i> {{ ucfirst(str_replace('-',' ',$f->type)) }}</span>

                                    @if(!empty($f->autor))
                                        <span><i class="fa fa-pencil"></i> {{ $f->autor }}</span>
                                    @endif
                                    @if(!empty($f->publication_date))
                                        <span><i class="fa fa-calendar"></i> {{ $f->publication_date }}</span>
                                    @endif
                                </small>
                                <a href="{{ URL::to('biblioteca/descargar/'.$f->id) }}" target="_blank" class="pull-right">Descargar</a>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <hr>
                        @endforeach
                    </div>
                </div>
                <div class="clearfix"></div>
            <div class="blog-pagination">
                <nav role="navigation">
                    <?php  $presenter = new Illuminate\Pagination\BootstrapPresenter($files); ?>
                    @if ($files->getLastPage() > 1)
                        <ul class="pagination">
                        <?php
                            $beforeAndAfter = 3;
                            $currentPage = $files->getCurrentPage();
                            $lastPage = $files->getLastPage();
                            $start = $currentPage - $beforeAndAfter;
                            if($start < 1)
                            {
                                $pos = $start - 1;
                                $start = $currentPage - ($beforeAndAfter + $pos);
                            }
                            $end = $currentPage + $beforeAndAfter;
                            if($end > $lastPage)
                            {
                                $pos = $end - $lastPage;
                                $end = $end - $pos;
                            }
                            if ($currentPage <= 1)
                            {
                                echo '<li class="disabled"><a href="#">&laquo; Primera</a></li>';
                            }
                            else
                            {
                                $url = $files->getUrl(1);
                                echo '<li><a class="" href="'.$url.$paginatorFilter.'">&laquo; Primera</a></li>';
                            }
                            if (($currentPage-1) < $start) {
                                echo '<li class="disabled"><a href="#">&laquo;</a></li>';   
                            }else
                            {
                                echo '<li><a href="'.$files->getUrl($currentPage-1).$paginatorFilter.'">&laquo;</a></li>';
                            }
                            for($i = $start; $i<=$end;$i++)
                            {
                                if ($currentPage == $i) {
                                    echo '<li class="active"><a href="#">'.$i.'</a></li>';
                                }else
                                {
                                    echo '<li><a href="'.$files->getUrl($i).$paginatorFilter.'">'.$i.'</a></li>';
                                }
                            }
                            if (($currentPage+1) > $end) {
                                echo '<li class="disabled"><a href="#">&raquo;</a href="#"></li>' ;
                            }else
                            {
                                echo '<li><a href="'.$files->getUrl($currentPage+1).$paginatorFilter.'">&raquo;</a></li>';
                            }
                            if ($currentPage >= $lastPage)
                            {
                                echo '<li class="disabled"><a href="#">Última &raquo;</a></li>';
                            }
                            else
                            {
                                $url = $files->getUrl($lastPage);
                                echo '<li><a class="" href="'.$url.$paginatorFilter.'">Última &raquo;</a></li>';
                            }
                        ?>
                        </ul>
                    @endif
                </nav>
            </div>
            </div>
        </div>
    </section>
    <!--/#projects-->
@stop

@section('postscript')
    <script type="text/javascript">
        $(document).ready(function() {
            $(".fancybox").fancybox();
        });
    </script> 
@stop