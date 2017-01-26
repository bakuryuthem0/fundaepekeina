@extends('layouts.main')

@section('content')
<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="">
                        <div class="col-sm-12">
                            <h1 class="title">Donaciones</h1>
                            <p></p>
                        </div>                                                                                
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#page-breadcrumb-->

    <section id="blog-details" class="padding-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                         <div class="col-md-12 col-sm-12">
                            <div class="single-blog blog-details two-column">
                                
                                <div class="post-content overflow">
                                    <p class="text-justify">
                                        Somos una organización venezolana con una razón de Ser: Social, Cultural, Humanitaria, Educativa, Catequético-pastoral, Espiritual y Asistencial, sin fines de lucro. Trabajamos en los sectores de pobreza más extrema, esencialmente, con enseñanza de valores a Niños, Niñas, Adolescentes y Jóvenes, con edades entre 5 y 22 años. Registrada ante el SENIAT desde el 27-11-2010, mediante el número de acreditación: 5217-5650, pudiendo así recibir y, administrar, legalmente, las ayudas provenientes de las empresas y personas particulares que deseen contribuir con el monto del impuesto estipulado para ayudar a las ONGs.
                                    </p>
                                    <hr>
                                    <h3>¡Haz una donación!</h3>
                                    <p class="text-justify">
                                        Tú puedes realizar una donación voluntaria por la suma que desees, depositando o transfiriendo a nuestra cuenta corriente en Banesco #0134-0390-20-3901023342 a nombre de Funda Epékeina Rif J-29868492-5

                                        Recuerda enviarnos tus datos (nombre completo, cédula de identidad o rif, teléfono, dirección y comprobante de depósito o transferencia) a fundapekeina@gmail.com para hacerte llegar la carta de agradecimiento y en caso de estar interesado en deducciones fiscales, te haremos llegar los documentos correspondientes.

                                        Gracias a este aporte estarás contribuyendo a la formación de valores de los niños de Terrazas del Alba al facilitarnos la compra de materiales escolares, alimentos y el pago de su transporte para ejecutar las actividades con ellos.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-12 col-md-6 formulario">
                            <img src="{{ asset('images/info/donaciones_sedeprincipal.jpg') }}" class="center-block img-responsive">
                        </div>
                        <div class="col-sm-12 col-md-6 formulario">
                            <img src="{{ asset('images/info/donaciones_acacias.jpg') }}" class="center-block img-responsive">
                        </div>
                        <div class="col-sm-12 col-md-6 formulario">
                            <img src="{{ asset('images/info/donaciones_laboyera.jpg') }}" class="center-block img-responsive">
                        </div>
                        <div class="col-sm-12 col-md-6 formulario">
                            <img src="{{ asset('images/info/donaciones_sacerdotal.jpg') }}" class="center-block img-responsive">
                        </div>

                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
@stop
