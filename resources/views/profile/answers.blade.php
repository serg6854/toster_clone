@extends('base')

@section('title', 'Ответы пользователя ' . $user)

@section('content')
    @component('users.profile', ['user' => $user])

        @foreach($user->answers as $answer)
            @include('answers.item', ['includeComments' => false])
        @endforeach

    @endcomponent
@endsection
