@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center mg-t-50">
        <div class="col-md-4">
            <div class="logo w-100 text-center mb-2">
                <i class="do0k-dook"></i>
            </div>
            @if (session('status'))
                <div class="alert alert-success" role="alert">
                    {{ session('status') }}
                </div>
            @endif
            <b-card header-tag="header">
                <h6 slot="header" class="mb-0">Forgot Password</h6>
                <b-form action="{{ route('password.email') }}" method="POST" role="form" novalidate validated>
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
                    <b-button type="submit" variant="outline-dark" block>Send Password Reset Link</b-button>
                </b-form>
            </b-card>

            <h5 class="text-center mt-3 forgot-text">
                <a href="{{ route('login') }}" class="text-muted">
                    <i class="do0k-arrow-left5"></i>
                    Back to Login
                </a>
            </h5>

        </div>
    </div>
    {{--<div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Reset Password') }}</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                    <form method="POST" action="{{ route('password.email') }}" aria-label="{{ __('Reset Password') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required>

                                @if ($errors->has('email'))
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $errors->first('email') }}</strong>
                                    </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Send Password Reset Link') }}
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
