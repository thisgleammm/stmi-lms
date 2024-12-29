<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-3">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if (Auth::user()->level === 'admin')
        <x-admin.admin-dashboard />
    @else
        <x-user-dashboard :courses="$courses" />
    @endif
</x-app-layout>
