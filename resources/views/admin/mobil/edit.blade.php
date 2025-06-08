<x-admin-layout title="Edit Mobil" section_title="Edit Mobil">
    <section class="container mx-auto px-4 py-10">
        <h2 class="text-3xl font-bold text-orange-600 mb-4">Edit Mobil</h2>
        <form action="{{ route('admin.mobil.update', $mobil->id) }}" method="POST" class="bg-white shadow rounded-lg p-6 space-y-4">
            @csrf
            @method('PUT')
            <div>
                <label for="name" class="block text-sm font-medium text-gray-700">Nama Mobil</label>
                <input type="text" id="name" name="name" value="{{ $mobil->name }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2">
            </div>
            <div>
                <label for="desc" class="block text-sm font-medium text-gray-700">Deskripsi</label>
                <textarea id="desc" name="desc" rows="3" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2">{{ $mobil->desc }}</textarea>
            </div>
            <div>
                <label for="price" class="block text-sm font-medium text-gray-700">Harga</label>
                <input type="text" id="price" name="price" value="{{ $mobil->price }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2">
            </div>
            <div>
                <label for="img" class="block text-sm font-medium text-gray-700">URL Gambar</label>
                <input type="text" id="img" name="img" value="{{ $mobil->img }}" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2">
            </div>
            <div class="mb-4">
                <label for="status" class="block text-gray-700 font-bold mb-2">Status</label>
                <select name="status" id="status" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2">
                    <option value="tersedia" {{ $mobil->status === 'tersedia' ? 'selected' : '' }}>Tersedia</option>
                    <option value="tersewa" {{ $mobil->status === 'tersewa' ? 'selected' : '' }}>Tersewa</option>
                </select>
            </div>
            <button type="submit" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded">Simpan Perubahan</button>
        </form>
    </section>
</x-admin-layout>