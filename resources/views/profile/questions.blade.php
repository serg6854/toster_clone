@extends('base')

@section('title', 'Вопросы пользователя ' . $user)

@section('content')
    @component('users.profile', ['user' => $user])

        @include('questions.list')

    @endcomponent
@endsection
