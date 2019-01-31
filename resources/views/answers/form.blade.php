<div class="section section_form-answers" id="answer-form">
    <header class="section-header">
        <strong class="section-header__title">
            Ваш ответ на вопрос
        </strong>
    </header>

    @auth
        <div class="answer-form">
            <div class="answer-form__form">
                <form class="form form_answer validateble" id="answer_form"
                      action="{{ route('question.answer', $question) }}"
                      method="POST"
                      role="answer_form">
                    @csrf

                    <div class="field field_wysiwyg" role="wysiwyg_wrapper">
                        <textarea name='body' rows='10'></textarea>
                    </div>

                    <div class="buttons-group">
                        <button class="btn btn_outline_green" disabled="disabled" type="submit" role="btn_submit">
                            Опубликовать
                        </button>
                        {{--<button class="btn btn_outline_grey" disabled="disabled" type="button" role="btn_preview">--}}
                        {{--Предпросмотр--}}
                        {{--</button>--}}
                        {{--<button class="btn btn_outline_grey hidden" type="button" role="btn_edit">--}}
                        {{--Редактировать--}}
                        {{--</button>--}}
                    </div>
                </form>
            </div>
            <div class="answer-form__avatar" role="answer_form_avatar">
                <a class="answer-form__avatar-img" href="{{ route('profile', auth()->user()) }}">
                    <svg class="icon_userpic" viewBox="0 0 32 32">
                        <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_userpic"></use>
                    </svg>
                </a>
            </div>
        </div>
    @else
        <div class="empty-block">
            <div class="empty-block__inner">
                <h3 class="empty-block__title icon_unauthorized" role="title_replace">
                    Войдите, чтобы написать ответ </h3>
                <a class="empty-block__button" href="{{ route('login') }}">
                    Войти
                </a>
            </div>
        </div>
    @endauth
</div>
