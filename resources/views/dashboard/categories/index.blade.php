@extends('dashboard.home')
@section('categories')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>{{ __('Categories') }}</h5>
            <a href="{{route('categories.create')}}" class="btn btn-success btn-sm">Add Category</a>
        </div>
        <div class="card-body">

        </div>
    </div>
@endsection