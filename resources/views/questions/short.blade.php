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
                        <span class="svg-icon_level svg-icon_level-3">
                            <svg class="svg-icon" width="51" height="32" viewBox="0 0 51 32">
                                <path d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z"></path></svg>
                        </span>
                      <span class="question__complexity-text">Средний</span>
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
                            {{ $question->subscribers()->count() }}
                            {{ trans_choice('questions.subscribers', $question->subscribers()->count()) }}
                        </span>
                    </li>
                    <li class="inline-list__item inline-list__item_bullet">
                        <time class="question__date question__date_publish" pubdate=""
                              title="Дата публикации: {{ $question->created_at->format('d M. Y') }}, в {{ $question->created_at->format('H:m') }}"
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
