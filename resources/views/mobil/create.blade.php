<x-default-layout title="Tambah Mobil" section_title="Tambah Mobil">
    <section class="container mx-auto px-4 py-10">
        <h2 class="text-3xl font-bold text-orange-600 mb-4">Tambah Mobil</h2>
        <form action="{{ route('mobil.store') }}" method="POST" class="bg-white shadow rounded-lg p-6 space-y-4">
            @csrf
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Mobil</label>
                <input type="text" id="name" name="name" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2">
            </div>
            <div>
                <label for="desc" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea id="desc" name="desc" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2"></textarea>
            </div>
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Harga</label>
                <input type="text" id="price" name="price" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2">
            </div>
            <div>
                <label for="img" class="block text-sm font-medium text-gray-700">URL Gambar</label>
                <input type="text" id="img" name="img" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2">
            </div>
            <button type="submit" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </section>
</x-default-layout>
