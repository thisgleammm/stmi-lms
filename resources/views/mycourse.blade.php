<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-3">
            {{ __('My Course') }}
        </h2>
    </x-slot>

    <div class="mb-8">
        <h2 class="text-xl mx-44 font-semibold mb-12 mt-4">Course Overview</h2>
        <x-course-view :courses="$courses" />
    </div>
</x-app-layout>
