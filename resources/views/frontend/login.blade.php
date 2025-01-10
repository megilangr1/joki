<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])

    <!-- Styles -->
    @livewireStyles
</head>

<body class="bg-neutral-900 font-sans antialiased">
    <div class="w-full min-h-screen text-white flex flex-col gap-4 items-center justify-center px-5">
        <img src="{{ asset('img/logo.png') }} " alt="sijoki" class="w-auto h-32 md:h-40 animate-pulse">

        <form action="{{ route('login') }}" method="POST">
            @csrf

            <div class="pt-3 pb-5 px-7 flex flex-col gap-4 bg-white border shadow-sm rounded-xl">
                <h3 class="text-lg text-center font-bold text-gray-800">
                    Login
                </h3>
                <div class="max-w-sm relative">
                    <input type="email" id="email" name="email"
                        class="peer py-3 px-4 ps-11 block w-full text-black bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        placeholder="Masukan Email">
                    <div
                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                        <svg class="shrink-0 size-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"></path>
                            <circle cx="12" cy="7" r="4"></circle>
                        </svg>
                    </div>
                </div>

                <div class="max-w-sm relative">
                    <input type="password" id="password" name="password"
                        class="peer py-3 px-4 ps-11 block w-full text-black bg-gray-100 border-transparent rounded-lg text-sm focus:border-blue-500 focus:ring-blue-500 disabled:opacity-50 disabled:pointer-events-none"
                        placeholder="Masukan Password">
                    <div
                        class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-4 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                        <svg class="shrink-0 size-4 text-gray-500" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"
                            stroke-linecap="round" stroke-linejoin="round">
                            <path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z"></path>
                            <circle cx="16.5" cy="7.5" r=".5"></circle>
                        </svg>
                    </div>
                </div>

                @if (count($errors->all()) > 0)
                    <ul class="list-disc list-inside text-sm text-red-600">
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                    </ul>
                @endif

                <button type="submit"
                    class="py-2 px-10 inline-flex justify-center items-center gap-x-2 text-sm font-medium rounded-md border border-transparent bg-violet-500 text-white hover:bg-violet-600 focus:outline-none focus:bg-violet-600 disabled:opacity-50 disabled:pointer-events-none">
                    Login
                </button>
            </div>
        </form>
    </div>

    @livewireScripts
</body>

</html>
