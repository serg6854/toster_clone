@extends('base')

@section('content')
    <div class="page__qa-wrapper" itemscope="" itemtype="http://schema.org/QAPage">
        <div class="page__body" id="question_show" itemscope="" itemprop="mainEntity" itemtype="http://schema.org/Question">

            @include('questions.full')

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
                            Ответы на вопрос
                            <span class="section-header__counter" role="answers_counter">
                                {{ $question->answers()->count() }}
                            </span>
                        </strong>
                    </header>
                    <div class="content-list content-list_answers" id="answers_list">

                        @foreach($question->answers as $answer)
                            @include('answers.item', ['answer' => $answer])
                        @endforeach

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
                    <strong class="section-header__title">Похожие вопросы</strong>
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
                                                {{ $question->subscribers()->count() }} подписчика
                                            </span>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
                                            <time class="question__date question__date_publish" pubdate="" title="Дата публикации: 29 янв. 2019, в 16:54" datetime="2019-01-29 16:54:03">
                                                13 минут назад            </time>
                                        </li>
                                        <li class="inline-list__item inline-list__item_bullet">
                                            @include('questions._views', ['views' => $question->views])
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

                    <li class="content-list__item content-list__item_more" role="related_replace">
                        <a class="btn btn_outline_grey" role="related_more" data-remote="" href="questions/related?question_id=599276&amp;skip=10">
                            <span class="more">Показать ещё</span>
                            <span class="load">Загружается…</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
@endsection
