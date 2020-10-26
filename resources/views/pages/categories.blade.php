@extends('layouts.app')
@section('title')
        {{ $posts->count() > 0 ? $posts[0]->category->name : 'Opportunities' }}
@endsection
@section('content')
    <div class="container py-3 py-lg-5">
        <div class="row justify-content-center">
            <form class="input-group" action="{{ url('/') }}" method="GET">
                <input type="text" class="form-control shadow-sm" name="search" id="search" value="{{ request()->query('search') }}" placeholder="Search...">
                <button type="submit" class="shadow-sm btn btn-warning btn-submit">Search</button>
            </form>
        </div>
        <div class="row justify-content-center align-items-center my-3 my-lg-5">
            @include('inc.sidenav')
            <div class="col-md-8 col-xl-9">
                <div class="row justify-content-start">
                    @include('inc.blogComponent')
                </div>
            </div>
        </div>

        {{-- @include('inc.social_media') --}}
    </div>
@endsection

@section('scripts')
    <!-- Go to www.addthis.com/dashboard to customize your tools -->
@endsection
