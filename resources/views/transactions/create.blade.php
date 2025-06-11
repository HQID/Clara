<x-default-layout title="Sewa Mobil" section_title="Sewa Mobil">
    <section class="container mx-auto px-4 py-10">
        <form action="{{ route('transactions.store') }}" method="POST" class="bg-white shadow rounded-lg p-6 space-y-4">
            @csrf
            <input type="hidden" name="mobil_id" value="{{ $mobil->id }}">
            <div>
                <label for="rental_date" class="block text-sm font-medium text-gray-700">Tanggal Penyewaan</label>
                <input type="date" name="rental_date" id="rental_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2">
            </div>
            <div>
                <label for="return_date" class="block text-sm font-medium text-gray-700">Tanggal Pengembalian</label>
                <input type="date" name="return_date" id="return_date" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2">
            </div>
            <div>
                <label for="payment_method" class="block text-sm font-medium text-gray-700">Metode Pembayaran</label>
                <select name="payment_method" id="payment_method" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm p-2">
                    <option value="cash">Cash</option>
                    <option value="m-banking">M-Banking</option>
                    <option value="e-wallet">E-Wallet</option>
                </select>
            </div>
            <button type="submit" class="bg-orange-600 hover:bg-orange-700 text-white px-4 py-2 rounded">Sewa</button>
        </form>
    </section>
</x-default-layout>
