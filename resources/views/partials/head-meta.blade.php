@php($site = config('site'))
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>{{ $site['name'] }} - {{ $site['tagline'] }}</title>
<meta name="description" content="{{ $site['description'] }}">
<meta property="og:title" content="{{ $site['name'] }} - {{ $site['tagline'] }}">
<meta property="og:description" content="{{ $site['description'] }}">
<meta property="og:image" content="{{ $site['og_image'] }}">
<meta property="og:type" content="website">
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $site['name'] }} - {{ $site['tagline'] }}">
<meta name="twitter:description" content="{{ $site['description'] }}">
<meta name="twitter:image" content="{{ $site['og_image'] }}">
<link rel="shortcut icon" href="{{ asset($site['favicon']) }}" type="image/x-icon">
<link rel="apple-touch-icon" href="{{ asset($site['favicon']) }}">
<script type="application/ld+json">
{
  "@context": "https://schema.org",
  "@type": "Organization",
  "name": "{{ $site['name'] }}",
  "url": "{{ url('/') }}",
  "logo": "{{ asset($site['logo']) }}",
  "description": "{{ $site['description'] }}",
  "telephone": "{{ $site['phone'] }}",
  "email": "{{ $site['email'] }}",
  "slogan": "{{ $site['tagline'] }}"
}
</script>
