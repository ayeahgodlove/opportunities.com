@extends('layouts.app')
@section('title')
    {{ config('app.name', 'GlobalOpportunities') }}
@endsection
@section('content')
    @include('inc.carousel')
    {{-- opportunities --}}
    <div class="container">
        <div class="row justify-content-center my-3 mt-lg-5 mb-lg-3">
            @if ($posts->count() > 0)
                @include('inc.blogComponent')
                @include('inc.sidenav')
            @else
                <h4 class="text-center display-4">No Posts Available at the moment</h4>
            @endif
        </div>

        <div class="mb-5">
            {{ $posts->links() }}
        </div>
    </div>
@endsection
