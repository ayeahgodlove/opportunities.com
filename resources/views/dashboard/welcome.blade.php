@extends('dashboard.home')
@section('content1')
    <h3 class="text-center py-3">
        You are welcome {{ Auth::user()->name }}
    </h3>
@endsection