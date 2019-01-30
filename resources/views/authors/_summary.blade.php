<div class="user-summary " itemprop="author creator" itemscope="" itemtype="http://schema.org/Person">
    @include('users._avatar', ['user' => $author])

    <div class="user-summary__desc">
        <a class="user-summary__name" href="{{ route('profile', $author) }}" itemprop="url">
            <meta itemprop="name" content="{{ $author }}">{{ $author }}</a>
        <span class="user-summary__nickname">
            <meta itemprop="alternateName" content="{{ $author->nickname }}">
            {{ '@' . $author->nickname }}
        </span>

        @if($author->about)
        <div class="user-summary__about" itemprop="description">
            {{ $author->about }}
        </div>
        @endif
    </div>
</div>
