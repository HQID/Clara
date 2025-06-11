<x-default-layout title="Transaksi Saya" section_title="Transaksi Saya">
    <section class="container mx-auto px-4 py-10">
        <div class="flex justify-between items-center mb-6">
            <h2 class="text-3xl font-bold text-orange-600 mb-4">Transaksi Saya</h2>
        </div>
        <div class="space-y-6">
            @foreach ($transactions as $transaction)
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
                <div class="mt-4">
                    @if ($transaction->status === 'tersewa')
                    <form action="{{ route('transactions.update', $transaction->id) }}" method="POST" class="inline">
                        @csrf
                        @method('PUT')
                        <button type="submit" class="bg-red-600 hover:bg-red-700 text-white px-4 py-2 rounded cursor-pointer">Batalkan</button>
                    </form>
                    @endif
                </div>
            </div>
            @endforeach
        </div>
    </section>
</x-default-layout>
