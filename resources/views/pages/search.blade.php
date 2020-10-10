@extends('layouts.app')
@section('content')
    @include('inc.page__banner')
    <div class="container">
        <div class="card border-0 shadow search">
            <div class="card-body">
                <form action="">
                    <div class="form-group">
                        <input type="text" class="form-control custom-input" placeholder="Enter to search here !">
                        {{-- <input type="submit" class="btn btn-warning" value="Search"> --}}
                        <span class="fas fa-search icon-span"></span>
                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
