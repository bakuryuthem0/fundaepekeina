@extends('layouts.main')

@section('content')
<section id="page-breadcrumb">
        <div class="vertical-center sun">
             <div class="container">
                <div class="row">
                    <div class="">
                        <div class="col-sm-12">
                            <h1 class="title">Apoyenos</h1>
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
                        <div class="col-sm-12 col-md-6 formulario">
                            <h3><strong>Plan Padrino</strong></h3>
                            <br>
                            Apadrinando a un niño o niña a través de una donación mensual de Bs. 120 permites la sostenibilidad de los proyectos de los cuales él o ella se benefician directamente garantizando transporte, desayuno y materiales.
                        </div>
                        <div class="col-sm-12 col-md-6 formulario">
                            <h3><strong>Club de Socios</strong></h3>
                            <br>
                            Convirtiéndote en un Socio Epékeino con un aporte mensual fijo de BsF. 500, BsF. 1000 ó BsF. 2500 colaboras para la sostenibilidad de nuestros proyectos que apuestan por una sociedad más justa. 
                        </div>
                        <div class="col-sm-12 col-md-6 formulario">
                            <h3><strong>Donación de Productos o Dinero</strong></h3>
                            <br>
                            Aportando periódicamente recursos o dinero para sostener nuestras tres líneas de acción nos ayudas a disminuir costos de los programas. 

                            Formación: transporte, materiales escolares y pago de facilitadores
                            Alimentación: comidas preparadas y mercados
                            Salud: medicinas y servicios médicos
                            Donaciones
                        </div>
                        <div class="col-sm-12 col-md-6 formulario">
                            <h3><strong>Jornadas de Recolección</strong></h3>
                            <br>
                            Ponemos a tu disposición nuestra infraestructura física y humana para poder obtener herramientas de trabajo, juguetes, alimentos, libros que puedan ser útiles a nuestros niños, niñas, jóvenes y familias en su  crecimiento personal y familiar.
                        </div>
                        <div class="col-sm-12 formulario">
                            <h3><strong>Patrocinio de Nuestros Eventos Pro-Fondos</strong></h3>
                            <br>
                            Patrocinando con dinero, promoción y voluntariado los eventos que realizamos a lo largo del año para celebrar en comunidad y recoger fondos necesarios para continuar la ejecución de nuestras actividades con los beneficiarios de nuestros programas en Las Acacias y en La Boyera.
                        </div>
                        <div class="col-xs-12 text-center">
                            <a href="{{ URL::to('contacto/donaciones') }}" class="btn btn-info">Ver cuentas bancarias</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!--/#blog-->
@stop
