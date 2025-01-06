@props(['name', 'role', 'lastUpdated', 'avatarUrl' => null])

<div class="flex flex-col items-center space-x-4">
    <div
        class="h-24 w-24 sm:h-32 sm:w-32 xl:h-40 xl:w-40 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden">
        @if ($avatarUrl)
            <img src="{{ $avatarUrl }}" alt="{{ $name }}" class="h-full w-full object-cover">
        @else
            <span
                class="text-2xl sm:text-3xl xl:text-4xl font-bold">{{ collect(explode(' ', $name))->map(fn($n) => $n[0])->join('') }}</span>
        @endif
    </div>
    <div class="text-center mt-4 sm:mt-6 xl:mt-8">
        <h1 class="text-2xl sm:text-3xl xl:text-4xl font-bold">{{ $name }}</h1>
        <p class="text-gray-500 sm:text-lg xl:text-xl">{{ $role }}</p>
        <p class="text-sm text-gray-500 mt-1 sm:text-base xl:text-lg">Last Updated: {{ $lastUpdated }}</p>
        @if (session('success'))
            <div class="p-4 mb-4 text-sm text-green-700 bg-green-100 rounded-lg" role="alert">
                {{ session('success') }}
            </div>
        @endif
    </div>
</div>
