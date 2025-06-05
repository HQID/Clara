<x-default-layout title="Daftar Mobil" section_title="Daftar Mobil">
    <section class="container mx-auto px-4 py-10">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-orange-600 mb-4">Daftar Mobil</h2>
            <div class="mb-6">
                <a href="{{ route('mobil.create') }}" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded">Tambah Mobil</a>
            </div>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($mobils as $mobil)
            <div class="bg-white shadow rounded-lg overflow-hidden flex flex-col">
                <img src="{{ $mobil->img }}" class="w-full h-48 object-cover" alt="{{ $mobil->name }}">
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <h5 class="text-lg font-semibold">{{ $mobil->name }}</h5>
                        <p class="text-gray-600">{{ $mobil->desc }}</p>
                    </div>
                    <div class="mt-2">
                        <p class="font-bold text-gray-800">Rp{{ $mobil->price }}/hari</p>
                        <a href="{{ route('mobil.show', $mobil->id) }}" class="mt-2 inline-block bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded">Detail</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-default-layout>
