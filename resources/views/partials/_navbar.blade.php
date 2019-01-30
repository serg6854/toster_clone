<aside class="layout__navbar" role="navbar">
    <a class="logo logo_sidebar" href="{{ config('app.url') }}">
        <svg class="icon_svg icon_logo">
            <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_logo"></use>
        </svg>
    </a>
    <section class="user-panel" role="user_expand_menu">
        <div class="user-panel_head">
            <svg class="icon_svg icon_menu_lock" viewBox="0 0 32 32">
                <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_menu_lock"></use>
            </svg>
            <a class="user-panel__login-link" href="auth/tmid?ret=@referer">Войти на сайт</a>
        </div>
    </section>
    <ul class="main-menu">
        <li class="main-menu__item">
            <a class="main-menu__link open" id="item_questions" href="questions">
                <svg class="icon_svg icon_menu_questions" viewBox="0 0 32 32">
                    <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_menu_question"></use>
                </svg>
                Все вопросы
            </a>
        </li>
        <li class="main-menu__item">
            <a class="main-menu__link " href="tags">
                <svg class="icon_svg icon_menu_tags" viewBox="0 0 32 32">
                    <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_menu_tags"></use>
                </svg>
                Все теги
            </a>
        </li>
        <li class="main-menu__item">
            <a class="main-menu__link " href="{{ route('users.all') }}">
                <svg class="icon_svg icon_menu_users" viewBox="0 0 34 32">
                    <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_menu_users"></use>
                </svg>
                Пользователи
            </a>
        </li>
    </ul>
</aside>
