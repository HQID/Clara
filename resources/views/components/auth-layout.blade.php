<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Carla - Auth' }}</title>
    <link rel="icon" type="image/png" href="{{ asset('images/logo.png') }}">
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>
<body class="flex items-center justify-center min-h-screen bg-gray-100 flex-col">
    <div class="text-center mb-6">
        <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-12 h-12 mx-auto mb-2">
        <h1 class="text-3xl font-bold text-orange-600">Carla</h1>
    </div>
    <div class="bg-white shadow rounded-lg p-6 w-full max-w-sm">
        @yield('content')
    </div>
</body>
</html>
