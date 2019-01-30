@extends('base')

@section('content')
    @component('users.profile', ['user' => $user])

        @include('answers.list', ['answers' => $answers, 'withQuestion' => true])

        <div class="popup__overlay hidden" role="answer_likers_popup popup">
            <div class="popup popup_question_expert">
                <div class="popup__header">
                    Оценили как «Нравится»
                </div>
                <div class="popup__body" role="likers_container"></div>
                <button class="btn btn_link popup__close-btn" type="reset" role="btn_popup_close">
                    <span>Закрыть</span>
                </button>
            </div>
        </div>
    @endcomponent
@endsection
