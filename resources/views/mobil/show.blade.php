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
    <section class="container mx-auto px-4 py-10">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-2xl font-bold text-orange-600">Ulasan Pelanggan</h2>
            <a href="{{ route('review.create', ['mobil_id' => $mobil->id]) }}" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded">Tambah Review</a>
        </div>
        @include('review.index-mobil', ['reviews' => $mobil->reviews])
    </section>
</x-default-layout>
