<div class="col-md-4 col-xl-3">
    <div class="sidebar px-4 py-md-0"> 
     
        <h6 class="sidebar-title">Categories</h6>
        <div class="row d-lg-block link-color-default fs-14 lh-24 categories">
            @foreach ($categories as $category)
                <div class="nav-item"><a href="{{ url('category', $category->id) }}" class="nav-link badge post-badge text-white">{{ $category->name }}</a></div>
            @endforeach
        </div>
        <hr>
        <h6 class="sidebar-title">Tags</h6>
        <div class="gap-multiline-items-1">
           @foreach ($tags as $tag)
            <span class="badge badge-secondary-custom">{{ $tag->name }}</span>
           @endforeach
        </div>
    </div>
</div>
