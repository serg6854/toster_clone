@extends('base')

@section('page_title', 'Пользователи')

@section('content')
    <div class='page__body'>
        @include('users.list', ['users' => $users])
    </div>
@endsection

@section('sidebar')
    <dl class="panel-heading panel-heading_inner" role="most_interest">
        <dt class="panel-heading__title panel-heading__title_underline">
            Самые активные сегодня
        </dt>
    </dl>
@endsection
