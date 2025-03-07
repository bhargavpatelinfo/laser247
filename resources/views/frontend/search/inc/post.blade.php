<div class="bg-black text-white pt-[80px]">
    <div class="max-w-[1230px] mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
        @forelse ($posts as $post)
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