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
                    <b-form-group id="registerName"
                                  label="Name:"
                                  label-for="nameInput">
                        <b-form-input id="nameInput"
                                      type="text"
                                      required
                                      name="name"
                                      class="{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                      placeholder="Enter Your Name ...">
                        </b-form-input>
                        @if ($errors->has('name'))
                            <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                        @endif
                    </b-form-group>
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
</div>
@endsection
