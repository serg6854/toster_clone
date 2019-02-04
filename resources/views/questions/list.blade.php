@empty($questions->count())
    <div class="empty-block">
        <div class="empty-block__inner">
            <h3 class="empty-block__title icon_empty-questions" role="title_replace">
                Нет вопросов
            </h3>
        </div>
    </div>

@else

    <ul class="content-list" role="content-list">
        @foreach($questions as $question)

            @include('questions.short', ['question' => $question])

        @endforeach
    </ul>

    {{ $questions->links() }}
@endif

