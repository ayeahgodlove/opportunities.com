@extends('layouts.app')
@section('title')
    Scholarships Opportunities
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center my-3 my-lg-5">
            <div class="col-md-8 col-xl-9 mx-auto blog__component">
                @foreach ($posts as $post)
                    @if ($post->category->name == 'Scholarships')
                        @include('inc.categories.post')
                    @endif
                @endforeach
            </div>
            @include('inc.sidenav')
        </div>
        @include('inc.social_media')
    </div>
@endsection
