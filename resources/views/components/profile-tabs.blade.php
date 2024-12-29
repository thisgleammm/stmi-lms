@props(['active'])

<div class="border-b">
    <nav class="flex gap-4">
        <a href="#" data-tab="about"
            class="tab-link px-4 py-2 text-lg font-medium border-b-2 -mb-px {{ $active === 'about' ? 'border-blue-600 text-blue-600' : 'border-transparent text-gray-500' }}">
            About Me
        </a>
        <a href="#" data-tab="gpa"
            class="tab-link px-4 py-2 text-lg font-medium border-b-2 -mb-px {{ $active === 'gpa' ? 'border-blue-600 text-blue-600' : 'border-transparent text-gray-500' }}">
            GPA
        </a>
    </nav>
</div>
