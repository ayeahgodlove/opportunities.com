@extends('layouts.app')
@section('title')
    {{ $post->title }}
@endsection
@section('content')
    <div class="section">
        <div class="container">

            <div class="text-center mt-8">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->created_at }} by <b><i>{{$post->user->name}}</i></b></p>
            </div>


            <div class="text-center my-8">
                <img class="img-fluid rounded-md" src="{{asset('storage/'.$post->image)}}" alt="{{$post->title}}">
            </div>


            <div class="row">
                <div class="col-lg-8 mx-auto">

                    <p class="lead">{{$post->description}}</p>

                    <hr class="w-100px">

                    <p>{!! $post->content !!}</p>

            </div>
        </div>
    </div>

    <div class="section bg-gray">
        <div class="container">

            <div class="row">
                <div class="col-lg-8 mx-auto">

                    {{-- Recent comments --}}
                    <hr>
                    {{-- Comment form --}}
                </div>
            </div>

        </div>
    </div>
@endsection
