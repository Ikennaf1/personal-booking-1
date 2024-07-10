<main>
    <div class="flex flex-col gap-16 items-center">
        {{-- Post title --}}
        <div class="">
            <h1 class="text-4xl font-bold text-black">{{ $post->title }}</h1>
        </div>

        {{-- Post featured image --}}
        @if (!empty($post->featured_image))
            <div class="post-featured-img">
                <img src="<?= asset('/uploads/' . $post->featured_image) ?>"
                 style="width:100%; height:100%; object-position: center; object-fit: cover;"
                  alt="{{$post->title}}"/>
            </div>
        @endif

        {{-- Post meta --}}
        <div class="text-xs">
            <p>By <a class="link" href="">{{ $post->author }}</a> | On {{ date('l jS F Y, h:ia', strtotime($post->updated_at)) }}</p>
        </div>

        {{-- Post content --}}
        <div class="flex flex-col gap-4">
            {!! $post->content !!}
        </div>

        {{-- About author --}}
        <div class="">
            <div class="flex flex-col gap-4 items-center">
                <div class="post-author-img">
                    <img
                     src="{{homeUrl('/assets/img/profile-picture.jpg', 0)}}"
                     alt="{{Auth::user()->name}}"
                     srcset=""
                     style="width: 100%; height: 100%; object-position: center; object-fit: cover;">
                </div>
                <h5 class="font-bold text-lg">About the author</h5>
                <span>{{$userBio}}</span>
            </div>
        </div>
    </div>
</main>