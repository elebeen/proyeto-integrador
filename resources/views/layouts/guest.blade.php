<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link rel="icon" type="image/png" href="{{ asset('/Images/favicon-96x96.png') }}" sizes="96x96" />
        <link rel="icon" type="image/svg+xml" href="{{ asset('/Images/favicon.svg') }}" />
        <link rel="shortcut icon" href="{{ asset('/Images/favicon.ico') }}" />
        <link rel="apple-touch-icon" sizes="180x180" href="{{ asset('/Images/apple-touch-icon.png') }}" />
        <link rel="manifest" href="{{ asset('/Images/site.webmanifest') }}" />
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <body class="font-sans text-gray-900 antialiased">
        <div class="min-h-screen flex flex-col justify-center items-center pt-6 sm:pt-0 bg-gradient-to-r from-[#780000] to-[#003049]">
            {{-- style="background-image:url('https://images.unsplash.com/photo-1499123785106-343e69e68db1?ixlib=rb-4.0.3&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=1748&q=80')" --}}
            {{-- <div> --}}
                {{-- <a href="/"> --}}
                    {{-- <x-application-logo class="w-20 h-20 fill-current text-gray-500" /> --}}
                    {{-- <x-paper-plane-logo class="w-40 h-40 fill-current text-gray-500" /> --}}
                    {{-- <x-tools-logo class="w-40 h-40 fill-current text-gray-500" /> --}}
                {{-- </a> --}}
            {{-- </div> --}}

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-[#669bbc] shadow-md overflow-hidden sm:rounded-lg">
                {{ $slot }}
            </div>
        </div>
    </body>
</html>
