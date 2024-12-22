@props(['label', 'value'])

<div class="grid gap-1">
    <p class="text-md font-medium">{{ $label }}</p>
    <p class="text-md text-gray-500">{{ $value ?: '-' }}</p>
</div>
