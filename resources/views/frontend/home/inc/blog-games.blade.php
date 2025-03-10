<section class="py-[20px]">
    <div class="container">
        <div class="flex flex-col gap-5 w-full max-w-[1140px] mx-auto">
            @foreach ($categories as $category)
            <div class="flex flex-col gap-4">
                <div class="flex items-center">
                    <span class="w-full h-[1px] border-[1px] border-[#54595F]"></span>
                    <h3 class="text-[40px] capitalize font-Roboto text-[#7A7A7A] whitespace-nowrap">{{ $category->title }}</h3>
                    <span class="w-full h-[1px] border-[1px] border-[#54595F]"></span>
                </div>

                <div class="flex flex-wrap">
                    @php
                    $categoryPosts = $recentposts->filter(function ($post) use ($category) {
                    return $post->category_id === $category->id;
                    });
                    @endphp

                    @if ($categoryPosts->isNotEmpty())

                    @foreach ($categoryPosts as $post)
                    <div class="w-full max-w-full md:max-w-[570px]">

                        <div class="relative group overflow-hidden w-full">
                            <img src="{{ asset("uploads/post/".$post->thumbnail) }}" alt="{{ $post->title }}" class="group-hover:scale-110 transition-all duration-300 ease-linear aspect-[570/330]">
                            <div class="bg-[#1A202CBF] absolute inset-0 w-full h-full p-[30px]">
                                <a href="{{ route('frontend.post', $post->slug) }}" class=" text-white text-[22px] md:text-[25px] lg:text-[30px] font-Roboto ">
                                    {{ $post->title }}
                                </a>
                                <p class="text-white mt-[18px] md:mt-[27px] text-[15px] md:text-[17px] font-Roboto">
                                    {{ Str::limit(strip_tags($post->content), 120) }}
                                </p>
                            </div>
                        </div>
                    </div>
                    @endforeach


                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </div>
</section>