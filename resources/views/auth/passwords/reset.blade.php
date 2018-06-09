@extends('layouts.minimal')

@section('content')

    <div class="col col-login mx-auto">
        <form method="POST" class="card" action="{{ route('password.request') }}">
            <input type="hidden" name="token" value="{{ $token }}">

            @csrf
            <div class="card-body p-6">
                <div class="card-title">{{ __('Reset Password') }}</div>

                <!-- email -->

                <div class="form-group">
                    <label for="email" class="form-label">{{ __('E-Mail Address') }}</label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? '  is-invalid state-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email" autofocus>

                    @if ($errors->has('email'))
                        <div class="invalid-feedback"> {{ $errors->first('email') }} </div>
                    @endif
                </div>

                <!-- password -->
                <div class="form-group">
                    <label for="password" class="form-label">{{ __('Password') }}
                    </label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? '  is-invalid state-invalid' : '' }}" name="password" value="{{ old('password') }}" autofocus>

                    @if ($errors->has('password'))
                        <div class="invalid-feedback"> {{ $errors->first('password') }} </div>
                    @endif
                </div>

                <!-- confirm password -->
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">{{ __('Confirm Password') }}
                    </label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" {{ $errors->has('password_confirmation') ? '  is-invalid state-invalid' : '' }}>

                    @if ($errors->has('password_confirmation'))
                        <div class="invalid-feedback"> {{ $errors->first('password_confirmation') }} </div>
                    @endif
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Reset Password') }}</button>
                </div>
            </div>
        </form>

    </div>

@endsection
