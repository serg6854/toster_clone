<li class="content-list__item" role="content-list_item">
    <div class="question question_short">
        <div class="question__content">
            <div class="question__content_fluid">

                <div class='question__tags'>
                    @php($tag = $question->tags->first())
                    <a class="question__tags-image" href="{{ route('tag.show', $tag) }}">
                        <img class="tag__image tag__image_bg"
                             src="https://habrastorage.org/r/w32/files/373/e8b/dd3/373e8bdd3cb644d3bbeba47d34d1876d.png"
                             alt="php">
                    </a>
                    <ul class="tags-list tags-list_short">
                        <li class="tags-list__item tag_{{ $tag->id }} @if($tag->isSubscribed()) subscribed @endif">
                            <a href="{{ route('tag.show', $tag) }}">
                                {{ $tag->title }}
                            </a>
                        </li>

                        @if($question->tags->count() >= 2)
                        <li class="tags-list__item tags-list__item_more">
                            +{{ $question->tags->slice(1)->count() }} ещё
                        </li>
                        @endif
                    </ul>

                    @include('questions._complexity', ['complexity' => $question->complexity])
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

        @include('questions._answers', ['answersCount' => $question->answers_count])
    </div>
</li>
