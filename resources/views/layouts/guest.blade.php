<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=oswald:400,600,700|inter:400,500,600,700,800,900" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans text-gray-200 antialiased bg-brand-black">
    <div
        class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-brand-black relative overflow-hidden">
        <!-- Luces de fondo estilo landing page -->
        <div class="absolute inset-0 z-0 pointer-events-none opacity-50">
            <div class="absolute top-[-10%] right-[-10%] w-[40%] h-[40%] bg-brand-red/20 blur-[120px] rounded-full">
            </div>
            <div
                class="absolute bottom-[-10%] left-[-10%] w-[30%] h-[30%] bg-brand-darkred/20 blur-[100px] rounded-full">
            </div>
        </div>

        <div class="z-10">
            <a href="/">
                <x-application-logo class="w-32 h-32" />
            </a>
        </div>

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-[#111] border border-brand-red/30 shadow-[0_0_15px_rgba(207,20,43,0.15)] overflow-hidden sm:rounded-lg z-10 relative">
            {{ $slot }}
        </div>
    </div>
</body>

</html>