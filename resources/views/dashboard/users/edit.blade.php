@extends('dashboard.home')
@section('content1')
    <div class="card">
        <div class="card-header">
            <h5 class="text-center">{{ __('Personal Information') }}</h5>
        </div>
        <div class="card-body">
            @include('inc._partials.errors')
            <form action="{{route('users.update-profile')}}" method="POST">
                @csrf
                @method('PUT')
                <div class="form-group text-center">
                    <img src="{{ asset('img/avatar.png') }}" height="90px" width="90px" alt="">
                </div>
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" value="{{$user->name}}" class="form-control" />
                </div>
                <div class="form-group">
                    <label for="email">E-Mail Adress</label>
                    <input type="email" name="email" id="email" value="{{$user->email}}" class="form-control" />
                </div>
               
                <div class="form-group">
                    <label for="about">Bio</label>
                    <textarea name="about" id="about" class="form-control" cols="5" rows="5">
                        {{$user->about}}
                    </textarea>
                </div>
                
                <div class="form-group">
                    <input type="submit" value="Update Profile" class="btn btn-success btn-sm" />
                </div>
            </form>
        </div>
    </div>
@endsection
