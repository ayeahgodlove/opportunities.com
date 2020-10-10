@extends('_layout.app')
@section('content')
    <div class="container-fluid px-5 px-md-0 login">
        <div class="row align-items-center bg-white">

            <div class="col-7 d-none d-md-block">
                <img src="{{asset('img/writers.jpg')}}" class="img-fluid" alt="img-fluid">
            </div>

            <div class="col-md-4 px-3 px-lg-5 mx-lg-auto">
                <h2 class="h1 font-weight-bold text-black text-uppercase mb-4 mt-0">Login</h2>
                <form method="post" action="" class="login-signup" id="login-form">
                    <div class="form-group">
                        <input id="email" class="form-control custom-input" type="email" name="username"
                            placeholder="Enter your email">
                        <span class="fas fa-envelope fa-2x icon-span"></span>
                    </div>

                    <div class="form-group">
                        <input id="password" class="form-control custom-input" type="password" name="password"
                            placeholder="Password">
                        <span class="fas fa-key fa-2x icon-span"></span>
                    </div>

                    <div class="form-group">
                        <input type="submit" class="btn btn-block btn-info px-5 mt-4" name="login"
                            value="login" />
                        <p class="mt-3 text-center">
                            already have an acount?
                            <a href="register" type="submit" class="text-corporate-secondary">sign up</a>
                        </p>
                    </div>
                </form>

                <div class="form-group text-center">
                    <a href="forgot-password"><span class="small text-dark-green font-weight-bold"><u>i have forgotten my password</u></span></a>
                </div>
            </div>
        </div>
    </div>
@endsection
