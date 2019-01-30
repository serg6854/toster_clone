<a class="{{ $class ?? 'user-summary__avatar' }}" href="{{ route('profile', $user) }}">
    @empty($user->avatar)
        <svg class="icon_userpic" viewBox="0 0 32 32">
            <use xlink:href="http://toster.test/images/sprite_0.1.svg#icon_userpic"></use>
        </svg>
    @else
        <meta itemprop="image"
              content="https://habrastorage.org/files/554/9de/7de/5549de7deb00496e8bac930e87467f1a.png">
        <img src="https://habrastorage.org/r/w60/files/554/9de/7de/5549de7deb00496e8bac930e87467f1a.png" alt="{{ $user }}">
    @endempty
</a>
