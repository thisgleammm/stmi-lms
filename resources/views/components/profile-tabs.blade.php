@props(['active'])

<div class="border-b">
    <nav class="flex gap-4">
        <a href="#"
            class="px-4 py-2 text-sm font-medium border-b-2 -mb-px {{ $active === 'about' ? 'border-blue-600 text-blue-600' : 'border-transparent text-gray-500' }}">
            About Me
        </a>
        <a href="#"
            class="px-4 py-2 text-sm font-medium border-b-2 -mb-px {{ $active === 'settings' ? 'border-blue-600 text-blue-600' : 'border-transparent text-gray-500' }}">
            Settings
        </a>
    </nav>
</div>
