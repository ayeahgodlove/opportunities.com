@extends('dashboard.home')
@section('posts')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>{{ __('Posts') }}</h5>
            <a href="{{route('posts.create')}}" class="btn btn-success btn-sm">Add Category</a>
        </div>
        <div class="card-body">

        </div>
    </div>
@endsection
