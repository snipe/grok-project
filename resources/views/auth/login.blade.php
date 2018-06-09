@extends('layouts.minimal')

@section('content')

    <div class="col col-login mx-auto">
        <form method="POST" class="card" action="{{ route('login') }}">
            @csrf
            <div class="card-body p-6">
                <div class="card-title">Login to your account</div>

                    <!-- email -->

                <!-- email -->
                <div class="form-group">
                    <label for="email" class="form-label">
                        {{ __('E-Mail Address') }}
                        <span class="form-required">*</span>
                    </label>
                    <div class="input-icon">
                        <span class="input-icon-addon">
                          <i class="fe fe-user"></i>
                        </span>
                        <input id="email" type="email" class="form-control{{ $errors->has('email') ? '  is-invalid state-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email" autofocus>
                    </div>

                        @if ($errors->has('email'))
                            <div class="invalid-feedback"> {{ $errors->first('email') }} </div>
                        @endif
                    </div>

                    <!-- password -->

                    <div class="form-group">
                        <label for="password" class="form-label">{{ __('Password') }}
                            <a href="{{ route('password.request') }}" class="float-right small">{{ __('Forgot Your Password?') }}</a>
                        </label>
                        <div class="input-icon">
                        <span class="input-icon-addon">
                          <i class="fe fe-lock"></i>
                        </span>
                        <input id="password" type="password" class="form-control{{ $errors->has('password') ? '  is-invalid state-invalid' : '' }}" name="password" value="{{ old('password') }}" autofocus>
                        </div>

                        @if ($errors->has('password'))
                            <div class="invalid-feedback"> {{ $errors->first('password') }} </div>
                        @endif
                    </div>

                <div class="form-group">
                    <label class="custom-control custom-checkbox">
                        <input type="checkbox" class="custom-control-input" name="remember" {{ old('remember') ? 'checked' : '' }}>
                        <span class="custom-control-label">{{ __('Remember Me') }}</span>
                    </label>
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Sign In') }}</button>
                </div>
            </div>
        </form>
        <div class="text-center text-muted">
            {{ __('Don\'t have an account yet?') }} <a href="{{ route('register') }}">{{ __('Sign Up') }}</a>

        </div>
    </div>

@endsection
