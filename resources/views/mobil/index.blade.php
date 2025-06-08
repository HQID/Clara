<x-default-layout title="Daftar Mobil" section_title="Daftar Mobil">
    <section class="container mx-auto px-4 py-10">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-orange-600 mb-4">Daftar Mobil</h2>
        </div>
        
        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            @foreach ($mobils as $mobil)
            <div class="bg-white shadow rounded-lg overflow-hidden flex flex-col cursor-pointer" onclick="window.location='{{ route('mobil.show', $mobil->id) }}'">
                <img src="{{ $mobil->img }}" class="w-full h-48 object-cover" alt="{{ $mobil->name }}">
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <h5 class="text-lg font-semibold">{{ $mobil->name }}</h5>
                        <p class="text-gray-600">{{ $mobil->desc }}</p>
                    </div>
                    <div class="mt-2">
                        <p class="font-bold text-gray-800">Rp{{ $mobil->price }}/hari</p>
                        <p class="inline-block mt-3 px-3 py-1 rounded-full text-sm font-semibold {{ $mobil->status === 'tersedia' ? 'bg-green-300 text-green-600' : 'bg-yellow-300 text-yellow-600' }}">
                            {{ ucfirst($mobil->status) }}
                        </p>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-default-layout>
