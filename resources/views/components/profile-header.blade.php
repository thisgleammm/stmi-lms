@props(['name', 'role', 'lastUpdated', 'avatarUrl' => null])

<div class="flex flex-col items-center gap-4 py-8">
    <div class="h-24 w-24 rounded-full bg-gray-200 flex items-center justify-center overflow-hidden">
        @if ($avatarUrl)
            <img src="{{ $avatarUrl }}" alt="{{ $name }}" class="h-full w-full object-cover">
        @else
            <span class="text-2xl font-bold">{{ collect(explode(' ', $name))->map(fn($n) => $n[0])->join('') }}</span>
        @endif
    </div>
    <div class="text-center">
        <h1 class="text-2xl font-bold">{{ $name }}</h1>
        <p class="text-gray-500">{{ $role }}</p>
        <p class="text-sm text-gray-500 mt-1">Last Updated: {{ $lastUpdated }}</p>
    </div>
</div>
