@extends('base')

@section('content')
    @component('users.profile', ['user' => $user])

        <ul class="content-list" role="content-list">
            @foreach($questions as $question)

                @include('questions.short', ['question' => $question])

            @endforeach
        </ul>

        {{ $questions->links() }}

        <ul class="paginator">
            <li class="paginator__item current">
                <span class="paginator__item-link">1</span>
            </li>
            <li class="paginator__item">
                <a class="paginator__item-link" href="https://toster.ru/user/Jump/answers?page=2">2</a>
            </li>
            <li class="paginator__item">
                <a class="paginator__item-link" href="https://toster.ru/user/Jump/answers?page=3">3</a>
            </li>
            <li class="paginator__item">
                <a class="paginator__item-link" href="https://toster.ru/user/Jump/answers?page=4">4</a>
            </li>
            <li class="paginator__item">
                <a class="paginator__item-link" href="https://toster.ru/user/Jump/answers?page=5">5</a>
            </li>
            <li class="paginator__item">
                <a class="paginator__item-link" href="https://toster.ru/user/Jump/answers?page=6">6</a>
            </li>
            <li class="paginator__item">
                <a class="paginator__item-link" href="https://toster.ru/user/Jump/answers?page=7">7</a>
            </li>
            <li class="paginator__item">
                <a class="paginator__item-link" href="https://toster.ru/user/Jump/answers?page=8">8</a>
            </li>
            <li class="paginator__item">
                <a class="paginator__item-link" href="https://toster.ru/user/Jump/answers?page=9">9</a>
            </li>
            <li class="paginator__item">
                <a class="paginator__item-link" href="https://toster.ru/user/Jump/answers?page=10">10</a>
            </li>
            <li class="paginator__item">
                <a class="paginator__item-link" href="https://toster.ru/user/Jump/answers?page=11">11</a>
            </li>
            <li class="paginator__item next">
                <a class="paginator__item-link" href="https://toster.ru/user/Jump/answers?page=2">Следующие →</a>
            </li>
        </ul>
    @endcomponent
@endsection
