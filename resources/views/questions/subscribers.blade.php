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
                    @include('users._item', ['user' => $subscriber])
                @endforeach
            </ul>
        </div>
    </div>
@endsection
