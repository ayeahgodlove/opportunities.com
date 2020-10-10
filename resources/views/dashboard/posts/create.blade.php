@extends('dashboard.home')
@section('posts')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>{{ __('Create Posts') }}</h5>
        </div>
        <div class="card-body">
            <form action="{{route('posts.store')}}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" name="title" 
                    id="title" class="form-control" placeholder="Enter post title" />
                </div>

                <div class="form-group">
                    <label for="description">Description</label>
                    <textarea name="description" class="form-control"
                    id="description" cols="5" rows="3">Description</textarea>
                </div>

                <div class="form-group">
                    <label for="content">Content</label>
                    <textarea name="content" class="form-control"
                    id="content" cols="5" rows="5">Content</textarea>
                </div>

                <div class="form-group">
                    <label for="published_at">Published At</label>
                    <input type="text" name="published_at" 
                    id="published_at" class="form-control" />
                </div>

                <div class="form-group">
                    <label for="image">Image</label>
                    <input type="file" name="image" 
                    id="image" class="form-control"/>
                </div>

                <div class="form-group">
                    <label for="links">Website Links</label>
                    <input type="text" name="links" 
                    id="links" class="form-control"  placeholder="Input Website links"/>
                </div>

                <div class="form-group">
                    <button type="submit" class="btn btn-success">Add Post</button>
                </div>
            </form>
        </div>
    </div>
@endsection