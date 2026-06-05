@php($cdn = config('site.cdn'))
<script src="https://ajax.googleapis.com/ajax/libs/webfont/1.6.26/webfont.js"></script>
<script>
    WebFont.load({
        google: {
            families: [
                "Montserrat:100,100italic,200,200italic,300,300italic,400,400italic,500,500italic,600,600italic,700,700italic,800,800italic,900,900italic",
                "Open Sans:300,300italic,400,400italic,600,600italic,700,700italic,800,800italic",
                "Lato:100,100italic,300,300italic,400,400italic,700,700italic,900,900italic",
                "Inter:300,400,500,600,700"
            ]
        }
    });
</script>
@foreach ($cdn['webflow_js'] as $js)
    <script src="{{ $js }}"></script>
@endforeach
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/2.2.4/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/@splidejs/splide@4.1.3/dist/js/splide.min.js"></script>
<script src="{{ asset('js/home.js') }}"></script>
