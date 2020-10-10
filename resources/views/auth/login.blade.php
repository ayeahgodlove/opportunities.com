@extends('layouts.app')

@section('content')
    <div class="container login">
        <div class="row justify-content-center py-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header bg-secondary text-center font-weight-bold text-white text-uppercase">
                        {{ __('Login') }}
                    </div>

                    <div class="card-body">
                        <form method="POST" class="login-signup" id="login-form" action="{{ route('login') }}">
                            @csrf

                            <div class="form-group row">
                                <label for="email"
                                    class="col-md-4 col-form-label text-md-right"><b>{{ __('E-Mail') }}</b></label><br />

                                <div class="col-md-6">
                                    <input id="email" type="email" placeholder="Enter Your Email"
                                        class="form-control custom-input @error('email') is-invalid @enderror" name="email"
                                        value="{{ old('email') }}" required autocomplete="email" autofocus>
                                    <span class="fas fa-envelope fa-2x icon-span"></span>
                                    @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <label for="password"
                                    class="col-md-4 col-form-label text-md-right"><b>{{ __('Password') }}</b></label>

                                <div class="col-md-6">
                                    <input id="password" type="password" placeholder="Enter Your Password"
                                        class="form-control custom-input @error('password') is-invalid @enderror"
                                        name="password" required autocomplete="current-password">
                                    <span class="fas fa-key fa-2x icon-span"></span>
                                    @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                <div class="col-md-6 offset-md-4">
                                    <div class="form-check">
                                        <input class="form-check-input" type="checkbox" name="remember" id="remember"
                                            {{ old('remember') ? 'checked' : '' }}>

                                        <label class="form-check-label" for="remember">
                                            {{ __('Remember Me') }}
                                        </label>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group row mb-0">
                                <div class="col-md-8 offset-md-4">
                                    <button type="submit" class="btn btn-primary">
                                        {{ __('Login') }}
                                    </button>

                                    @if (Route::has('password.request'))
                                        <a class="btn btn-link" href="{{ route('password.request') }}">
                                            {{ __('Forgot Your Password?') }}
                                        </a>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    @endsection
