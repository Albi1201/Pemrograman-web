<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="font-sans antialiased">
    <div class="min-h-screen bg-green-50">
        @include('layouts.navigation')

        @isset($header)
            <header class="bg-white shadow border-b border-green-200">
                <div class="max-w-7xl mx-auto py-6 px-4 sm:px-6 lg:px-8">
                    {{ $header }}
                </div>
            </header>
        @endisset

        <main x-data="{ show: false }" x-init="setTimeout(() => show = true, 50)">
            <div x-show="show" x-transition:enter="transition ease-in-out duration-700"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-0 scale-100">
                {{ $slot }}
            </div>
        </main>
    </div>
</body>

</html>
