@extends('_layout.app')
@section('content')
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="{{asset('img/ph_22642_82123.jpg')}}" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slide One</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Sit, nulla?</p>
                  </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/ph_22642_82124.jpg')}}" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slide Two</h5>
                    <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Quam, iure.</p>
                  </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="{{asset('img/ph_22642_82126.jpg')}}" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Slide Three</h5>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Saepe, pariatur.</p>
                  </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>
    <h1 class="text-center display-4">Welcome to index page</h1>
@endsection
