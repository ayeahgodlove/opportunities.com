@foreach ($posts as $post)
    <div class="col-11 col-sm-6 col-md-4 col-lg-3 blog__component mb-3 pl-lg-0">
        <div class="card">
            <img src="{{ asset('storage/'.$post->image) }}" alt="" class="img-card-top">
            <div class="card-body text-center py-3 px-3">
                <h6 class="card-title text-lighter text-uppercase small">{{$post->category->name}}</h6>
                <div class="card-text">
                    <p><strong>{{$post->title}}</strong></p>
                    <a href="" class="nav-link text-info text-center p-0">Find out <span class="fas fa-arrow-right"></span></a>
                </div>
            </div>
        </div>
    </div>
@endforeach
