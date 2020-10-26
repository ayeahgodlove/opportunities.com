@extends('dashboard.home')
@section('content1')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>{{ __('Create About') }}</h5>
        {{-- <a href="{{ route('abouts.create') }}" class="btn btn-success btn-sm">Create About</a> --}}
    </div>
    <div class="card-body">
        <form action="{{isset($abouts) ? route('abouts.update', $abouts->id) : route('abouts.store')}}" method="POST">
            <div class="form-group">
                <label for="content">Content</label>
                <textarea type="text" name="content" id="content" rows="5" class="form-control"></textarea>
            </div>
            <div class="form-group">
                <label for="tel">Telephone</label>
                <input type="text" name="tel" id="tel"class="form-control">
            </div>
            <div class="form-group">
                <label for="email">Email</label>
                <input type="text" name="email" id="email"class="form-control">
            </div>
            <div class="form-group">
                <label for="location">Location</label>
                <input type="text" name="location" id="location"class="form-control">
            </div>
            <div class="form-group">
                <button class="btn btn-success">Create About</button>
            </div>
        </form>
    </div>
</div>
@endsection