@extends('dashboard.home')
@section('categories')
    <div class="card">
        <div class="card-header d-flex justify-content-between"> 
            <h5>{{ isset($category) ? 'Edit Category' : 'Create Category'}}</h5>
        </div>
        <div class="card-body">
          {{-- check for errors --}}
          @include('inc._partials.errors')
            <form action="{{isset($category) ? route('categories.update', $category->id) : route('categories.store')}}" method="POST">
                @csrf
                @if (isset($category))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" name="name" id="name" class="form-control" 
                    placeholder="Enter Category Name" value="{{isset($category) ? $category->name : ''}}">
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-success">
                        {{ isset($category) ? 'Update Category' : 'Add Category'}}
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection