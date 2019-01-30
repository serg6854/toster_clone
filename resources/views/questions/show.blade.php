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
                                {{ $question->answers_count }}
                            </span>
                        </strong>
                    </header>

                    @include('answers.list', ['answers' => $question->answers()->paginate()])
                </div>

                <div class="section section_form-answers" id="answer-form">
                    <header class="section-header">
                        <strong class="section-header__title">
                            Ваш ответ на вопрос
                        </strong>
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
                                            @include('questions._complexity', ['complexity' => $question->complexity])
                                        </span>
                                    </div>
                                    <h2 class="question__title">
                                        <a class="question__title-link question__title-link_list" href="https://toster.ru/q/599422?from=questions_similar">
                                            Как dev tools определить выполнение скрипта?          </a>
                                    </h2>

                                    <ul class="question__attrs inline-list">
                                        <li class="inline-list__item inline-list__item_bullet">
                                            <span class="question__views-count" title="Количество подписавшихся на вопрос">
                                                {{ $question->subscribers_count }} подписчика
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
                                        0
                                    </div>
                                    <div class="mini-counter__value">
                                        ответов
                                    </div>
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
