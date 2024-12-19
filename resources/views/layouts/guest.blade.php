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

    <style>
        body {
            background: linear-gradient(to bottom right, #1a1a2e, #16213e);
            min-height: 100vh;
        }
        .auth-container {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.1);
            box-shadow: 0 8px 32px 0 rgba(31, 38, 135, 0.37);
        }
        .form-input {
            background: rgba(0, 0, 0, 0.2);
            border: 1px solid rgba(255, 255, 255, 0.1);
            color: white;
        }
        .form-input:focus {
            background: rgba(0, 0, 0, 0.3);
            border-color: rgba(255, 255, 255, 0.3);
        }
        .auth-button {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(5px);
            transition: all 0.3s ease;
        }
        .auth-button:hover {
            background: rgba(255, 255, 255, 0.2);
            transform: translateY(-1px);
        }
    </style>
</head>
<body>
<div class="min-h-screen flex flex-col sm:justify-center items-center p-6">
    {{ $slot }}
</div>
</body>
</html>
