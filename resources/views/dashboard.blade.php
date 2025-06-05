<x-default-layout title="Dashboard" section_title="Dashboard">

    <section>
        <div class="relative w-full" id="customCarousel">
            <div class="relative h-96 overflow-hidden rounded-lg">
                <div class="absolute inset-0 transition-all duration-500 ease-in-out">
                    <img src="{{ asset('https://images.unsplash.com/photo-1603584173870-7f23fdae1b7a?q=80&w=2069&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D') }}" class="w-full h-full object-cover" alt="...">
                </div>
                <div class="absolute inset-0 hidden md:flex flex-col items-center justify-center text-white bg-black bg-opacity-40">
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
            @foreach ([
                ['img' => 'https://images.unsplash.com/photo-1502877338535-766e1452684a?q=80&w=2072&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'name' => 'Toyota Avanza', 'desc' => 'Mobil keluarga yang nyaman dan irit bahan bakar.', 'price' => 'Rp 500.000/hari'],
                ['img' => 'https://images.unsplash.com/photo-1541443131876-44b03de101c5?q=80&w=2070&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'name' => 'Honda Civic', 'desc' => 'Mobil sedan dengan desain sporty dan performa tinggi.', 'price' => 'Rp 700.000/hari'],
                ['img' => 'https://images.unsplash.com/photo-1489824904134-891ab64532f1?q=80&w=1931&auto=format&fit=crop&ixlib=rb-4.1.0&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D', 'name' => 'Suzuki Ertiga', 'desc' => 'MPV yang luas dan cocok untuk perjalanan jauh.', 'price' => 'Rp 600.000/hari'],
                ['img' => 'https://images.unsplash.com/photo-1494976388531-d1058494cdd8?q=80&w=2070&auto=format&fit=crop', 'name' => 'Daihatsu Xenia', 'desc' => 'Mobil keluarga dengan harga terjangkau dan fitur lengkap.', 'price' => 'Rp 550.000/hari'],
            ] as $car)
            <div class="bg-white shadow rounded-lg overflow-hidden flex flex-col">
                <img src="{{ is_string($car['img']) && str_starts_with($car['img'], 'http') ? $car['img'] : asset('images/'.$car['img']) }}" class="w-full h-48 object-cover" alt="{{ $car['name'] }}">
                <div class="p-4 flex-1 flex flex-col justify-between">
                    <div>
                        <h5 class="text-lg font-semibold">{{ $car['name'] }}</h5>
                        <p class="text-gray-600">{{ $car['desc'] }}</p>
                    </div>
                    <div class="mt-2">
                        <p class="font-bold text-gray-800">{{ $car['price'] }}</p>
                        <a href="#" class="mt-2 inline-block bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded">Sewa Mobil</a>
                    </div>
                </div>
            </div>
            @endforeach
        </div>
    </section>

    <!-- REVIEW START -->
    <section class="container mx-auto px-4 py-10">
        <h2 class="text-3xl font-bold text-orange-600 mb-4">Ulasan Pelanggan</h2>
        <div class="space-y-6">
            @foreach ([
                ['name' => 'John Doe', 'review' => 'Pelayanan sangat baik dan mobilnya dalam kondisi prima.', 'rating' => 5, 'car' => 'Toyota Avanza - Mobil keluarga yang nyaman dan irit bahan bakar.'],
                ['name' => 'Jane Smith', 'review' => 'Sangat puas dengan pengalaman sewa mobil di sini.', 'rating' => 4, 'car' => 'Honda Civic - Mobil sedan dengan desain sporty dan performa tinggi.'],
                ['name' => 'Michael Johnson', 'review' => 'Mobilnya bersih dan nyaman, harga juga terjangkau.', 'rating' => 4.5, 'car' => 'Suzuki Ertiga - MPV yang luas dan cocok untuk perjalanan jauh.'],
            ] as $review)
            <div class="bg-white shadow rounded-lg p-4">
                <h5 class="text-lg font-semibold text-gray-800">{{ $review['name'] }}</h5>
                <p class="text-gray-600 mt-2">{{ $review['review'] }}</p>
                <p class="text-gray-500 mt-2 italic">Mobil: {{ $review['car'] }}</p>
                <div class="mt-2 text-yellow-500">
                    @for ($i = 1; $i <= floor($review['rating']); $i++)
                        ★
                    @endfor
                    @if ($review['rating'] > floor($review['rating']))
                        ☆
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </section>
    <!-- REVIEW END -->

</x-default-layout>
