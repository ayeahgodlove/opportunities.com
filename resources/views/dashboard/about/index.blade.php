@extends('dashboard.home')
@section('content1')
<div class="card">
    <div class="card-header d-flex justify-content-between">
        <h5>{{ __('About') }}</h5>
        <a href="{{ route('abouts.create') }}" class="btn btn-success btn-sm">Create About</a>
    </div>
    <div class="card-body">
        <div class="text-center d-md-none">
            <p class="text-center">Available Posts</p>
        </div>
        @if ($abouts->count() > 0)
            <div class="row mb-2">
                <div class="col-md-3 d-none d-md-block"><b>Content</b></div>
                <div class="col-md-5 d-none d-md-block"><b>Telephone</b></div>
                <div class="col-md-2 d-none d-md-block"><b>Email</b></div>
                <div class="col-md-1 d-none d-md-block"><b>Location</b></div>
                <div class="col-md-1 d-none d-md-block"><b></b></div>
            </div>
            @foreach ($abouts as $post)
                <div class="row align-items-start justify-content-center mb-3">
                    <div class="col-10 col-md-3">
                        <div class="card" style="height: 100px">
                            
                        </div>
                    </div>

                    <div class="col-10 col-md-5">

                    </div>

                    <div class="col-10 col-md-2">
                       
                    </div>

                    <div class="col-10 col-md-2">
                        <div class="d-flex justify-content-between">
                           
                        </div>
                    </div>
                </div>
            @endforeach
        @else
            <h3 class="text-center">No Abouts</h3>
        @endif
        {{-- {{ $abouts->links() }} --}}
    </div>
</div>
@endsection