@props(['label', 'value'])

<div class="grid gap-1">
    <p class="text-sm font-medium">{{ $label }}</p>
    <p class="text-sm text-gray-500">{{ $value ?: '-' }}</p>
</div>
