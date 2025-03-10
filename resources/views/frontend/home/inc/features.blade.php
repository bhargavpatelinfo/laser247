<section>
    <div class="container ">
        <div class="flex items-center md:flex-row flex-col justify-between w-full py-[10px]">
            <div class="flex flex-col items-center gap-[5px] w-full max-w-[1055px] p-2.5">
                <div>
                    <h2 class="text-[28px] font-semibold text-[#1A202C] font-Roboto mb-[14px]">Laser 247: Your Cricket Haven – Pros and Cons</h2>
                    <p class="text-[17px] font-Roboto text-black mb-8">As with any platform, Laser 247 has its strengths and areas for improvement. The extensive product range, engaging forum, and rewarding shopping experience are notable strengths. However, occasional customer service hiccups and intermittent website slowdowns have been reported by some users.</p>
                    <p class="text-[17px] font-Roboto text-black">In summary, Laser 247 amalgamates cricket commerce and camaraderie, providing a platform where enthusiasts can indulge in their passion for the sport. With its diverse offerings and interactive community, Laser 247 emerges as a promising destination for cricket aficionados seeking more than just merchandise.</p>
                </div>
                @include('frontend.home.inc.whatsappbutton')
            </div>
            <div class="w-full md:w-[40%] lg:w-[26%] h-full flex flex-col items-center gap-2.5">
                <a>
                    <img src="/images/trofy.webp" alt="Laser 247: Your Cricket Exchange and Community Hub" class="w-full max-w-[400px] h-full max-h-[400px]">

                </a>
                @include('frontend.home.inc.whatsappbutton')
            </div>
        </div>

        <div class="flex items-center md:flex-row-reverse flex-col-reverse  justify-between w-full py-[10px]">
            <div class="flex flex-col items-center gap-[5px] w-full max-w-[1055px] p-2.5">
                <div>
                    <h2 class="text-[28px] font-semibold text-[#1A202C] font-Roboto mb-[14px]">Laser 247 Com Cricket Betting Exchange</h2>
                    <p class="text-[17px] font-Roboto text-black">Laser 247 Com Betting Exchange is a revolutionary platform that eliminates the need for traditional bookmakers by permitting users to place wagers against one another. Bettors are provided with an experience that is both dynamic and engaging thanks to the fact that it enables users to select their own odds and place bets with one another.</p>
                </div>
                @include('frontend.home.inc.whatsappbutton')
            </div>
            <div class="w-full md:w-[40%] lg:w-[26%] h-full flex flex-col items-center gap-2.5">
            <a href="https://teeny.in/frdPd">
                <img src="/images/batting-exchange.webp" alt="Laser 247: Your Cricket Exchange and Community Hub" class="w-full max-w-[400px] h-full max-h-[400px]">
            </a>
                @include('frontend.home.inc.whatsappbutton')
            </div>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-4 gap-[10px] w-full py-[10px]">
            @php
            $games = [
            ['title' => 'queen', 'image' => asset('images/queen.jpg'),"link"=>"https://teeny.in/frdPd"],
            ['title' => 'patti test', 'image' => asset('images/patti-test.webp'),"link"=>"https://teeny.in/frdPd"],
            ['title' => 'teen patti', 'image' => asset('images/teen-patti-open.webp'),"link"=>"https://teeny.in/frdPd"],
            ['title' => '2 cards', 'image' => asset('images/2-cards.webp'),"link"=>"https://teeny.in/frdPd"],
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
                    <h2 class="text-[28px] font-semibold text-[#1A202C] font-Roboto mb-[14px]">Laser 247 Com Cricket Exchange Online Betting</h2>
                    <p class="text-[17px] font-Roboto text-black mb-8">Laser 247 Com Cricket Exchange Online Betting – Discover Laser 247 Com is India’s betting exchange platform, and it provides players with a large variety of games, an interface that is easy to use, and enticing bonus offers.</p>
                    <p class="text-[17px] font-Roboto text-black">You don’t compete against the betting platform when you use a betting exchange; instead, you bet against other users in the market. This presents a unique opportunity for those interested in sports betting. It produces an experience that is both fascinating and immersive, marked by challenges that are constantly being updated and the excitement of competing against other players.</p>
                </div>
                @include('frontend.home.inc.whatsappbutton')
            </div>
            <div class="w-full md:w-[40%] lg:w-[26%] h-full flex flex-col items-center gap-2.5">
                <a>
                    <img src="/images/boy-7.webp" alt="Laser 247: Your Cricket Exchange and Community Hub" class="w-full max-w-[400px] h-full max-h-[400px]">

                </a>
                @include('frontend.home.inc.whatsappbutton')
            </div>
        </div>

        <div class="flex items-center md:flex-row-reverse flex-col-reverse  justify-between w-full py-[10px]">
            <div class="flex flex-col items-center gap-[5px] w-full max-w-[1055px] p-2.5">
                <div>
                    <h2 class="text-[28px] font-semibold text-[#1A202C] font-Roboto mb-[14px]">Laser 247 Com Cricket Exchange Online Betting</h2>
                    <p class="text-[17px] font-Roboto text-black">Betting exchanges, on the other hand, can be more difficult to understand than traditional betting. As a direct consequence, those new to the world of online betting may have a tough time comprehending how to bet using a betting exchange. This is where Laser 247 Com India comes in; we have compiled the most thorough and extensive information on betting exchanges that are currently accessible.</p>
                </div>
                @include('frontend.home.inc.whatsappbutton')
            </div>
            <div class="w-full md:w-[40%] lg:w-[26%] h-full flex flex-col items-center gap-2.5">
            <a href="https://teeny.in/frdPd">
                <img src="/images/cricket-championship.webp" alt="Laser 247: Your Cricket Exchange and Community Hub" class="w-full max-w-[400px] h-full max-h-[400px]">
            </a>
                @include('frontend.home.inc.whatsappbutton')
            </div>
        </div>

        <div class="flex items-center md:flex-row flex-col justify-between w-full py-[10px]">
            <div class="flex flex-col items-center gap-[5px] w-full max-w-[1055px] p-2.5">
                <div>
                    <h2 class="text-[28px] font-semibold text-[#1A202C] font-Roboto mb-[14px]">Laser 247 Live Cricket Trading Market</h2>
                    <p class="text-[17px] font-Roboto text-black mb-8">Not only does our guide include detailed instructions on how to utilize betting exchanges, but it also contains an archived list of all of the websites that are associated with Indian betting exchanges from which you can make your selection.</p>
                    <p class="text-[17px] font-Roboto text-black mb-8">The provision of an alternative to conventional bookmakers was the impetus behind the transformation that took place in the world of sports betting brought about by betting exchanges. This cutting-edge technology gives users the ability to set their own odds and compete with one another in wagers, creating a betting environment that is both dynamic and participatory.</p>
                    <p class="text-[17px] font-Roboto text-black mb-8">In this part of the article, we will discuss the notion of betting exchanges, how they function, and the benefits they offer in comparison to more conventional methods of betting.</p>
                    <p class="text-[17px] font-Roboto text-black">Bettors are able to improve their entire betting experience and make more educated judgments when they have a solid understanding of the workings of a betting exchange.</p>
                </div>
                @include('frontend.home.inc.whatsappbutton')
            </div>
            <div class="w-full md:w-[40%] lg:w-[26%] h-full flex flex-col items-center gap-2.5">
                <a>
                    <img src="/images/ball2.webp" alt="Laser 247: Your Cricket Exchange and Community Hub" class="w-full max-w-[400px] h-full max-h-[400px]">

                </a>
                @include('frontend.home.inc.whatsappbutton')
            </div>
        </div>

    </div>


</section>