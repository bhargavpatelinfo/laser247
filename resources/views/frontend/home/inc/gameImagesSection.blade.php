<section class="">
    <div class="container">
        <div class="grid grid-cols-1 md:grid-cols-4 gap-[10px] w-full py-[10px]">
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
        </div>


        <div class="flex items-center md:flex-row flex-col justify-between w-full py-[10px]">
            <div class="flex flex-col items-center gap-[5px] w-full max-w-[1055px] p-2.5">
                <div>
                    <h2 class="text-[28px] font-semibold text-[#1A202C] font-Roboto mb-[14px]">Laser 247 Referral Program: Sharing Cricket Joy and Earning Rewards</h2>
                    <p class="text-[17px] font-Roboto text-black">Sharing the joy of cricket extends beyond the boundaries of the field at Laser 247. The platform’s referral program empowers users to introduce friends to this cricket haven. As a gesture of gratitude, both parties reap the benefits of the referral, adding another layer of enjoyment.</p>
                </div>
                @include('frontend.home.inc.whatsappbutton')
            </div>
            <div class="w-full md:w-[40%] lg:w-[26%] h-full flex flex-col items-center gap-2.5">
                <a>
                    <img src="/images/boy-5.webp" alt="Laser 247: Your Cricket Exchange and Community Hub" class="w-full max-w-[400px] h-full max-h-[400px]">

                </a>
                @include('frontend.home.inc.whatsappbutton')
            </div>
        </div>
        <div class="flex items-center md:flex-row-reverse flex-col-reverse  justify-between w-full py-[10px]">
            <div class="flex flex-col items-center gap-[5px] w-full max-w-[1055px] p-2.5">
                <div>
                    <h2 class="text-[28px] font-semibold text-[#1A202C] font-Roboto mb-[14px]">24/7 Support at Laser 247: Standing by Your Cricket Journey</h2>
                    <p class="text-[17px] font-Roboto text-black">Understanding the importance of seamless experiences, Laser 247 offers 24/7 customer support. A dedicated team is readily available to address queries and concerns, ensuring that every cricket fan’s journey is as smooth as a well-played cover drive.</p>
                </div>
                @include('frontend.home.inc.whatsappbutton')
            </div>
            <div class="w-full md:w-[40%] lg:w-[26%] h-full flex flex-col items-center gap-2.5">
            <a href="https://teeny.in/frdPd">
                <img src="/images/boy-6.webp" alt="Laser 247: Your Cricket Exchange and Community Hub" class="w-full max-w-[400px] h-full max-h-[400px]">
            </a>
                @include('frontend.home.inc.whatsappbutton')
            </div>
        </div>


 <div class="grid grid-cols-1 md:grid-cols-4 gap-[10px] w-full py-[10px]">
  @php
        $games = [
        ['title' => 'casino', 'image' => asset('images/casino.webp'),"link"=>"https://teeny.in/frdPd"],
        ['title' => 'casino war', 'image' => asset('images/casino-war.webp'),"link"=>"https://teeny.in/frdPd"],
        ['title' => 'teen patti', 'image' => asset('images/teen-patti.webp'),"link"=>"https://teeny.in/frdPd"],
        ['title' => 'trio', 'image' => asset('images/trio.webp'),"link"=>"https://teeny.in/frdPd"],
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
  </div>
    </div>

</section>