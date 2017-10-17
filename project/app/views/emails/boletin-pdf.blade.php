<meta http-equiv="Content-Type" content="text/html; charset=utf-8"/>
<style type="text/css">
.img-boletin {
  max-height: 312px; }

html, body {
  font-size: 16px; 
  font-family: 'Roboto';
}
.row
{
  margin: 0 !important;
}
.center-block
{
  display: inline-block;
  margin: 0 auto;
}
.img-responsive
{
  max-width: 100%;
}
.about-icons {
  font-size: 50px;
  border: 5px solid #E6007E;
  color: #E6007E;
  padding: 25px;
  border-radius: 50%; }

.bolder {
  font-weight: 900; }

blockquote {
  border-left: 5px solid #afcb08; }

.text-justify {
  text-align: justify; }

.news {
  padding: 20px; }
.news .boletin-title
{
  color: white;
}
.bg-square {
  height: 30px;
  float: left;
  width: 25%; }

.text-center {
  text-align: center; }

.container {
  width: 97.5%;
  padding-right: 15px;
  padding-left: 15px;
  border-left: 5px solid white;
  border-right: 5px solid white; }

.padding-20 {
  padding: 20px; }

.btn-default {
  padding: 6px 10px;
  background-color: #eee;
  border-radius: 8px;
  color: #333;
  text-decoration: none;
  border: 1px solid #bbb; }
  .btn-default:hover {
    background-color: #ddd; }

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

.social-container {
  width: 100%;
  height: 135px;
  background-color: #a6ce39;
  color: #fff; }
.social-container > h3
{
  padding: .5em 1em;
  margin-bottom: 0;
}
  .social-container hr {
    margin-bottom: 15px; }
  .social-container ul
  {
    text-align: center;
    padding-left: 0;
  }
  .social-container ul li {
    list-style: none;
    display: inline-block;
    margin: 0 7px; }
    .social-container ul li .fa {
      border-radius: 50%;
      background-color: #fff;
      color: #25aae2;
      padding: 15px; }
      .social-container ul li .fa .ion-social-facebook {
        padding: 10px 15px; }

/*# sourceMappingURL=css.css.map */
  .row
  {
    width: 100%;
  }
  .col-xs-4, .col-xs-8
  {
    float: left;
    box-sizing: border-box;
  }
  .col-xs-4{
    width: 33.33%;
  } 
  .col-xs-8{
    width: 66.66%;
  }

</style>

<div class="row">
  <img src="{{ asset('images/boletin/btn_cabeza.jpg') }}" class="img-responsive">
</div>
<div class="">
  <?php $j = 0; ?>
  <div class="row news bg-blue">
    @if(!empty($principal))
      <div class="col-xs-12 text-center">
        @if(!count($principal->imagenes) > 0)
            <img src="{{ asset('images/news/'.$principal->imagenes->first()->image) }}" class="img-responsive  img-boletin">
        @else
            <img src="{{ asset('images/logo.png') }}" class="img-responsive img-boletin" alt="{{ $article->first()->title }}">
        @endif
      </div>
      <div class="col-xs-12">
        <h2 class="boletin-title">{{ $principal->titles->first()->text }}</h2>
        <p class="text-justify">{{ substr(strip_tags($principal->descriptions->first()->text), 0, 300) }} [...]</p>
        <a target="_blank" href="{{ URL::to('noticias/'.$principal->slugs->first()->text) }}" class="btn btn-default btn-xs pull-right">Leer más</a>
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
                <img src="{{ asset('images/news/'.$a->imagenes->first()->image) }}" class="img-responsive img-boletin" alt="{{ $a->titles->first()->text }}">
            @else
                <img src="{{ asset('images/logo.png') }}" class="img-responsive img-boletin" alt="{{ $a->titles->first()->text }}">
            @endif
          </div>
          <div class="col-xs-12">
            <h2 class="boletin-title">{{ $a->titles->first()->text }}</h2>
            <p class="text-justify">{{ substr(strip_tags($a->descriptions->first()->text), 0, 300) }} [...]</p>
            <a target="_blank" href="{{ URL::to('noticias/'.$a->slugs->first()->text) }}" class="btn btn-default btn-xs pull-right">Leer más</a>
            <div class="clearfix"></div>
          </div>
          @endif
        @else
        <div class="col-xs-12 text-center">
          @if(count($a->imagenes) > 0)
              <img src="{{ asset('images/news/'.$a->imagenes->first()->image) }}" class="img-responsive center-block img-boletin" alt="{{ $a->titles->first()->text }}">
          @else
              <img src="{{ asset('images/logo.png') }}" class="img-responsive center-block img-boletin" alt="{{ $a->titles->first()->text }}">
          @endif
        </div>
        <div class="col-xs-12">
          <h2 class="boletin-title">{{ $a->titles->first()->text }}</h2>
          <p class="text-justify">{{ substr(strip_tags($a->descriptions->first()->text), 0, 300) }} [...]</p>
          <a target="_blank" href="{{ URL::to('noticias/'.$a->slugs->first()->text) }}" class="btn btn-default btn-xs pull-right">Leer más</a>
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
          <img src="{{ asset('images/news/'.$hist->imagenes->first()->image) }}" class="img-responsive img-boletin" alt="{{ $hist->titles->first()->text }}">
        @endif
      </div>
      <div class="col-xs-12">
        <h2 class="text-blue">Historias Epékeinas</h2>
        <div class="bg-green padding-20">
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