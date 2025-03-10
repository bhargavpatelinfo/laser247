@extends("frontend.master")

@section("title", $siteSettings->site_title . " - " . $siteSettings->tagline)

<meta name="description" content="{{ $siteSettings->description }}">
<meta name="keywords" content="sports betting, online gaming, betting platform, best betting sites">
<meta name="robots" content="index, follow">

<!-- Canonical URL -->
<link rel="canonical" href="{{ url()->current() }}">

<!-- Open Graph Meta Tags (For social sharing) -->
<meta property="og:type" content="website">
<meta property="og:title" content="{{ $siteSettings->site_title }}">
<meta property="og:description" content="{{ $siteSettings->description }}">
<meta property="og:url" content="{{ url()->current() }}">
<meta property="og:image" content="{{ asset('uploads/logo/' . $siteSettings->logo_dark) }}">
<meta property="og:site_name" content="{{ $siteSettings->site_title }}">

<!-- Twitter Meta Tags -->
<meta name="twitter:card" content="summary_large_image">
<meta name="twitter:title" content="{{ $siteSettings->site_title }}">
<meta name="twitter:description" content="{{ $siteSettings->description }}">
<meta name="twitter:image" content="{{ asset('uploads/logo/' . $siteSettings->logo_dark) }}">


@section("content")

@include('frontend.home.inc.header')
@include('frontend.home.inc.hero')
@include('frontend.home.inc.images')
@include('frontend.home.inc.details')
@include('frontend.home.inc.gameImagesSection')
@include('frontend.home.inc.features')
@include('frontend.home.inc.faqSection')
<!-- Here we will fetch the posts and categories -->
@include('frontend.home.inc.blog-games')
@include('frontend.home.inc.footer')

@endsection