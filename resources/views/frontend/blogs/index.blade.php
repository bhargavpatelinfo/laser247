@extends("frontend.master")
@section("title", config('app.sitesettings')::first()->site_title." - ".config('app.sitesettings')::first()->tagline)

<title>{{$title}}</title>

    <meta name="description" content="Explore our latest blogs on various topics. Stay updated with insightful articles and trending stories.">
    <meta name="keywords" content="blog, articles, latest news, updates, trending topics">
    <meta name="robots" content="index, follow">

    <!-- Canonical URL -->
    <link rel="canonical" href="{{ url()->current() }}">

    <!-- Open Graph Meta Tags (For social sharing) -->
    <meta property="og:type" content="website">
    <meta property="og:title" content="{{ $title }}">
    <meta property="og:description" content="Explore our latest blogs on various topics. Stay updated with insightful articles and trending stories.">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ $image }}">
    <meta property="og:site_name" content="{{ config('app.sitesettings')::first()->site_title }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $title }}">
    <meta name="twitter:description" content="Explore our latest blogs on various topics. Stay updated with insightful articles and trending stories.">
    <meta name="twitter:image" content="{{ $image }}">


@section("content")
<div class="bg-black pt-20 pb-12">
    <div class="container mx-auto px-4 ">
        <h2 class="text-3xl font-bold text-center text-white my-8">Blogs</h2>
        
        <div class="max-w-[1230px] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
            @forelse ($blogs as $post)
            <div class="bg-white  overflow-hidden transition hover:shadow-xl p-5">
                <a href="{{ route('frontend.post', $post->slug) }}">
                    <img src="{{ asset('uploads/post/'.$post->thumbnail) }}" alt="{{ $post->title }}" class="w-full h-60 object-cover">
                </a>
                <div class="pt-5">
                    <p class="text-sm text-red-400 font-semibold uppercase">Online Book</p>
                    <h3 class="text-2xl font-semibold text-gray-900 mt-1">
                        <a href="{{ route('frontend.post', $post->slug) }}" class="hover:text-red-600 transition">
                            {{ $post->title }}
                        </a>
                    </h3>
                    <p class="text-gray-500 text-sm mt-2">{{ \Carbon\Carbon::parse($post->created_at)->format('F j, Y') }}</p>
                    <p class="text-gray-600 mt-2 text-lg">
                        {{ Str::limit(strip_tags($post->content), 120) }}
                    </p>
                  
                </div>
            </div>
            @empty
            <div class="col-span-full text-center text-gray-500">
                No posts found! 😔
            </div>
            @endforelse
        </div>
   
    </div>
</div>
@endsection
