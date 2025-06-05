<x-default-layout title="Detail Mobil" section_title="Detail Mobil">
    <section class="container mx-auto px-4 py-10">
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <img src="{{ $mobil->img }}" class="w-full h-96 object-cover" alt="{{ $mobil->name }}">
            <div class="p-6">
                <h2 class="text-3xl font-bold text-gray-800">{{ $mobil->name }}</h2>
                <p class="text-gray-600 mt-4">{{ $mobil->desc }}</p>
                <p class="text-gray-800 font-bold mt-4">Harga: {{ $mobil->price }}</p>
                <a href="#" class="mt-4 inline-block bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded">Sewa Mobil</a>
            </div>
        </div>
    </section>
</x-default-layout>
