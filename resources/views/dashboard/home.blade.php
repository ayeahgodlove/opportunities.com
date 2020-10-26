@extends('layouts.app')

@section('content')
    <div class="container">
        @if (session()->has('success'))
            <div class="alert alert-success mt-3">
                {{ session()->get('success') }}
            </div>
        @endif

        @if (session()->has('error'))
            <div class="alert alert-danger mt-3">
                {{ session()->get('error') }}
            </div>
        @endif
        <div class="row justify-content-center py-5">
            {{-- sidebar --}}
            <div class="col-md-4">
                <div class="card">
                    <ul class="list-group">
                        {{-- users link is only accessible by admins --}}
                        @if (auth()->user()->isAdmin())
                            <li class="list-group-item">
                                <a href="/users">Users</a>
                            </li>
                        @endif
                        <li class="list-group-item">
                            <a href="{{ route('posts.index') }}">Post</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('categories.index') }}">Categories</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('tags.index') }}">Tags</a>
                        </li>
                    </ul>
                </div>

                <div class="card mt-3">
                    <ul class="list-group">
                        <li class="list-group-item">
                            <a href="{{ route('carousel.index') }}">Carousel</a>
                        </li>
                        <li class="list-group-item">
                            <a href="{{ route('abouts.index') }}">Abouts</a>
                        </li>
                    </ul>
                </div>
            </div>

            <div class="col-md-8 mt-3 mt-md-0">
                {{-- @include('dashboard.welcome') --}}
                @yield('content1')
            </div>
        </div>
    </div>
@endsection
