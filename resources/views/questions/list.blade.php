@empty($questions)

    <div class="empty-block">
        <div class="empty-block__inner">
            <h3 class="empty-block__title icon_empty-questions" role="title_replace">
                Нет вопросов
            </h3>
            <div class="empty-block__description" role="desc_replace">
                Пользователь не задал ни одного вопроса.
            </div>
        </div>
    </div>

@else
    <ul class="content-list" role="content-list">
        @foreach($questions as $question)

            @include('questions.short', ['question' => $question])

        @endforeach
    </ul>
@endif

{{ $questions->links() }}
