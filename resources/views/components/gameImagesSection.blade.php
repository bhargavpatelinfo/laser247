<section class="grid grid-cols-2 gap-4">
    @php
        $games = [
            ['title' => 'poker', 'image' => asset('images/poker.webp'),"link"=>"https://teeny.in/frdPd"],
            ['title' => '6player', 'image' => asset('images/6player.webp'),"link"=>"https://teeny.in/frdPd"],
            ['title' => 'poker 2020', 'image' => asset('images/poker-2020.webp'),"link"=>"https://teeny.in/frdPd"],
            ['title' => 'bollywood', 'image' => asset('images/bollywood.webp'),"link"=>"https://teeny.in/frdPd"],
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
