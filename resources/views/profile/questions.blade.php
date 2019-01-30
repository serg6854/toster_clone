@extends('base')

@section('title', 'Вопросы пользователя ' . $user)

@section('content')
    @component('users.profile', ['user' => $user])

        <ul class="content-list" role="content-list">
            @foreach($questions as $question)

                @include('questions.short', ['question' => $question])

            @endforeach
        </ul>

        {{ $questions->links() }}
    @endcomponent
@endsection
