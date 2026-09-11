{{--
    Default Laravel root view. For this project the landing page
    IS the homepage, so this file just hands off to it. If you'd
    rather keep Laravel's original starter welcome page around,
    move this @include into resources/views/pages/landing.blade.php's
    route instead and restore your own welcome.blade.php content.
--}}
@include('pages.landing')
