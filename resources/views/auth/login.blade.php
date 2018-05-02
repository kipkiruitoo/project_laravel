@extends('layouts.app')

@section('content')
{{-- <section class="hero is-primary">
        <div class="hero-body">
          <div class="container">
            <h1 class="title">
              Primary title
            </h1>
            <h2 class="subtitle">
              Primary subtitle
            </h2>
          </div>
        </div>
      </section> --}}
<div class="container">
    <div class="columns m-t-100">
        <div class="column is-one-third is-offset-one-third">
            <div class="card">
                <div class="card-header m-t-10 m-l-10"> <h1 class="title">{{ __('Login') }}</h1></div>

                <div class="card-content">
                    <form method="POST" action="{{ route('login') }}">
                        @csrf

                        <div class="control">
                            <label for="email" class="label">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="input {{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="help is-danger">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="control m-t-10">
                            <label for="password" class="label">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="input {{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="help is-danger">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="control m-t-10">
                            <div class="col-md-6 offset-md-4">
                                <div >
                                    <label class="checkbox">
                                        <input type="checkbox" class="checkbox" name="remember" {{ old('remember') ? 'checked' : '' }}> {{ __('Remember Me') }}
                                    </label>
                                </div>
                            </div>
                        </div>

                        <div class="control m-t-10">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="button is-link is-outlined is-fullwidth">
                                    {{ __('Login') }}
                                </button>

                                <a class="btn btn-link" href="{{ route('password.request') }}">
                                    {{ __('Forgot Your Password?') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
