@extends('layouts.app')
@section('title', 'Login')
@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-form">
                <div class="card-body">
                    <h4 class="logo text-center color-blue">Colorffy</h4>
                    <h5 class="text-center">Login</h5>
                    <br>
                    <form method="POST" action="{{ route('login') }}">
                        @csrf
                        <div class="row justify-content-center">
                            <div class="col-md-8">    
                                <div class="form-group">
                                    <label for="email" class="bold"><i class="fas fa-user"></i> {{ __('E-Mail or Username') }}</label>   
                                    <input id="email" type="text" class="form-control{{ $errors->has('email') ? ' is-invalid' : '' }}" name="email" value="{{ old('email') }}" required autofocus>
                                    @if ($errors->has('email'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('email') }}</strong>
                                        </span>
                                    @endif       
                                </div>

                                <div class="form-group">
                                    <label for="password" class="bold"><i class="fas fa-lock"></i> {{ __('Password') }}</label>
                                    <input id="password" type="password" class="form-control{{ $errors->has('password') ? ' is-invalid' : '' }}" name="password" required>
                                    @if ($errors->has('password'))
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $errors->first('password') }}</strong>
                                        </span>
                                    @endif               
                                </div>
                    
                                <div class="form-group">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember" {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>

                                <div class="form-group">
                                        <button type="submit" class="btn btn-primary button-block shadow-medium">
                                            {{ __('Login') }}
                                        </button>
                                        <br class="btn-return"><br class="btn-return">
                                        @if (Route::has('password.request'))
                                            <a class="btn btn-link" href="{{ route('password.request') }}">
                                                {{ __('Forgot Your Password?') }}
                                            </a>
                                        @endif<hr>
                                        <a class="btn btn-link" href="/register">Create your account!</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
