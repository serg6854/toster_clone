<aside class="layout__navbar" role="navbar">
    <a class="logo logo_sidebar" href="{{ config('app.url') }}">
        <svg class="icon_svg icon_logo">
            <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_logo"></use>
        </svg>
    </a>
    <section class="user-panel" role="user_expand_menu">
        <div class="user-panel_head">
            @auth
                <a class="user-panel__avatar" href="{{ route('profile', auth()->user()) }}">
                    <svg class="icon_userpic" viewBox="0 0 32 32">
                        <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_userpic"></use>
                    </svg>
                </a>
                <div class="user-panel__side">
                    <a class="user-panel__user-name" href="{{ route('profile', auth()->user()) }}">
                        {{ auth()->user() }}
                    </a>
                    <button class="btn btn_drop" role="expand_menu_trigger">
                        <svg class="icon_svg icon_arrow_down" viewBox="0 0 51 32">
                            <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_arrow_down"></use>
                        </svg>
                    </button>
                </div>
            @else
                <svg class="icon_svg icon_menu_lock" viewBox="0 0 32 32">
                    <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_menu_lock"></use>
                </svg>
                <a class="user-panel__login-link" href="auth/tmid?ret=@referer">Войти на сайт</a>
            @endauth
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
