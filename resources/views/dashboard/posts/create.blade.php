@extends('dashboard.home')
@section('posts')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>{{ isset($category) ? 'Edit Post' : 'Create Post' }}</h5>
        </div>
        <div class="card-body">
            @if ($errors->any())
                <div class="alert alert-danger">
                    <ul class="list-group">
                        @foreach ($errors->all() as $err)
                            <li class="list-group-item text-danger">{{ $err }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
            <form action="{{isset($post) ? route('posts.update', $post->id) : route('posts.store')}}}" method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($post))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" id="title" value="{{isset($post) ? $post->title : ''}}"
                     class="form-control" placeholder="Enter post title" />
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control" id="description" cols="5"
                        rows="3">
                        {{isset($post) ? $post->description : ''}}
                    </textarea>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control" id="content" cols="5" rows="5">
                    {{isset($post) ? $post->content : ''}}
                </textarea>
                </div>

                <div class="form-group">
                    <label for="published_at">Published At</label>
                    <input type="text" name="published_at" id="published_at" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" id="image" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="link">Website Links</label>
                    <input type="text" name="link" id="link" class="form-control" placeholder="Input Website links" value="{{isset($post) ? $post->link : ''}}" />
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        {{ isset($post) ? 'Update Post' : 'Add Post'}}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection
