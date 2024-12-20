<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel Shop') }}</title>

    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

    <!-- Scripts -->
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>
<body class="font-sans antialiased">
<div class="min-h-screen bg-gray-50">
    <div class="flex">
        <!-- Sidebar -->
        <div x-data="{ open: true }"
             x-cloak
             :class="{'w-64': open, 'w-0': !open}"
             class="fixed inset-y-0 left-0 z-30 transition-all duration-300 transform bg-white shadow-lg">

            @include('components.sidebar')
        </div>

        <!-- Main Content Wrapper -->
        <div x-data="{ open: true }"
             :class="{'pl-64': open, 'pl-0': !open}"
             class="flex-1 transition-all duration-300">

            @include('components.navigation')

            <!-- Main Content -->
            <main class="p-4 sm:p-6 lg:p-8 transition-all duration-300">
                {{ $slot }}
            </main>
        </div>
    </div>
</div>

<!-- AlpineJS -->
<script defer src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js"></script>
</body>
</html>