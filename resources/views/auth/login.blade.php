@extends("frontend.master")

@section("title", "Log In - ".config("app.name"))
@section("content")
<section class="min-h-screen flex items-center justify-center bg-black p-5">
    <div class="w-full max-w-md bg-gray-900 shadow-md rounded-lg p-6">
        <h4 class="text-2xl font-semibold text-white text-center">Log In</h4>
        
        @if ($errors->any())
        <div class="bg-red-100 text-red-700 p-3 rounded mt-4">
            @foreach ($errors->all() as $error)
                <p>{{ $error }}</p>
            @endforeach
        </div>
        @endif
        
        <form action="{{ route('auth.login') }}" method="POST" class="mt-6">
            @csrf
            <div class="mb-4">
                <input type="text" name="email_or_username" placeholder="Email or Username" 
                    class="w-full px-4 py-2 border border-gray-700 bg-gray-800 text-white rounded focus:outline-none focus:ring-2 focus:ring-gray-500" 
                    value="{{ old('email_or_username') }}" />
            </div>
            <div class="mb-4">
                <input type="password" name="password" placeholder="Password" 
                    class="w-full px-4 py-2 border border-gray-700 bg-gray-800 text-white rounded focus:outline-none focus:ring-2 focus:ring-gray-500" />
            </div>
            <div class="mb-4 flex items-center">
                <input type="checkbox" name="remember" value="1" id="rememberMe" class="mr-2">
                <label for="rememberMe" class="text-gray-300">Remember Me</label>
            </div>
            <div>
                <button type="submit" class="w-full bg-gray-700 text-white py-2 rounded hover:bg-gray-600 transition duration-300">Log In</button>
            </div>
        </form>
    </div>
</section>
@endsection