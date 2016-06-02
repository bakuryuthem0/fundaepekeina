@extends('layouts.main')

@section('content')
    <section id="home-slider">
        <div class="container">
            <div class="row">
                <div class="main-slider owl-carousel">
                    <div class="">
                        <img src="{{ asset('images/slides/1.jpg') }}">
                    </div>
                    <div class="">
                        <img src="{{ asset('images/slides/2.jpg') }}">
                    </div>
                    <div class="">
                        <img src="{{ asset('images/slides/3.jpg') }}">
                    </div>
                    <div class="">
                        <img src="{{ asset('images/slides/4.jpg') }}">
                    </div>

                </div>

            </div>
        </div>
        <div class="preloader"><i class="fa fa-sun-o fa-spin"></i></div>
    </section>
    <!--/#home-slider-->
    <section id="services" class="responsive action" style="margin-top:50px;">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class=" take-tour">
                        <div class="col-xs-12 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Proyectos</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
   <section id="">
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-sm-6 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="300ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="300ms">
                            <img src="{{ asset('images/projects/redjoven.png') }}" alt="">
                        </div>
                        <h2>Red Joven Venezuela</h2>
                        <p class="text-justify">Ground round tenderloin flank shank ribeye. Hamkevin meatball swine. Cow shankle beef sirloin chicken ground round.</p>
                    </div>
                </div>
                <div class="col-xs-12 col-sm-6 text-center padding wow fadeIn" data-wow-duration="1000ms" data-wow-delay="900ms">
                    <div class="single-service">
                        <div class="wow scaleIn" data-wow-duration="500ms" data-wow-delay="900ms">
                            <img src="{{ asset('images/projects/laguna.png') }}" alt="">
                        </div>
                        <h2>La laguna</h2>
                        <p class="text-justify">Proyecto que tiene como objetivo desarrollar un plan de capacitación y formación de caficultores, a través del diseño de un pensum por especialistas de la  universidad de los Andes para los suelos y cultivos propios de la zona de Canaguá en el Estado Mérida.... <a href="{{ URL::to('proyectos/escuela-de-campo-para-agricultores') }}">Leer mas</a></p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#services-->
    <section id="" class="responsive action">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class=" take-tour">
                        <div class="col-xs-12 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Ultimas noticias</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->

    <section id="features">
        <div class="container">
            <div class="row">
                <?php $i = 0;?>
                @foreach($article as $a)
                    @if($i%2 == 0)
                        <div class="single-features post-content">
                            <div class="col-sm-6 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                                <a href="{{ URL::to('noticias/'.$a->id) }}"><img src="{{ asset('images/news/'.$a->imagenes->first()['image']) }}" class="img-responsive" alt=""></a>
                            </div>
                            <div class="col-sm-6 wow fadeInRight news-text-index" data-wow-duration="500ms" data-wow-delay="300ms">
                                <h2>{{ $a->title }}</h2>
                                <h3 class="post-author"><p class="text-justify no-pointer">{{ substr(strip_tags($a->descripcion), 0, 300) }} [...]</p></h3>
                                <a href="{{ URL::to('noticias/'.$a->id) }}" class="read-more">Leer mas</a>
                            </div>
                        </div>
                    @else
                        <div class="single-features post-content">
                            <div class="col-sm-6 wow fadeInLeft hidden-md hidden-lg" data-wow-duration="500ms" data-wow-delay="300ms">
                                <a href="{{ URL::to('noticias/'.$a->id) }}"><img src="{{ asset('images/news/'.$a->imagenes->first()['image']) }}" class="img-responsive" alt=""></a>
                            </div>
                            <div class="col-sm-6 wow fadeInLeft news-text-index" data-wow-duration="500ms" data-wow-delay="300ms">
                                <h2>{{ $a->title }}</h2>
                                <h3 class="post-author"><p class="text-justify no-pointer">{{ substr(strip_tags($a->descripcion), 0, 300) }} [...]</p></h3>
                                <a href="{{ URL::to('noticias/'.$a->id) }}" class="read-more">Leer mas</a>
                            </div>
                            <div class="col-sm-6 image-right wow fadeInRight visible-md-block visible-lg-block" data-wow-duration="500ms" data-wow-delay="300ms">
                                <a href="{{ URL::to('noticias/'.$a->id) }}"><img src="{{ asset('images/news/'.$a->imagenes->first()['image']) }}" class="img-responsive" alt=""></a>
                            </div>
                        </div>
                    @endif
                    <hr>
                    <?php $i++; ?>
                @endforeach
                <div class="text-center" style="margin-bottom:50px;"><a href="{{ URL::to('noticias') }}" class="btn btn-lg btn-info">Ver todas</a></div>
            </div>
        </div>
    </section>
     <!--/#features-->
     <section id="" class="responsive action">
        <div class="vertical-center">
             <div class="container">
                <div class="row">
                    <div class=" take-tour">
                        <div class="col-xs-12 wow fadeInLeft" data-wow-duration="500ms" data-wow-delay="300ms">
                            <h1 class="title">Nuestros aliados</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
   </section>
    <!--/#action-->
    <section >
        <div class="container">
            <div class="row">
                <div class="allies-slider owl-carousel">
                    <div class="">
                        <img src="{{ asset('images/allies/pnud.png') }}">
                    </div>
                    <div class="">
                        <img src="{{ asset('images/allies/ula.jpg') }}">
                    </div>
                    <div class="">
                        <img src="{{ asset('images/allies/corpoula.jpg') }}">
                    </div>
                    
                </div>

            </div>
        </div>
    </section>
@stop

@section('postscript')
<script type="text/javascript">
    $(document).ready(function(){
        $('.main-slider').owlCarousel({
            loop: true,
            margin: 10,
            dots: true,
            autoplay: true,
            autoplayTimeout: 5000,
            autoplayHoverPause: false,
            nav: true,
            responsive:{
                0:{
                    items:1
                },
            }
        });
        $('.allies-slider').owlCarousel({
            loop: true,
            margin: 10,
            nav: false,
            dots: true,
            loop: true,
            autoplay: true,
            autoplayTimeout: 3000,
            autoplayHoverPause: false,
            responsive:{
                0:{
                    items:3
                },
            }
        });
    });
</script>
@stop