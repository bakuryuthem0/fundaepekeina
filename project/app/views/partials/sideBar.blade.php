<ul class="collection news mt-0">
    @foreach($mostVisited as $a)
        <li class="collection-item hoverable pl-3 pt-0">
            <h3 class="truncate card-title mb-0">{{ $a->article->titles->first()->text }}</h3>
            <div class="side-text">
                {{ substr(strip_tags($a->article->descriptions->first()->text), 0, 32) }}...
            </div>
            <a href="{{ URL::to('noticias/ver/'.$a->article->slugs->first()->text) }}" class="blue-grey-text text-darken-3 read-more" title="{{ $a->article->titles->first()->text }}">
                {{ Lang::get('lang.read_more') }}
            </a>
        </li>
    @endforeach
    @foreach($mostLiked as $a)
        <li class="collection-item hoverable pl-3">
            <h3 class="truncate card-title mb-0">{{ $a->article->titles->first()->text }}</h3>
            <div class="side-text">
                {{ substr(strip_tags($a->article->descriptions->first()->text), 0, 32) }}...
            </div>
            <a href="{{ URL::to('noticias/ver/'.$a->article->slugs->first()->text) }}" class="blue-grey-text text-darken-3 read-more read-more" title="{{ $a->article->titles->first()->text }}">
                {{ Lang::get('lang.read_more') }}
            </a>
        </li>
    @endforeach
</ul>