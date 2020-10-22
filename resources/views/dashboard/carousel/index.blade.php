@extends('dashboard.home')
@section('content1')
    <div class="card">
        <div class="card-header d-flex justify-content-between">
            <h5>{{ __('Carousel') }}</h5>
            <a href="{{ route('carousel.create') }}" class="btn btn-success btn-sm">Add Carousel</a>
        </div>
        <div class="card-body">
            <div class="text-center d-md-none">
                <p class="text-center">Available Posts</p>
            </div>
            @if ($carousel->count() > 0)
                <div class="row mb-2">
                    <div class="col-md-4 d-none d-md-block"><b>Image</b></div>
                    <div class="col-md-5 d-none d-md-block"><b>Title</b></div>
                    <div class="col-md-3 d-none d-md-block"><b></b></div>
                </div>
                @foreach ($carousel as $item)
                    <div class="row align-items-start justify-content-center">
                        <div class="col-10 col-md-4">
                            <div class="card mb-3" style="height: 100px">
                                <img src="{{ asset('storage/' . $item->image) }}" style="height: 100px; object-fit: cover;"
                                    class="card-img-top" alt="{{ $item->title }}">
                            </div>
                        </div>

                        <div class="col-10 col-md-5">
                            {{ $item->title }}
                        </div>
                        <div class="col-10 col-md-3">
                            <div class="d-flex justify-content-between">
                                <a href="{{ route('carousel.edit', $item->id) }}" class="btn btn-info btn-sm">
                                    <span class="fas fa-edit"></span>
                                </a>
                                <form action="{{ route('carousel.destroy', $item->id) }}" method="POST">
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
                <h3 class="text-center">No Banners available yet</h3>
            @endif
        </div>
    </div>
@endsection
