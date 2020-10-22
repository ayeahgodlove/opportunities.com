@extends('layouts.app')
@section('title')
    {{ $post->title }}
@endsection
@section('content')
    <div class="section">
        <div class="container">

            <div class="text-center mt-5">
                <h2>{{ $post->title }}</h2>
                <p>{{ $post->created_at }} by <b><i>{{ $post->user->name }}</i></b></p>
            </div>


            <div class="text-center my-5">
                <img class="img-fluid rounded-md" src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->title }}">
            </div>


            <div class="row">
                <div class="col-lg-10 mx-auto">

                    <p class="lead">{{ $post->description }}</p>

                    <hr class="w-100px">

                    <p>{!! $post->content !!}</p>

                </div>
            </div>
        </div>

        <div class="section bg-gray">
            <div class="container">

                <div class="row">
                    <div class="col-lg-8 mx-auto">
                        <hr>
                        <div id="disqus_thread">
                        </div>
                        {{-- Comment form --}}
                    </div>
                </div>

            </div>
        </div>


        <script>
            /**
             *  RECOMMENDED CONFIGURATION VARIABLES: EDIT AND UNCOMMENT THE SECTION BELOW TO INSERT DYNAMIC VALUES FROM YOUR PLATFORM OR CMS.
             *  LEARN WHY DEFINING THESE VARIABLES IS IMPORTANT: https://disqus.com/admin/universalcode/#configuration-variables*/
            
            var disqus_config = function () {
            this.page.url = "{{config('app.url')}}/blog/posts/{{$post->id}}";  // Replace PAGE_URL with your page's canonical URL variable
            this.page.identifier = "{{$post->id}}"; // Replace PAGE_IDENTIFIER with your page's unique identifier variable
            };
            
            (function() { // DON'T EDIT BELOW THIS LINE
                var d = document,
                    s = d.createElement('script');
                s.src = 'https://global-opportunities.disqus.com/embed.js';
                s.setAttribute('data-timestamp', +new Date());
                (d.head || d.body).appendChild(s);
            })();

        </script>
        <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by
                Disqus.</a></noscript>
    @endsection
