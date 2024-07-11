<?php
exportAssets();
$defaults   = getThemeDefaults();
$themeColor = $defaults['theme-color'];
$userTitle  = $defaults['user-title'];
$userBio    = $defaults['user-bio'];
$ctaText    = $defaults['cta-text'];
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="{{ $themeColor }}" >
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <link rel="stylesheet" href="{{ homeUrl('/assets/css/style.css') }}">
        <script type="text/javascript" src="{{ homeUrl('/assets/js/script.js') }}" defer></script>
        <title>{{ settings('r', "general.name", "Nidavel") }} | Home</title>
    </head>

    <body>
        <div class="">
            {{-- Nav --}}
            <div>
                @include('front.parts.nav')
            </div>

            <div class="flex flex-col gap-16">
                <div class="body-margin mt-16">
                    <div class="hero-section">
                        <div class="hero-flex-1 hero-texts">
                            <div class="flex flex-col gap-8">
                                <h1 class="name-hero">{{Auth::user()->name}}</h1>
                                <span class="title-hero">{{$userTitle}}</span>
                                <p class="text">{{$userBio}}</p>
                                <span class="hero-cta">
                                    <a href="#" onclick="handleBookMePopUp()">
                                        <span class="hero-cta-btn hero-cta-btn-book-me">{{$ctaText}}</span>
                                    </a>
                                    <a href="#" onclick="handleQuestionMePopUp()">
                                        <span class="hero-cta-btn hero-cta-btn-question-me">Ask me a question</span>
                                    </a>
                                </span>
                            </div>
                        </div>
                        {{-- Hero img --}}
                        <div class="hero-flex-1 hero-pic">
                            <div class="hero-profile-picture">
                                <img
                                 src="{{homeUrl('/assets/img/profile-picture.jpg', 0)}}"
                                 alt="{{Auth::user()->name}}"
                                 srcset=""
                                 style="width: 100%; height: 100%; object-position: center; object-fit: cover;">
                            </div>
                        </div>
                    </div>
                </div>

                {{-- Contact icons --}}
                <div>
                    @include('front.parts.contact-icons')
                </div>
                {{-- Main section --}}
                <div class="body-margin">
                    <div class="flex flex-wrap gap-16 justify-between">
                        {{-- Post content --}}
                        <div class="posts-list">
                            @foreach ($posts as $post)
                                <div class="post-container">
                                    {{-- Featured image --}}
                                    <div class="post-list-img">
                                        <img src="<?= $post->featured_image != null
                                            ? asset('/uploads/' . $post->featured_image)
                                            : asset('/uploads/images/post_default_image.png') ?>"
                                            style="width: 100%; height: 100%; object-position: center; object-fit: cover;" />
                                    </div>
                                    <div class="post-list-body">
                                        <div class="post-title">
                                            <h4>{{ $post->title}}</h4>
                                        </div>
                                        <div class="post-desc">
                                            <p><?= $post->description != null
                                                ? substr($post->description, 0, 75)
                                                : substr($post->content, 0, 75) ?>
                                            </p>
                                        </div>
                                        <div class="post-list-footer-sm">
                                            <a class="" href="{{ exportLink("/posts/$post->link") }}"><span>Read</span></a>
                                        </div>
                                    </div>
                                    <div class="post-list-footer">
                                        <a href="{{ exportLink("/posts/$post->link") }}"><span>Read</span></a>
                                    </div>
                                </div>
                            @endforeach
                        </div>

                        {{-- Sidebar --}}
                        <div class="sidebar">
                            @include('front.parts.sidebar')
                        </div>
                    </div>
                </div>

                {{-- Footer --}}
                <div>
                    @include('front.parts.footer')
                </div>
            </div>
        </div>

        {{-- pop ups --}}
        <button id="show_book_me_pop_up" class="hidden" type="button" onclick="handleBookMePopUp()"></button>
        <div class="" id="book_pop_up">
            <div class="pop-up" id="">
                @include('front.parts.book-me')
            </div>
        </div>

        <button id="show_question_me_pop_up" class="hidden" type="button" onclick="handleQuestionMePopUp()"></button>
        <div class="" id="question_pop_up">
            <div class="pop-up" id="">
                @include('front.parts.question-me')
            </div>
        </div>
    </body>
</html>
