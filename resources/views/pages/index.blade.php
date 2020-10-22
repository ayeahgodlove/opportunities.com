@extends('layouts.app')
@section('title')
    {{ config('app.name', 'GlobalOpportunities') }}
@endsection
@section('content')
    @include('inc.carousel')
    {{-- opportunities --}}
    <div class="container">
        <div class="row justify-content-center my-5">
            <form class="input-group" target="#" method="GET">
                <input type="text" class="form-control shadow-sm" name="search" placeholder="Search...">
                <input type="submit" name="search" id="search" class="shadow-sm btn btn-warning btn-submit" value="Search">
            </form>
        </div>
        <div class="row justify-content-center my-3 mt-lg-5 mb-lg-3">
            @if ($posts->count() > 0)
                @include('inc.sidenav')
                <div class="col-md-8 col-xl-9">
                    <div class="row justify-content-center">
                        @include('inc.blogComponent')
                    </div>
                    <div class="mb-5 text-right">
                        {{ $posts->links() }}
                    </div>
                </div>
            @else
                <h4 class="text-center display-4">No Posts Available at the moment</h4>
            @endif
        </div>
    </div>
@endsection
