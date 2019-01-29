@extends('base')

@section('content')
    <div class="page__qa-wrapper" itemscope="" itemtype="http://schema.org/QAPage">
        <div class="page__body" id="question_show" itemscope="" itemprop="mainEntity" itemtype="http://schema.org/Question">
            <div class="question question_full">
                <div class="question-head">
                    <div class="user-summary user-summary_question" itemprop="author creator" itemscope="" itemtype="http://schema.org/Person">
                        <a class="user-summary__avatar" href="https://toster.ru/user/neokortex">
                            <meta itemprop="image" content="//habrastorage.org/getpro/toster/5f395472/9739/4738/5f395472-9739-4738-aebb-ee7c94a5dab5/benderforwebsite.png">
                            <img src="https://habrastorage.org/r/w60/getpro/toster/5f395472/9739/4738/5f395472-9739-4738-aebb-ee7c94a5dab5/benderforwebsite.png" alt="neokortex">
                        </a>
                        <div class="user-summary__desc">
                            <a class="user-summary__name" href="https://toster.ru/user/neokortex" itemprop="url"><meta itemprop="name" content="Александр">Александр</a>
                            <span class="user-summary__nickname">
      <meta itemprop="alternateName" content="neokortex">
      @neokortex                </span>
                        </div>
                    </div>
                </div>

                <div class="question__tags">
                    <a class="question__tags-image" href="https://toster.ru/tag/javascript">
                        <img class="tag__image tag__image_bg" src="https://habrastorage.org/r/w32/webt/59/cc/76/59cc7600c78a2239379574.jpeg" alt="javascript">
                    </a>
                    <ul class="tags-list">
                        <li class="tags-list__item  tag_357" data-tagname="javascript">
                            <a href="https://toster.ru/tag/javascript">
                                JavaScript          </a>
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
                    <a class="btn btn_subscribe" href="#" role="auth_popup_trigger" title="Подписаться на вопрос" data-value="Чтобы получать уведомления о&nbsp;новых ответах на&nbsp;вопрос.">
                        Подписаться
                        <span class="btn__counter" role="subscribers_count">
        <meta itemprop="interactionCount" content="1 UserSubscriptions">
        1      </span>
                    </a>
                    <span class="btn btn_outline_grey btn_complexity" title="Проголосовало: 1" disabled="true">
    <span class="svg-icon_level svg-icon_level-4">
      <svg class="svg-icon" width="51" height="32" viewBox="0 0 51 32"><path d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z"></path></svg>
    </span>
          Сложный      </span>
                    <a class="btn btn_link btn_comments-toggle" href="javascript:void(0)" role="auth_popup_trigger" title="Необходимо авторизоваться на сайте" data-value="Чтобы написать комментарий">
                        <span>Комментировать</span>
                    </a>
                    <div class="dropdown dropdown_share" role="dropdown">
                        <button class="btn btn_share" role="dropdown_trigger" data-toggle="dropdown" type="button" title=" Поделиться вопросом">
                            <svg class="icon_svg icon_sharing" viewBox="0 0 32 32">
                                <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_sharing"></use>
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
            <div class="question__additionals">
                <div class="section section_solutions hidden" id="solutions" role="solutions_section">
                    <header class="section-header">
                        <strong class="section-header__title">
                            Решения вопроса          <span class="section-header__counter" role="answers_counter">0</span>
                        </strong>
                    </header>
                    <div class="content-list content-list_answers" id="solutions_list">
                    </div>
                </div>
                <a class="question__invate-expert" href="#" role="auth_popup_trigger" data-value="Чтобы пригласить эксперта, который сможет ответить на вопрос" data-question="599276">
                    Пригласить эксперта
                </a>
                <div class="section section_answers " id="answers" role="answers_section ">
                    <meta itemprop="answerCount" content="3">
                    <header class="section-header">
                        <strong class="section-header__title">
                            Ответы на вопрос          <span class="section-header__counter" role="answers_counter">3</span>
                        </strong>
                    </header>
                    <div class="content-list content-list_answers" id="answers_list">
                        <div class="content-list__item" role="answer_item " id="answer_item_1336497">
                            <div class="answer_wrapper " id="answer_1336497" role="toggle_delete_answer" itemprop="suggestedAnswer " itemscope="" itemtype="http://schema.org/Answer">
                                <div class="answer " data-created_at="1548749005">
                                    <div class="answer__header">
                                        <div class="user-summary " itemprop="author creator" itemscope="" itemtype="http://schema.org/Person">
                                            <a class="user-summary__avatar" href="https://toster.ru/user/Vlad_IT">
                                                <meta itemprop="image" content="https://habrastorage.org/files/554/9de/7de/5549de7deb00496e8bac930e87467f1a.png">
                                                <img src="https://habrastorage.org/r/w60/files/554/9de/7de/5549de7deb00496e8bac930e87467f1a.png" alt="Vlad_IT">
                                            </a>
                                            <div class="user-summary__desc">
                                                <a class="user-summary__name" href="https://toster.ru/user/Vlad_IT" itemprop="url"><meta itemprop="name" content="Владимир Проскурин">Владимир Проскурин</a>
                                                <span class="user-summary__nickname">
      <meta itemprop="alternateName" content="Vlad_IT">
      @Vlad_IT                </span>
                                                <div class="user-summary__about" itemprop="description">
                                                    Front-end разработчик      </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="answer__body">
                                        <div class="answer__body_inner">
                                            <div class="answer__text js-answer-text" itemprop="text">
                                                Браузер не может напрямую обращаться к устройствам, это сделать в целях безопасности. Поэтому вам нужен посредник, например установленная на компьютере программа, которая откроет http сервер или вебсокеты, она будет следить за usb ридером, и отдавать всю инфу вашему скрипту в браузере.      </div>
                                            <div class="answer__date">
                                                Ответ написан
                                                <meta itemprop="url" content="https://toster.ru/answer?answer_id=1336497#answers_list_answer">
                                                <a class="date" href="https://toster.ru/answer?answer_id=1336497#answers_list_answer">
                                                    <time itemprop="dateCreated" datetime="2019-01-29 11:03:25" title="Дата публикации: 29 янв. 2019, в 11:03">
                                                        6 часов назад          </time>
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
                                            <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_check"></use>
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
                                                <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_sharing"></use>
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
                        <div class="content-list__item" role="answer_item " id="answer_item_1336526">
                            <div class="answer_wrapper " id="answer_1336526" role="toggle_delete_answer" itemprop="suggestedAnswer " itemscope="" itemtype="http://schema.org/Answer">
                                <div class="answer " data-created_at="1548751562">
                                    <div class="answer__header">
                                        <div class="user-summary " itemprop="author creator" itemscope="" itemtype="http://schema.org/Person">
                                            <a class="user-summary__avatar" href="https://toster.ru/user/NeiroNx">
                                                <meta itemprop="image" content="//habrastorage.org/files/266/36c/095/26636c09580d4ce1b94a266517736ce9.jpg">
                                                <img src="https://habrastorage.org/r/w60/files/266/36c/095/26636c09580d4ce1b94a266517736ce9.jpg" alt="NeiroNx">
                                            </a>
                                            <div class="user-summary__desc">
                                                <a class="user-summary__name" href="https://toster.ru/user/NeiroNx" itemprop="url"><meta itemprop="name" content="Александр">Александр</a>
                                                <span class="user-summary__nickname">
      <meta itemprop="alternateName" content="NeiroNx">
      @NeiroNx                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="answer__body">
                                        <div class="answer__body_inner">
                                            <div class="answer__text js-answer-text" itemprop="text">
                                                Ну почему не читают описание по собственным ссылкам?<br>
                                                Написано же в инструкции: <i>Работает по интерфейсу USB клавиатуры</i><br>
                                                главное фокус ввода на поле установить и все заполнится.      </div>
                                            <div class="answer__date">
                                                Ответ написан
                                                <meta itemprop="url" content="https://toster.ru/answer?answer_id=1336526#answers_list_answer">
                                                <a class="date" href="https://toster.ru/answer?answer_id=1336526#answers_list_answer">
                                                    <time itemprop="dateCreated" datetime="2019-01-29 11:46:02" title="Дата публикации: 29 янв. 2019, в 11:46">
                                                        5 часов назад          </time>
                                                </a>
                                            </div>
                                            <div class="answer__comments-link" role="mobile_answers_link">
                                                <a class="btn btn_link btn_comments-toggle" href="javascript:void(0)" role="auth_popup_trigger" title="Необходимо авторизоваться на сайте" data-value="Чтобы написать комментарий">
                                                    <span>Комментировать</span>
                                                </a>
                                            </div>
                                        </div>
                                        <svg class="icon_svg icon_check_answer" viewBox="0 0 45 32">
                                            <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_check"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="buttons-group buttons-group_answer" role="desktop_answers_link">
                                    <a class="btn btn_like" href="javascript:void(0);" role="auth_popup_trigger" title="Необходимо авторизоваться на сайте" data-value="Чтобы поблагодарить автора ответа.">
                                        Нравится
                                        <meta itemprop="upvoteCount" content="2">
                                        <span class="btn__counter" role="likes_count">2</span>  </a>
                                    <a class="btn btn_link btn_comments-toggle" href="javascript:void(0)" role="auth_popup_trigger" title="Необходимо авторизоваться на сайте" data-value="Чтобы написать комментарий">
                                        <span>Комментировать</span>
                                    </a>
                                    <div class="dropdown dropdown_share" role="dropdown">
                                        <button class="btn btn_share" role="dropdown_trigger" data-toggle="dropdown" type="button" title=" Поделиться ответом">
                                            <svg class="icon_svg icon_sharing" viewBox="0 0 32 32">
                                                <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_sharing"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown__menu">
                                            <ul class="menu menu_dropdown">
                                                <li class="menu__item">
                                                    <a class="menu__item-link link_fb" href="https://www.facebook.com/sharer/sharer.php?u=https://toster.ru/answer?answer_id=1336526" title="Опубликовать ссылку в Facebook" onclick="window.open(this.href, 'Опубликовать ссылку в Facebook', 'width=640,height=436,toolbar=0,status=0'); ga('send', 'social', 'facebook', 'share', 'https://toster.ru/answer?answer_id=1336526'); return false" target="_blank">
                                                        Facebook
                                                    </a>
                                                </li>
                                                <li class="menu__item menu__item">
                                                    <a class="menu__item-link link_vk" href="http://vk.com/share.php?url=https://toster.ru/answer?answer_id=1336526" title="Опубликовать ссылку во ВКонтакте" onclick="window.open(this.href, 'Опубликовать ссылку во Вконтакте', 'width=800,height=300'); pages.clearCache(this.href); ga('send', 'social' 'vkontakte', 'share', 'https://toster.ru/answer?answer_id=1336526'); return false" target="_blank">
                                                        Вконтакте
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <a class="menu__item-link link_tw" href="http://twitter.com/intent/tweet?text=Александр ответил на вопрос «%D0%9A%D0%B0%D0%BA+%D1%81%D1%87%D0%B8%D1%82%D0%B0%D1%82%D1%8C+%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D0%B5+%D1%81+USB+%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%B0+%D0%B2+%D0%B1%D1%80%D0%B0%D1%83%D0%B7%D0%B5%D1%80%3F» https://toster.ru/answer?answer_id=1336526+via+@toster_ru+%23toster" onclick="ga('send', 'social', 'twitter', 'tweet', 'https://toster.ru/answer?answer_id=1336526');" title="Опубликовать ссылку в Twitter" target="_blank">
                                                        Twitter
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <a class="menu__item-link link_gp" href="https://plus.google.com/share?url=https://toster.ru/answer?answer_id=1336526" onclick="window.open(this.href, 'Опубликовать ссылку в Google Plus', 'width=800,height=300'); ga('send', 'social', 'gplus', 'share', 'https://toster.ru/answer?answer_id=1336526'); return false" target="_blank">
                                                        Google
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="content-list__item" role="answer_item " id="answer_item_1336508">
                            <div class="answer_wrapper " id="answer_1336508" role="toggle_delete_answer" itemprop="suggestedAnswer " itemscope="" itemtype="http://schema.org/Answer">
                                <div class="answer " data-created_at="1548750157">
                                    <div class="answer__header">
                                        <div class="user-summary " itemprop="author creator" itemscope="" itemtype="http://schema.org/Person">
                                            <a class="user-summary__avatar" href="https://toster.ru/user/Casufi">
                                                <meta itemprop="image" content="//habrastorage.org/files/80d/9af/bac/80d9afbacd08462487492dc74ce490bb.png">
                                                <img src="https://habrastorage.org/r/w60/files/80d/9af/bac/80d9afbacd08462487492dc74ce490bb.png" alt="Casufi">
                                            </a>
                                            <div class="user-summary__desc">
                                                <a class="user-summary__name" href="https://toster.ru/user/Casufi" itemprop="url"><meta itemprop="name" content="Владимир">Владимир</a>
                                                <span class="user-summary__nickname">
      <meta itemprop="alternateName" content="Casufi">
      @Casufi                </span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="answer__body">
                                        <div class="answer__body_inner">
                                            <div class="answer__text js-answer-text" itemprop="text">
                                                Насколько я знаю WebUSB работает  только в хроме, если это ентерпрайз проект или песочница и вы можете завязаться на определенную версию браузера, тогда не проблема<br>
                                                <a href="https://developer.mozilla.org/en-US/docs/Web/API/USB" rel="nofollow">https://developer.mozilla.org/en-US/docs/Web/API/USB</a><br>
                                                <a href="https://wicg.github.io/webusb/" rel="nofollow">https://wicg.github.io/webusb/</a><br>
                                                <a href="https://developers.google.com/web/updates/2016/03/access-usb-devices-on-the-web" rel="nofollow">https://developers.google.com/web/updates/2016/03/...</a>      </div>
                                            <div class="answer__date">
                                                Ответ написан
                                                <meta itemprop="url" content="https://toster.ru/answer?answer_id=1336508#answers_list_answer">
                                                <a class="date" href="https://toster.ru/answer?answer_id=1336508#answers_list_answer">
                                                    <time itemprop="dateCreated" datetime="2019-01-29 11:22:37" title="Дата публикации: 29 янв. 2019, в 11:22">
                                                        5 часов назад          </time>
                                                </a>
                                            </div>
                                            <div class="answer__comments-link" role="mobile_answers_link">
                                                <a class="btn btn_link btn_comments-toggle" href="javascript:void(0)" role="auth_popup_trigger" title="Необходимо авторизоваться на сайте" data-value="Чтобы написать комментарий">
                                                    <span>Комментировать</span>
                                                </a>
                                            </div>
                                        </div>
                                        <svg class="icon_svg icon_check_answer" viewBox="0 0 45 32">
                                            <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_check"></use>
                                        </svg>
                                    </div>
                                </div>
                                <div class="buttons-group buttons-group_answer" role="desktop_answers_link">
                                    <a class="btn btn_like" href="javascript:void(0);" role="auth_popup_trigger" title="Необходимо авторизоваться на сайте" data-value="Чтобы поблагодарить автора ответа.">
                                        Нравится
                                        <meta itemprop="upvoteCount" content="1">
                                        <span class="btn__counter" role="likes_count">1</span>  </a>
                                    <a class="btn btn_link btn_comments-toggle" href="javascript:void(0)" role="auth_popup_trigger" title="Необходимо авторизоваться на сайте" data-value="Чтобы написать комментарий">
                                        <span>Комментировать</span>
                                    </a>
                                    <div class="dropdown dropdown_share" role="dropdown">
                                        <button class="btn btn_share" role="dropdown_trigger" data-toggle="dropdown" type="button" title=" Поделиться ответом">
                                            <svg class="icon_svg icon_sharing" viewBox="0 0 32 32">
                                                <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_sharing"></use>
                                            </svg>
                                        </button>
                                        <div class="dropdown__menu">
                                            <ul class="menu menu_dropdown">
                                                <li class="menu__item">
                                                    <a class="menu__item-link link_fb" href="https://www.facebook.com/sharer/sharer.php?u=https://toster.ru/answer?answer_id=1336508" title="Опубликовать ссылку в Facebook" onclick="window.open(this.href, 'Опубликовать ссылку в Facebook', 'width=640,height=436,toolbar=0,status=0'); ga('send', 'social', 'facebook', 'share', 'https://toster.ru/answer?answer_id=1336508'); return false" target="_blank">
                                                        Facebook
                                                    </a>
                                                </li>
                                                <li class="menu__item menu__item">
                                                    <a class="menu__item-link link_vk" href="http://vk.com/share.php?url=https://toster.ru/answer?answer_id=1336508" title="Опубликовать ссылку во ВКонтакте" onclick="window.open(this.href, 'Опубликовать ссылку во Вконтакте', 'width=800,height=300'); pages.clearCache(this.href); ga('send', 'social' 'vkontakte', 'share', 'https://toster.ru/answer?answer_id=1336508'); return false" target="_blank">
                                                        Вконтакте
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <a class="menu__item-link link_tw" href="http://twitter.com/intent/tweet?text=Владимир ответил на вопрос «%D0%9A%D0%B0%D0%BA+%D1%81%D1%87%D0%B8%D1%82%D0%B0%D1%82%D1%8C+%D0%B4%D0%B0%D0%BD%D0%BD%D1%8B%D0%B5+%D1%81+USB+%D1%83%D1%81%D1%82%D1%80%D0%BE%D0%B9%D1%81%D1%82%D0%B2%D0%B0+%D0%B2+%D0%B1%D1%80%D0%B0%D1%83%D0%B7%D0%B5%D1%80%3F» https://toster.ru/answer?answer_id=1336508+via+@toster_ru+%23toster" onclick="ga('send', 'social', 'twitter', 'tweet', 'https://toster.ru/answer?answer_id=1336508');" title="Опубликовать ссылку в Twitter" target="_blank">
                                                        Twitter
                                                    </a>
                                                </li>
                                                <li class="menu__item">
                                                    <a class="menu__item-link link_gp" href="https://plus.google.com/share?url=https://toster.ru/answer?answer_id=1336508" onclick="window.open(this.href, 'Опубликовать ссылку в Google Plus', 'width=800,height=300'); ga('send', 'social', 'gplus', 'share', 'https://toster.ru/answer?answer_id=1336508'); return false" target="_blank">
                                                        Google
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="section section_form-answers" id="answer-form">
                    <header class="section-header">
                        <strong class="section-header__title">
                            Ваш ответ на вопрос      </strong>
                    </header>
                    <div class="empty-block">
                        <div class="empty-block__inner">
                            <h3 class="empty-block__title icon_unauthorized" role="title_replace">
                                Войдите, чтобы написать ответ    </h3>
                            <a class="empty-block__button" href="auth/ac?ret=@referer">
                                Войти через TM ID      </a>
                        </div>
                    </div>
                </div>
                <header class="section-header">
                    <strong class="section-header__title">
                        Похожие вопросы      </strong>
                </header>
                <ul class="content-list" id="related_questions_599276">
                    <li class="content-list__item" role="content-list_item">
                        <div class="question question_short">
                            <div class="question__content">
                                <div class="question__content_fluid">
                                    <div class="question__tags">
                                        <a class="question__tags-image" href="https://toster.ru/tag/javascript">
                                            <img class="tag__image tag__image_bg" src="https://habrastorage.org/r/w32/webt/59/cc/76/59cc7600c78a2239379574.jpeg" alt="javascript">
                                        </a>
                                        <ul class="tags-list tags-list_short">
                                            <li class="tags-list__item  tag_357">
                                                <a href="https://toster.ru/tag/javascript">
                                                    JavaScript                </a>
                                            </li>
                                            <li class="tags-list__item tags-list__item_more">
                                                +1                  ещё
                                            </li>
                                        </ul>
                                        <span class="question__complexity">
              <span class="svg-icon_level svg-icon_level-3">
                <svg class="svg-icon" width="51" height="32" viewBox="0 0 51 32"><path d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z"></path></svg>
              </span>
              <span class="question__complexity-text">
                Средний              </span>
            </span>
                                    </div>
                                    <h2 class="question__title">
                                        <a class="question__title-link question__title-link_list" href="https://toster.ru/q/599422?from=questions_similar">
                                            Как dev tools определить выполнение скрипта?          </a>
                                    </h2>
                                    <ul class="question__attrs inline-list">
                                        <li class="inline-list__item inline-list__item_bullet">
            <span class="question__views-count" title="Количество подписавшихся на вопрос">
                              2                 подписчика                          </span>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
                                            <time class="question__date question__date_publish" pubdate="" title="Дата публикации: 29 янв. 2019, в 16:54" datetime="2019-01-29 16:54:03">
                                                13 минут назад            </time>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
              <span class="question__views-count">
                11                 просмотров              </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="question__answers-count ">
                                <a class="mini-counter" href="https://toster.ru/q/599422#answers" title="Количество ответов на вопрос" role="lazy_anchor">
                                    <div class="mini-counter__count mini-counter__count_grey">
                                        0        </div>
                                    <div class="mini-counter__value">
                                        ответов        </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="content-list__item" role="content-list_item">
                        <div class="question question_short">
                            <div class="question__content">
                                <div class="question__content_fluid">
                                    <div class="question__tags">
                                        <a class="question__tags-image" href="https://toster.ru/tag/javascript">
                                            <img class="tag__image tag__image_bg" src="https://habrastorage.org/r/w32/webt/59/cc/76/59cc7600c78a2239379574.jpeg" alt="javascript">
                                        </a>
                                        <ul class="tags-list tags-list_short">
                                            <li class="tags-list__item  tag_357">
                                                <a href="https://toster.ru/tag/javascript">
                                                    JavaScript                </a>
                                            </li>
                                            <li class="tags-list__item tags-list__item_more">
                                                +2                  ещё
                                            </li>
                                        </ul>
                                        <span class="question__complexity">
              <span class="svg-icon_level svg-icon_level-2">
                <svg class="svg-icon" width="51" height="32" viewBox="0 0 51 32"><path d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z"></path></svg>
              </span>
              <span class="question__complexity-text">
                Простой              </span>
            </span>
                                    </div>
                                    <h2 class="question__title">
                                        <a class="question__title-link question__title-link_list" href="https://toster.ru/q/599412?from=questions_similar">
                                            Какой фреймворк похож на javascript?          </a>
                                    </h2>
                                    <ul class="question__attrs inline-list">
                                        <li class="inline-list__item inline-list__item_bullet">
            <span class="question__views-count" title="Количество подписавшихся на вопрос">
                              1                 подписчик                          </span>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
                                            <time class="question__date question__date_publish" pubdate="" title="Дата публикации: 29 янв. 2019, в 16:36" datetime="2019-01-29 16:36:41">
                                                31 минуту назад            </time>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
              <span class="question__views-count">
                82                 просмотра              </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="question__answers-count question__answers_has-solution">
                                <a class="mini-counter" href="https://toster.ru/q/599412#answers" title="Количество ответов на вопрос" role="lazy_anchor">
                                    <div class="mini-counter__count mini-counter__count_grey">
                                        <svg class="icon_svg icon_check" viewBox="0 0 45 32">
                                            <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_check"></use>
                                        </svg>
                                        3        </div>
                                    <div class="mini-counter__value">
                                        ответа        </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="content-list__item" role="content-list_item">
                        <div class="question question_short">
                            <div class="question__content">
                                <div class="question__content_fluid">
                                    <div class="question__tags">
                                        <a class="question__tags-image" href="https://toster.ru/tag/javascript">
                                            <img class="tag__image tag__image_bg" src="https://habrastorage.org/r/w32/webt/59/cc/76/59cc7600c78a2239379574.jpeg" alt="javascript">
                                        </a>
                                        <ul class="tags-list tags-list_short">
                                            <li class="tags-list__item  tag_357">
                                                <a href="https://toster.ru/tag/javascript">
                                                    JavaScript                </a>
                                            </li>
                                        </ul>
                                        <span class="question__complexity">
              <span class="svg-icon_level svg-icon_level-2">
                <svg class="svg-icon" width="51" height="32" viewBox="0 0 51 32"><path d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z"></path></svg>
              </span>
              <span class="question__complexity-text">
                Простой              </span>
            </span>
                                    </div>
                                    <h2 class="question__title">
                                        <a class="question__title-link question__title-link_list" href="https://toster.ru/q/599399?from=questions_similar">
                                            Как реализовать функцию JS?          </a>
                                    </h2>
                                    <ul class="question__attrs inline-list">
                                        <li class="inline-list__item inline-list__item_bullet">
            <span class="question__views-count" title="Количество подписавшихся на вопрос">
                              1                 подписчик                          </span>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
                                            <time class="question__date question__date_publish" pubdate="" title="Дата публикации: 29 янв. 2019, в 16:00" datetime="2019-01-29 16:00:39">
                                                час назад            </time>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
              <span class="question__views-count">
                62                 просмотра              </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="question__answers-count question__answers_has-solution">
                                <a class="mini-counter" href="https://toster.ru/q/599399#answers" title="Количество ответов на вопрос" role="lazy_anchor">
                                    <div class="mini-counter__count mini-counter__count_grey">
                                        <svg class="icon_svg icon_check" viewBox="0 0 45 32">
                                            <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_check"></use>
                                        </svg>
                                        3        </div>
                                    <div class="mini-counter__value">
                                        ответа        </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="content-list__item" role="content-list_item">
                        <div class="question question_short">
                            <div class="question__content">
                                <div class="question__content_fluid">
                                    <div class="question__tags">
                                        <a class="question__tags-image" href="https://toster.ru/tag/javascript">
                                            <img class="tag__image tag__image_bg" src="https://habrastorage.org/r/w32/webt/59/cc/76/59cc7600c78a2239379574.jpeg" alt="javascript">
                                        </a>
                                        <ul class="tags-list tags-list_short">
                                            <li class="tags-list__item  tag_357">
                                                <a href="https://toster.ru/tag/javascript">
                                                    JavaScript                </a>
                                            </li>
                                            <li class="tags-list__item tags-list__item_more">
                                                +4                  ещё
                                            </li>
                                        </ul>
                                        <span class="question__complexity">
              <span class="svg-icon_level svg-icon_level-2">
                <svg class="svg-icon" width="51" height="32" viewBox="0 0 51 32"><path d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z"></path></svg>
              </span>
              <span class="question__complexity-text">
                Простой              </span>
            </span>
                                    </div>
                                    <h2 class="question__title">
                                        <a class="question__title-link question__title-link_list" href="https://toster.ru/q/599391?from=questions_similar">
                                            Возможно ли динамически вставить компонент Angular в Я.Карты?          </a>
                                    </h2>
                                    <ul class="question__attrs inline-list">
                                        <li class="inline-list__item inline-list__item_bullet">
            <span class="question__views-count" title="Количество подписавшихся на вопрос">
                              2                 подписчика                          </span>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
                                            <time class="question__date question__date_publish" pubdate="" title="Дата публикации: 29 янв. 2019, в 15:53" datetime="2019-01-29 15:53:49">
                                                час назад            </time>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
              <span class="question__views-count">
                13                 просмотров              </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="question__answers-count ">
                                <a class="mini-counter" href="https://toster.ru/q/599391#answers" title="Количество ответов на вопрос" role="lazy_anchor">
                                    <div class="mini-counter__count mini-counter__count_grey">
                                        0        </div>
                                    <div class="mini-counter__value">
                                        ответов        </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="content-list__item" role="content-list_item">
                        <div class="question question_short">
                            <div class="question__content">
                                <div class="question__content_fluid">
                                    <div class="question__tags">
                                        <a class="question__tags-image" href="https://toster.ru/tag/javascript">
                                            <img class="tag__image tag__image_bg" src="https://habrastorage.org/r/w32/webt/59/cc/76/59cc7600c78a2239379574.jpeg" alt="javascript">
                                        </a>
                                        <ul class="tags-list tags-list_short">
                                            <li class="tags-list__item  tag_357">
                                                <a href="https://toster.ru/tag/javascript">
                                                    JavaScript                </a>
                                            </li>
                                            <li class="tags-list__item tags-list__item_more">
                                                +1                  ещё
                                            </li>
                                        </ul>
                                        <span class="question__complexity">
              <span class="svg-icon_level svg-icon_level-2">
                <svg class="svg-icon" width="51" height="32" viewBox="0 0 51 32"><path d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z"></path></svg>
              </span>
              <span class="question__complexity-text">
                Простой              </span>
            </span>
                                    </div>
                                    <h2 class="question__title">
                                        <a class="question__title-link question__title-link_list" href="https://toster.ru/q/599390?from=questions_similar">
                                            Как на jQuery поменять стиль у label с активным input radio?          </a>
                                    </h2>
                                    <ul class="question__attrs inline-list">
                                        <li class="inline-list__item inline-list__item_bullet">
            <span class="question__views-count" title="Количество подписавшихся на вопрос">
                              1                 подписчик                          </span>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
                                            <time class="question__date question__date_publish" pubdate="" title="Дата публикации: 29 янв. 2019, в 15:52" datetime="2019-01-29 15:52:57">
                                                час назад            </time>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
              <span class="question__views-count">
                14                 просмотров              </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="question__answers-count question__answers_has-solution">
                                <a class="mini-counter" href="https://toster.ru/q/599390#answers" title="Количество ответов на вопрос" role="lazy_anchor">
                                    <div class="mini-counter__count mini-counter__count_grey">
                                        <svg class="icon_svg icon_check" viewBox="0 0 45 32">
                                            <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_check"></use>
                                        </svg>
                                        1        </div>
                                    <div class="mini-counter__value">
                                        ответ        </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="content-list__item" role="content-list_item">
                        <div class="question question_short">
                            <div class="question__content">
                                <div class="question__content_fluid">
                                    <div class="question__tags">
                                        <a class="question__tags-image" href="https://toster.ru/tag/javascript">
                                            <img class="tag__image tag__image_bg" src="https://habrastorage.org/r/w32/webt/59/cc/76/59cc7600c78a2239379574.jpeg" alt="javascript">
                                        </a>
                                        <ul class="tags-list tags-list_short">
                                            <li class="tags-list__item  tag_357">
                                                <a href="https://toster.ru/tag/javascript">
                                                    JavaScript                </a>
                                            </li>
                                            <li class="tags-list__item tags-list__item_more">
                                                +2                  ещё
                                            </li>
                                        </ul>
                                        <span class="question__complexity">
              <span class="svg-icon_level svg-icon_level-3">
                <svg class="svg-icon" width="51" height="32" viewBox="0 0 51 32"><path d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z"></path></svg>
              </span>
              <span class="question__complexity-text">
                Средний              </span>
            </span>
                                    </div>
                                    <h2 class="question__title">
                                        <a class="question__title-link question__title-link_list" href="https://toster.ru/q/599379?from=questions_similar">
                                            Как разграничить функционал страницы сайта в зависимости от роли пользователя?          </a>
                                    </h2>
                                    <ul class="question__attrs inline-list">
                                        <li class="inline-list__item inline-list__item_bullet">
            <span class="question__views-count" title="Количество подписавшихся на вопрос">
                              2                 подписчика                          </span>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
                                            <time class="question__date question__date_publish" pubdate="" title="Дата публикации: 29 янв. 2019, в 15:29" datetime="2019-01-29 15:29:22">
                                                час назад            </time>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
              <span class="question__views-count">
                49                 просмотров              </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="question__answers-count ">
                                <a class="mini-counter" href="https://toster.ru/q/599379#answers" title="Количество ответов на вопрос" role="lazy_anchor">
                                    <div class="mini-counter__count mini-counter__count_grey">
                                        1        </div>
                                    <div class="mini-counter__value">
                                        ответ        </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="content-list__item" role="content-list_item">
                        <div class="question question_short">
                            <div class="question__content">
                                <div class="question__content_fluid">
                                    <div class="question__tags">
                                        <a class="question__tags-image" href="https://toster.ru/tag/javascript">
                                            <img class="tag__image tag__image_bg" src="https://habrastorage.org/r/w32/webt/59/cc/76/59cc7600c78a2239379574.jpeg" alt="javascript">
                                        </a>
                                        <ul class="tags-list tags-list_short">
                                            <li class="tags-list__item  tag_357">
                                                <a href="https://toster.ru/tag/javascript">
                                                    JavaScript                </a>
                                            </li>
                                            <li class="tags-list__item tags-list__item_more">
                                                +1                  ещё
                                            </li>
                                        </ul>
                                        <span class="question__complexity">
              <span class="svg-icon_level svg-icon_level-2">
                <svg class="svg-icon" width="51" height="32" viewBox="0 0 51 32"><path d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z"></path></svg>
              </span>
              <span class="question__complexity-text">
                Простой              </span>
            </span>
                                    </div>
                                    <h2 class="question__title">
                                        <a class="question__title-link question__title-link_list" href="https://toster.ru/q/599376?from=questions_similar">
                                            Как данный код на Jquery сделать?          </a>
                                    </h2>
                                    <ul class="question__attrs inline-list">
                                        <li class="inline-list__item inline-list__item_bullet">
            <span class="question__views-count" title="Количество подписавшихся на вопрос">
                              1                 подписчик                          </span>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
                                            <time class="question__date question__date_publish" pubdate="" title="Дата публикации: 29 янв. 2019, в 15:18" datetime="2019-01-29 15:18:50">
                                                час назад            </time>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
              <span class="question__views-count">
                55                 просмотров              </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="question__answers-count ">
                                <a class="mini-counter" href="https://toster.ru/q/599376#answers" title="Количество ответов на вопрос" role="lazy_anchor">
                                    <div class="mini-counter__count mini-counter__count_grey">
                                        0        </div>
                                    <div class="mini-counter__value">
                                        ответов        </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="content-list__item" role="content-list_item">
                        <div class="question question_short">
                            <div class="question__content">
                                <div class="question__content_fluid">
                                    <div class="question__tags">
                                        <a class="question__tags-image" href="https://toster.ru/tag/css">
                                            <img class="tag__image tag__image_bg" src="https://habrastorage.org/r/w32/webt/5a/6c/29/5a6c295a5de0d066850531.png" alt="css">
                                        </a>
                                        <ul class="tags-list tags-list_short">
                                            <li class="tags-list__item  tag_307">
                                                <a href="https://toster.ru/tag/css">
                                                    CSS                </a>
                                            </li>
                                            <li class="tags-list__item tags-list__item_more">
                                                +4                  ещё
                                            </li>
                                        </ul>
                                        <span class="question__complexity">
              <span class="svg-icon_level svg-icon_level-2">
                <svg class="svg-icon" width="51" height="32" viewBox="0 0 51 32"><path d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z"></path></svg>
              </span>
              <span class="question__complexity-text">
                Простой              </span>
            </span>
                                    </div>
                                    <h2 class="question__title">
                                        <a class="question__title-link question__title-link_list" href="https://toster.ru/q/599364?from=questions_similar">
                                            Как сделать слайдер в виде колоды карточек, поочередно меняющихся (см. рисунок)?          </a>
                                    </h2>
                                    <ul class="question__attrs inline-list">
                                        <li class="inline-list__item inline-list__item_bullet">
            <span class="question__views-count" title="Количество подписавшихся на вопрос">
                              2                 подписчика                          </span>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
                                            <time class="question__date question__date_publish" pubdate="" title="Дата публикации: 29 янв. 2019, в 14:42" datetime="2019-01-29 14:42:19">
                                                2 часа назад            </time>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
              <span class="question__views-count">
                82                 просмотра              </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="question__answers-count ">
                                <a class="mini-counter" href="https://toster.ru/q/599364#answers" title="Количество ответов на вопрос" role="lazy_anchor">
                                    <div class="mini-counter__count mini-counter__count_grey">
                                        2        </div>
                                    <div class="mini-counter__value">
                                        ответа        </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="content-list__item" role="content-list_item">
                        <div class="question question_short">
                            <div class="question__content">
                                <div class="question__content_fluid">
                                    <div class="question__tags">
                                        <a class="question__tags-image" href="https://toster.ru/tag/css">
                                            <img class="tag__image tag__image_bg" src="https://habrastorage.org/r/w32/webt/5a/6c/29/5a6c295a5de0d066850531.png" alt="css">
                                        </a>
                                        <ul class="tags-list tags-list_short">
                                            <li class="tags-list__item  tag_307">
                                                <a href="https://toster.ru/tag/css">
                                                    CSS                </a>
                                            </li>
                                            <li class="tags-list__item tags-list__item_more">
                                                +2                  ещё
                                            </li>
                                        </ul>
                                        <span class="question__complexity">
              <span class="svg-icon_level svg-icon_level-3">
                <svg class="svg-icon" width="51" height="32" viewBox="0 0 51 32"><path d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z"></path></svg>
              </span>
              <span class="question__complexity-text">
                Средний              </span>
            </span>
                                    </div>
                                    <h2 class="question__title">
                                        <a class="question__title-link question__title-link_list" href="https://toster.ru/q/599361?from=questions_similar">
                                            Как получить высоту от топа до элемента, если перед ним есть динамически подгружаемые элементы?          </a>
                                    </h2>
                                    <ul class="question__attrs inline-list">
                                        <li class="inline-list__item inline-list__item_bullet">
            <span class="question__views-count" title="Количество подписавшихся на вопрос">
                              1                 подписчик                          </span>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
                                            <time class="question__date question__date_publish" pubdate="" title="Дата публикации: 29 янв. 2019, в 14:37" datetime="2019-01-29 14:37:14">
                                                2 часа назад            </time>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
              <span class="question__views-count">
                37                 просмотров              </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="question__answers-count ">
                                <a class="mini-counter" href="https://toster.ru/q/599361#answers" title="Количество ответов на вопрос" role="lazy_anchor">
                                    <div class="mini-counter__count mini-counter__count_grey">
                                        1        </div>
                                    <div class="mini-counter__value">
                                        ответ        </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="content-list__item" role="content-list_item">
                        <div class="question question_short">
                            <div class="question__content">
                                <div class="question__content_fluid">
                                    <div class="question__tags">
                                        <a class="question__tags-image" href="https://toster.ru/tag/javascript">
                                            <img class="tag__image tag__image_bg" src="https://habrastorage.org/r/w32/webt/59/cc/76/59cc7600c78a2239379574.jpeg" alt="javascript">
                                        </a>
                                        <ul class="tags-list tags-list_short">
                                            <li class="tags-list__item  tag_357">
                                                <a href="https://toster.ru/tag/javascript">
                                                    JavaScript                </a>
                                            </li>
                                        </ul>
                                        <span class="question__complexity">
              <span class="svg-icon_level svg-icon_level-2">
                <svg class="svg-icon" width="51" height="32" viewBox="0 0 51 32"><path d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z"></path></svg>
              </span>
              <span class="question__complexity-text">
                Простой              </span>
            </span>
                                    </div>
                                    <h2 class="question__title">
                                        <a class="question__title-link question__title-link_list" href="https://toster.ru/q/599359?from=questions_similar">
                                            Как выбрать предыдущий элемент массива?          </a>
                                    </h2>
                                    <ul class="question__attrs inline-list">
                                        <li class="inline-list__item inline-list__item_bullet">
            <span class="question__views-count" title="Количество подписавшихся на вопрос">
                              1                 подписчик                          </span>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
                                            <time class="question__date question__date_publish" pubdate="" title="Дата публикации: 29 янв. 2019, в 14:36" datetime="2019-01-29 14:36:43">
                                                2 часа назад            </time>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
              <span class="question__views-count">
                86                 просмотров              </span>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="question__answers-count question__answers_has-solution">
                                <a class="mini-counter" href="https://toster.ru/q/599359#answers" title="Количество ответов на вопрос" role="lazy_anchor">
                                    <div class="mini-counter__count mini-counter__count_grey">
                                        <svg class="icon_svg icon_check" viewBox="0 0 45 32">
                                            <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_check"></use>
                                        </svg>
                                        1        </div>
                                    <div class="mini-counter__value">
                                        ответ        </div>
                                </a>
                            </div>
                        </div>
                    </li>
                    <li class="content-list__item content-list__item_more" role="related_replace">
                        <a class="btn btn_outline_grey" role="related_more" data-remote="" href="questions/related?question_id=599276&amp;skip=10">
                            <span class="more">Показать ещё</span>
                            <span class="load">Загружается…</span>
                        </a>
                    </li>
                </ul>
                <div class="offered-services">
                    <div class="offered-services__service service" id="moikrug_block">
                        <div class="service__header">
                            <a class="service__name" href="http://moikrug.ru/?utm_source=tm_toster&amp;utm_medium=tm_section&amp;utm_campaign=vacancies_post" target="_blank">Вакансии с Моего Круга</a>
                        </div>
                        <div class="service__offer">
                            <div class="service__preview">
                                <a class="service__title " href="https://moikrug.ru/vacancies/1000046060?utm_source=tm_toster&amp;utm_medium=tm_section&amp;utm_campaign=vacancies_post" target="_blank">JavaScript разработчик</a>
                            </div>
                            <div class="service__attributes">
                                <a class="service__attribute" href="https://moikrug.ru/companies/dts?utm_source=tm_toster&amp;utm_medium=tm_section&amp;utm_campaign=vacancies_post" target="_blank">CS Money</a>
                                <span class="service__delimetr">•</span>
                                <span class="service__attribute">Санкт-Петербург</span>
                            </div>
                            <div class="service__salary">
                                от 120 000 до 150 000 руб.                            </div>
                        </div>
                        <div class="service__offer">
                            <div class="service__preview">
                                <a class="service__title " href="https://moikrug.ru/vacancies/1000046903?utm_source=tm_toster&amp;utm_medium=tm_section&amp;utm_campaign=vacancies_post" target="_blank">JavaScript Developer (Junior)</a>
                            </div>
                            <div class="service__attributes">
                                <a class="service__attribute" href="https://moikrug.ru/companies/digitalsharks?utm_source=tm_toster&amp;utm_medium=tm_section&amp;utm_campaign=vacancies_post" target="_blank">Digital Sharks</a>
                                <span class="service__delimetr">•</span>
                                <span class="service__attribute">Казань</span>
                            </div>
                            <div class="service__salary">
                                от 60 000 до 65 000 руб.                            </div>
                        </div>
                        <div class="service__offer">
                            <div class="service__preview">
                                <a class="service__title " href="https://moikrug.ru/vacancies/1000039453?utm_source=tm_toster&amp;utm_medium=tm_section&amp;utm_campaign=vacancies_post" target="_blank">Senior Javascript / Node.js Разработчик</a>
                            </div>
                            <div class="service__attributes">
                                <a class="service__attribute" href="https://moikrug.ru/companies/makeomatic?utm_source=tm_toster&amp;utm_medium=tm_section&amp;utm_campaign=vacancies_post" target="_blank">Makeomatic</a>
                            </div>
                            <div class="service__salary">
                                от 2 500 до 3 300 usd.                            </div>
                        </div>
                        <div class="service__footer">
                            <a class="service__more" href="http://moikrug.ru/?utm_source=tm_toster&amp;utm_medium=tm_section&amp;utm_campaign=vacancies_post" target="_blank">Ещё вакансии</a>
                        </div>
                    </div>
                    <div class="offered-services__service service" id="freelansim_block">
                        <div class="service__header">
                            <a class="service__name" href="http://freelansim.ru/?utm_source=toster_tm&amp;utm_medium=tm_section&amp;utm_campaign=tm_promo" target="_blank">Заказы с Фрилансим</a>
                        </div>
                        <div class="service__offer">
                            <div class="service__preview">
                                <a class="service__title " href="http://freelansim.ru/tasks/231325?utm_source=toster_tm&amp;utm_medium=tm_section&amp;utm_campaign=tm_promo" target="_blank">Верстка лендинга (фигма)</a>
                            </div>
                            <div class="service__attribute">29 янв. 2019, в 16:48</div>
                            <div class="service__salary">1 руб./за проект</div>
                        </div>
                        <div class="service__offer">
                            <div class="service__preview">
                                <a class="service__title " href="http://freelansim.ru/tasks/231323?utm_source=toster_tm&amp;utm_medium=tm_section&amp;utm_campaign=tm_promo" target="_blank">Консультация по настройке Linux-сервера (nginx+apache)</a>
                            </div>
                            <div class="service__attribute">29 янв. 2019, в 16:35</div>
                            <div class="service__salary">1000 руб./за проект</div>
                        </div>
                        <div class="service__offer">
                            <div class="service__preview">
                                <a class="service__title " href="http://freelansim.ru/tasks/231091?utm_source=toster_tm&amp;utm_medium=tm_section&amp;utm_campaign=tm_promo" target="_blank">Эпизодические доработки интернет-магазина на PHP</a>
                            </div>
                            <div class="service__attribute">28 янв. 2019, в 13:24</div>
                            <div class="service__salary">800 руб./в час</div>
                        </div>
                        <div class="service__footer">
                            <a class="service__more" href="http://freelansim.ru/?utm_source=toster_tm&amp;utm_medium=tm_section&amp;utm_campaign=tm_promo" target="_blank">Ещё заказы</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
