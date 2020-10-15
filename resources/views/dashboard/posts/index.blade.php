@extends('dashboard.home')
@section('content1')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>{{ __('Posts') }}</h5>
            <a href="{{ route('posts.create') }}" class="btn btn-success btn-sm">Add Posts</a>
        </div>
        <div class="card-body">
            <div class="text-center d-md-none">
                <p class="text-center">Available Posts</p>
            </div>
            @if ($posts->count() > 0)
                <div class="row mb-2">
                    <div class="col-md-3 d-none d-md-block"><b>Image</b></div>
                    <div class="col-md-5 d-none d-md-block"><b>Title</b></div>
                    <div class="col-md-2 d-none d-md-block"><b>Category</b></div>
                    <div class="col-md-2 d-none d-md-block"><b></b></div>
                </div>
                @foreach ($posts as $post)
                    <div class="row align-items-start justify-content-center">
                        <div class="col-10 col-md-3">
                            <div class="card" style="height: 100px">
                                <img src="{{ asset('storage/' . $post->image) }}" style="height: 100px; object-fit: cover;"
                                    class="card-img-top" alt="{{ $post->title }}">
                            </div>
                        </div>

                        <div class="col-10 col-md-5">
                            {{ $post->title }}
                        </div>

                        <div class="col-10 col-md-2">
                            <a href="{{ route('categories.edit', $post->category->id) }}" class="nav-link p-0">
                                <b>{{ $post->category->name }}</b>
                            </a>
                        </div>

                        <div class="col-10 col-md-2">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('posts.edit', $post->id) }}" class="btn btn-info btn-sm">
                                    <span class="fas fa-edit"></span>
                                </a>
                                <form action="{{ route('posts.destroy', $post->id) }}" method="POST">
                                    @csrf
                                    @method('DELETE')
                                    <button class="btn btn-danger btn-sm">
                                        <span class="fas fa-trash"></span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                @endforeach
            @else
                <h3 class="text-center">No post yet</h3>
            @endif
        </div>
    </div>
@endsection
