@foreach ($posts as $post)
    <div class="col-11 col-md-6 col-xl-4 mx-auto blog__component">
        <div class="card hover-shadow-7 mb-3">
            <a href="{{ route('blog.show', $post->id) }}">
                <img class="card-img-top blog__banner" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
            </a>

            <div class="card-body">
                <span class="badge post-badge">{{ $post->category->name }}</span>
                <h5 class="line-spacing my-3">{{ $post->title }}</h5>
                <p>
                @foreach ($post->tags as $tag)
                    <span class="badge badge-secondary-custom">{{ $tag->name }}</span>
                @endforeach
                </p>
                <a class="btn btn-sm btn-warning-link rounded-pill" href="{{ route('blog.show', $post->id) }}"><small>Read More </small><span
                        class="pl-1">&xrarr;</span></a>
            </div>
        </div>
    </div>
@endforeach
