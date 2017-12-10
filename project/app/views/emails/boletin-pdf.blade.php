<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Boletin</title>
  <style type="text/css">
  html, body {
    font-size: 16px; 
    font-family: 'Roboto';
  }
  .bg-blue {
    background-color: #25aae2; }

  .text-blue {
    color: #25aae2; }

  .bg-yellow {
    background-color: #ffca08; }

  .text-yellow {
    color: #ffca08; }

  .bg-green {
    background-color: #a6ce39; }

  .text-green {
    color: #a6ce39; }

  .bg-pink {
    background-color: #ed008c; }

  .text-pink {
    color: #ed008c; }
  .news {
    padding: 20px; }
  .news .boletin-title
  {
    color: white;
  }
  .img-boletin {
    width: 300px; 
  }
  .padding-1
  {
    padding: 1em;
  }
  .banner
  {
    width: 600px;
    display: inline-block;
    max-width: 100%;
  }
  </style>
</head>
<body>
<div class="container">
  <div class="row text-center">
    <center><img src="{{ asset('images/boletin/btn_cabeza.jpg') }}" class="banner"></center>
  </div>
  <div class="row">
    <?php $j = 0; ?>
    <div class="row news bg-blue">
      @if(!empty($principal))
      <div class="col-xs-12 text-center">
        @if(!count($principal->imagenes) > 0)
        <center><img src="{{ asset('images/news/'.$principal->imagenes->first()->image) }}" class="img-boletin"></center>
        @else
        
          <center><img src="{{ asset('images/logo.png') }}" class="" alt="{{ $article->first()->title }}"></center>
        @endif
      </div>
      <div class="col-xs-12">
        <h2 class="boletin-title">{{ $principal->titles->first()->text }}</h2>
        <p class="text-justify">{{ substr(strip_tags($principal->descriptions->first()->text), 0, 300) }} [...]</p>
        <a target="_blank" href="{{ URL::to('noticias/ver/'.$principal->type->slugs->first()->text.'/'.$principal->slugs->first()->text) }}" class="btn btn-default btn-xs pull-right">Leer más</a>
      </div>
      <div class="clearfix"></div>
      @endif
    </div>
    @foreach($article as $a)
    <div class="row news bg-{{ $colors[$j] }}">
      @if(!empty($principal))
      @if($a->slugs->first()->text != $principal->id)
      <div class="col-xs-12 text-center">
        @if(count($a->imagenes) > 0)
        <center><img src="{{ asset('images/news/'.$a->imagenes->first()->image) }}" class="img-boletin" alt="{{ $a->titles->first()->text }}"></center>
        @else
        <center><img src="{{ asset('images/logo.png') }}" class="" alt="{{ $a->titles->first()->text }}"></center>
        @endif
      </div>
      <div class="col-xs-12">
        <h2 class="boletin-title">{{ $a->titles->first()->text }}</h2>
        <p class="text-justify">{{ substr(strip_tags($a->descriptions->first()->text), 0, 300) }} [...]</p>
        <a target="_blank" href="{{ URL::to('noticias/ver/'.$a->type->slugs->first()->text.'/'.$a->slugs->first()->text) }}" class="btn btn-default btn-xs pull-right">Leer más</a>
        <div class="clearfix"></div>
      </div>
      @endif
      @else
      <div class="col-xs-12 text-center">
        @if(count($a->imagenes) > 0)
        <center><img src="{{ asset('images/news/'.$a->imagenes->first()->image) }}" class="img-boletin" alt="{{ $a->titles->first()->text }}"></center>
        @else
        <center><img src="{{ asset('images/logo.png') }}" class="" alt="{{ $a->titles->first()->text }}"></center>
        @endif
      </div>
      <div class="col-xs-12">
        <h2 class="boletin-title">{{ $a->titles->first()->text }}</h2>
        <p class="text-justify">{{ substr(strip_tags($a->descriptions->first()->text), 0, 300) }} [...]</p>
        <a target="_blank" href="{{ URL::to('noticias/ver/'.$a->slugs->first()->text) }}" class="btn btn-default btn-xs pull-right">Leer más</a>
        <div class="clearfix"></div>
      </div>
      @endif
      <?php $j++; ?>
      @if($j == 4)
      <?php $j=0; ?>
      @endif
    </div>
    @endforeach
    <div class="row">
      <div class="col-xs-12">
        @if(count($hist->imagenes) > 0)
        <center><img src="{{ asset('images/news/'.$hist->imagenes->first()->image) }}" class="img-boletin" alt="{{ $hist->titles->first()->text }}"></center>
        @endif
      </div>
      <div class="col-xs-12">
        <h2 class="text-blue">Historias Epékeinas</h2>
        <div class="bg-green padding-1">
          <h2 class="boletin-title">
          {{ $hist->titles->first()->text }}
          @if(!is_null($hist->subtitle))
          {{ $hist->subtitle->titles->first()->text }}
          @endif
          </h2>
        </div>
        <hr>
        <div class="text-justify">
          {{ substr(strip_tags($hist->descriptions->first()->text), 0, 1600) }}[...]
          <br>
          <a href="{{ URL::to('quienes-somos/historias-epekeinas/'.$hist->slugs->first()->text) }}" class="pull-right">Leer más</a>
        </div>
      </div>
    </div>
  </div>
  <div class="col-xs-12 text-center">
    <h3>&copy; Derechos Reservados Funda Epékeina 2016.</h3>
  </div>
</div>
<div class="container center-block">
  <div class="bg-square bg-blue"></div>
  <div class="bg-square bg-yellow"></div>
  <div class="bg-square bg-green"></div>
  <div class="bg-square bg-pink"></div>
</div>
<div class="clearfix"></div>
</div>
</body>
</html>