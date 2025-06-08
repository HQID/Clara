<div class="space-y-6">
    @foreach ($reviews as $review)
    <div class="bg-white shadow rounded-lg p-4">
        <div class="flex justify-between items-center mb-4">
            <h5 class="text-lg font-semibold text-gray-800">{{ $review->name }}</h5>
            <p class="text-gray-500">{{ $review->updated_at->format('d M Y, H:i') }}</p>
        </div>
        <p class="text-gray-600 mt-2">{{ $review->review }}</p>
        <div class="mt-2 text-yellow-500">
            @for ($i = 1; $i <= $review->rating; $i++)
                ★
            @endfor
        </div>
    </div>
    @endforeach
</div>
