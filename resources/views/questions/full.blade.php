<div class="question question_full">
    <div class="question-head">

        @include('authors._summary', ['author' => $question->author])

        @include('questions._subscribers', ['subscribers' => $question->subscribers])
    </div>

    <div class="question__tags">
        <a class="question__tags-image" href="https://toster.ru/tag/javascript">
            <img class="tag__image tag__image_bg"
                 src="https://habrastorage.org/r/w32/webt/59/cc/76/59cc7600c78a2239379574.jpeg"
                 alt="javascript">
        </a>
        <ul class="tags-list">
            <li class="tags-list__item  tag_357" data-tagname="javascript">
                <a href="https://toster.ru/tag/javascript">JavaScript </a>
            </li>
        </ul>
    </div>

    <h1 class="question__title" itemprop="name ">{{ $question->title }}</h1>

    <div class="question__body">
        <div class="question__text js-question-text" itemprop="text description">
            {{ $question->body }}
        </div>

        <ul class="question__attrs inline-list">
            <li class="inline-list__item inline-list__item_bullet">
                <span class="question__pub-date">
                    Вопрос задан
                    <time pubdate="" itemprop="dateCreated" datetime="2019-01-29 10:56:36"
                          title="Дата публикации: 29 янв. 2019, в 10:56">
                        {{ $question->created_at->diffForHumans() }}
                    </time>
                </span>
            </li>
            <li class="inline-list__item inline-list__item_bullet">
                <span class="question__views-count question__views-count_full">{{ $question->views }} просмотров</span>
            </li>
        </ul>
    </div>

    <div class="question__comments-link">
        <a class="btn btn_link btn_comments-toggle" href="javascript:void(0)" role="auth_popup_trigger" title="Необходимо авторизоваться на сайте" data-value="Чтобы написать комментарий">
            <span>Комментировать</span>
        </a>
    </div>

    <div class="buttons-group buttons-group_question">
        <a class="btn btn_subscribe" href="#" role="auth_popup_trigger"
           title="Подписаться на вопрос"
           data-value="Чтобы получать уведомления о&nbsp;новых ответах на&nbsp;вопрос.">
            Подписаться
            <span class="btn__counter" role="subscribers_count">
                <meta itemprop="interactionCount" content="1 UserSubscriptions">
                {{ $question->subscribers()->count() }}
            </span>
        </a>

        <span class="btn btn_outline_grey btn_complexity" title="Проголосовало: 1" disabled="true">
            <span class="svg-icon_level svg-icon_level-4">
                <svg class="svg-icon" width="51" height="32" viewBox="0 0 51 32"><path d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z"></path>
                </svg>
            </span>
          Сложный
        </span>

        <a class="btn btn_link btn_comments-toggle" href="javascript:void(0)" role="auth_popup_trigger" title="Необходимо авторизоваться на сайте" data-value="Чтобы написать комментарий">
            <span>Комментировать</span>
        </a>
        <div class="dropdown dropdown_share" role="dropdown">
            <button class="btn btn_share" role="dropdown_trigger" data-toggle="dropdown" type="button" title=" Поделиться вопросом">
                <svg class="icon_svg icon_sharing" viewBox="0 0 32 32">
                    <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_sharing"></use>
                </svg>
            </button>
            <div class="dropdown__menu">
                <ul class="menu menu_dropdown">
                    <li class="menu__item">
                        <a class="menu__item-link link_fb" href="https://www.facebook.com/sharer/sharer.php?u=https://toster.ru/q/599276" title="Опубликовать ссылку в Facebook" onclick="window.open(this.href, 'Опубликовать ссылку в Facebook', 'width=640,height=436,toolbar=0,status=0'); ga('send', 'social', 'facebook', 'share', 'https://toster.ru/q/599276'); return false" target="_blank">
                            Facebook
                        </a>
                    </li>
                    <li class="menu__item menu__item">
                        <a class="menu__item-link link_vk" href="http://vk.com/share.php?url=https://toster.ru/q/599276" title="Опубликовать ссылку во ВКонтакте" onclick="window.open(this.href, 'Опубликовать ссылку во Вконтакте', 'width=800,height=300'); pages.clearCache(this.href); ga('send', 'social' 'vkontakte', 'share', 'https://toster.ru/q/599276'); return false" target="_blank">
                            Вконтакте
                        </a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__item-link link_tw" href="http://twitter.com/intent/tweet?text=Александр спрашивает «%D0%9A%D0%B0%D0%BA+%D1%81%D1%87%D0%B8%D1%82%D0%B0%D1%82%D1%8C+%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D0%B5+%D1%81+USB+%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%B0+%D0%B2+%D0%B1%D1%80%D0%B0%D1%83%D0%B7%D0%B5%D1%80%3F» https://toster.ru/q/599276+via+@toster_ru+%23toster" onclick="ga('send', 'social', 'twitter', 'tweet', 'https://toster.ru/q/599276');" title="Опубликовать ссылку в Twitter" target="_blank">
                            Twitter
                        </a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__item-link link_gp" href="https://plus.google.com/share?url=https://toster.ru/q/599276" onclick="window.open(this.href, 'Опубликовать ссылку в Google Plus', 'width=800,height=300'); ga('send', 'social', 'gplus', 'share', 'https://toster.ru/q/599276'); return false" target="_blank">
                            Google
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="question__comments hidden" role="question_comments">
        <ul class="content-list content-list_comments empty" role="question_comments_list">
        </ul>
    </div>
</div>
