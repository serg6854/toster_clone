@extends('base')

@section('content')
    <div class='page__body'>
        @include('questions.full')

        <div class="section section_subscribers" id="question_subscribers">
            <header class="section-header">
                <strong class="section-header__title">
                    Подписчики вопроса
                    <span class="section-header__counter">{{ $question->subscribers()->count() }}</span>
                </strong>

                <a class="section-header__link_all" href="{{ route('question.show', $question)  }}">
                    К ответам
                    <span class="unvisible_mobile">на вопрос</span>
                    ({{ $question->answers()->count() }})
                </a>
            </header>

            <ul class="content-list content-list_cards-users">
                @foreach($question->subscribers as $subscriber)
                    <li class="content-list__item">
                        <div class="card" itemscope="" itemtype="http://schema.org/Person">
                            <div class="card__head card__head_user">
                                <a class="card__head-image card__head-image_user"
                                   href="{{ route('profile', $subscriber) }}">
                                    <svg class="icon_userpic" viewBox="0 0 32 32">
                                        <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_userpic"></use>
                                    </svg>
                                </a>
                                <h2 class="card__head-title">
                                    <a href="{{ route('profile', $subscriber) }}" itemprop="url">
                                        <meta itemprop="name" content="{{ $subscriber }}">
                                        {{ $subscriber }}
                                    </a>
                                </h2>
                            </div>

                            <div class="card__stats">
                                <ul class="inline-list inline-list_card">
                                    <li class="inline-list__item inline-list__item_bullet">
                                        <a href="{{ route('profile.questions', $subscriber) }}" class="card__stats-counter"
                                           title="Ответов: {{ $subscriber->answers()->count() }}">
                                            <meta itemprop="interactionCount" content="{{ $subscriber->answers()->count() }} answers">
                                            {{ $subscriber->answers()->count() }} ответов
                                        </a>
                                    </li>
                                    <li class="inline-list__item inline-list__item_bullet">
                                      <span class="card__stats-counter card__stats-counter_zero">
                                        {{ $subscriber->questions()->count() }} вопросов
                                      </span>
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
                @endforeach
            </ul>
        </div>
    </div>
@endsection
