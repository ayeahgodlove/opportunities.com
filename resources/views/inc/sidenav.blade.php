<div class="col-md-4 col-xl-3">
    <div class="sidebar px-4 my-md-8 py-md-0">

        <h6 class="sidebar-title">Search</h6>
        <form class="input-group" target="#" method="GET">
            <input type="text" class="form-control" name="s" placeholder="Search">
            <div class="input-group-addon">
                <span class="input-group-text"><i class="fas fa-search" style="font-size: 23px;"></i></span>
            </div>
        </form>

        <hr>

        <h6 class="sidebar-title">Categories</h6>
        <div class="row link-color-default fs-14 lh-24">
            @foreach ($categories as $category)
                <div class="col-6 nav-item"><a href="#" class="nav-link badge badge-info text-white">{{ $category->name }}</a></div>
            @endforeach
        </div>

        <hr>

        <h6 class="sidebar-title">Top posts</h6>
        @foreach ($posts as $post)
            <a class="media text-default align-items-center mb-3 nav-link p-0" href="{{route('blog.show', $post->id)}}">
                <img class="rounded w-65px mr-4" alt="{{$post->title}}" src="{{ asset('storage/' . $post->image) }}">
                <p class="media-body small-2 lh-4 mb-0">{{$post->title}}</p>
            </a>
        @endforeach

        <hr>

        <h6 class="sidebar-title">Tags</h6>
        <div class="gap-multiline-items-1">
           @foreach ($tags as $tag)
            <a class="badge badge-secondary" href="#">{{ $tag->name }}</a>
           @endforeach
        </div>
    </div>
</div>
