@extends('layouts.app')

@section('content')
<div class="container">
    @if (session()->has('success'))
        <div class="alert alert-success mt-3">
            {{ session()->get('success') }}
        </div>
    @endif
    <div class="row justify-content-center py-5">
        {{-- sidebar --}}
        <div class="col-md-4">
            <div class="card">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="{{route('posts.index')}}">Post</a>
                    </li>
                    <li class="list-group-item">
                        <a href="{{route('categories.index')}}">Categories</a>
                    </li>
                </ul>
            </div>

            <div class="card mt-3">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="posts/trash">Trash Posts</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-8 mt-3 mt-md-0">
            @yield('posts')
            @yield('categories')
        </div>
    </div>
</div>
@endsection
