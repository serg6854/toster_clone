<div class="user-summary " itemprop="author creator" itemscope="" itemtype="http://schema.org/Person">
    <a class="user-summary__avatar" href="https://toster.ru/user/Vlad_IT">
        <meta itemprop="image"
              content="https://habrastorage.org/files/554/9de/7de/5549de7deb00496e8bac930e87467f1a.png">
        <img src="https://habrastorage.org/r/w60/files/554/9de/7de/5549de7deb00496e8bac930e87467f1a.png" alt="Vlad_IT">
    </a>
    <div class="user-summary__desc">
        <a class="user-summary__name" href="{{ route('profile', $author) }}" itemprop="url">
            <meta itemprop="name" content="{{ $author }}">{{ $author }}</a>
        <span class="user-summary__nickname">
            <meta itemprop="alternateName" content="{{ $author->nickname }}">
            {{ $author->nickname }}
        </span>

        <div class="user-summary__about" itemprop="description">
            Front-end разработчик
        </div>
    </div>
</div>
