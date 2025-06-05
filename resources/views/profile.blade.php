<x-default-layout title="Profile" section_title="Profile">
    <h1 class="text-2xl font-bold mb-6">Profile</h1>
    <form method="POST" action="{{ route('profile.update') }}" class="space-y-4">
        @csrf
        @method('PUT')

        <div class="flex flex-col">
            <label for="name" class="font-semibold">Name</label>
            <input type="text" id="name" name="name" value="{{ Auth::user()->name }}" class="border rounded px-4 py-2">
        </div>

        <div class="flex flex-col">
            <label for="email" class="font-semibold">Email</label>
            <input type="email" id="email" name="email" value="{{ Auth::user()->email }}" class="border rounded px-4 py-2">
        </div>

        <div class="flex flex-col">
            <label for="password" class="font-semibold">Password</label>
            <input type="password" id="password" name="password" class="border rounded px-4 py-2" placeholder="Enter new password">
        </div>

        <button type="submit" class="bg-orange-600 text-white px-4 py-2 rounded hover:bg-orange-700 mt-2">Save Changes</button>
    </form>

</x-default-layout>