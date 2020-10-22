<div id="opportunities" class="homepage__banner" data-ride="carousel">
    <div class="container">
        <div class="row justify-content-center align-items-center justify-content-md-between">
            <div class="order-2 col-12 col-lg-8 px-0">
                <div class="card border-0">
                    <div class="card-body text-white p-7">
                        <h1 class="display-4">Global Opportunities</h1>
                        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit.
                            Temporibus et sint cum voluptas ad praesentium id dolorem aut nobis laborum tenetur, dignissimos
                            excepturi, omnis eius.</p>
                        <a href="" class="btn btn-warning rounded rounded-pill px-5">Get Started <span
                                class="pl-1">&xrarr;</span></a></a>
                    </div>
                </div>
            </div>
    
            <div class="order-1 order-lg-2 d-flex justify-content-center align-items-center d-lg-block col-12 col-lg-3 homepage__banner-section">
                <div class="img-container shadow">
                    @foreach ($carousel as $item)
                        <img src="{{ asset('storage/' . $item->image) }}" class="img-fluid banner" alt="First slide">
                    @endforeach
                    <div class="avatar avatar-top d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/opportunities.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="avatar avatar-left d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/singer.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="avatar avatar-right d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/slide200520093539.jpg') }}" class="img-fluid" alt="">
                    </div>
                    <div class="avatar avatar-bottom d-flex justify-content-center align-items-center">
                        <img src="{{ asset('img/writers.jpg') }}" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="border-0 shadow-sm rounded-0 share__info">
        <ul class="list-group">
            <li class="list-group-item">
                <span class="fab fa-facebook fa-2x"></span>
            </li>
            <li class="list-group-item">
                <span class="fab fa-twitter fa-2x"></span>
            </li>
            <li class="list-group-item">
                <span class="fab fa-whatsapp fa-2x"></span>
            </li>
            <li class="list-group-item">
                <span class="fab fa-linkedin fa-2x"></span>
            </li>
            <li class="list-group-item">
                <span class="fab fa-share fa-2x"></span>
            </li>
        </ul>
    </div>
</div>
