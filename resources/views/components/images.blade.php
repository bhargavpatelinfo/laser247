<section class="grid grid-cols-2 gap-4">
    @php
        $games = [
            ['title' => 'Sports', 'image' => asset('images/banner-sport1.webp'),"link"=>"https://teeny.in/frdPd"],
            ['title' => 'Sports Book', 'image' => asset('images/banner-sport2.webp'),"link"=>"https://teeny.in/frdPd"],
            ['title' => 'Aviator', 'image' => asset('images/banner-sport3.webp'),"link"=>"https://teeny.in/frdPd"],
            ['title' => 'Live Teenpatti', 'image' => asset('images/banner-sport4.webp'),"link"=>"https://teeny.in/frdPd"],
        ];
    @endphp

    @foreach ($games as $game)
        <a href="{{ $game['link'] }}" class="relative">
            <img src="{{ $game['image'] }}" alt="{{ $game['title'] }}" class="w-full">
            <div class="absolute bottom-0 left-0 w-full bg-black text-white p-2 flex justify-between items-center">
                <span>{{ $game['title'] }}</span>
                <button class="bg-white text-black px-3 py-1 text-sm font-semibold rounded">
                    Play Now 
                </button>
            </div>
        </a>
    @endforeach
</section>
