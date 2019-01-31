@if ($paginator->hasPages())
    <ul class="paginator">
        @if (!$paginator->onFirstPage())
            <li class="paginator__item prev">
                <a href="{{ $paginator->previousPageUrl() }}" class='paginator__item-link'
                   rel="prev" aria-label="@lang('pagination.previous')">
                    @lang('pagination.previous')
                </a>
            </li>
        @endif

        @foreach ($elements as $element)
            @if (is_array($element))
                @foreach ($element as $page => $url)
                    @if ($page === $paginator->currentPage())
                        <li class="paginator__item current">
                            <span class="paginator__item-link">{{ $page }}</span>
                        </li>
                    @else
                        <li class="paginator__item">
                            <a class="paginator__item-link" href="{{ $url }}">{{ $page }}</a>
                        </li>
                    @endif
                @endforeach
            @endif
        @endforeach

        @if ($paginator->hasMorePages())
            <li class='paginator__item next'>
                <a href="{{ $paginator->nextPageUrl() }}" class='paginator__item-link' rel="next" aria-label="@lang('pagination.next')">@lang('pagination.next')</a>
            </li>
        @endif
    </ul>
@endif
