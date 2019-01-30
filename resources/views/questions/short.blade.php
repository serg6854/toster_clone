<li class="content-list__item" role="content-list_item">
    <div class="question question_short">
        <div class="question__content">
            <div class="question__content_fluid">
                <div class="question__tags">
                    <a class="question__tags-image" href="https://toster.ru/tag/mysql">
                        <img class="tag__image tag__image_bg"
                             src="https://habrastorage.org/r/w32/webt/5b/53/d5/5b53d5517cb34636505650.png"
                             alt="mysql">
                    </a>

                    <ul class="tags-list tags-list_short">
                        <li class="tags-list__item  tag_306">
                            <a href="https://toster.ru/tag/mysql">MySQL</a>
                        </li>
                        <li class="tags-list__item tags-list__item_more">
                            +2 ещё
                        </li>
                    </ul>

                    <span class="question__complexity">
                        @include('questions._complexity', ['complexity' => $question->complexity])
                    </span>
                </div>

                <h2 class="question__title">
                    <a class="question__title-link question__title-link_list"
                       href="{{ route('question.show', $question) }}">
                        {{ $question->title }}
                    </a>
                </h2>

                <ul class="question__attrs inline-list">
                    <li class="inline-list__item inline-list__item_bullet">
                        <span class="question__views-count" title="Количество подписавшихся на вопрос">
                            {{ $question->subscribers_count }}
                            {{ trans_choice('questions.subscribers', $question->subscribers_count) }}
                        </span>
                    </li>
                    <li class="inline-list__item inline-list__item_bullet">
                        <time class="question__date question__date_publish" pubdate=""
                              title="Дата публикации: {{ $question->created_at->format('d M. Y') }}, в {{ $question->created_at->format('H:i') }}"
                              datetime="{{ $question->created_at->format('Y-m-d H:m:i') }}">
                            {{ $question->created_at->diffForHumans() }}
                        </time>
                    </li>

                    <li class="inline-list__item inline-list__item_bullet">
                        @include('questions._views', ['views' => $question->views])
                    </li>
                </ul>
            </div>
        </div>

        @include('questions._answers', ['answers' => $question->answers()->count()])
    </div>
</li>
