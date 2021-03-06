<div class="relative wow fadeIn" data-wow-duration="500ms" data-wow-delay="300ms">
	<picture>
		<source media="(max-width: 426px)" srcset="{{ asset('images/main_banner_phone.jpg') }}">
		<source media="(max-width: 769px)" srcset="{{ asset('images/main_banner_tablet.jpg') }}">
		<img class="responsive-img mx-auto d-block main-img" src="{{ asset('images/main_banner.jpg') }}" alt="Imagen de inicio | fundaepekeina.com">
	</picture>

	<div class="absolute promotion-container">
		<div class="contenedor row valign-wrapper mb-0 center-align">
			<div class="col s12 m2">
				<a href="{{ URL::to('contacto/donaciones') }}" class="btn waves-effect bg-red hide-on-large-only">{{ Lang::get('lang.donate') }}</a>
				<a href="{{ URL::to('contacto/voluntariado') }}" class="btn waves-effect bg-red hide-on-med-and-down">{{ Lang::get('lang.join') }}</a>
			</div>
			<div class="col s12 m8 text-white">
				<h4 class="center-align">{{ isset($campaing)? $campaing : "Promocion y campañas de la fundación" }}</h4>
			</div>
			<div class="col s12 m2 hide-on-med-and-down">
				<a href="{{ URL::to('contacto/donaciones') }}" class="btn waves-effect bg-red">{{ Lang::get('lang.donate') }}</a>
			</div>
		</div>
	</div>
</div>