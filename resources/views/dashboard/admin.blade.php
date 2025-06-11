<x-admin-layout title="Admin Dashboard" section_title="Admin Dashboard">
    <section class="container mx-auto px-4 py-10">
        <h2 class="text-3xl font-bold text-orange-600 mb-4">Welcome, Admin</h2>
        <p class="text-gray-600">Manage users, reviews, and cars from this dashboard.</p>
    </section>
    <section class="grid grid-cols-1 md:grid-cols-3 gap-6">
        <!-- Mobils Count -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-bold text-orange-600">Total Mobils</h2>
            <p class="text-3xl font-bold text-gray-800">{{ $mobils_count }}</p>
        </div>
        <!-- Users Count -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-bold text-orange-600">Total Users</h2>
            <p class="text-3xl font-bold text-gray-800">{{ $users_count }}</p>
        </div>
        <!-- Reviews Count -->
        <div class="bg-white shadow rounded-lg p-6">
            <h2 class="text-xl font-bold text-orange-600">Total Reviews</h2>
            <p class="text-3xl font-bold text-gray-800">{{ $reviews_count }}</p>
        </div>
    </section>
    <section class="container mx-auto px-4 py-10">
        <h2 class="text-2xl font-bold text-orange-600 mb-4">Transaksi Terbaru</h2>
        <div class="space-y-6">
            @foreach ($latest_transactions as $transaction)
            <div class="bg-white shadow rounded-lg p-4 border border-gray-300">
                <div class="flex justify-between items-center mb-4">
                    <p class="text-gray-500">Kode: {{ $transaction->code }}</p>
                    <p class="text-gray-500">{{ $transaction->rental_date }} - {{ $transaction->return_date }}</p>
                </div>
                <p class="text-gray-600 mt-2">Mobil: {{ $transaction->mobil->name }}</p>
                <p class="text-gray-600 mt-2">Penyewa: {{ $transaction->user->name }}</p>
                <p class="text-gray-600 mt-2">Metode Pembayaran: {{ ucfirst($transaction->payment_method) }}</p>
                <p class="text-gray-600 mt-2">Total Harga: Rp{{ $transaction->total_price }}</p>
                <p class="text-gray-600 mt-2">Status: {{ ucfirst($transaction->status) }}</p>
            </div>
            @endforeach
        </div>
    </section>
</x-admin-layout>
