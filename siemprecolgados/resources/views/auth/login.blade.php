@extends('layouts.app')

@section('content')
    @component('components.full-page-section')
        @component('components.card')
            @slot('title')
                {{ __('Login') }}
            @endslot

            <form method="POST" action="{{ route('login') }}">
                @csrf
                <div class="columns">
                    <div class="column is-one-third" style="margin-left:-15px">
                        <a href="{{route('login.google')}}" class="button is-primary">Entra con Google</a>
                    </div>
                        <div class="column is-one-third" style="margin-left:0px">
                        <a href="{{route('login.facebook')}}" class="button is-info">Entra con Facebook</a>
                    </div>
                        <div class="column is-one-third" style="margin-left:18px">
                        <a href="{{route('login.github')}}" class="button is-dark">Entra con Github</a>
                    </div>
                    
                </div>
                <p style="text-align: center"> - OR - </p>
                <br>

                <div class="field">
                    <label class="label" for="email">{{ __('E-Mail Address') }}</label>
                    <div class="control">
                        <input id="email" type="email" class="input @error('email') is-danger @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                    </div>
                    @error('email')
                        <p class="help is-danger" role="alert">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="field">
                    <label class="label" for="password">{{ __('Password') }}</label>
                    <div class="control">
                        <input id="password" type="password" class="input @error('password') is-danger @enderror" name="password" required autocomplete="current-password">
                    </div>
                    @error('password')
                        <p class="help is-danger" role="alert">
                            {{ $message }}
                        </p>
                    @enderror
                </div>

                <div class="field">
                    <div class="control">
                        <label class="checkbox">
                            <input type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>
                            {{ __('Remember Me') }}
                        </label>
                    </div>
                </div>

                <hr>

                <div class="field is-grouped">
                    <div class="control">
                        <button type="submit" class="button is-primary">
                            {{ __('Login') }}
                        </button>
                        <a href="/password/reset" class="button is-light"> ??Olvidastes la contrase??a? </a>
                    </div>
                </div>
            </form>
        @endcomponent
    @endcomponent
@endsection
