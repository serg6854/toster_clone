<a class="question__tags-image" href="{{ route('tag.show', $tag) }}">
    <img class="tag__image tag__image_bg"
         src="https://habrastorage.org/r/w32/webt/5b/53/d5/5b53d5517cb34636505650.png"
         alt="{{ $tag->slug }}">
</a>

<ul class="{{ $class ?? 'tags-list tags-list_short' }}">
    @empty($all)
        @if($question->tags->count() > 1)
            <li class="tags-list__item tags-list__item_more">
                +{{ $question->tags->count() - 1 }} ещё
            </li>
        @endif
    @else
        @foreach($question->tags as $tag)
            <li class="tags-list__item tag_{{ $tag->id }} @if($tag->isSubscribed()) subscribed @endif"
                data-tagname="{{ $tag->title }}">
                <a href="{{ route('tag.show', $tag) }}">{{ $tag->title }} </a>
            </li>
        @endforeach
    @endempty
</ul>
