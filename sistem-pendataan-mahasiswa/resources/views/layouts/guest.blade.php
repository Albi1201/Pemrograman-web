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
</head>

<body class="font-sans text-gray-900 antialiased">
    <div class="min-h-screen flex flex-col justify-center items-center bg-green-50 pt-0">

        <div class="flex flex-col items-center mb-6">
            <a href="/">
                <x-application-logo class="w-32 h-32 text-green-700" />
            </a>

            <div class="text-center mt-4">
                <h1 class="text-2xl font-bold text-green-900">MhsHub</h1>
                <p class="text-sm text-green-700">Sistem Pendataan Mahasiswa</p>
            </div>
        </div>

        <div
            class="w-full sm:max-w-md px-6 py-4 bg-white shadow-md overflow-hidden sm:rounded-lg border border-green-100">
            {{ $slot }}
        </div>
    </div>
</body>

</html>
