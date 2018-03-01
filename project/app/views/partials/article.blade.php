<div class="card hoverable bg-white mt-0 mb-0 ">
	<div class="card-image waves-effect waves-block waves-light">
		<a href="{{ URL::to('noticias/ver/'.$a->slugs->first()->text) }}">
			@if(count($a->imagenes) > 0)
                <img src="{{ asset('images/news/'.$a->imagenes->first()->image) }}" class="responsive-img" alt="{{ $a->titles->first()->text }}">
            @else
                <img src="http://via.placeholder.com/645x386" class="img-responsive" alt="">
            @endif
		</a>
	</div>
	<div class="card-content waves-effect waves-block pt-1 pb-1">
		<h3 class="mt-1 mb-0">
			<span class="card-title truncate">
				{{ $a->titles->first()->text }}
			</span>

		</h3>
		<a href="{{ URL::to('noticias/ver/'.$a->slugs->first()->text) }}" class="read-more left text-darkgray">
			{{ Lang::get('lang.read_more') }}
		</a>
		<i class="material-icons right activator">more_vert</i>
	</div>
	<div class="card-reveal waves-effect waves-block">
		<h3 class="mb-1">
			<span class="card-title">
				<i class="material-icons close-card left mt-1">close</i>
				{{ substr($a->titles->first()->text, 0, 40) }} 
			</span>
		</h3>
		<p class="justify-align mt-0">{{ substr(strip_tags($a->descriptions->first()->text), 0, 80) }} [...]</p>
		<a href="{{ URL::to('noticias/ver/'.$a->slugs->first()->text) }}" class="text-darkgray read-more">
			<strong>{{ Lang::get('lang.read_more') }}</strong>
		</a>
	</div>
</div>