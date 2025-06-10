<x-default-layout title="Dashboard" section_title="Dashboard">

    <!-- CAROUSEL START -->
    <section>
        <div class="relative w-full" id="customCarousel">
            <div class="relative h-96 overflow-hidden rounded-lg">
                <div class="absolute inset-0 transition-all duration-500 ease-in-out">
                    <img src="{{ asset('https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}" class="w-full h-full object-cover" alt="...">
                </div>
                <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center text-white bg-black/25">
                    <h1 class="text-4xl font-bold">Cari Mobil atau Sewakan</h1>
                    <p class="text-lg">Kami menyediakan layanan rental mobil terbaik dengan harga terjangkau dan kualitas terjamin.</p>
                </div>
            </div>
        </div>
    </section>
    <!-- CAROUSEL END -->

    <!-- SEWA START -->
    <section class="container mx-auto px-4 py-10">
        <h2 class="text-3xl font-bold text-orange-600 mb-4">Mobil</h2>
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
    <!-- SEWA END -->

    <!-- REVIEW START -->
    <section class="container mx-auto px-4 py-10">
        <h2 class="text-3xl font-bold text-orange-600 mb-4">Ulasan Pelanggan</h2>
        <div class="space-y-6">
            @foreach ($reviews as $review)
            <div class="bg-white shadow rounded-lg p-4">
                <h5 class="text-lg font-semibold text-gray-800">{{ $review->user->name }}</h5>
                <p class="text-gray-600 mt-2">{{ $review->review }}</p>
                <p class="text-gray-500 mt-2 italic">Mobil: {{ $review->mobil->name }}</p>
                <div class="mt-2 text-yellow-500">
                    @for ($i = 1; $i <= floor($review->rating); $i++)
                        ★
                    @endfor
                    @if ($review->rating > floor($review->rating))
                        ☆
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- REVIEW END -->

</x-default-layout>
