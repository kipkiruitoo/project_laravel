@extends('layouts.app')

@section('content')
<div class="container">
    <div class="columns m-t-100">
        <div class="column is-one-third is-offset-one-third">
            <div class="card">
                <div class="card-header m-l-10"> <h1 class="title">{{ __('Register') }}</h1></div>

                <div class="card-content">
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="control">
                            <label for="name" class="label">{{ __('Name') }}</label>

                            <div class="col-md-6">
                                <input id="name" type="text" class="input{{ $errors->has('name') ? ' is-invalid' : '' }}" name="name" value="{{ old('name') }}" required autofocus>

                                @if ($errors->has('name'))
                                    <span class="help is-danger">
                                        <strong>{{ $errors->first('name') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="control">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="help is-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="control">
                            <label for="password" class="label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="input{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help is-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="control">
                            <label for="password-confirm" class="label">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="input" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="control m-t-15">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="button is-link is-outlined is-fullwidth">
                                    {{ __('Register') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
