<?php
$socials = themeGetSocials();
$contacts = themeGetContacts();
?>
<div class="body-margin">
    <div class="contact-icons-container">
        <div class="flex gap-8 items-center justify-start">
            @foreach ($socials as $social => $details)
                @if (!empty(settings('r', 'personal_booking_1.'.$social)))
                    <div>
                        <a href="#" rel="nofollow noopener noreferrer">{!!$details['icon']!!}</a>
                    </div>
                @endif
            @endforeach
        </div>
        <div class="flex gap-8 items-center justify-end">
            @foreach ($contacts as $contact => $details)
            <div>
                <a class="flex items-center gap-2" href="mailto:{{settings('r', 'personal_booking_1.'.$contact)}}">
                    <span>{!!$details['icon']!!}</span>
                    <span>{{Auth::user()->email}}</span>
                </a>
            </div>
                @if (!empty(settings('r', 'personal_booking_1.'.$contact)))
                    <div>
                        @if ($contact === 'email')
                        <a class="flex items-center gap-2" href="mailto:{{settings('r', 'personal_booking_1.'.$contact)}}">
                        @else
                        <a class="flex items-center gap-2" href="#">
                        @endif
                            <span>{!!$details['icon']!!}</span>
                            <span>{{settings('r', 'personal_booking_1.'.$contact)}}</span>
                        </a>
                    </div>
                @endif
            @endforeach
        </div>
    </div>
</div>
