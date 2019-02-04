<div class="content-list__item" role="answer_item " id="answer_item_{{ $answer->id }}">

    @if(!empty($withQuestion))
        <h2 class="question__title">
            <a class="question__title-link"
               href="{{ route('question.show', $answer->question) }}#answer_{{ $answer->id }}">
                {{ $answer->question->title }}
            </a>
        </h2>
    @endif

    <div class="answer_wrapper " id="answer_{{ $answer->id }}" role="toggle_delete_answer"
         itemprop="suggestedAnswer " itemscope="" itemtype="http://schema.org/Answer">
        <div class="answer " data-created_at="{{ $answer->created_at->timestamp }}">
            <div class="answer__header">

                @include('authors._summary', ['author' => $answer->author])

            </div>

            <div class="answer__body">
                <div class="answer__body_inner">
                    <div class="answer__text js-answer-text" itemprop="text">
                        {{ $answer->body }}
                    </div>

                    <div class="answer__date">
                        Ответ написан
                        <meta itemprop="url" content="https://toster.ru/answer?answer_id=1336497#answers_list_answer">
                        <a class="date" href="https://toster.ru/answer?answer_id=1336497#answers_list_answer">
                            <time itemprop="dateCreated" datetime="2019-01-29 11:03:25"
                                  title="Дата публикации: 29 янв. 2019, в 11:03">
                                {{ $answer->created_at->diffForHumans() }}
                            </time>
                        </a>
                    </div>

                    <div class="answer__comments-link" role="mobile_answers_link">
                        <a class="btn btn_link btn_comments-toggle"
                           href="https://toster.ru/answer?answer_id=1336497#comments_list_1336497"
                           id="reply_answer_comment_link_1336497" title="Написать комментарий"
                           role="toggle_answer_comments">
                            <span>
                                <meta itemprop="interactionCount" content="1 Comment">
                                <strong>1</strong> комментарий
                            </span>
                        </a>
                    </div>
                </div>
                <svg class="icon_svg icon_check_answer" viewBox="0 0 45 32">
                    <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_check"></use>
                </svg>
            </div>
        </div>

        <div class="buttons-group buttons-group_answer" role="desktop_answers_link">
            <form action="{{ route('answer.solution.mark', $answer) }}" method='POST' class='sidebar-block__inner'>
                @csrf

                <button class="btn btn_solution @if($answer->isSolution()) btn_active @endif"
                   type='submit'
                   role="auth_popup_trigger"
                   title="Необходимо авторизоваться на сайте">
                    {{ $answer->isSolution() ? 'Решение' : 'Отметить решением' }}
                </button>
            </form>

            <a class="btn btn_like" href="javascript:void(0);" role="auth_popup_trigger"
               title="Необходимо авторизоваться на сайте"
               data-value="Чтобы поблагодарить автора ответа.">
                Нравится
                <meta itemprop="upvoteCount" content="2">
                <span class="btn__counter" role="likes_count">2</span>
            </a>

            <a class="btn btn_link btn_comments-toggle"
               href="https://toster.ru/answer?answer_id=1336497#comments_list_1336497"
               id="reply_answer_comment_link_1336497" title="Написать комментарий"
               role="toggle_answer_comments">
                <span>
                    <meta itemprop="interactionCount" content="1 Comment">
                    <strong>1</strong> комментарий
                </span>
            </a>
        </div>
        @include('comments.list')
    </div>
</div>
