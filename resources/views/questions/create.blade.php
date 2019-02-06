@extends('base')

@section('page_title', 'Новый вопрос')

@section('sidebar')@endsection

@section('content')
    <div class="page__body">
        <div class="question question_preview hidden" role="question_preview_wrap">
            <div id="preview_container"></div>
        </div>
        <form class="form form_add_question validateble show_similar_questions" id="ask_form"
              role="new_question_form"
              action="{{ route('question.store') }}"
              method="POST">
            @csrf

            <ul class="fields-list" role="form_fields">
                <li class="fields-list__item">
                    <div class="field">
                        <label class="field__label">Суть вопроса</label>
                        <div class="field__desc">Сформулируйте вопрос так, чтобы сразу было понятно, о чём речь.</div>
                        <div class="field__content" role="field_content">
                            <input id="question_title" class="field__input" name="title" tabindex="1" type="text"
                                   value="{{ old('title') }}">
                        </div>
                    </div>
                    <div id="similar_questions"></div>
                </li>
                <li class="fields-list__item field">
                    <label class="field__label">Теги вопроса</label>
                    <div class="field__desc">Укажите от 1 до 5 тегов — предметных областей, к которым вопрос относится.</div>
                    <div class="field__content" role="field_content">
                        <input class="field__input" id="question_tags" required="true" name="tags" type="text" value="{{ old('tags') }}">
                        {{--<ul class="tagit ui-widget ui-widget-content ui-corner-all">--}}
                            {{--<li class="tagit-new"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span>--}}
                                {{--<input type="text" maxlength="50" class="ui-widget-content ui-autocomplete-input" tabindex="3" autocomplete="off"></li>--}}
                        {{--</ul>--}}
                    </div>
                </li>
                <li class="fields-list__item field">
                    <label class="field__label">Детали вопроса</label>
                    <div class="field__desc">Опишите в подробностях свой вопрос, чтобы получить более точный ответ.</div>
                    <div class="field__content" role="field_content">
                        <div class="field__textarea_wisiwyg" role="wysiwyg_wrapper">
                            <div class="textcomplete-wrapper" style="position: relative; display: inline-block;"><ul class="menu menu_textcomplete" style="position: absolute; top: 0px; left: 0px; z-index: 100; display: none;"></ul>
                                <textarea class="field__input textarea" data-required="true" name="body" rows="8" tabindex="3">{{ old('body') }}</textarea>
                            </div>
                        </div>
                    </div>
                </li>

                <li class="fields-list__item field">
                    <label class="field__label">Сложность вопроса</label>
                    <div class="field__content" role="field_content">
                        <select class="field__select selectBox" name="complexity" role="chosen" style="width: 200px; display: none;">
                            <option value="2">Простой</option>
                            <option value="3">Средний</option>
                            <option value="4">Сложный</option>
                        </select><div class="selectBox field__select selectBox-dropdown" title="" tabindex="0" style="width: 200px; display: inline-block;"><span class="selectBox-label" style="width: 155px;">Простой</span><span class="selectBox-arrow"></span></div>
                    </div>
                </li>
            </ul>
            <div class="buttons-group buttons-group_form">
                <button class="btn btn_outline_green" id="save_btn" name="submit" tabindex="5" role="btn_submit" type="submit">
                    Опубликовать
                </button>
                <button class="btn btn_outline_grey" id="preview_btn" disabled="disabled" name="preview" tabindex="6" role="btn_preview" type="button">
                    Предпросмотр
                </button>
                <button class="btn btn_outline_grey hidden" role="btn_edit" tabindex="7" type="button">
                    Редактировать
                </button>
            </div>
        </form>
    </div>
@endsection
