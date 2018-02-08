<ul class="collection news mt-0">
    @if(count($mostVisited) > 0)
        @foreach($mostVisited as $a)
            <li class="collection-item hoverable pl-3 pt-0">
                <h3 class="truncate card-title mb-0 mt-1">{{ $a->article->titles->first()->text }}</h3>
                <div class="side-text">
                    {{ substr(strip_tags($a->article->descriptions->first()->text), 0, 32) }}...
                </div>
                <a href="{{ URL::to('noticias/ver/'.$a->article->slugs->first()->text) }}" class="blue-grey-text text-darken-3 read-more" title="{{ $a->article->titles->first()->text }}">
                    {{ Lang::get('lang.read_more') }}
                </a>
            </li>
        @endforeach
    @endif
    @if(count($mostLiked) > 0)
        @foreach($mostLiked as $a)
            <li class="collection-item hoverable pl-3 pt-0">
                <h3 class="truncate card-title mb-0 mt-1">{{ $a->article->titles->first()->text }}</h3>
                <div class="side-text">
                    {{ substr(strip_tags($a->article->descriptions->first()->text), 0, 32) }}...
                </div>
                <a href="{{ URL::to('noticias/ver/'.$a->article->slugs->first()->text) }}" class="blue-grey-text text-darken-3 read-more read-more" title="{{ $a->article->titles->first()->text }}">
                    {{ Lang::get('lang.read_more') }}
                </a>
            </li>
        @endforeach
    @endif
    @if(isset($related))
        @foreach($related as $a)
            <li class="collection-item hoverable pl-3 pt-0">
                <h3 class="truncate card-title mb-0 mt-1">{{ $a->titles->first()->text }}</h3>
                <div class="side-text">
                    {{ substr(strip_tags($a->descriptions->first()->text), 0, 32) }}...
                </div>
                <a href="{{ URL::to('noticias/ver/'.$a->slugs->first()->text) }}" class="blue-grey-text text-darken-3 read-more read-more" title="{{ $a->titles->first()->text }}">
                    {{ Lang::get('lang.read_more') }}
                </a>
            </li>
        @endforeach
    @endif
</ul>