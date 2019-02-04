<li class="content-list__item">
    <div class="card" itemscope="" itemtype="http://schema.org/Person">
        <div class="card__head card__head_user">
            <a class="card__head-image card__head-image_user"
               href="{{ route('profile', $user) }}">
                <svg class="icon_userpic" viewBox="0 0 32 32">
                    <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_userpic"></use>
                </svg>
            </a>
            <h2 class="card__head-title">
                <a href="{{ route('profile', $user) }}" itemprop="url">
                    <meta itemprop="name" content="{{ $user }}">
                    {{ $user }}
                </a>
            </h2>
        </div>

        <div class="card__stats">
            <ul class="inline-list inline-list_card">
                <li class="inline-list__item inline-list__item_bullet">
                    <a href="{{ route('profile.answers', $user) }}" class="card__stats-counter"
                       title="Ответов: {{ $user->answers_count }}">
                        <meta itemprop="interactionCount" content="{{ $user->answers_count }} answers">
                        {{ $user->answers_count }} ответов
                    </a>
                </li>

                <li class="inline-list__item inline-list__item_bullet">
                    @empty($user->questions()->count())
                        <span class="card__stats-counter card__stats-counter_zero">
                            0 вопросов
                        </span>
                    @else
                        <a href="{{ route('profile.questions', $user) }}" class="card__stats-counter"
                           title="Вопросов: {{ $user->questions()->count() }}">
                            <meta itemprop="interactionCount" content="{{ $user->questions()->count() }} questions">
                            {{ $user->questions()->count() }} вопросов
                        </a>
                    @endempty
                </li>
            </ul>
        </div>

        <div class="card__rate">
            <strong>4</strong>
            Общий вклад
            <div class="progress" data-progress="0.1">
                <div class="progress__bar" style="width: 0.178px;"></div>
            </div>
        </div>
    </div>
</li>
