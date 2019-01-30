@extends('base')

@section('content')
    @component('users.profile', ['user' => $user])
        Profile
    @endcomponent
@endsection
