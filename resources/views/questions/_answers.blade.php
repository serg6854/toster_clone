<div class="question__answers-count ">
    <a class="mini-counter" href="https://toster.ru/q/599207#answers"
       title="Количество ответов на вопрос" role="lazy_anchor">
        <div class="mini-counter__count mini-counter__count_grey">
            {{ $question->answers()->count() }}
        </div>
        <div class="mini-counter__value">
            ответов
        </div>
    </a>
</div>
