@extends('base')

@section('content')
    <div class='page__body'>
        <form method="POST" action="{{ route('login') }}" class='form'>
            @csrf

            <ul class='fields-list'>
                <li class='fields-list__item field'>
                    <label class="field__label">{{ __('E-Mail Address') }}</label>
                    <div class="field__content" role="field_content">
                        <input id="email" type="email" class="field__input {{ $errors->has('email') ? ' is-invalid' : '' }}"
                               name="email"
                               value="{{ old('email') }}"
                               required
                               autofocus>

                    </div>
                </li>
                <li class='fields-list__item field'>
                    <label class="field__label">{{ __('Password') }}</label>
                    <div class="field__content" role="field_content">
                        <input id="password" type="password" class="field__input {{ $errors->has('password') ? ' is-invalid' : '' }}"
                               name="password" value="{{ old('password') }}" required autofocus>

                    </div>
                </li>
                <li class="fields-list__item field">
                    <div class="field__label field__label_notices">{{ __('Remember me') }}</div>
                    <div class="field__checking">
                        <label class="checkbox checkbox_flat">
                            <input type="checkbox" name="remember" value="1" {{ old('remember') ? 'checked' : '' }}>
                            <svg class="icon_form icon_check" viewBox="0 0 45 32">
                                <use xlink:href="{{ asset('images/sprite_0.1.svg') }}#icon_check"></use>
                            </svg>
                        </label>
                    </div>
                </li>
            </ul>

            <div class="form-group row mb-0">
                <div class="col-md-8 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ __('Login') }}
                    </button>

                    @if (Route::has('password.request'))
                        <a class="btn btn-link" href="{{ route('password.request') }}">
                            {{ __('Forgot Your Password?') }}
                        </a>
                    @endif
                </div>
            </div>
        </form>
    </div>
@endsection
