<section class="container py-2.5">
<div class="grid grid-cols-1 md:grid-cols-2 gap-2.5 gap-y-2.5">
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
            <img src="{{ $game['image'] }}" alt="{{ $game['title'] }}" class="w-full max-w-[730px] mx-auto h-auto">
            <div class="absolute bottom-0 left-0 w-full bg-black py-[5px] px-2.5 flex justify-between items-center">
                <span class="text-white  text-[17px] font-semibold">{{ $game['title'] }}</span>
                <button class="bg-white text-black px-3 py-1 text-[15px] font-semibold font-Roboto rounded flex items-center gap-2">
                    Play Now  
                     <svg aria-hidden="true" class="w-[15px] h-[15px]" viewBox="0 0 192 512" xmlns="https://www.w3.org/2000/svg" ><path d="M0 384.662V127.338c0-17.818 21.543-26.741 34.142-14.142l128.662 128.662c7.81 7.81 7.81 20.474 0 28.284L34.142 398.804C21.543 411.404 0 402.48 0 384.662z" class="two_elementor_element"></path></svg>

                </button>
            </div>
        </a>
    @endforeach
</div>
</section>
