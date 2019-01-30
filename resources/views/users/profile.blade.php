<header class="page-header" itemprop="member" itemscope="" itemtype="http://schema.org/Person">
    <div class="page-header__info">
        @include('users._avatar', ['user' => $user, 'class' => 'page-header__image'])

        <h1 class="page-header__title" itemprop="name">{{ $user }}</h1>

        <div class="page-header__subtitle" itemprop="jobTitle"></div>
    </div>
    <div class="page-header__stats">
        <ul class="inline-list inline-list_centered">
            <li class="inline-list__item inline-list__item_bordered">
                    <span class="mini-counter mini-counter_profile">
                      <div class="mini-counter__count mini-counter__count-contribution">
                        <a href="/help/rating" class="mini-counter__rating">
                          4295            </a>
                      </div>
                      <div class="mini-counter__value">вклад</div>
                    </span>
            </li>
            <li class="inline-list__item inline-list__item_bordered">
                <a href="{{ route('profile.questions', $user) }}" class="mini-counter">
                    <meta itemprop="interactionCount" content="{{ $user->questions()->count() }} questions">
                    <div class="mini-counter__count">{{ $user->questions()->count() }}</div>
                    <div class="mini-counter__value">вопросов</div>
                </a>
            </li>
            <li class="inline-list__item inline-list__item_bordered">
                <a href="{{ route('profile.answers', $user) }}" class="mini-counter mini-counter_profile">
                    <meta itemprop="interactionCount" content="5121 answers">
                    <div class="mini-counter__count">{{ $user->answers()->count() }}</div>
                    <div class="mini-counter__value">ответ</div>
                </a>
            </li>
            <li class="inline-list__item inline-list__item_bordered">
                    <span class="mini-counter mini-counter_profile">
                        <meta itemprop="interactionCount" content="27% solutions">
                        <div class="mini-counter__count mini-counter__count-solutions">27%</div>
                        <div class="mini-counter__value">решений</div>
                    </span>
            </li>
        </ul>
    </div>
</header>

<div class="page__tabs page__tabs_mobile" role="tabs_container">
  <span class="page__tabs-toggler" role="tabs_toggler">
    <svg class="icon_svg icon_arrow_down" viewBox="0 0 51 32">
      <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_arrow_down"></use>
    </svg>
  </span>
    <div class="page__tabs-subheader">
        <div class="page__tabs-title">
            Ответы
        </div>
    </div>
    <nav class="page__tabs_wrap" role="tabs_inner">
        <ul class="tabs tabs_mobile">
            @foreach(app('profileMenu')->getItems() as $item)

            <li class="tabs__item">
                <a class="tabs__link @if(app('profileMenu')->isActive($item))) tabs__link_active @endif"
                   href="{{ route($item['route'], $user) }}">
                    {{ $item['title'] }}
                </a>
            </li>

            @endforeach
        </ul>
    </nav>
</div>

<div class="page__body">
    {{ $slot }}
</div>
