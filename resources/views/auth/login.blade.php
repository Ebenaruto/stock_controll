@extends('layouts.app')

<body ng-app="mainModule" ng-controller="mainController">
    <div id="login-page" class="row">
        <div class="col s12 z-depth-6 card-panel">{{ __('Login') }}
          <form method="POST" action="{{ route('login') }}" class="login-form">
                        @csrf

            <div class="row">
            </div>
            <div class="row">
              <div class="input-field col s12">
                {{-- <i class="material-icons prefix">mail_outline</i> --}}
                <input id="email" type="email" class="validate @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
                <label for="email" data-error="wrong" data-success="right">{{ __('E-Mail Address') }}</label>
                @error('email')
                    <span class="invalid-feedback" role="alert">
                        <strong>{{ $message }}</strong>
                    </span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
                {{-- <i class="material-icons prefix">lock_outline</i> --}}
                <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password">
                <label for="password">{{ __('Password') }}</label>
                @error('password')
                        <span class="invalid-feedback" role="alert">
                                <strong>{{ $message }}</strong>
                        </span>
                @enderror
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12 m12 l12  login-text">
                <input class="form-check-input" type="checkbox" name="remember" id="remember-me" {{ old('remember') ? 'checked' : '' }}>
                  <label for="remember-me">{{ __('Remember-Me') }}</label>
              </div>
            </div>
            <div class="row">
              <div class="input-field col s12">
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
            <div class="row">
              <div class="input-field col s6 m6 l6">
                <p class="margin medium-small"><a href="#">Register Now!</a></p>
              </div>
              <div class="input-field col s6 m6 l6">
                  <p class="margin right-align medium-small"><a href="#">Forgot password?</a></p>
              </div>
            </div>

          </form>
        </div>
      </div> </body>

