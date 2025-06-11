<x-default-layout title="Tambah Ulasan" section_title="Tambah Ulasan">
    <section class="container mx-auto px-4 py-10">
        <h2 class="text-3xl font-bold text-orange-600 mb-4">Tambah Ulasan</h2>
        <form action="{{ route('review.store') }}" method="POST" class="bg-white shadow rounded-lg p-6">
            @csrf
            <input type="hidden" name="mobil_id" value="{{ request('mobil_id') }}">
            <div class="mb-4">
                <label for="review" class="block text-gray-700 font-bold mb-2">Ulasan</label>
                <textarea id="review" name="review" rows="4" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500 p-2"></textarea>
            </div>
            <div class="mb-4">
                <label for="rating" class="block text-gray-700 font-bold mb-2">Rating</label>
                <input type="number" id="rating" name="rating" min="1" max="5" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500 p-2">
            </div>
            <button type="submit" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded">Simpan</button>
        </form>
    </section>
</x-default-layout>
