@extends('base')

@section('content')
    @include('questions.list', ['questions' => $questions])
@endsection
