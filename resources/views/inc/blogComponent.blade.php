    <div class="col-md-8 col-xl-9 mx-auto blog__component">
        @foreach ($posts as $post)
            <div class="card hover-shadow-7 my-8">
                <div class="post-badge">
                    <span class="badge">{{ $post->category->name}}</span>
                </div>
                <div class="row">
                    <div class="col-md-4">
                        <a href="{{route('blog.show', $post->id)}}">
                            <img class="img-fluid fit-cover position-absolute h-100"
                                src="{{ asset('storage/' . $post->image) }}" alt="{{$post->title}}">
                        </a>
                    </div>

                    <div class="col-md-8">
                        <div class="p-7">
                            <h4>{{ $post->title }}</h4>
                            <p>{{ $post->description }}</p>
                            <a class="small ls-1" href="{{route('blog.show', $post->id)}}">Read More <span
                                    class="pl-1">&xrarr;</span></a>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
