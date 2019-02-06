@extends('base')

@section('content')
    <div class="page__qa-wrapper" itemscope="" itemtype="http://schema.org/QAPage">
        <div class="page__body" id="question_show" itemscope="" itemprop="mainEntity"
             itemtype="http://schema.org/Question">

            @include('questions.full')

            <div class="question__additionals">

                @if($question->hasSolutions())
                    <div class="section section_solutions " id="solutions" role="solutions_section">
                        <header class="section-header">
                            <strong class="section-header__title">
                                Решения вопроса
                                <span class="section-header__counter" role="answers_counter">
                                {{ $question->solutions()->count() }}
                            </span>
                            </strong>
                        </header>

                        @include('answers.list', ['answers' => $solutions, 'id' => 'solutions_list'])
                    </div>
                @endif

                <a class="question__invate-expert" href="#" role="auth_popup_trigger"
                   data-value="Чтобы пригласить эксперта, который сможет ответить на вопрос" data-question="599276">
                    Пригласить эксперта
                </a>

                @if($answers->count())
                    <div class="section section_answers " id="answers" role="answers_section ">
                        <meta itemprop="answerCount" content="3">
                        <header class="section-header">
                            <strong class="section-header__title">
                                Ответы на вопрос
                                <span class="section-header__counter" role="answers_counter">
                                {{ $answers->count() }}
                            </span>
                            </strong>
                        </header>

                        @include('answers.list', ['includeComments' => true])
                    </div>
                @endif

                @include('answers.form')

                <header class="section-header">
                    <strong class="section-header__title">Похожие вопросы</strong>
                </header>

                <ul class="content-list" id="related_questions_599276">
                    @foreach($similarQuestions as $question)
                        @include('questions.short')
                    @endforeach

                    @if($similarQuestions->hasMorePages())
                    <li class='tags-list tags-list_short'>
                        <a class="btn btn_outline_grey" role="related_more" data-remote=""
                           href="questions/related?question_id=599276&amp;skip=10">
                            <span class="more">Показать ещё</span>
                            <span class="load">Загружается…</span>
                        </a>
                    </li>
                    @endif
                </ul>
            </div>
        </div>
    </div>
@endsection

