<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', 'Интересные вопросы') — Toster.ru</title>

    <meta charset="utf-8">

    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic&amp;subset=latin,cyrillic">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body style="">

<div class="layout">
    <div class="layout__canvas" id="js-canvas">

        @include('partials._navbar')

        <div class="layout__body">
            @include('partials._header')

            <div class="column column_wrap" role="wrap_section">
                <div class="column_main">
                    <div class="page">
                        <div class="flash-notices" role="notices_container_flash" style=""></div>

                        <div class="notices-container" role="notice_container"></div>


                            @yield('content')

                    </div>
                </div>

                @include('partials._sidebar')

            </div>
        </div>

        @include('partials._footer')

        <div class="popup__overlay hidden" role="popup auth_popup" data-default-title="Войдите на сайт">
            <div class="popup popup_auth">
                <div class="popup__body">
                    <div class="empty-block">
                        <div class="empty-block__inner">
                            <h3 class="empty-block__title icon_unauthorized" role="title_replace">
                                Войдите на сайт </h3>
                            <div class="empty-block__description" role="desc_replace">
                                Чтобы задать вопрос и получить на него квалифицированный ответ.
                            </div>
                            <a class="empty-block__button" href="auth/ac">
                                Войти через TM ID </a>
                        </div>
                    </div>
                </div>
                <button class="btn btn_link popup__close-btn" type="reset" role="btn_popup_close">
                    <span>Закрыть</span>
                </button>
            </div>
        </div>
    </div>
</div>

<div id="dfp_target" style="display: none">
    <var data-name="dev" data-values="0"></var>
    <var data-name="pagetype" data-values="main,feed"></var>
    <var data-name="feedtype" data-values="main,questions"></var>
    <var data-name="user" data-values="guest"></var>
</div>

<script src="https://dr.habracdn.net/toster/frontend.9a1aacaa-e500-4c39-aada-10e45dd55928.js"></script>

<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0"
    style="display: none;"></ul>
</body>

</html>
