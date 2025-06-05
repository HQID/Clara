<x-default-layout title="Detail Ulasan" section_title="Detail Ulasan">
    <section class="container mx-auto px-4 py-10">
        <h2 class="text-3xl font-bold text-orange-600 mb-4">Detail Ulasan</h2>
        <div class="bg-white shadow rounded-lg p-6">
            <h5 class="text-lg font-semibold text-gray-800">{{ $review->name }}</h5>
            <p class="text-gray-600 mt-2">{{ $review->review }}</p>
            <p class="text-gray-500 mt-2 italic">Mobil: {{ $review->mobil->name }}</p>
            <div class="mt-2 text-yellow-500">
                @for ($i = 1; $i <= $review->rating; $i++)
                    ★
                @endfor
            </div>
            <p class="text-gray-400 mt-4 text-sm">Dibuat pada: {{ $review->created_at }}</p>
        </div>
    </section>
</x-default-layout>
