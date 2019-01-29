<header class="layout__topbar">
    <div class="layout__topbar_suggest">
        <div class="layout__topbar_wrap">
            <form class="suggest" action="search" method="get" id="header_search_form">
                <div class="suggest__field_wrap">
                    <div class="suggest__wrap_fluid">
                                    <span role="status" aria-live="polite"
                                          class="ui-helper-hidden-accessible"></span><input
                                class="suggest__field ui-autocomplete-input" type="search"
                                autocomplete="off" name="q"
                                placeholder="Найти вопрос, ответ, тег или пользователя" value="">
                    </div>
                    <button class="btn btn_link" type="button" role="btn_suggest_close">
                        <span>Закрыть</span>
                    </button>
                </div>
                <button class="btn btn_suggest" type="button" role="btn_suggest">
                    <svg class="icon_svg icon_search" viewBox="0 0 32 32">
                        <use xlink:href="images/sprite_0.1.svg#icon_search"></use>
                    </svg>
                </button>
            </form>
            <div class="layout__topbar_add-question">
                <a class="btn btn_green btn_add-question" href="question/new" role="auth_popup_trigger"
                   data-value="Чтобы задать вопрос и&nbsp;получить на&nbsp;него квалифицированный ответ."
                   data-title="" data-auth-ret="question/new" data-no-button="">
                    <svg class="icon_svg icon_plus" viewBox="0 0 32 32">
                        <use xlink:href="images/sprite_0.1.svg#icon_plus"></use>
                    </svg>
                    <span>Задать вопрос</span>
                </a>
            </div>
        </div>
    </div>
    <div class="layout__topbar_canvas-toggler">
        <button class="btn btn_navbar_toggle" role="toggle_navbar" type="button">
            <svg class="icon_svg icon_burger" viewBox="0 0 32 32">
                <use xlink:href="images/sprite_0.1.svg#icon_burger"></use>
            </svg>
        </button>
        <a class="logo logo_topbar" href="https://toster.ru/">
            <svg class="icon_svg icon_logo">
                <use xlink:href="images/sprite_0.1.svg#icon_logo"></use>
            </svg>
        </a>
    </div>
</header>
