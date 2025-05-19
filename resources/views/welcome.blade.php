<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

        <script src="https://cdn.jsdelivr.net/npm/@tailwindcss/browser@4"></script>

    </head>
    <body class="bg-linear-to-r from-cyan-500 to-blue-500 w-full h-screen">
        <div class="relative ">
            @if (Route::has('login'))
                <div class="sm:fixed sm:top-0 sm:right-0 p-6 text-right z-10">
                    @auth
                        <a href="{{ url('/dashboard') }}" class="font-semibold text-white hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-gray-500">Dashboard</a>
                    @else
                        <a href="{{ route('login') }}" class="border-2 p-2 rounded-lg font-semibold text-white hover:text-gray-200 focus:outline focus:outline-2 focus:rounded-sm focus:outline-gray-500">Log in</a>

                        @if (Route::has('register'))
                            <!--
                            <a href="{{ route('register') }}" class="ml-4 font-semibold text-white hover:text-gray-900 focus:outline focus:outline-2 focus:rounded-sm focus:outline-red-500">Register</a>-->
                        @endif
                    @endauth
                </div>
            @endif


            
        </div>

        <div class="flex justify-center items-center align-items-center pt-[200px]"</div>
        <img src="{{ asset('images/logo10.png') }}" alt="" width="300">
    </body>
</html>
