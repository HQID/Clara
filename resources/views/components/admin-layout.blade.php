<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Panel' }}</title>
    <link rel="stylesheet" href="{{ asset('css/app.css') }}">
</head>
<body>
    <header class="bg-orange-600 text-white py-4">
        <div class="container mx-auto px-4">
            <h1 class="text-2xl font-bold">{{ $section_title ?? 'Admin Panel' }}</h1>
        </div>
    </header>
    <main class="container mx-auto px-4 py-10">
        {{ $slot }}
    </main>
</body>
</html>
