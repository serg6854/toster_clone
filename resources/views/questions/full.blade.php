<div class="question question_full">
    <div class="question-head">

        @include('authors._summary', ['author' => $question->author])

        @includeWhen($question->subscribers_count >= 1, 'questions._subscribers', ['subscribers' => $question->subscribers])
    </div>

    <div class="question__tags">
        <a class="question__tags-image" href="https://toster.ru/tag/laravel">
            <img class="tag__image tag__image_bg"
                 src="https://habrastorage.org/r/w32/files/5b6/200/e96/5b6200e965f048568eec7d4724705b85.png"
                 alt="laravel">
        </a>

        <ul class="tags-list">
            @foreach($question->tags as $tag)
                <li class="tags-list__item tag_{{ $tag->id }} @if($tag->isSubscribed()) subscribed @endif">
                    <a href="{{ route('tag.show', $tag) }}">
                        {{ $tag->title }}
                    </a>
                </li>
            @endforeach
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
        <a class="btn btn_link btn_comments-toggle" href="javascript:void(0)" role="auth_popup_trigger"
           title="Необходимо авторизоваться на сайте" data-value="Чтобы написать комментарий">
            <span>Комментировать</span>
        </a>
    </div>

    <div class="buttons-group buttons-group_question">
        <form action='{{ route('question.subscribe', $question) }}' method='POST' style='display: inline-block'>
            @csrf
            @if($question->isSubscribed())
                @method('DELETE')
            @endif

            <button type='submit'
                    class="btn btn_subscribe @if($question->isSubscribed()) btn_active @endif"
                    role="auth_popup_trigger"
                    title="Подписаться на вопрос"
                    data-value="Чтобы получать уведомления о&nbsp;новых ответах на&nbsp;вопрос.">
                Подписаться
                <span class="btn__counter" role="subscribers_count">
                    <meta itemprop="interactionCount" content="1 UserSubscriptions">
                    {{ $question->subscribers_count }}
                </span>
            </button>
        </form>

        <span class="btn btn_outline_grey btn_complexity" title="Проголосовало: 1" disabled="true">
            @include('questions._complexity', ['complexity' => $question->complexity])
        </span>

        <a class="btn btn_link btn_comments-toggle" href="javascript:void(0)" role="auth_popup_trigger"
           title="Необходимо авторизоваться на сайте" data-value="Чтобы написать комментарий">
            <span>Комментировать</span>
        </a>

        <div class="dropdown dropdown_share" role="dropdown">
            <button class="btn btn_share" role="dropdown_trigger" data-toggle="dropdown" type="button"
                    title=" Поделиться вопросом">
                <svg class="icon_svg icon_sharing" viewBox="0 0 32 32">
                    <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_sharing"></use>
                </svg>
            </button>
            <div class="dropdown__menu">
                <ul class="menu menu_dropdown">
                    <li class="menu__item">
                        <a class="menu__item-link link_fb"
                           href="https://www.facebook.com/sharer/sharer.php?u=https://toster.ru/q/599276"
                           title="Опубликовать ссылку в Facebook"
                           onclick="window.open(this.href, 'Опубликовать ссылку в Facebook', 'width=640,height=436,toolbar=0,status=0'); ga('send', 'social', 'facebook', 'share', 'https://toster.ru/q/599276'); return false"
                           target="_blank">
                            Facebook
                        </a>
                    </li>
                    <li class="menu__item menu__item">
                        <a class="menu__item-link link_vk" href="http://vk.com/share.php?url=https://toster.ru/q/599276"
                           title="Опубликовать ссылку во ВКонтакте"
                           onclick="window.open(this.href, 'Опубликовать ссылку во Вконтакте', 'width=800,height=300'); pages.clearCache(this.href); ga('send', 'social' 'vkontakte', 'share', 'https://toster.ru/q/599276'); return false"
                           target="_blank">
                            Вконтакте
                        </a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__item-link link_tw"
                           href="http://twitter.com/intent/tweet?text=Александр спрашивает «%D0%9A%D0%B0%D0%BA+%D1%81%D1%87%D0%B8%D1%82%D0%B0%D1%82%D1%8C+%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D0%B5+%D1%81+USB+%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%B0+%D0%B2+%D0%B1%D1%80%D0%B0%D1%83%D0%B7%D0%B5%D1%80%3F» https://toster.ru/q/599276+via+@toster_ru+%23toster"
                           onclick="ga('send', 'social', 'twitter', 'tweet', 'https://toster.ru/q/599276');"
                           title="Опубликовать ссылку в Twitter" target="_blank">
                            Twitter
                        </a>
                    </li>
                    <li class="menu__item">
                        <a class="menu__item-link link_gp"
                           href="https://plus.google.com/share?url=https://toster.ru/q/599276"
                           onclick="window.open(this.href, 'Опубликовать ссылку в Google Plus', 'width=800,height=300'); ga('send', 'social', 'gplus', 'share', 'https://toster.ru/q/599276'); return false"
                           target="_blank">
                            Google
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>

    <div class="question__comments " role="question_comments">
        <ul class="content-list content-list_comments @empty($question->comments->count()) empty @endif">
            @foreach($question->comments as $comment)
                <li class="content-list__item" role="comments_item">
                    <div class="comment " id="comment_1828709" role="comment toggle_delete_comment" itemscope="" itemtype="http://schema.org/Comment">
                        <div class="comment__header">
                            @include('authors._summary', ['author' => $comment->author])
                        </div>
                        <div class="comment__body">
                            <div class="comment__body_inner">
                                <div class="comment__text js-comment-text" itemprop="about text">
                                    {{ $comment->body }}
                                </div>

                                <div class="comment__date">
                                    Написано
                                    <a class="date date_comment" href="https://toster.ru/q/600697#comment_1828709">
                                        <time title="Дата публикации: 02 февр. 2019, в 16:52" itemprop="dateCreated" datetime="2019-02-02 16:52:29">
                                            {{ $comment->created_at->diffForHumans() }}
                                        </time>
                                    </a>
                                </div>
                            </div>
                        </div>

                        <div class="buttons-group buttons-group_comments">
                            <a class="comment__like link " href="javascript:void(0)" data-like-comment="1828709">
                                Нравится
                            </a>
                            <a class="comment__reply link" href="#mention" data-username="NickProgramm" role="comment_mention_link">
                                Ответить
                            </a>
                            <div class="dropdown dropdown_settings" role="dropdown">
                                <button class="btn btn_more" data-toggle="dropdown" role="dropdown_trigger" type="button" title="Управление комментарием">
                                    <svg class="icon_svg icon_dots" viewBox="0 0 131 32">
                                        <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_dots"></use>
                                    </svg>
                                </button>
                                <div class="dropdown__menu">
                                    <ul class="menu menu_dropdown">
                                        <li class="menu__item">
                                            <a class="menu__item-link" data-comment-abuse="1828709" href="javascript:void(0)" id="abuse_comment_link_1828709" role="comment_abuse_link" title="Пожаловаться на запись">
                                                Пожаловаться
                                            </a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @endforeach

            <li class="content-list__item">
                <div class="comment">
                    <div class="comment__header">
                        @include('authors._summary', ['author' => auth()->user(), 'class' => 'user-summary_comment'])
                    </div>

                    <div class="comment__body">
                        <form class="form form_comments validateble" action="question/clarify" data-remote="true"
                              role="question_comment_form" method="post">
                            <input name="question_id" type="hidden" value="601133">
                            <textarea name='body' id='body' rows='10'></textarea>
                            <div style="clear: both; padding-top: 14px">
                                <button class="btn btn_outline_green"  type="submit">
                                    Отправить
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </li>
        </ul>
    </div>
</div>
