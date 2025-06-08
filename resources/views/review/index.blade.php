<x-default-layout title="Ulasan Saya" section_title="Daftar Ulasan">
    <section class="container mx-auto px-4 py-10">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-orange-600 mb-4">Ulasan Saya</h2>
        </div>
        <div class="space-y-6">
            @foreach ($reviews as $review)
            <div class="bg-white shadow rounded-lg p-4">
                <div class="flex justify-between items-center mb-4">
                    <h5 class="text-lg font-semibold text-gray-800">{{ $review->name }}</h5>
                    <p class="text-gray-500">{{ $review->updated_at->format('d M Y, H:i') }}</p>
                </div>
                <p class="text-gray-600 mt-2">{{ $review->review }}</p>
                <p class="text-gray-500 mt-2 italic">Mobil: {{ $review->mobil->name }}</p>
                <div class="mt-2 text-yellow-500">
                    @for ($i = 1; $i <= $review->rating; $i++)
                        ★
                    @endfor
                </div>
                <div class="mt-4">
                    <a href="{{ route('review.edit', $review->id) }}" class="text-orange-600 hover:underline">Edit</a> | 
                    <form action="{{ route('review.destroy', $review->id) }}" method="POST" class="inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="text-red-600 hover:underline" onclick="return confirm('Apakah Anda yakin ingin menghapus ulasan ini?')">Hapus</button>
                    </form>
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-default-layout>
