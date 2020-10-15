@extends('dashboard.home')
@section('account')
    <div class="card">
        <div class="card-header">
            <h5 class="text-center">{{__('Personal Information')}}</h5>
        </div>
        <div class="card-body">
            <form action="">
                <div class="form-group text-center">
                    <img src="{{asset('img/avatar.png')}}" height="90px" width="90px" alt="">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" value="" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="email">E-Mail Adress</label>
                    <input type="email" value="" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="text" value="" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="password">Confirm Password</label>
                    <input type="text" value="" class="form-control" />
                </div>
                <div class="form-group">
                    <input type="submit" value="Update Information" class="btn btn-success btn-sm" />
                </div>
            </form>
        </div>
    </div>
@endsection