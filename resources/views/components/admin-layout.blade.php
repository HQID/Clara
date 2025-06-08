<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title ?? 'Admin Panel' }}</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-gray-100 text-gray-800">
    <div class="flex">
        <!-- Sidebar -->
        <aside class="w-64 bg-orange-600 text-white min-h-screen">
            <div class="p-4">
                <a href="/admin/" class="flex items-center space-x-2">
                    <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10 filter brightness-300 contrast-300" />
                    <span class="text-2xl font-bold text-white">Carla</span>
                </a>
            </div>
            <nav class="mt-6">
                <ul class="space-y-4">
                    <li><a href="/admin/mobil" class="block px-4 py-2 hover:bg-orange-700">Mobils</a></li>
                    <li><a href="/admin/review" class="block px-4 py-2 hover:bg-orange-700">Reviews</a></li>
                    <li><a href="/admin/transaction" class="block px-4 py-2 hover:bg-orange-700">Transactions</a></li>
                    <li><a href="/admin/users" class="block px-4 py-2 hover:bg-orange-700">Users</a></li>
                        <form method="POST" action="{{ route('logout') }}">
                            @csrf
                            <button type="submit" class="block px-4 py-2 hover:bg-orange-700 w-full text-left cursor-pointer">Logout</button>
                        </form>
                    </li>
                </ul>
            </nav>
        </aside>
        <!-- Main Content -->
        <div class="flex-1">
            <header class="bg-white shadow py-4 px-6">
                <h1 class="text-2xl font-bold text-orange-600">{{ $section_title ?? 'Admin Panel' }}</h1>
            </header>
            <main class="p-6">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>
</html>
