@extends('layouts.app')
@section('title')
    {{ config('app.name', 'GlobalOpportunities') }}
@endsection
@section('content')
    <div id="opportunities.com" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#opportunities.com" data-slide-to="0" class="active"></li>
            <li data-target="#opportunities.com" data-slide-to="1"></li>
            <li data-target="#opportunities.com" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{ asset('img/ph_22642_82123.jpg') }}" class="img-fluid" alt="First slide">
                <div class="carousel-caption">
                    <h5>Slide One</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, nulla?</p>
                    <a href="" class="btn btn-info">Find Opportunities</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/ph_22642_82124.jpg') }}" class="img-fluid" alt="Second slide">
                <div class="carousel-caption">
                    <h5>Slide Two</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, iure.</p>
                    <a href="" class="btn btn-info">Find Opportunities</a>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{ asset('img/ph_22642_82126.jpg') }}" class="img-fluid" alt="Third slide">
                <div class="carousel-caption">
                    <h5>Slide Three</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, pariatur.</p>
                    <a href="" class="btn btn-info">Find Opportunities</a>
                </div>
            </div>
        </div>
        <div class="carousel-controls-btns">
            <a class="carousel-control-prev" href="#opportunities.com" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#opportunities.com" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>
    </div>

    {{-- opportunities --}}
    <div class="container">

        <div class="row justify-content-center my-3 my-lg-5">
            @if ($posts->count() > 0)
                @include('inc.blogComponent')
                @include('inc.sidenav')
            @else
                <h4 class="text-center display-4">No Posts Available at the moment</h4>
            @endif
        </div>
    </div>
@endsection
