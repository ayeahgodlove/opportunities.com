@extends('dashboard.home')
@section('tags')
<div class="card">
    <div class="card-header d-flex justify-content-between"> 
        <h5>{{ isset($tag) ? 'Edit Tag' : 'Create Tag'}}</h5>
    </div>
    <div class="card-body">
        @if ($errors->any())
            <div class="alert alert-danger">
                <ul class="list-group">
                    @foreach ($errors->all() as $err)
                       <li class="list-group-item text-danger">{{$err}}</li>  
                    @endforeach
                </ul>
            </div>
        @endif
        <form action="{{isset($tag) ? route('tags.update', $tag->id) : route('tags.store')}}" method="POST">
            @csrf
            @if (isset($tag))
                @method('PUT')
            @endif
            <div class="form-group">
                <label for="name">Name</label>
                <input type="text" name="name" id="name" class="form-control" 
                placeholder="Enter Tag Name" value="{{isset($tag) ? $tag->name : ''}}">
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success">
                    {{ isset($tag) ? 'Update Tag' : 'Add Tag'}}
                </button>
            </div>
        </form>
    </div>
</div>
@endsection