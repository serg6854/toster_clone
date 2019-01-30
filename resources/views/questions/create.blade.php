@extends('base')

@section('page_title', 'Новый вопрос')

@section('sidebar')@endsection

@section('content')
    <div class="page__body">
        <div class="question question_preview hidden" role="question_preview_wrap">
            <div id="preview_container"></div>
        </div>
        <form class="form form_add_question validateble show_similar_questions" id="ask_form" role="new_question_form" action="question/save" data-remote="true" method="post">
            <ul class="fields-list" role="form_fields">
                <li class="fields-list__item">
                    <div class="field">
                        <label class="field__label">Суть вопроса</label>
                        <div class="field__desc">Сформулируйте вопрос так, чтобы сразу было понятно, о чём речь.</div>
                        <div class="field__content" role="field_content">
                            <input id="question_title" class="field__input" data-required="true" maxlength="150" name="title" tabindex="1" type="text" value="">
                        </div>
                    </div>
                    <div id="similar_questions"></div>
                </li>
                <li class="fields-list__item field">
                    <label class="field__label">Теги вопроса</label>
                    <div class="field__desc">Укажите от 1 до 5 тегов — предметных областей, к которым вопрос относится.</div>
                    <div class="field__content" role="field_content">
                        <input class="field__input" id="question_tags" data-required="true" name="tags" tabindex="2" type="text" value="" data-lables="" style="display: none;"><ul class="tagit ui-widget ui-widget-content ui-corner-all"><li class="tagit-new"><span role="status" aria-live="polite" class="ui-helper-hidden-accessible"></span><input type="text" maxlength="50" class="ui-widget-content ui-autocomplete-input" tabindex="3" autocomplete="off"></li></ul>
                    </div>
                </li>
                <li class="fields-list__item field">
                    <label class="field__label">Детали вопроса</label>
                    <div class="field__desc">Опишите в подробностях свой вопрос, чтобы получить более точный ответ.</div>
                    <div class="field__content" role="field_content">
                        <div class="field__textarea_wisiwyg" role="wysiwyg_wrapper">
                            <div class="wysiwyg" data-hs_host="https://web.habrastorage.org" role="wysiwyg_editor">
                                <ul class="icons-bar icons-bar_horizontal">
                                    <li class="icons-bar__item">
                                        <a class="icons-bar__item_control" role="wysiwyg_bold" href="#" onclick="return habraWYG.insertTagWithText(this, 'b');" tabindex="-1" title="Жирный">
                                            <svg class="icon_svg icon_editor_bold" viewBox="0 0 32 32">
                                                <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_editor_bold"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="icons-bar__item">
                                        <a class="icons-bar__item_control" role="wysiwyg_italic" href="#" onclick="return habraWYG.insertTagWithText(this, 'i');" tabindex="-1" title="Курсив">
                                            <svg class="icon_svg icon_editor_italic" viewBox="0 0 32 32">
                                                <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_editor_italic"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="icons-bar__item dropdown" role="dropdown">
      <span class="icons-bar__item_control" data-toggle="dropdown" tabindex="-1" title="Вставить список" role="dropdown_trigger">
        <svg class="icon_svg icon_editor_list">
          <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_editor_list"></use>
        </svg>
      </span>
                                        <div class="dropdown__menu">
                                            <ul class="menu menu_dropdown">
                                                <li class="menu__item">
                                                    <a class="icon_link-internet menu__item-link" role="wysiwyg_list_num" href="#" onclick="return habraWYG.insertList(this, 'ol');">Нумерованный список</a>
                                                </li>
                                                <li class="menu__item">
                                                    <a class="icon_comp menu__item-link" role="wysiwyg_list" href="javascript:void(0)" onclick="return habraWYG.insertList(this, 'ul');">Ненумерованный список</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="icons-bar__item dropdown" role="dropdown">
      <span class="icons-bar__item_control" data-toggle="dropdown" tabindex="-1" title="Вставить изображение" role="dropdown_trigger">
        <svg class="icon_svg icon_editor_picture" viewBox="0 0 32 32">
          <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_editor_picture"></use>
        </svg>
      </span>
                                        <div class="dropdown__menu">
                                            <ul class="menu menu_dropdown">
                                                <li class="menu__item">
                                                    <a class="icon_link-internet menu__item-link" href="#" onclick="return habraWYG.insertImage(this);">Из интернета</a>
                                                </li>
                                                <li class="menu__item">
                                                    <a class="icon_comp menu__item-link" href="javascript:void(0)" onclick="return habraWYG.uploadImage(this);">С компьютера</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="icons-bar__item">
                                        <a class="icons-bar__item_control" role="wysiwyg_link" href="#" onclick="return habraWYG.insertLink(this);" tabindex="-1" title="Вставить ссылку">
                                            <svg class="icon_svg icon_editor_link" viewBox="0 0 32 32">
                                                <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_editor_link"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="icons-bar__item">
                                        <a class="icons-bar__item_control" role="wysiwyg_quote" href="#" onclick="return habraWYG.insertTagWithText(this, 'blockquote');" tabindex="-1" title="Вставить цитату">
                                            <svg class="icon_svg icon_editor_quote" viewBox="0 0 32 32">
                                                <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_editor_quote"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="icons-bar__item">
                                        <a class="icons-bar__item_control" role="wysiwyg_spoiler" href="#" onclick="return habraWYG.insertSpoiler(this);" tabindex="-1" title="Вставить спойлер">
                                            <svg class="icon_svg icon_editor_quote" viewBox="0 0 32 32">
                                                <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_radio_dot"></use>
                                            </svg>
                                        </a>
                                    </li>
                                    <li class="icons-bar__item dropdown" role="dropdown">
      <span class="icons-bar__item_control" data-toggle="dropdown" tabindex="-1" title="Вставить исходный код" role="dropdown_trigger">
        <svg class="icon_svg icon_code" viewBox="0 0 32 32">
          <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_code"></use>
        </svg>
      </span>
                                        <div class="dropdown__menu">
                                            <ul class="menu menu_dropdown menu_scroll">
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertTagWithText(this, 'code');">
                                                        Code
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'javascript');">
                                                        JavaScript
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'html');">
                                                        HTML
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'php');">
                                                        PHP
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'ruby');">
                                                        Ruby
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'java');">
                                                        Java
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'perl');">
                                                        Perl
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'python');">
                                                        Python
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'bash');">
                                                        Bash
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'cs');">
                                                        C#
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'cpp');">
                                                        C++
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'css');">
                                                        CSS
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'diff');">
                                                        Diff
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'xml');">
                                                        XML
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'sql');">
                                                        SQL
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, '1c');">
                                                        1C
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'actionscript');">
                                                        ActionScript
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'apache');">
                                                        Apache
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'axapta');">
                                                        Axapta
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'cmake');">
                                                        CMake
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'coffeescript');">
                                                        CoffeeScript
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'dos');">
                                                        DOS
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'delphi');">
                                                        Delphi
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'django');">
                                                        Django
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'erlang');">
                                                        Erlang
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'erlang_repl');">
                                                        Erlang REPL
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'go');">
                                                        Go
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'haskell');">
                                                        Haskell
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'lisp');">
                                                        Lisp
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'lua');">
                                                        Lua
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'mel');">
                                                        MEL
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'markdown');">
                                                        Markdown
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'matlab');">
                                                        Matlab
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'nginx');">
                                                        Nginx
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'objectivec');">
                                                        Objective C
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'rust');">
                                                        Rust
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'scala');">
                                                        Scala
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'smalltalk');">
                                                        Smalltalk
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'tex');">
                                                        TeX
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'vbscript');">
                                                        VBScript
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'vhdl');">
                                                        VHDL
                                                    </a>
                                                </li>
                                                <li class="menu__item" role="link_static">
                                                    <a class="menu__item-link" href="#" onclick="return habraWYG.insertSource(this, 'vala');">
                                                        Vala
                                                    </a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                    <li class="icons-bar__item dropdown" role="dropdown">
      <span class="icons-bar__item_control" data-toggle="dropdown" tabindex="-1" title="Вставить код с внешнего сервиса" role="dropdown_trigger">
        <svg class="icon_svg icon_code" viewBox="0 0 32 32">
          <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_plus"></use>
        </svg>
      </span>
                                        <div class="dropdown__menu">
                                            <ul class="menu menu_dropdown">
                                                <li class="menu__item">
                                                    <a class="menu__item-link" href="javascript:void(0)" onclick="return habraWYG.insertExtEmbed(this, 'jsfiddle');">JSFiddle</a>
                                                </li>
                                                <li class="menu__item">
                                                    <a class="menu__item-link" href="javascript:void(0)" onclick="return habraWYG.insertExtEmbed(this, 'codepen');">CodePen</a>
                                                </li>
                                            </ul>
                                        </div>
                                    </li>
                                </ul>
                            </div>
                            <div class="textcomplete-wrapper" style="position: relative; display: inline-block;"><ul class="menu menu_textcomplete" style="position: absolute; top: 0px; left: 0px; z-index: 100; display: none;"></ul><textarea class="field__input textarea" data-required="true" name="body" rows="8" tabindex="3"></textarea></div>
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
                <button class="btn btn_outline_green" id="save_btn" disabled="disabled" name="submit" tabindex="5" role="btn_submit" type="submit">
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
