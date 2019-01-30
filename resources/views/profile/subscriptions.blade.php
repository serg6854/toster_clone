@extends('base')

@section('content')
    @component('users.profile', ['user' => $user])

        <div class="page__filters page__filters_second-lavel" role="filters_container">
            <span class="page__filters-toggler" role="filter_toggler">
                <svg class="icon_svg icon_arrow_down" viewBox="0 0 51 32">
                    <use xlink:href="https://toster.ru/images/sprite_0.1.svg#icon_arrow_down"></use>
                </svg>
            </span>
            <div class="page__filters-subheader">
                <div class="page__filters-title">
                    Вопросы
                </div>
            </div>
            <nav class="page__filters_wrap" role="filters_inner">
                <ul class="filters-menu filters-menu_mobile">
                    <li class="filters-menu__item">
                        <a class="filters-menu__link  filters-menu__link_active"
                           href="https://toster.ru/user/webinar/iquestions">
                            Вопросы
                        </a>
                    </li>
                    <li class="filters-menu__item">
                        <a class="filters-menu__link " href="https://toster.ru/user/webinar/tags">
                            Теги
                        </a>
                    </li>
                </ul>
            </nav>
        </div>

        @include('questions.list', ['questions' => $user->subsciptions])
    @endcomponent
@endsection
