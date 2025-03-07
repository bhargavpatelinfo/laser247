@extends("frontend.master")

@section("title", $post->title." - ".config('app.sitesettings')::first()->site_title)


    <meta name="description" content="{{ $post->excerpt ?? Str::limit(strip_tags($post->content), 150) }}">
    <meta name="keywords" content="{{ implode(',', $post->tags->pluck('name')->toArray()) }}">
    <meta name="robots" content="index, follow">
    <link rel="canonical" href="{{ url()->current() }}">
    <meta property="og:type" content="article">
    <meta property="og:title" content="{{ $post->title }}">
    <meta property="og:description" content="{{ $post->excerpt ?? Str::limit(strip_tags($post->content), 150) }}">
    <meta property="og:url" content="{{ url()->current() }}">
    <meta property="og:image" content="{{ asset("uploads/post/".$post->thumbnail) }}">
    <meta property="og:site_name" content="{{ config('app.name') }}">

    <!-- Twitter Meta Tags -->
    <meta name="twitter:card" content="summary_large_image">
    <meta name="twitter:title" content="{{ $post->title }}">
    <meta name="twitter:description" content="{{ $post->excerpt ?? Str::limit(strip_tags($post->content), 150) }}">
    <meta name="twitter:image" content="{{ asset("uploads/post/".$post->thumbnail) }}">


@section("content")
<section class="pt-[140px] md:pt-[170px] pb-14 bg-black">
    <div class="max-w-[1262px] w-[90%] mx-auto px-4">
        <div class="flex flex-col md:flex-row justify-center gap-5">
            <!-- Main Blog Content -->
            <div class="max-w-4xl w-full md:w-[70%] mx-auto bg-white shadow-lg overflow-hidden p-6">
                <img src="{{ asset("uploads/post/".$post->thumbnail) }}" alt="{{ $post->title }}" class="w-full object-cover">
                <div class="pt-5">
                    <h1 class="text-3xl font-bold text-gray-900">{{ $post->title }}</h1>
                    <ul class="flex items-center space-x-4 text-sm text-gray-600 mt-2">
                        <li>
                            <a href="{{ route("frontend.category", $post->category->slug) }}" class="text-blue-500 hover:underline">
                                {{ $post->category->title }}
                            </a>
                        </li>
                        <li>{{ $post->created_at->format("F d, Y") }}</li>
                    </ul>
                    <div class="mt-6 text-gray-800 leading-relaxed">
                        {!! $post->content !!}
                    </div>
                </div>
            </div>
            
            <!-- Sticky Search Form -->
            <div class="max-w-[600px] w-full md:w-[30%] self-start sticky top-[180px]">
                <form action="{{ route('frontend.search') }}" method="GET" class="flex">
                    <input
                        type="text"
                        name="q"
                        placeholder="Search blogs..."
                        class="w-full p-3 text-black rounded-l-md focus:outline-none"
                        value="{{ request()->query('q') }}"
                        required>
                    <button
                        type="submit"
                        class="bg-red-500 text-white px-6 py-3 rounded-r-md hover:bg-red-600 transition">
                        Find
                    </button>
                </form>
            </div>
        </div>
    </div>
</section>
@endsection
