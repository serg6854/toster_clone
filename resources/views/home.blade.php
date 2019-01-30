@extends('base')

@section('page_title')Все вопросы@endsection

@section('content')
    @include('questions.index', ['questions' => $questions])
@endsection
