<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Data') }}
        </h2>
        <h2 class="font-semibold text-sm text-gray-800 leading-tight mt-4 ml-2">
             {{ __('Lecture Data') }}
        </h2>
    </x-slot>

    <div class="py-2">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <x-secondary-button>
                    {{ __('Add  lecture') }}
                    </x-secondary-button>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
