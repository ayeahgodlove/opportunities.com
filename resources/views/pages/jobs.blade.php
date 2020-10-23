@extends('layouts.app')
@section('title')
    Job Opportunities
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center align-items-center my-3 my-lg-5">
            <div class="col-md-8 col-xl-9 mx-auto blog__component">
                @foreach ($posts as $post)
                        @include('inc.categories.post')
                @endforeach
            </div>
            @include('inc.sidenav')
        </div>

        @include('inc.social_media')
    </div>
@endsection
