<?php
$appName        = settings('r', 'general.name');
$protocol       = settings('r', 'general.protocol');
$domain         = settings('r', 'general.domain');
$url            = "$protocol://$domain";
$email          = Auth::user()->email;
$defaults       = getThemeDefaults();
$ctaText        = $defaults['cta-text'];
$formSubmitCode = !empty(settings('r', 'personal_booking_1.form_submit_code'))
    ?settings('r', 'personal_booking_1.form_submit_code')
    : $email;
?>

<div class="pop-up-form-container">
    <span class="flex items-center justify-between">
        <h4 class="text-xl font-bold">{{$ctaText}}</h4>
        <label for="show_book_me_pop_up" class="cursor-pointer">
            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18 18 6M6 6l12 12" />
            </svg>
        </label>
    </span>
    <h5 class="text-sm">Fill the form and submit. I will get back to you using the email you submit.</h5>
    <form id="book_me_form" action="https://formsubmit.co/{{$formSubmitCode}}" method="post">
        <input type="hidden" name="_subject" value="{{$appName.' - You have a new Booking!'}}">
        <input type="hidden" name="message" value="You have a new Booking">
        <input type="hidden" name="_next" value="{{$url}}">
        <input type="hidden" name="_autoresponse" value="Hi, thanks so much for booking. Stay close to your email. I will get back to you shortly.">
        <label class="flex flex-col gap-8">
            <div class="flex flex-col gap-2">
                <p>Email address</p>
                <input class="hero-cta-btn hero-cta-btn-question-me" type="email" name="email" id="" placeholder="Enter your email address">
            </div>
            <div>
                <input class="hero-cta-btn hero-cta-btn-book-me" id="book_submit" type="submit" value="Book">
            </div>
        </label>
    </form>
</div>
