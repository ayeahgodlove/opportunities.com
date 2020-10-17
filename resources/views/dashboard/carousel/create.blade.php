@extends('dashboard.home')
@section('content1')
    <div class="card"> 
        <div class="card-header d-flex justify-content-between"> 
            <h5>{{ isset($carousel) ? 'Edit Carousel' : 'Create Carousel' }}</h5>
        </div>
        <div class="card-body">
            @include('inc._partials.errors')
            <form action="{{ isset($carousel) ? route('carousel.update', $carousel->id) : route('carousel.store') }}" 
                method="POST" enctype="multipart/form-data">
                @csrf
                @if (isset($carousel))
                    @method('PUT')
                @endif
                <div class="form-group">
                    <label for="title">Title</label>
                    <input type="text" class="form-control" name="title" id="title" value="{{ isset($carousel) ? $carousel->title : '' }}" placeholder="title here">
                </div>
                <div class="form-group">
                    <label for="caption">Caption</label>
                    <textarea type="text" class="form-control" cols="5" rows="4" name="caption" id="caption" placeholder="caption here">
                        {{ isset($carousel) ? $carousel->caption : '' }}
                    </textarea>
                </div>
                <div class="form-group">
                    @if (isset($carousel))
                        <div class="card" style="height: 400px">
                            <img alt="" src="{{ asset('storage/' . $carousel->image) }}"
                                style="height: 400px; object-fit: cover;" class="card-img-top">
                        </div>
                    @endif
                    <label for="image">Image</label>
                    <input type="file" class="form-control" name="image" id="image" placeholder="image here">
                </div>
                <div class="form-group">
                    
                   <button type="submit" class="btn btn-primary">
                    {{ isset($carousel) ? 'Update carousel' : 'Add carousel' }}
                   </button>
                </div>
            </form>
        </div>
    </div>
@endsection
