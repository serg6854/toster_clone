<div class="content-list__item" role="answer_item " id="answer_item_{{ $answer->id }}">
    <div class="answer_wrapper " id="answer_1336497" role="toggle_delete_answer" itemprop="suggestedAnswer " itemscope="" itemtype="http://schema.org/Answer">
        <div class="answer " data-created_at="1548749005">
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
                            <time itemprop="dateCreated" datetime="2019-01-29 11:03:25" title="Дата публикации: 29 янв. 2019, в 11:03">
                                {{ $answer->created_at->diffForHumans() }}
                            </time>
                        </a>
                    </div>
                    <div class="answer__comments-link" role="mobile_answers_link">
                        <a class="btn btn_link btn_comments-toggle" href="https://toster.ru/answer?answer_id=1336497#comments_list_1336497" id="reply_answer_comment_link_1336497" title="Написать комментарий" role="toggle_answer_comments">
    <span>
              <meta itemprop="interactionCount" content="1 Comment">
        <strong>
          1        </strong>
        комментарий          </span>
                        </a>
                    </div>
                </div>
                <svg class="icon_svg icon_check_answer" viewBox="0 0 45 32">
                    <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_check"></use>
                </svg>
            </div>
        </div>
        <div class="buttons-group buttons-group_answer" role="desktop_answers_link">
            <a class="btn btn_like" href="javascript:void(0);" role="auth_popup_trigger" title="Необходимо авторизоваться на сайте" data-value="Чтобы поблагодарить автора ответа.">
                Нравится
                <meta itemprop="upvoteCount" content="2">
                <span class="btn__counter" role="likes_count">2</span>  </a>
            <a class="btn btn_link btn_comments-toggle" href="https://toster.ru/answer?answer_id=1336497#comments_list_1336497" id="reply_answer_comment_link_1336497" title="Написать комментарий" role="toggle_answer_comments">
    <span>
              <meta itemprop="interactionCount" content="1 Comment">
        <strong>
          1        </strong>
        комментарий          </span>
            </a>
            <div class="dropdown dropdown_share" role="dropdown">
                <button class="btn btn_share" role="dropdown_trigger" data-toggle="dropdown" type="button" title=" Поделиться ответом">
                    <svg class="icon_svg icon_sharing" viewBox="0 0 32 32">
                        <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_sharing"></use>
                    </svg>
                </button>
                <div class="dropdown__menu">
                    <ul class="menu menu_dropdown">
                        <li class="menu__item">
                            <a class="menu__item-link link_fb" href="https://www.facebook.com/sharer/sharer.php?u=https://toster.ru/answer?answer_id=1336497" title="Опубликовать ссылку в Facebook" onclick="window.open(this.href, 'Опубликовать ссылку в Facebook', 'width=640,height=436,toolbar=0,status=0'); ga('send', 'social', 'facebook', 'share', 'https://toster.ru/answer?answer_id=1336497'); return false" target="_blank">
                                Facebook
                            </a>
                        </li>
                        <li class="menu__item menu__item">
                            <a class="menu__item-link link_vk" href="http://vk.com/share.php?url=https://toster.ru/answer?answer_id=1336497" title="Опубликовать ссылку во ВКонтакте" onclick="window.open(this.href, 'Опубликовать ссылку во Вконтакте', 'width=800,height=300'); pages.clearCache(this.href); ga('send', 'social' 'vkontakte', 'share', 'https://toster.ru/answer?answer_id=1336497'); return false" target="_blank">
                                Вконтакте
                            </a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__item-link link_tw" href="http://twitter.com/intent/tweet?text=Владимир Проскурин ответил на вопрос «%D0%9A%D0%B0%D0%BA+%D1%81%D1%87%D0%B8%D1%82%D0%B0%D1%82%D1%8C+%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D0%B5+%D1%81+USB+%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%B0+%D0%B2+%D0%B1%D1%80%D0%B0%D1%83%D0%B7%D0%B5%D1%80%3F» https://toster.ru/answer?answer_id=1336497+via+@toster_ru+%23toster" onclick="ga('send', 'social', 'twitter', 'tweet', 'https://toster.ru/answer?answer_id=1336497');" title="Опубликовать ссылку в Twitter" target="_blank">
                                Twitter
                            </a>
                        </li>
                        <li class="menu__item">
                            <a class="menu__item-link link_gp" href="https://plus.google.com/share?url=https://toster.ru/answer?answer_id=1336497" onclick="window.open(this.href, 'Опубликовать ссылку в Google Plus', 'width=800,height=300'); ga('send', 'social', 'gplus', 'share', 'https://toster.ru/answer?answer_id=1336497'); return false" target="_blank">
                                Google
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="answer__comments hidden" id="answer_comments_1336497" role="answer_comments">
            <ul class="content-list content-list_comments " role="answer_comments_list" id="comments_list_1336497" itemscope="" itemtype="http://schema.org/Comment">
                <li class="content-list__item" role="comments_item">
                    <div class="comment " id="comment_1825355" role="comment toggle_delete_comment" itemscope="" itemtype="http://schema.org/Comment">
                        <div class="comment__header">
                            <div class="user-summary user-summary_comment" itemprop="author creator" itemscope="" itemtype="http://schema.org/Person">
                                <a class="user-summary__avatar" href="https://toster.ru/user/neokortex">
                                    <meta itemprop="image" content="//habrastorage.org/getpro/toster/5f395472/9739/4738/5f395472-9739-4738-aebb-ee7c94a5dab5/benderforwebsite.png">
                                    <img src="https://habrastorage.org/r/w60/getpro/toster/5f395472/9739/4738/5f395472-9739-4738-aebb-ee7c94a5dab5/benderforwebsite.png" alt="neokortex">
                                </a>
                                <div class="user-summary__desc">
                                    <a class="user-summary__name" href="https://toster.ru/user/neokortex" itemprop="url"><meta itemprop="name" content="Александр">Александр</a>
                                    <span class="user-summary__nickname">
      <meta itemprop="alternateName" content="neokortex">
      @neokortex                    <span class="author_mark">Автор вопроса</span>
                </span>
                                </div>
                            </div>
                        </div>
                        <div class="comment__body">
                            <div class="comment__body_inner">
                                <div class="comment__text js-comment-text" itemprop="about text">
                                    а есть какие-то готовые решения универсальные? и как это можно назвать? чтобы хотя-бы поисковый вопрос сформировать :)          </div>
                                <div class="comment__date">
                                    Написано
                                    <a class="date date_comment" href="https://toster.ru/q/599276#comment_1825355">
                                        <time title="Дата публикации: 29 янв. 2019, в 11:05" itemprop="dateCreated" datetime="2019-01-29 11:05:34">
                                            6 часов назад              </time>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</div>