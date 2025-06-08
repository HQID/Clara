<x-default-layout title="Edit Ulasan" section_title="Edit Ulasan">
    <section class="container mx-auto px-4 py-10">
        <h2 class="text-3xl font-bold text-orange-600 mb-4">Edit Ulasan</h2>
        <form action="{{ route('review.update', $review->id) }}" method="POST" class="bg-white shadow rounded-lg p-6">
            @csrf
            @method('PUT')
            <div class="mb-4">
                <label for="review" class="block text-gray-700 font-bold mb-2">Ulasan</label>
                <textarea id="review" name="review" rows="4" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500 p-2">{{ $review->review }}</textarea>
            </div>
            <div class="mb-4">
                <label for="rating" class="block text-gray-700 font-bold mb-2">Rating</label>
                <input type="number" id="rating" name="rating" value="{{ $review->rating }}" min="1" max="5" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500 p-2">
            </div>
            <div class="mb-4">
                <label for="mobil_id" class="block text-gray-700 font-bold mb-2">Mobil</label>
                <select id="mobil_id" name="mobil_id" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring-orange-500 focus:border-orange-500 p-2" disabled>
                    <option value="{{ $review->mobil_id }}">{{ $review->mobil->name }}</option>
                </select>
            </div>
            <button type="submit" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded">Simpan Perubahan</button>
        </form>
    </section>
</x-default-layout>
