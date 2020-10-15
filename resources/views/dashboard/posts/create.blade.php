@extends('dashboard.home')
@section('content1')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>{{ isset($post) ? 'Edit Post' : 'Create Post' }}</h5>
        </div>
        <div class="card-body">
            {{-- check for errors --}}
            @include('inc._partials.errors')

            <form action="{{ isset($post) ? route('posts.update', $post->id) : route('posts.store') }}" method="POST"
                enctype="multipart/form-data">
                @csrf
                @if (isset($post))
                    @method('PUT')
                @endif

                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{ isset($post) ? $post->title : '' }}"
                        class="form-control" placeholder="Enter post title" />
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" cols="5" rows="3">
                    {{ isset($post) ? $post->description : '' }}
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <input id="content" type="hidden" name="content" value="{{ isset($post) ? $post->content : '' }}" />
                    <trix-editor input="content"></trix-editor>
                </div>

                <div class="form-group">
                    <label for="published_at">Published At</label>
                    <input type="text" name="published_at" id="published_at" class="form-control" value="{{$post->published_at}}" />
                </div>

                <div class="form-group">
                    @if (isset($post))
                        <div class="card" style="height: 400px">
                            <img alt="" src="{{ asset('storage/' . $post->image) }}"
                                style="height: 400px; object-fit: cover;" class="card-img-top">
                        </div>
                    @endif
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control" />
                </div>

                {{-- categories --}}
                <div class="form-group">
                    <label for="category">Category</label>
                    <select name="category" id="category" class="form-control">
                        @foreach ($categories as $category)
                            <option value="{{ $category->id }}" @if (isset($post))
                                @if ($category->id == $post->category_id)
                                    selected
                                @endif
                        @endif
                        >
                        {{ $category->name }}
                        </option>
                        @endforeach
                    </select>
                </div>

                {{-- Tag labes --}}
                @if ($tags->count() > 0)
                    <div class="form-group">
                        <label for="tags">Tags</label>
                        <select name="tags[]" id="tags" class="form-control" multiple>
                            @foreach ($tags as $tag)
                                <option value="{{ $tag->id }}"
                                   @if (isset($post))
                                    @if ($post->hasTag($tag->id)))
                                        selected
                                    @endif
                                   @endif
                                    >{{ $tag->name }}</option>
                            @endforeach
                        </select>
                    </div>
                @endif

                <div class="form-group">
                    <label for="link">Website Links</label>
                    <input type="text" name="link" id="link" class="form-control" placeholder="Input Website links"
                        value="{{ isset($post) ? $post->link : '' }}" />
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        {{ isset($post) ? 'Update Post' : 'Add Post' }}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.js"
        integrity="sha512-S9EzTi2CZYAFbOUZVkVVqzeVpq+wG+JBFzG0YlfWAR7O8d+3nC+TTJr1KD3h4uh9aLbfKIJzIyTWZp5N/61k1g=="
        crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

    <script>
        flatpickr('#published_at', {
            enableTime: true
        });

    </script>
@endsection

@section('css')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/trix/1.3.0/trix.css"
        integrity="sha512-EQF8N0EBjfC+2N2mlaH4tNWoUXqun/APQIuFmT1B+ThTttH9V1bA0Ors2/UyeQ55/7MK5ZaVviDabKbjcsnzYg=="
        crossorigin="anonymous" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
@endsection
