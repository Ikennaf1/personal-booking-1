<?php
$defaults   = getThemeDefaults();
$themeColor = $defaults['theme-color'];
$userTitle  = $defaults['user-title'];
$userBio    = $defaults['user-bio'];
?>
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', settings('r', 'general.locale')) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="theme-color" content="{{ $themeColor }}" >
        {{-- <meta name="csrf-token" content="{{ csrf_token() }}"> --}}
        <link rel="stylesheet" href="{{ homeUrl('/assets/css/style.css') }}">
        <script type="text/javascript" src="{{ homeUrl('/assets/js/script.js', 1) }}" defer></script>
        {!! postHead($post) !!}
        {!!customizedStyles()!!}
        {!! getHead() !!}
    </head>

    <body>
        {!! startBody() !!}
        <div class="">
            {{-- Nav --}}
            <div>
                @include('front.parts.nav')
            </div>

            <div class="flex flex-col gap-16">
                {{-- Main section --}}
                <div class="body-margin">
                    <div class="flex flex-wrap gap-16 justify-center mt-16">
                        {{-- Post content --}}
                        <div class="single-post-content">
                            @include('front.parts.post-content')
                        </div>

                        {{-- Sidebar --}}
                        {{-- <div class="sidebar">
                            @include('front.parts.sidebar')
                        </div> --}}
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
        {!! endBody() !!}
    </body>
</html>
