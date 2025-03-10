<header class="relative">
    <div class="p-2.5 flex justify-between items-center bg-headerGradient text-white">
        <a href="/" class="w-[40%] md:w-[31.29%]">
            <img src="{{ asset('images/logo.webp') }}" alt="Logo" class="w-[138px] lg:w-[40%]">
        </a>

        <div class="flex items-center pr-3">
            <!-- Ensure this button is always above the mobile menu -->

            <div class="hidden lg:flex items-center">
            <div class="w-6 h-6">
                <svg aria-hidden="true" class="fill-white w-4 h-4" viewBox="0 0 448 512" xmlns="https://www.w3.org/2000/svg">
                    <path d="M224 256c70.7 0 128-57.3 128-128S294.7 0 224 0 96 57.3 96 128s57.3 128 128 128zm95.8 32.6L272 480l-32-136 32-56h-96l32 56-32 136-47.8-191.4C56.9 292 0 350.3 0 422.4V464c0 26.5 21.5 48 48 48h352c26.5 0 48-21.5 48-48v-41.6c0-72.1-56.9-130.4-128.2-133.8z" class="two_elementor_element"></path>
                </svg>
            </div>
                <input type="text" placeholder="Username" class="text-[#1e1e1e] text-[12px] border border-[#aaa] bg-white shadow-[rgba(0,0,0,0.5)] rounded-[4px] p-[5px] m-[0_5px_5px_0] box-border min-w-[100px] placeholder:text-xs placeholder:font-semibold placeholder:capitalize">
                <input type="password" placeholder="Password" class="text-[#1e1e1e] text-[12px] border border-[#aaa] bg-white shadow-[rgba(0,0,0,0.5)] rounded-[4px] p-[5px] m-[0_5px_5px_0] box-border min-w-[100px] placeholder:text-xs placeholder:font-semibold placeholder:capitalize">
            </div>
            <div class="flex">
                <button class="bg-[#ED221E] font-roboto text-[14px] font-semibold capitalize rounded-[5px] px-[10px] py-[5px] ml-[5px] flex items-center gap-1 font-Roboto"><span class="">Login </span>
                    <span>
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" class="w-4 h-4">
                            <title>Artboard-34</title>
                            <g id="Right-2" data-name="Right">
                                <polygon points="17.5 5.999 16.793 6.706 22.086 11.999 1 11.999 1 12.999 22.086 12.999 16.792 18.294 17.499 19.001 24 12.499 17.5 5.999" style="fill:white" />
                            </g>
                        </svg>
                    </span>
                </button>
                <button class="bg-[#ED221E] font-roboto text-[14px] font-semibold capitalize rounded-[5px] px-[10px] py-[5px] ml-[5px] hidden lg:flex items-center gap-1 font-Roboto"><span >Signup </span>
                    <span>
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25" class="w-4 h-4">
                            <g id="Right-2" data-name="Right">
                                <polygon points="17.5 5.999 16.793 6.706 22.086 11.999 1 11.999 1 12.999 22.086 12.999 16.792 18.294 17.499 19.001 24 12.499 17.5 5.999" style="fill:white" />
                            </g>
                        </svg>
                    </span>
                </button>
            </div>
        </div>
    </div>

    <!-- Mobile Menu -->
    <div class="bg-navGradient ">
        <button id="menu-toggle" class="lg:hidden text-white p-2 relative z-10">
            <svg aria-hidden="true" tabindex="0" class="w-[30px] h-[30px] fill-white " viewBox="0 0 448 512" xmlns="https://www.w3.org/2000/svg">
                <path d="M432 416H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-128H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-128H16a16 16 0 0 0-16 16v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16v-32a16 16 0 0 0-16-16zm0-128H16A16 16 0 0 0 0 48v32a16 16 0 0 0 16 16h416a16 16 0 0 0 16-16V48a16 16 0 0 0-16-16z"></path>
            </svg>
        </button>
        <nav id="mobile-menu" class=" w-full min-h-[73vh] z-50 lg:hidden absolute bg-navGradient top-[54px] flex items-start flex-col ">
            <button id="close-menu" class="p-2">
                <svg aria-hidden="true" tabindex="0" class="w-[30px] h-[30px] fill-white" viewBox="0 0 512 512" xmlns="https://www.w3.org/2000/svg">
                    <path d="M464 32H48C21.5 32 0 53.5 0 80v352c0 26.5 21.5 48 48 48h416c26.5 0 48-21.5 48-48V80c0-26.5-21.5-48-48-48zm0 394c0 3.3-2.7 6-6 6H54c-3.3 0-6-2.7-6-6V86c0-3.3 2.7-6 6-6h404c3.3 0 6 2.7 6 6v340zM356.5 194.6L295.1 256l61.4 61.4c4.6 4.6 4.6 12.1 0 16.8l-22.3 22.3c-4.6 4.6-12.1 4.6-16.8 0L256 295.1l-61.4 61.4c-4.6 4.6-12.1 4.6-16.8 0l-22.3-22.3c-4.6-4.6-4.6-12.1 0-16.8l61.4-61.4-61.4-61.4c-4.6-4.6-4.6-12.1 0-16.8l22.3-22.3c4.6-4.6 12.1-4.6 16.8 0l61.4 61.4 61.4-61.4c4.6-4.6 12.1-4.6 16.8 0l22.3 22.3c4.7 4.6 4.7 12.1 0 16.8z"></path>
                </svg>
            </button>
            <ul class="flex flex-col w-full">
                <li><a href="/" class="text-black bg-[#01BAEE] hover:bg-[#01BAEE] p-3 text-sm font-semibold block border-b-[1px] border-[#c4c4c4]">Home</a></li>
                @php
                $menuItems = ['In-Play', 'Cricket', 'Football', 'Tennis', 'Casino', 'Horse Racing', 'Greyhound Racing', 'Kabaddi', 'Politics', 'Sports Book', 'Int Casino', 'Binary'];
                @endphp
                @foreach ($menuItems as $item)
                <li class="text-white  hover:bg-[#01BAEE] p-3 text-sm font-semibold block border-b-[1px] border-[#c4c4c4] hover:text-black">{{ $item }}</li>
                @endforeach
            </ul>
        </nav>
        <nav class="bg-navGradient lg:block hidden">
            <ul class="flex ">
                <li><a href="/" class="hover:underline text-black bg-[#01BAEE] p-[10px] text-sm font-Roboto capitalize font-semibold block leading-[100%]">Home</a></li>
                @php
                $menuItems = [
                'In-Play', 'Cricket', 'Football', 'Tennis', 'Casino', 'Horse Racing',
                'Greyhound Racing', 'Kabaddi', 'Politics', 'Sports Book', 'Int Casino', 'Binary'
                ];
                @endphp
                @foreach ($menuItems as $item)
                <li class=" p-[10px] text-sm font-Roboto hover:bg-[#01BAEE] capitalize font-semibold text-white leading-[100%] hover:text-black">{{ $item }}</li>
                @endforeach
            </ul>
        </nav>
    </div>
</header>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        const menuToggle = document.getElementById("menu-toggle");
        const closeMenu = document.getElementById("close-menu");
        const mobileMenu = document.getElementById("mobile-menu");

        menuToggle.addEventListener("click", function() {
            mobileMenu.classList.toggle("flex");
            mobileMenu.classList.toggle("hidden");
        });

        closeMenu.addEventListener("click", function() {
            mobileMenu.classList.add("hidden");
            mobileMenu.classList.remove("flex");
        });
    });
</script>