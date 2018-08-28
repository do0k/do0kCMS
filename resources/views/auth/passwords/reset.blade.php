@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mg-t-50">
        <div class="col-md-4">
            <div class="logo w-100 text-center mb-2">
                <i class="do0k-dook"></i>
            </div>
            <b-card header-tag="header">
                <h6 slot="header" class="mb-0">Register</h6>
                <b-form action="{{ route('register') }}" method="POST" role="form" novalidate validated>
                    {{ csrf_field() }}
                    <input type="hidden" name="token" value="{{ $token }}">

                    <b-form-group id="registerEmail"
                                  label="Email address:"
                                  label-for="emailInput">
                        <b-form-input id="emailInput"
                                      type="email"
                                      required
                                      name="email"
                                      class="{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                      placeholder="Enter email ...">
                        </b-form-input>
                        @if ($errors->has('email'))
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('email') }}</strong>
                                </span>
                        @endif
                    </b-form-group>
                    <b-form-group id="registerPassword"
                                  label="Your Password:"
                                  label-for="passwordInput">
                        <b-form-input id="passwordInput"
                                      type="password"
                                      required
                                      name="password"
                                      class="{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                      placeholder="Enter Password ...">
                        </b-form-input>
                        @if ($errors->has('password'))
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                        @endif
                    </b-form-group>
                    <b-form-group id="registerPassword"
                                  label="Confirm Password:"
                                  label-for="cPasswordInput">
                        <b-form-input id="cPasswordInput"
                                      type="password"
                                      required
                                      name="password_confirmation"
                                      class="{{ $errors->has('password_confirmation') ? ' is-invalid' : '' }}"
                                      placeholder="Enter Password ...">
                        </b-form-input>
                        @if ($errors->has('password_confirmation'))
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password_confirmation') }}</strong>
                                </span>
                        @endif
                    </b-form-group>
                    <b-button type="submit" variant="outline-dark" block>Register</b-button>
                </b-form>
            </b-card>

            <h5 class="text-center mt-3 forgot-text">
                <a href="{{ route('login') }}" class="text-muted">
                    Forgot Password
                </a>
            </h5>
        </div>
    </div>

    {{--<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('password.request') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <input type="hidden" name="token" value="{{ $token }}">

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ $email ?? old('email') }}" required autofocus>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>

                                @if ($errors->has('password'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('password') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Reset Password') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>--}}
</div>
@endsection
