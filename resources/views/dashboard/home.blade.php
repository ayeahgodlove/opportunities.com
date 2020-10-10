@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center py-5">
        {{-- sidebar --}}
        <div class="col-md-4">
            <div class="card">
                <ul class="list-group">
                    <li class="list-group-item">
                        <a href="/posts">Post</a>
                    </li>
                    <li class="list-group-item">
                        <a href="/categories">Categories</a>
                    </li>
                </ul>
            </div>
        </div>

        <div class="col-md-8">
            @yield('posts')
            @yield('categories')
        </div>
    </div>
</div>
@endsection
