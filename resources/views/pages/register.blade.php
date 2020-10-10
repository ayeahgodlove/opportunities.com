@extends('_layout.app')
@section('content')
    <div class="container-fluid px-5 px-md-0 signup">
        <div class="row align-items-center bg-white">

            <div class="col-7 d-none d-md-block"> 
                <img src="{{asset('img/singer.jpg')}}" class="img-fluid" alt="hero image">
            </div>

            <div class="col-md-4 px-3 px-md-5 mt-3 mt-md-5 mx-lg-auto">
                <h2 class="h1 text-black font-weight-bold text-uppercase mb-4">Sign up</h2>
                <form method="post" action="" class="login-signup" id="signup-form">
                    <div class="form-group">
                        <input id="username" class="form-control custom-input" type="text" name="username"
                            placeholder="Enter your name">
                        <span class="fas fa-user fa-2x icon-span"></span>
                    </div>

                    <div class="form-group">
                        <input id="email" class="form-control custom-input" type="email" name="email"
                            placeholder="Email address">
                        <span class="fas fa-envelope fa-2x icon-span"></span>
                    </div>

                    <div class="form-group">
                        <input id="password" class="form-control custom-input" type="password" name="password"
                            placeholder="Create a password">
                        <span class="fas fa-key fa-2x icon-span"></span>
                    </div>

                    <div class="form-group">

                        <input type="submit" class="btn btn-block btn-info px-5 mt-4" name="sign-up"
                            value="sign up" />
                        <!-- <a href="requests/signup.php" type="submit" name="sign-up" class="btn btn-block btn-custom btn-custom-green px-5 mt-4">sign up</a> -->
                        <p class="mt-3 text-center">
                            already have an acount?
                            <a href="login" type="submit" class="text-corporate-secondary">login</a>
                        </p>
                    </div>
                </form>
            </div>
        </div>
    </div>

@endsection
