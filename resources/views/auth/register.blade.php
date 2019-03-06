@extends('layouts.app')
@section('title', 'Register')
@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-8">
            <div class="card card-form">
                <div class="card-body">
                    <h4 class="logo text-center color-blue">Colorffy</h4>
                    <h5 class="text-center">Register</h5>
                    <br>
                    <form method="POST" action="{{ route('register') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Name') }}</label>
                            <div class="col-md-6">
                                <input id="name" type="text" class="form-control{{ $errors->has('name') ? ' is-invalid' : '' }}"
                                    name="name" value="{{ old('name') }}" required autofocus>
                                @if ($errors->has('name'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('name') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="username" class="col-md-4 col-form-label text-md-right">{{ __('Username') }}</label>
                            <div class="col-md-6">
                                <input id="username" type="text" class="form-control{{ $errors->has('username') ? ' is-invalid' : '' }}"
                                    name="username" value="{{ old('username') }}" required autofocus>
                                @if ($errors->has('username'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('username') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('E-Mail Address') }}</label>
                            <div class="col-md-6">
                                <input id="email" type="email" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}"
                                    name="email" value="{{ old('email') }}" required>
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
                                <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}"
                                    name="password" required>
                                @if ($errors->has('password'))
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $errors->first('password') }}</strong>
                                </span>
                                @endif
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password-confirm" class="col-md-4 col-form-label text-md-right">{{ __('Confirm
                                Password') }}</label>
                            <div class="col-md-6">
                                <input id="password-confirm" type="password" class="form-control" name="password_confirmation"
                                    required>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary button-block shadow-medium">
                                    {{ __('Register') }}
                                </button>
                                <hr>
                                <a class="btn btn-link" href="{{ route('login') }}">
                                    {{ __('Already have an account? Login!') }}
                                </a>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
        <div class="col-md-4">
            <div class="card card-form">
                <div class="card-body">
                    <h5 class="bold">Join Colorffy and become Pro</h5>
                    <hr>
                    <h5>❤️ Save your <strong>favorites gradients</strong></h5>
                    <h5>💚 Save your <strong>favorites palettes</strong></h5>
                    <h5>👓 Access to <strong>color blindness</strong> filter</h5>
                    <h5>🙆‍♂️ <strong>Save gradients</strong> created with generators</h5>
                    <h5>🎨 <strong>Preview icons</strong> with color palettes</h5>
                    <h5>🎁 <strong>Access</strong> to icons, backgrounds and illustrations (maybe)</h5>
                    <h5>📧 Do you want some <strong>feature? <a href="mailto:colorffy@gmail.com" class="color-darkblue" title="Contact Us">request here!</a></strong></h5>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
