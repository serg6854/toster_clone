<!doctype html>
<html lang='en'>
<head>
    <title>@yield('title', 'Интересные вопросы') — {{ ucfirst(config('app.url')) }}</title>

    <meta charset="utf-8">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <meta name="viewport"
          content="width=device-width, height=device-height, initial-scale=1.0, user-scalable=0, minimum-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=PT+Sans:400,700,400italic&amp;subset=latin,cyrillic">
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">

</head>

<body style="">

<div class="layout" id='app'>
    <div class="layout__canvas" id="js-canvas">

        @include('partials._navbar')

        <div class="layout__body">
            @include('partials._header')

            <div class="column column_wrap" role="wrap_section">
                <div class="column_main">
                    <div class="page">
                        <div class="flash-notices" role="notices_container_flash" style=""></div>

                        <div class="notices-container" role="notice_container">

                            @if($errors->any())
                                <div class="alert alert_error">
                                    <ul>
                                        @foreach($errors->all() as $error)
                                            <li>{{ $error }}</li>
                                        @endforeach
                                    </ul>
                                </div>
                            @endif

                        </div>

                        @hasSection('page_title')
                        <header class="page__header">
                            <h1 class="page__header-title">
                                @yield('page_title', 'Foobar')
                            </h1>
                        </header>
                        @endif

                        @yield('content')

                    </div>
                </div>

                <aside class="column_sidebar">

                    @section('sidebar')
                        @include('partials._sidebar')
                    @show

                </aside>

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

<ul class="ui-autocomplete ui-front ui-menu ui-widget ui-widget-content ui-corner-all" id="ui-id-1" tabindex="0"
    style="display: none;"></ul>

@section('js')
    <script src='{{ asset('js/app.js') }}'></script>
@show

</body>

</html>
