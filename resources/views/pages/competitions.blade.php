@extends('layouts.app')
@section('title')
    Competitions
@endsection
@section('content')
    <div class="container">
        <div class="row justify-content-center my-3 my-lg-5">
            <div class="col-md-8 col-xl-9 mx-auto blog__component">
                @foreach ($posts as $post)
                    @if ($post->category->name == 'Competitions')
                        @include('inc.categories.post')
                    @else
                        <div class="card">
                            <div class="card-body">
                                <h3>Competitions not available at the moment</h3>
                            </div>
                        </div>
                    @endif
                @endforeach
            </div>
            @include('inc.sidenav')
        </div>
    </div>
@endsection
