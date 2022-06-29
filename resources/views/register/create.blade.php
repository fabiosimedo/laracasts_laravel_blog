<x-layout>

    <main class="max-w-lg mx-auto mt-6 bg-gray-100 p-6 rounded-xl border border-gray-300">
        <h1 class="text-center font-bold text-xl mt-6">Register</h1>
        <form method="POST" action="/register" class="mt-6">
            @csrf

            <div class="mb-6">
                <label for="name" class="block mb-2 uppercase font-bold text-xs text-gray-700">Name</label>

                <input class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="name"
                    id="name"
                    value="{{ old('name') }}"
                    required
                >
                @error('name')
                      <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror

            </div>

            <div class="mb-6">
                <label for="username" class="block mb-2 uppercase font-bold text-xs text-gray-700">Username</label>

                <input class="border border-gray-400 p-2 w-full"
                    type="text"
                    name="username"
                    id="username"
                    value="{{ old('username') }}"
                    required
                >

                @error('username')
                      <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="email" class="block mb-2 uppercase font-bold text-xs text-gray-700">Email</label>

                <input class="border border-gray-400 p-2 w-full"
                    type="email"
                    name="email"
                    id="email"
                    value="{{ old('email') }}"
                    required
                >

                @error('email')
                      <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <label for="password" class="block mb-2 uppercase font-bold text-xs text-gray-700">password</label>

                <input class="border border-gray-400 p-2 w-full"
                    type="password"
                    name="password"
                    id="password"
                    required
                >

                @error('password')
                      <p class="text-red-500 text-xs mt-1">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-6">
                <button type="submit" class="bg-transparent hover:bg-blue-500 text-blue-700 font-semibold hover:text-white py-2 px-4 border border-blue-500 hover:border-transparent rounded">
                    Submit
                </button>
            </div>
        </form>
    </main>

</x-layout>
