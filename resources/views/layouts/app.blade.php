@php($site = config('site'))
<!DOCTYPE html>
<html lang="en">
<head>
    @include('partials.head-meta')
    <link href="https://cdn.prod.website-files.com" rel="preconnect" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin="anonymous">
    <link href="{{ $site['cdn']['css_shared'] }}" rel="stylesheet" type="text/css" crossorigin="anonymous">
    <link href="{{ $site['cdn']['css_page'] }}" rel="stylesheet" type="text/css" crossorigin="anonymous">
    <link href="{{ $site['cdn']['splide_css'] }}" rel="stylesheet">
    <link href="{{ $site['cdn']['slick_css'] }}" rel="stylesheet">
    <link href="{{ asset('css/custom.css') }}" rel="stylesheet">
    <script>
        !function(o,c){var n=c.documentElement,t=" w-mod-";n.className+=t+"js",("ontouchstart"in o||o.DocumentTouch&&c instanceof DocumentTouch)&&(n.className+=t+"touch")}(window,document);
    </script>
</head>
<body class="upadted-body">
    @include('partials.header')

    @yield('content')

    @include('partials.footer')
    @include('partials.scripts')
</body>
</html>
