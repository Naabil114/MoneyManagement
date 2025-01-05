<!-- resources/views/livewire/signup.blade.php -->
<div class="bg-blue-100 flex items-center justify-center min-h-screen">
    <div class="bg-white shadow-md rounded-lg p-8 w-11/12 sm:w-96">
        <h2 class="text-2xl font-bold text-center text-blue-600 mb-6">Daftar</h2>
        <form wire:submit.prevent="signup">
            <div class="mb-4">
                <label for="username" class="block text-gray-700">Username</label>
                <input type="text" id="username" wire:model="username" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" placeholder="Masukkan username">
            </div>
            <div class="mb-4">
                <label for="email" class="block text-gray-700">Email</label>
                <input type="email" id="email" wire:model="email" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" placeholder="Masukkan email">
            </div>
            <div class="mb-6">
                <label for="password" class="block text-gray-700">Password</label>
                <input type="password" id="password" wire:model="password" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" placeholder="Masukkan password">
            </div>
            <div class="mb-6">
                <label for="password_confirmation" class="block text-gray-700">Konfirmasi Password</label>
                <input type="password" id="password_confirmation" wire:model="password_confirmation" required class="mt-1 block w-full p-2 border border-gray-300 rounded-md focus:outline-none focus:ring focus:ring-blue-500" placeholder="Konfirmasi password">
            </div>
            <button type="submit" class="w-full bg-blue-600 text-white font-bold py-2 rounded-md hover:bg-blue-700 transition duration-200">Daftar</button>
        </form>
        <p class="mt-4 text-center text-gray-600">
            Sudah punya akun? <a href="{{url('login')}}" class="text-blue-600 hover:underline">Login di sini</a>
        </p>
    </div>
</div>