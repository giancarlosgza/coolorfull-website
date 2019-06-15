@extends('layouts.app')
@section('title', 'Reset')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-sm-12 col-md-12">
            <div class="card card-form">
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-4 col-lg-4 text-center login-img">
                            <img src="{{ asset ('/assets/img/illustrations/password.svg') }}" width="60%"
                                alt="auth">
                        </div>
                        <div class="col-md-12 col-lg-8">
                            <h3 class="logo text-center text-indigo">Colorffy</h3>
                            <h4 class="text-center">{{ __('Reset Password') }}</h4>
                            <br>
                            @if (session('status'))
                            <div class="alert alert-success" role="alert">
                                {{ session('status') }}
                            </div>
                            @endif
                            <form method="POST" action="{{ route('password.email') }}">
                                @csrf
                                <div class="row justify-content-center">
                                    <div class="col-md-8">
                                        <div class="form-group">
                                            <label for="email"><i class="fas fa-user"></i>
                                                {{ __('E-Mail') }}</label>
                                            <input id="email" type="email"
                                                class="form-mat-g form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                                name="email" value="{{ old('email') }}" required>
                                            @if ($errors->has('email'))
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $errors->first('email') }}</strong>
                                            </span>
                                            @endif
                                        </div>
                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary shadow-medium">
                                                {{ __('Send Password Reset Link') }}
                                            </button>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
