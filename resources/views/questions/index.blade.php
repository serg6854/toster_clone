<div class="page__filters page__filters_mobile" role="filters_container">
        <span class="page__filters-toggler" role="filters_toggler">
            <svg class="icon_svg icon_arrow_down" viewBox="0 0 51 32">
                <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_arrow_down"></use>
            </svg>
        </span>

    <div class="page__filters-subheader">
        <div class="page__filters-title">
            Интересные
        </div>
    </div>

    <nav class="page__filters_wrap" role="filters_inner">
        <ul class="filters-menu filters-menu_mobile">
            <li class="filters-menu__item">
                <a href="{{ route('questions.latest') }}" class="filters-menu__link @if(request()->routeIs('questions.latest')) filters-menu__link_active @endif">Новые вопросы</a>
            </li>
            <li class="filters-menu__item">
                <a href="questions/interesting"
                   class="filters-menu__link @if(request()->routeIs('questions.interesting')) filters-menu__link_active @endif">Интересные</a>
            </li>
            <li class="filters-menu__item">
                <a href="{{ route('questions.without_answer') }}" class="filters-menu__link @if(request()->routeIs('questions.without_answer')) filters-menu__link_active @endif ">Без ответа</a>
            </li>
        </ul>
    </nav>

    <button class="btn btn_complexity-filter" href="#" role="cmplx-filters-trigger" title="Выбрать уровень сложности вопроса">
            <span class="svg-icon_filter-level ">
                <svg class="svg-icon" width="51" height="32" viewBox="0 0 51 32">
                    <path d="M20.806 24.295c-1.767 2.88-.575 5.249 1.874 6.579s5.227 1.116 6.994-1.763 12.92-28.574 11.95-29.102c-.971-.526-19.051 21.406-20.818 24.285zm4.794-18.301c1.119 0 2.213.091 3.279.261 1.122-1.32 2.377-2.776 3.599-4.159-2.182-.594-4.486-.917-6.878-.917-14.355 0-25.6 11.386-25.6 25.921 0 .894.042 1.789.125 2.66.126 1.325 1.383 2.3 2.777 2.185 1.409-.118 2.448-1.288 2.322-2.613-.069-.73-.104-1.48-.104-2.232 0-11.835 8.996-21.105 20.48-21.105zm18.479 3.008c-.714 1.805-1.47 3.646-2.135 5.237 2.603 3.537 4.135 7.979 4.135 12.859 0 .763-.036 1.529-.109 2.276-.128 1.324.91 2.496 2.318 2.617l.235.01c1.309 0 2.425-.94 2.546-2.189.086-.891.13-1.804.13-2.712 0-7.108-2.694-13.458-7.121-18.096z"></path></svg>
            </span>
        <span class="btn__text">Сложность</span>
    </button>
</div>

<div class="page__body">

    @include('questions.list', ['questions' => $questions])

    <div class="popup__overlay hidden" role="complexity_filter_popup popup">
        <div class="popup popup_answer_abuse">
            <div class="popup__header">
                Выберите сложность
            </div>
            <div class="popup__body">
                <form class="form form_popup validateble">
                    <ul class="menu menu_popup">
                        <li class="menu__item">
                            <label class="checkbox checkbox_flat">
                                <input type="checkbox" name="complexities[]" value="2"
                                       checked="">
                                <svg class="icon_form icon_check" viewBox="0 0 45 32">
                                    <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_check"></use>
                                </svg>
                                <span class="checkbox__label">Простой</span>
                            </label>
                        </li>
                        <li class="menu__item">
                            <label class="checkbox checkbox_flat">
                                <input type="checkbox" name="complexities[]" value="3"
                                       checked="">
                                <svg class="icon_form icon_check" viewBox="0 0 45 32">
                                    <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_check"></use>
                                </svg>
                                <span class="checkbox__label">Средний</span>
                            </label>
                        </li>
                        <li class="menu__item">
                            <label class="checkbox checkbox_flat">
                                <input type="checkbox" name="complexities[]" value="4"
                                       checked="">
                                <svg class="icon_form icon_check" viewBox="0 0 45 32">
                                    <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_check"></use>
                                </svg>
                                <span class="checkbox__label">Сложный</span>
                            </label>
                        </li>
                    </ul>
                    <div class="form__buttons popup__button">
                        <button class="btn btn_outline_green" type="button">Применить</button>
                    </div>
                </form>
            </div>
            <button class="btn btn_link popup__close-btn" type="reset" role="btn_popup_close">
                <span>Закрыть</span>
            </button>
        </div>
    </div>
</div>
