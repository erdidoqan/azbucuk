<meta charset="UTF-8">
<meta name="author" content="azbucuk" />

<link rel="apple-touch-icon" sizes="57x57" href="{{ env('META_FAVICON_PNG') }}?w=57&h=57&fit=crop">
<link rel="apple-touch-icon" sizes="60x60" href="{{ env('META_FAVICON_PNG') }}?w=60&h=60&fit=crop">
<link rel="apple-touch-icon" sizes="72x72" href="{{ env('META_FAVICON_PNG') }}?w=72&h=72&fit=crop">
<link rel="apple-touch-icon" sizes="76x76" href="{{ env('META_FAVICON_PNG') }}?w=76&h=76&fit=crop">
<link rel="apple-touch-icon" sizes="114x114" href="{{ env('META_FAVICON_PNG') }}?w=114&h=114&fit=crop">
<link rel="apple-touch-icon" sizes="120x120" href="{{ env('META_FAVICON_PNG') }}?w=120&h=120&fit=crop">
<link rel="apple-touch-icon" sizes="144x144" href="{{ env('META_FAVICON_PNG') }}?w=144&h=144&fit=crop">
<link rel="apple-touch-icon" sizes="152x152" href="{{ env('META_FAVICON_PNG') }}?w=152&h=152&fit=crop">
<link rel="apple-touch-icon" sizes="180x180" href="{{ env('META_FAVICON_PNG') }}?w=180&h=180&fit=crop">
<link rel="icon" type="image/png" sizes="192x192"  href="{{ env('META_FAVICON_PNG') }}?w=192&h=192&fit=crop">
<link rel="icon" type="image/png" sizes="32x32" href="{{ env('META_FAVICON_PNG') }}?w=32&h=32&fit=crop">
<link rel="icon" type="image/png" sizes="96x96" href="{{ env('META_FAVICON_PNG') }}?w=96&h=96&fit=crop">
<link rel="icon" type="image/png" sizes="16x16" href="{{ env('META_FAVICON_PNG') }}?w=16&h=16&fit=crop">

<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="{{ env('META_FAVICON_PNG') }}?w=144&h=144&fit=crop">
<meta name="theme-color" content="#ffffff">

<title>@yield('title', 'Sosyal Medyadan En Güncel ve Eğlenceli İçerikler')</title>
<meta name="description" content="@yield('description', 'Azbucuk, sosyal medyanın nabzını tutan birinci sınıf içerikleri sunar. Güncel filmler, dizi önerileri, müzik dünyasından haberler ve daha fazlası için takipte kalın!')">

<meta name="abstract" content="Azbucuk, sosyal medyanın nabzını tutan birinci sınıf içerikleri sunar. Güncel filmler, dizi önerileri, müzik dünyasından haberler ve daha fazlası için takipte kalın!">
<meta name="classification" content="website">
<meta name="language" content="tr">
<meta name="viewport" content="width=device-width, initial-scale=1" />

<meta property="og:title" content="@yield('title-og', 'Sosyal Medyadan En Güncel ve Eğlenceli İçerikler')">
<meta property="og:site_name" content="Azbucuk Sosyal">
<meta property="og:type" content="article">
<meta property="og:locale" content="tr_TR" />
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:description" content="@yield('description', 'Azbucuk, sosyal medyanın nabzını tutan birinci sınıf içerikleri sunar. Güncel filmler, dizi önerileri, müzik dünyasından haberler ve daha fazlası için takipte kalın!' )">
<meta property="og:image" content="@yield('ogimage', '')">
<meta property="og:image:secure_url" content="@yield('ogimage', '')" />
<meta property="og:image:alt" content="@yield('ogimage-alt', '')" />

<link rel="image_src" href="@yield('ogimage', '')" type="image/webp" />
<meta property="og:image:width" content="1280" />
<meta property="og:image:height" content="720" />
<meta property="og:image:type" content="image/webp" />

<meta content='@azbucuk' name='twitter:creator'/>
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:url" content="{{ url()->current() }}">
<meta name="twitter:site" content="azbucuksosyal">
<meta name="twitter:title" content="@yield('title', '')">
<meta name="twitter:description" content="@yield('description', 'Azbucuk, sosyal medyanın nabzını tutan birinci sınıf içerikleri sunar. Güncel filmler, dizi önerileri, müzik dünyasından haberler ve daha fazlası için takipte kalın!' )">
<meta name="twitter:image" content="@yield('ogimage', '')" />
<meta name="twitter:creator" content="@azbucuksosyal" />


<meta name="MobileOptimized" content="320">
<meta name="google-site-verification" content="cA4e3RTcDytlLs5EywMFjH03Gupy0HxvlaECPhFj-NM" />
<meta name="yandex-verification" content="3cde7e411b484f2e" />
<meta name="msvalidate.01" content="43BF3F400F119414A1F05D600FCD4795" />

<link rel="amphtml" href="@yield('amp')">

<link rel="alternate" type="application/atom+xml" href="{{ url('/rss') }}" />
<link rel="alternate" type="application/atom+xml" href="{{ url('/rss/internet') }}" />
<link rel="alternate" type="application/atom+xml" href="{{ url('/rss/futbol') }}" />
<link rel="alternate" type="application/atom+xml" href="{{ url('/rss/trendler') }}" />
<link rel="alternate" type="application/atom+xml" href="{{ url('/rss/is') }}" />
<link rel="alternate" type="application/atom+xml" href="{{ url('/rss/teknoloji') }}" />

<meta name="robots" content="max-image-preview:large, max-video-preview:-1" />

<meta name="csrf-token" content="{{ csrf_token() }}">
<link rel="canonical" href="{{ url()->current() }}"/>

<script async src="https://pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
