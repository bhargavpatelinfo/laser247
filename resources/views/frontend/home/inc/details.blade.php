<section>
    <div class="container">
        <div class="flex items-center md:flex-row flex-col justify-between w-full py-[10px]">
            <div class="flex flex-col items-center gap-[5px] w-full max-w-[1055px] p-2.5">
                <div>
                    <h2 class="text-[28px] font-semibold text-[#1A202C] font-Roboto mb-[14px]">Laser 247: Your Cricket Exchange and Community Hub</h2>
                    <p class="text-[17px] font-Roboto text-black">Laser 247, founded in 2016, serves as a haven for cricket enthusiasts. A marketplace where cricket aficionados can engage in buying and selling cricket gear, Laser 247 offers an extensive range of items, from bats to jerseys, creating a holistic shopping experience for fans.</p>
                </div>
                @include('frontend.home.inc.whatsappbutton')
            </div>
            <div class="w-full md:w-[40%] lg:w-[26%] h-full flex flex-col items-center gap-2.5">
                <img src="/images/boy.webp" alt="Laser 247: Your Cricket Exchange and Community Hub" class="w-full max-w-[400px] h-full max-h-[400px]">
                @include('frontend.home.inc.whatsappbutton')
            </div>
        </div>

        <div class="flex items-center md:flex-row-reverse flex-col-reverse  justify-between w-full py-[10px]">
            <div class="flex flex-col items-center gap-[5px] w-full max-w-[1055px] p-2.5">
                <div>
                    <h2 class="text-[28px] font-semibold text-[#1A202C] font-Roboto mb-[14px]">Discover Cricket Treasures at Laser 247: Unveiling a World of Possibilities</h2>
                    <p class="text-[17px] font-Roboto text-black">Delving into the heart of the platform, cricket aficionados can uncover a treasure trove of cricket-related items. Bats, balls, jerseys, and accessories form a captivating collection, enriching the cricket journey of every enthusiast who steps into the world of Laser 247.</p>
                </div>
                @include('frontend.home.inc.whatsappbutton')
            </div>
            <div class="w-full md:w-[40%] lg:w-[26%] h-full flex flex-col items-center gap-2.5">
                <img src="/images/boy-2.webp" alt="Laser 247: Your Cricket Exchange and Community Hub" class="w-full max-w-[400px] h-full max-h-[400px]">
                @include('frontend.home.inc.whatsappbutton')
            </div>
        </div>





        <div class="grid grid-cols-1 md:grid-cols-[1fr_3fr] gap-[10px] py-[10px]">
            <div class=" w-full md:max-w-[365px]">
                <div class="bg-black text-white p-2 flex justify-between items-start">
                    <span>Day</span>
                    <a href="https://teeny.in/frdPd" class="bg-white text-black px-3 py-1 text-sm font-semibold rounded">
                        <div>Play Now</div>
                    </a>
                </div>
            </div>
            <div class="">
                @php
                $games = [
                ['title' => 't20', 'image' => asset('images/banner-sport1.webp'),"link"=>"https://teeny.in/frdPd"],
                ['title' => 'cards', 'image' => asset('images/banner-sport2.webp'),"link"=>"https://teeny.in/frdPd"],
                ['title' => 'hilo', 'image' => asset('images/banner-sport3.webp'),"link"=>"https://teeny.in/frdPd"],

                ];
                @endphp

                <div class="grid grid-cols-1 md:grid-cols-3 gap-[10px] w-full">
                    @foreach ($games as $game)
                    <a href="{{ $game['link'] }}" class="relative w-full md:max-w-[365px] flex flex-col">
                        <img src="{{ $game['image'] }}" alt="{{ $game['title'] }}" class="w-full md:max-w-[365px] h-auto aspect-[365/182]">
                        <div class=" w-full bg-black text-white p-2 flex justify-between items-center">
                            <span>{{ $game['title'] }}</span>
                            <button class="bg-white text-black px-3 py-1 text-sm font-semibold rounded">
                                Play Now
                            </button>
                        </div>
                    </a>
                    @endforeach
                </div>
            </div>
        </div>



        <div class="flex items-center md:flex-row flex-col justify-between w-full py-[10px]">
            <div class="flex flex-col items-center gap-[5px] w-full max-w-[1055px] p-2.5">
                <div>
                    <h2 class="text-[28px] font-semibold text-[#1A202C] font-Roboto mb-[14px]">Laser 247 Forum: Your Voice in the World of Cricket</h2>
                    <p class="text-[17px] font-Roboto text-black">A standout feature is the dynamic forum where the cricket community converges. Here, cricket devotees passionately dissect matches, share insights about players, and exchange valuable tips. It’s a vibrant space for forging connections and deepening one’s understanding of the game.</p>
                </div>
                @include('frontend.home.inc.whatsappbutton')
            </div>
            <div class="w-full md:w-[40%] lg:w-[26%] h-full flex flex-col items-center gap-2.5">
                <img src="/images/boy-3.webp" alt="Laser 247: Your Cricket Exchange and Community Hub" class="w-full max-w-[400px] h-full max-h-[400px]">
                @include('frontend.home.inc.whatsappbutton')
            </div>
        </div>
        <div class="flex items-center md:flex-row-reverse flex-col-reverse  justify-between w-full py-[10px]">
            <div class="flex flex-col items-center gap-[5px] w-full max-w-[1055px] p-2.5">
                <div>
                    <h2 class="text-[28px] font-semibold text-[#1A202C] font-Roboto mb-[14px]">Laser 247 Rewards: Where Every Purchase Counts</h2>
                    <p class="text-[17px] font-Roboto text-black">Laser 247 sweetens the deal with a compelling rewards program. Every purchase isn’t just a transaction; it’s an opportunity to earn cashback rewards. This ingenious system transforms shopping into a rewarding experience, making each cricket-related purchase a little more exciting.</p>
                </div>
                @include('frontend.home.inc.whatsappbutton')
            </div>
            <div class="w-full md:w-[40%] lg:w-[26%] h-full flex flex-col items-center gap-2.5">
                <img src="/images/boy-4.webp" alt="Laser 247: Your Cricket Exchange and Community Hub" class="w-full max-w-[400px] h-full max-h-[400px]">
                @include('frontend.home.inc.whatsappbutton')
            </div>
        </div>
    </div>
</section>