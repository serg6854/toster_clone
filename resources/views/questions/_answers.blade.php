<div class="question__answers-count {{ $question->hasSolutions() ? 'question__answers_has-solution' : '' }}">
    <a class="mini-counter" href="{{ route('question.show', $question) }}#answers"
       title="Количество ответов на вопрос" role="lazy_anchor">
        <div class="mini-counter__count mini-counter__count_grey">
            @if($question->hasSolutions())
            <svg class="icon_svg icon_check" viewBox="0 0 45 32">
                <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_check"></use>
            </svg>
            @endif

            {{ $answersCount }}
        </div>
        <div class="mini-counter__value">
            ответов
        </div>
    </a>
</div>
