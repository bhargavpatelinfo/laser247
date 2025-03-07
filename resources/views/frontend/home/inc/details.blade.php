<section>
    <div>
        <div>
            <h2>Laser 247: Your Cricket Exchange and Community Hub</h2>
            <p>Laser 247, founded in 2016, serves as a haven for cricket enthusiasts. A marketplace where cricket aficionados can engage in buying and selling cricket gear, Laser 247 offers an extensive range of items, from bats to jerseys, creating a holistic shopping experience for fans.</p>
            @include('frontend.home.inc.whatsappbutton')
        </div>
        <img src="/images/boy.webp" alt="Laser 247: Your Cricket Exchange and Community Hub">
        @include('frontend.home.inc.whatsappbutton')
    </div>


    <div>
        <h2>Discover Cricket Treasures at Laser 247: Unveiling a World of Possibilities</h2>
        <p>Delving into the heart of the platform, cricket aficionados can uncover a treasure trove of cricket-related items. Bats, balls, jerseys, and accessories form a captivating collection, enriching the cricket journey of every enthusiast who steps into the world of Laser 247.</p>
        @include('frontend.home.inc.whatsappbutton')
    </div>
    <div>
        <img src="/images/boy-2.webp" alt="">
        @include('frontend.home.inc.whatsappbutton')
    </div>




    <div>
        <span>Day</span>
        <a href="https://teeny.in/frdPd" class="">
            <div>Play Now</div>
        </a>
    </div>


    <div>
    @php
        $games = [
            ['title' => 't20', 'image' => asset('images/banner-sport1.webp'),"link"=>"https://teeny.in/frdPd"],
            ['title' => 'cards', 'image' => asset('images/banner-sport2.webp'),"link"=>"https://teeny.in/frdPd"],
            ['title' => 'hilo', 'image' => asset('images/banner-sport3.webp'),"link"=>"https://teeny.in/frdPd"],
            
        ];
    @endphp

    <div class="grid grid-cols-4">
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



    <div>
        <h2>Laser 247 Forum: Your Voice in the World of Cricket</h2>
        <p>A standout feature is the dynamic forum where the cricket community converges. Here, cricket devotees passionately dissect matches, share insights about players, and exchange valuable tips. It’s a vibrant space for forging connections and deepening one’s understanding of the game.</p>
        @include('frontend.home.inc.whatsappbutton')
    </div>
    <a href="https://teeny.in/frdPd">
        <img src="/images/boy-3.webp" alt="">
        @include('frontend.home.inc.whatsappbutton')
    </a>
    <div>
        <h2>Laser 247 Rewards: Where Every Purchase Counts</h2>
        <p>Laser 247 sweetens the deal with a compelling rewards program. Every purchase isn’t just a transaction; it’s an opportunity to earn cashback rewards. This ingenious system transforms shopping into a rewarding experience, making each cricket-related purchase a little more exciting.</p>
        @include('frontend.home.inc.whatsappbutton')
    </div>

    <a href="https://teeny.in/frdPd">
        <img src="/images/boy-4.webp" alt="">
        @include('frontend.home.inc.whatsappbutton')
    </a>
</section>