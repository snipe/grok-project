@extends('layouts.minimal')

@section('content')
    <div class="col col-login mx-auto">
        <form method="POST" class="card" action="{{ route('register') }}">
            @csrf
            <div class="card-body p-6">
                <div class="card-title">{{ __('Register') }}</div>

                <!-- name -->
                <div class="form-group">
                    <label for="name" class="form-label">{{ __('Name') }}<span class="form-required">*</span></label>
                    <input id="name" type="text" class="form-control{{ $errors->has('name') ? '  is-invalid state-invalid' : '' }}" name="name" value="{{ old('name') }}" placeholder="Enter name" autofocus>

                    @if ($errors->has('name'))
                        <div class="invalid-feedback"> {{ $errors->first('name') }} </div>
                    @endif
                </div>

                <!-- name -->
                <div class="form-group">
                    <label for="company_name" class="form-label">
                        {{ __('Company Name') }}
                        <span class="form-required">*</span>
                    </label>
                    <input id="company_name" type="text" class="form-control{{ $errors->has('company_name') ? '  is-invalid state-invalid' : '' }}" name="company_name" value="{{ old('company_name') }}" placeholder="Enter Company Name" autofocus>

                    @if ($errors->has('company_name'))
                        <div class="invalid-feedback"> {{ $errors->first('company_name') }} </div>
                    @endif
                </div>


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

                <!-- password -->
                <div class="form-group">
                    <label for="password" class="form-label">
                        {{ __('Password') }}
                        <span class="form-required">*</span>
                    </label>
                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? '  is-invalid state-invalid' : '' }}" name="password" value="{{ old('password') }}" autofocus>

                    @if ($errors->has('password'))
                        <div class="invalid-feedback"> {{ $errors->first('password') }} </div>
                    @endif
                </div>

                <!-- confirm password -->
                <div class="form-group">
                    <label for="password_confirmation" class="form-label">
                        {{ __('Confirm Password') }}
                        <span class="form-required">*</span>
                    </label>

                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" {{ $errors->has('password_confirmation') ? '  is-invalid state-invalid' : '' }}>

                    @if ($errors->has('password_confirmation'))
                        <div class="invalid-feedback"> {{ $errors->first('password_confirmation') }} </div>
                    @endif
                </div>



                <div class="form-footer">
                    <button type="submit" class="btn btn-primary btn-block">Sign in</button>
                </div>
            </div>
        </form>
        <div class="text-center text-muted">
            Already have an account? <a href="{{ route('login') }}">Login</a>

        </div>
    </div>


@endsection
