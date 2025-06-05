@extends('components.auth-layout')

@section('content')
<h3 class="text-center text-2xl font-bold mb-6">Register</h3>

<form action="{{ route('register') }}" method="POST" class="space-y-4">
    @csrf
    <div>
        <label class="block text-sm font-medium mb-1">Nama</label>
        <input type="text" name="name" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-orange-500" required>
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Email</label>
        <input type="email" name="email" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-orange-500" required>
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Password</label>
        <input type="password" name="password" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-orange-500" required>
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Konfirmasi Password</label>
        <input type="password" name="password_confirmation" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-orange-500" required>
    </div>
    <button type="submit" class="w-full bg-orange-600 text-white py-2 rounded hover:bg-orange-700">Register</button>
</form>

<p class="mt-4 text-center text-sm">Sudah punya akun? <a href="{{ route('login') }}" class="text-orange-600 hover:underline">Login</a></p>
@endsection
