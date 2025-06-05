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
</x-admin-layout>
