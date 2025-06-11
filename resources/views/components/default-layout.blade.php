@props(['title', 'section_title'=> 'Menu'])
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
    <title>@yield('title', 'Carla')</title>
    @vite(['resources/css/app.css', 'resources/js/app.js'])
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.7.2/css/all.min.css" integrity="sha512-Evv84Mr4kqVGRNSgIGL/F/aIDqQb7xQ2vcrdIwxfjThSH8CSR7PBEakCr51Ck+w+/U6swU2Im1vVX0SVk9ABhg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>
<body class="bg-white text-gray-800">

<!-- NAVBAR START -->
<nav class="bg-white shadow">
    <div class="container mx-auto px-5 py-3 flex flex-wrap items-center justify-between">
        <!-- Logo & Brand -->
        <a href="/" class="flex items-center space-x-2">
            <img src="{{ asset('images/logo.png') }}" alt="Logo" class="w-10 h-10" />
            <span class="text-2xl font-bold text-orange-600">Carla</span>
        </a>

        <!-- Menu -->
        <div id="menu" class="w-full md:flex md:items-center md:w-auto hidden">
            <ul class="flex flex-col md:flex-row md:space-x-6 font-semibold text-lg mr-4">
                <li><a href="/" class="block py-2 hover:text-orange-600">Dashboard</a></li>
                <li><a href="/mobil" class="block py-2 hover:text-orange-600">Mobils</a></li>
                <li><a href="/review" class="block py-2 hover:text-orange-600">My Reviews</a></li>
                <li><a href="/transactions" class="block py-2 hover:text-orange-600">My Transactions</a></li>
            </ul>

            <!-- User Dropdown -->
            <div class="relative mt-3 md:mt-0 md:ml-6 z-10">
                <button id="user-menu-button" class="flex items-center space-x-2 focus:outline-none">
                    <div class="border-2 rounded-full">
                        <img src="{{ asset('https://images.icon-icons.com/3054/PNG/512/account_profile_user_icon_190494.png') }}" alt="User Logo" class="w-8 h-8 rounded-full">
                    </div>
                    
                    <span class="hidden md:block font-semibold">{{ Auth::user()->name }}</span>
                </button>
                <div id="user-menu" class="absolute right-0 mt-2 w-48 bg-white border border-gray-300 rounded shadow-lg hidden">
                    <ul class="py-1">
                        <li><a href="/profile" class="block px-4 py-2 hover:bg-gray-100">Profile</a></li>
                        <li>
                            <form method="POST" action="{{ route('logout') }}">
                                @csrf
                                <button type="submit" class="block px-4 py-2 hover:bg-gray-100 w-full text-left">Logout</button>
                            </form>
                        </li>
                    </ul>
                </div>
            </div>
            <script>
                document.getElementById('user-menu-button').addEventListener('click', function () {
                    const menu = document.getElementById('user-menu');
                    menu.classList.toggle('hidden');
                });
            </script>
        </div>
    </div>
</nav>
<!-- NAVBAR END -->

<!-- CONTENT START -->
<main class="container mx-auto px-5 py-8">
    {{ $slot }}
</main>
<!-- CONTENT END -->

<!-- FOOTER START -->
<footer class="bg-gray-900 text-gray-200 pt-10 pb-5 mt-10">
    <div class="container mx-auto px-5">
        <div class="flex flex-col md:flex-row justify-between space-y-6 md:space-y-0">
            <!-- Tentang -->
            <div class="md:w-1/3">
                <h5 class="font-bold text-lg mb-2">Tentang Kami</h5>
                <p>Kami menyediakan layanan rental mobil terbaik dengan harga terjangkau dan kualitas terjamin.</p>
            </div>
            <!-- Navigasi -->
            <div class="md:w-1/3 text-center">
                <h5 class="font-bold text-lg mb-2">Navigasi</h5>
                <ul class="space-y-1">
                    <li><a href="/" class="hover:text-white">Dashboard</a></li>
                    <li><a href="/mobil" class="hover:text-white">Mobils</a></li>
                    <li><a href="/review" class="hover:text-white">My Reviews</a></li>
                    <li><a href="/transactions" class="hover:text-white">My Transactions</a></li>
                </ul>
            </div>
            <!-- Sosial Media -->
            <div class="md:w-1/3 text-center">
                <h5 class="font-bold text-lg mb-2">Ikuti Kami</h5>
                <div class="flex justify-center space-x-4 text-xl">
                    <a href="#" class="hover:text-white"><i class="fa-brands fa-facebook"></i></a>
                    <a href="#" class="hover:text-white"><i class="fa-brands fa-instagram"></i></a>
                    <a href="#" class="hover:text-white"><i class="fa-brands fa-square-x-twitter"></i></a>
                </div>
            </div>
        </div>
        <hr class="my-6 border-gray-700" />
        <p class="text-center text-sm">&copy; 2025 Carla. All Rights Reserved.</p>
    </div>
</footer>
<!-- FOOTER END -->

</body>
</html>
