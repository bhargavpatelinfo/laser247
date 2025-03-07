<header class="bg-blue-900 text-white">
    <div class="container mx-auto p-4 flex justify-between items-center">
        <img src="{{ asset('images/logo.webp') }}" alt="Logo">

        <nav class="bg-[green]">
            <ul class="flex space-x-4 bg-[red]">
                <li><a href="/" class="hover:underline">Home</a></li>
                @php
                    $menuItems = [
                        'In-Play', 'Cricket', 'Football', 'Tennis', 'Casino', 'Horse Racing',
                        'Greyhound Racing', 'Kabaddi', 'Politics', 'Sports Book', 'Int Casino', 'Binary'
                    ];
                @endphp
                @foreach ($menuItems as $item)
                    <li>{{ $item }}</li>
                @endforeach
            </ul>
        </nav>

        <div class="bg-black">

   
        <i class="fa-solid fa-user-tie"></i>
            <input type="text" placeholder="Username" class="p-1 rounded">
            <input type="password" placeholder="Password" class="p-1 rounded">
            <button class="bg-red-500 px-4 py-1 rounded text-white">Login</button>
            <button class="bg-orange-500 px-4 py-1 rounded text-white">Signup</button>
        </div>
    </div>
</header>
