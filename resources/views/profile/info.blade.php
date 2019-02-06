@extends('base')

@section('content')
    @component('users.profile', ['user' => $user])
        @if($user->about)
        <section class="section section_profile-info">
            <span>
                {{ $user->about }}
            </span>
        </section>
        @endif
    @endcomponent
@endsection
