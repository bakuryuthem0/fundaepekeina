<link rel="stylesheet" type="text/css" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
<style type="text/css">
.img-boletin {
  max-height: 312px; }

html, body {
  font-size: 16px; 
  font-family: 'Roboto';
}

.about-icons {
  font-size: 50px;
  border: 5px solid #E6007E;
  color: #E6007E;
  padding: 25px;
  border-radius: 50%; }

.img-responsive {
  min-height: 1px;
  max-width: 100%; }

.center-block {
  display: block;
  margin: 0 auto; }

.pull-right {
  float: right; }

.clearfix {
  clear: both; }

.bolder {
  font-weight: 900; }

blockquote {
  border-left: 5px solid #afcb08; }

.text-justify {
  text-align: justify; }

.news {
  border: 5px solid white;
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

table {
  width: 97.5%; }
  table tr {
    min-height: 200px;
    width: 100%; }
    table tr td.fixedHeight {
      height: 650px; }
    table tr td.bg {
      border: 5px solid white;
      padding: 20px; }
      table tr td.bg .boletin-title {
        color: white;
        font-size: 32px;
        font-weight: bold; }
        .bg-blue table tr td.bg .boletin-title {
          font-size: 38px; }
    table tr td.main-news {
      width: 100%; }
    table tr td.aside {
      width: 25%;
      vertical-align: top;
      padding: 0 15px;
      border-top: 5px solid white; }

/*# sourceMappingURL=css.css.map */
</style>
<table class="center-block">
    <tr>
        <td colspan="3">
            <img src="btn_cabeza.jpg" class="img-responsive center-block">
        </td>
    </tr>
    <tr>
        <td colspan="2" class="bg bg-blue fixedHeight">
            <?php $j = 0; ?>
            @if(!empty($principal))
                @if(!is_null($article->first()->imagenes->first()['image']))
                    <img src="{{ asset('images/news/'.$principal->imagenes->first()->image) }}" class="img-responsive center-block img-boletin">
                @else
                    <img src="{{ asset('images/logo.png') }}" class="img-responsive center-block img-boletin" alt="{{ $article->first()->title }}">
                @endif
                <h2 class="boletin-title">{{ $principal->title }}</h2>
                <p class="text-justify">{{ substr(strip_tags($principal->descripcion), 0, 300) }} [...]</p>
                <a target="_blank" href="{{ URL::to('noticias/'.$principal->id) }}" class="btn btn-default btn-xs pull-right">Leer más</a>
                <div class="clearfix"></div>
            @endif
        </td>
        <td rowspan="3" class="aside">
            <a href="{{ URL::to('contacto/donaciones') }}">
                <img src="{{ asset('images/boletin/btn_dona.jpg') }}" class="img-responsive center-block" >
            </a>

            <div class="social-container">
                <h3>Siguenos en:</h3>
                <hr>
                <ul>
                    <li><a href="https://twitter.com/fundaepekeina"><i class="fa fa-twitter"></i></a></li>
                    <li><a href="http://fundaepekeina.org"><i class="fa fa-instagram"></i></a></li>
                    <li><a href="https://www.facebook.com/funda.epekeina"><i class="fa fa-facebook"></i></a></li>
                    <li><a href="https://www.youtube.com/user/fundaepekeina"><i class="fa fa-youtube-play"></i></a></li>
                </ul>
            </div>
            <h2 class="text-blue">Historias Epékeinas</h2>
            <br>
            <img src="{{ asset('images/news/'.$hist->imagenes->first()->image) }}" class="img-responsive img-boletin" alt="{{ $hist->title }}">
            <div class="bg-green padding-20">
                <h2 class="boletin-title">{{ $hist->title }}@if(!is_null($hist->subtitle)){{ $hist->subtitle->subtitulo }}@endif</h2>
            </div>
            <hr>
            <div class="text-justify">
                {{ substr(strip_tags($hist->descripcion), 0, 1600) }}[...]
                <br>
                <a href="{{ URL::to('quienes-somos/historias-epekeinas/'.$hist->id) }}" class="pull-right">Leer más</a>
            </div>
        </td>
    </tr>
    <?php $k = 0;?>
    @foreach($article as $a)
        @if($k == 0 || $k%2 == 0)
            <tr>
        @endif
        @if(!empty($principal))
            @if($a->id != $principal->id)
                <td class="news fixedHeight bg-{{ $colors[$j] }}">

                    @if(!is_null($a->imagenes->first()->first()))
                        <img src="{{ asset('images/news/'.$a->imagenes->first()['image']) }}" class="img-responsive center-block img-boletin" alt="{{ $a->title }}">
                    @else
                        <img src="{{ asset('images/logo.png') }}" class="img-responsive center-block img-boletin" alt="{{ $a->title }}">
                    @endif
                    <h2 class="boletin-title">{{ $a->title }}</h2>
                    <p class="text-justify">{{ substr(strip_tags($a->descripcion), 0, 300) }} [...]</p>
                    <a target="_blank" href="{{ URL::to('noticias/'.$a->id) }}" class="btn btn-default btn-xs pull-right">Leer más</a>
                    <div class="clearfix"></div>
                </td>
              <?php $k++; ?>
            @endif
        @else
            <td class="news fixedHeight bg-{{ $colors[$j] }}">
                @if(!is_null($a->imagenes->first()->first()))
                    <img src="{{ asset('images/news/'.$a->imagenes->first()->image) }}" class="img-responsive center-block img-boletin" alt="{{ $a->title }}">
                @else
                    <img src="{{ asset('images/logo.png') }}" class="img-responsive center-block img-boletin" alt="{{ $a->title }}">
                @endif
                <h2 class="boletin-title">{{ $a->title }}</h2>
                <p class="text-justify">{{ substr(strip_tags($a->descripcion), 0, 300) }} [...]</p>
                <a target="_blank" href="{{ URL::to('noticias/'.$a->id) }}" class="btn btn-default btn-xs pull-right">Leer más</a>
                <div class="clearfix"></div>
            </td>
            <?php $k++; ?>
        @endif
        <?php $j++; ?>
          @if($j == 4)
          <?php $j=0; ?>
          @endif

        @if(($k != 0 && $k%2 == 0) || $k == count($article))
            </tr>
        @endif
    @endforeach
    <tr>
        <td colspan="3" class="text-center">
            <h3>&copy; Derechos Reservados Funda Epékeina 2016.</h3>
        </td>
    </tr>
</table>
<div class="container center-block">
        <div class="bg-square bg-blue"></div>
        <div class="bg-square bg-yellow"></div>
        <div class="bg-square bg-green"></div>
        <div class="bg-square bg-pink"></div>
</div>
<div class="clearfix"></div>