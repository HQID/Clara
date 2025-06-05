@extends('components.auth-layout')

@section('content')
<h3 class="text-center text-2xl font-bold mb-6">Login</h3>

@if(session('success'))
    <div class="bg-green-100 text-green-800 p-4 rounded mb-4">{{ session('success') }}</div>
@endif

@if($errors->any())
    <div class="bg-red-100 text-red-800 p-4 rounded mb-4">
        @foreach($errors->all() as $error)
            <p>{{ $error }}</p>
        @endforeach
    </div>
@endif

<form action="{{ route('login') }}" method="POST" class="space-y-4">
    @csrf
    <div>
        <label class="block text-sm font-medium mb-1">Email</label>
        <input type="email" name="email" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-orange-500" required>
    </div>
    <div>
        <label class="block text-sm font-medium mb-1">Password</label>
        <input type="password" name="password" class="w-full border border-gray-300 rounded px-3 py-2 focus:outline-none focus:ring focus:ring-orange-500" required>
    </div>
    <button type="submit" class="w-full bg-orange-600 text-white py-2 rounded hover:bg-orange-700">Login</button>
</form>

<p class="mt-4 text-center text-sm">Belum punya akun? <a href="{{ route('register') }}" class="text-orange-600 hover:underline">Daftar</a></p>
@endsection
