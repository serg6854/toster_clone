<div class="question-head_subscribers">
    <ul class="subscribers-list subscribers-list_short">
        @foreach($question->subscribers->take(5) as $subscriber)
            <li class="subscribers-list__item" title="lagudal подписан">
                <a class="subscribers-list__user-avatar" href="{{ route('profile', $subscriber) }}">
                    <svg class="icon_userpic" viewBox="0 0 32 32">
                        <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_userpic"></use>
                    </svg>
                </a>
            </li>
        @endforeach

        @if($question->subscribers->take(5)->count() < $question->subscribers_count)
        <li class="subscribers-list__item subscribers-list__item_more" title="Все подписчики на вопрос">
            <a role="link_subscribers"
               href="{{ route('question.subscribers', ['question_id' => $question->id]) }}#question_subscribers">
                <svg class="icon_svg icon_dots" viewBox="0 0 131 32">
                    <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_dots"></use>
                </svg>
            </a>
        </li>
        @endif
    </ul>
</div>
