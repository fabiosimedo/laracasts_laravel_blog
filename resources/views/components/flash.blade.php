@if (session()->has('success'))
    <div x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 5000)"
        x-show="show"
        class="bg-blue-100 border-t border-b border-blue-500 text-blue-700 px-4 py-3 mt-1" role="alert">
        <h2 class="font-bold text-center">{{ session('success') }}</h2>
    </div>
@endif

@if (session()->has('error'))
    <div x-data="{ show: true }"
        x-init="setTimeout(() => show = false, 5000)"
        x-show="show"
        class="bg-red-100 border-t border-b border-red-500 text-red-700 px-4 py-3 mt-1" role="alert">
        <h2 class="font-bold text-center">{{ session('error') }}</h2>
    </div>
@endif
