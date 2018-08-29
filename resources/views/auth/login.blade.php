@extends('layouts.app')

@section('content')
    <b-container>
        <b-row class="justify-content-center mg-t-50">
            <b-col md="4">
                <div class="logo w-100 text-center mb-2">
                    <i class="do0k-dook"></i>
                </div>
                <b-card header-tag="header">
                    <h6 slot="header" class="mb-0">Login</h6>
                    <b-form action="{{ route('login') }}" method="POST" role="form" novalidate validated>
                        {{ csrf_field() }}
                        <b-form-group id="loginEmail"
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
                        <b-form-group id="loginPassword"
                                      label="Your Password:"
                                      label-for="passwordInput">
                            <b-form-input id="passwordInput"
                                          type="password"
                                          required
                                          name="password"
                                          class="{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                          placeholder="Enter Password ...">
                            </b-form-input>
                            @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                            @endif
                        </b-form-group>
                        <b-form-group id="loginOptions">
                            <b-form-checkbox-group id="rememberCheck">
                                <b-form-checkbox value="remember" name="remember" variant="success">Remember Me!</b-form-checkbox>
                            </b-form-checkbox-group>
                        </b-form-group>
                        <b-button type="submit" variant="outline-dark" block>Login</b-button>
                    </b-form>
                </b-card>

                <h5 class="text-center mt-3 forgot-text">
                    <a href="{{ route('password.request') }}" class="text-muted">
                        Forgot Password
                    </a>
                </h5>

            </b-col>
        </b-row>
    </b-container>
@endsection
