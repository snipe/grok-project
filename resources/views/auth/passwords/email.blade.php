@extends('layouts.minimal')

@section('content')

    <div class="col col-login mx-auto">
        <form method="POST" class="card" action="{{ route('password.email') }}">
            @csrf
            <div class="card-body p-6">


                @if (session('status'))
                    <div class="alert alert-success">
                        {{ session('status') }}
                    </div>
                @endif


                    <!-- email -->

                <div class="form-group">
                    <label for="email" class="form-label">
                        {{ __('E-Mail Address') }}
                        <span class="form-required">*</span>
                    </label>
                    <input id="email" type="email" class="form-control{{ $errors->has('email') ? '  is-invalid state-invalid' : '' }}" name="email" value="{{ old('email') }}" placeholder="Enter email" autofocus>

                    @if ($errors->has('email'))
                        <div class="invalid-feedback"> {{ $errors->first('email') }} </div>
                    @endif
                </div>

                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">{{ __('Send Password Reset Link') }}</button>
                </div>
            </div>
        </form>
        <div class="text-center text-muted">
            Don't have account yet? <a href="{{ route('register') }}">Sign up</a>

        </div>
    </div>

@endsection
