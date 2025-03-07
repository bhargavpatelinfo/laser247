<div class="bg-black">
<div class="pt-[80px] pb-[40px] bg-[center_center] bg-no-repeat bg-cover"
    style="background-image: url('{{ asset("storage/asset/images/blogBg1.jpg") }}');"
    background-size:cover;>
    <div class="max-w-[1530px] w-full mx-auto px-[15px]">
        <div class="flex flex-col gap-5 mb-10 md:mb-[80px]">
            <h2 class="text-white text-[26px] md:text-[60px] font-bold text-center leading-[100%]"><span class="text-golden">Latest</span> Updatess</h2>
            <p class="text-xl text-white  font-bold leading-[120%] text-center">Discover the most outstanding articles in all topics of life.</p>
        </div>
        <div class="max-w-[1200px] w-full mx-auto grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-5">
            @forelse ($recentposts as $recentpost)
            <div class="bg-white rounded-[10px] shodow-[0_4px_8px_rgba(0, 0, 0, 0.1)] overflow-hidden basic-transition hover:translate-y-[-10px] cursor-pointer">
                <a href="{{ route("frontend.post", $recentpost->slug) }}" class="flex flex-col justify-between">
                    <img src="{{ asset("uploads/post/".$recentpost->thumbnail) }}" alt="{{ $recentpost->title }}" class="w-full h-[200px] object-cover"/>
                    <div class="flex flex-col gap-5 justify-between p-[15px]">
                        <ul class="flex flex-col gap-1">
                            <li class="font-medium">
                                <a href="{{ route("frontend.category", $recentpost->category->slug) }}" class="category-style-1">{{ $recentpost->category->title }}</a>
                            </li>
                            <li class="font-medium"> <span class="line"></span>{{ $recentpost->created_at->format("F d, Y") }}</li>
                        </ul>
                        <a href="{{ route("frontend.post", $recentpost->slug) }}">
                            <h3 class="text-xl text-[#333] font-bold">
                                {{ $recentpost->title }}
                            </h3>
                        </a>
                        <div class="">
                            <a href="{{ route("frontend.post", $recentpost->slug) }}" class="font-medium hover:text-blue-700">Continue Reading <i class="las la-long-arrow-alt-right"></i></a>
                        </div>
                    </div>
                </a>
            </div>

            @empty
            <div>No post found!</div>
            @endforelse
            <div class="">
                <!-- <div class="pagination-area">
            {{ $recentposts->links("vendor.pagination.custom") }}
            </div> -->
            </div>
        </div>
    </div>
</div>
</div>