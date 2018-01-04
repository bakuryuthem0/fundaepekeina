<div class="owl-carousel news-gallery">
    @foreach($article->imagenes as $i => $img)
		<div class="item center-align">
      		<a class="fancybox" data-fancybox="gallery" title="{{ $article->titles->first()->text }}" href="{{ asset('images/news/'.$img->image) }}">
        		<img src="{{ asset('images/news/'.$img->image) }}" class="d-inline-block mx-auto" alt="{{ $article->titles->first()->text }}">
      		</a>  
		</div>
    @endforeach
</div>