<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-3">
            {{ __('My Course') }}
        </h2>
    </x-slot>

    <div class="mb-8 mt-4">
        <h2 class="text-xl font-semibold ml-4 sm:ml-16 mb-2 lg:mx-40">Course Overview</h2>
        <div class="px-4 mx-4 sm:mx-6 lg:mx-36">
            <div class="flex items-center justify-between mb-4">
                <!-- Filter & Search Section -->
                <div class="flex items-center space-x-4 w-full sm:w-auto">
                    <!-- Filter Section -->
                    <div class="flex items-center space-x-2 w-full sm:w-auto">
                        <span class="text-gray-700 text-sm font-medium">Filter</span>
                        <select
                            class="border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 block sm:text-md w-full">
                            <option>Sort by dates</option>
                            <option>Upcoming</option>
                            <option>Complete</option>
                        </select>
                    </div>

                    <!-- Search Section -->
                    <div class="flex items-center space-x-2 w-full sm:w-auto">
                        <div class="relative w-full sm:w-auto">
                            <input type="text" class="border-gray-300 rounded-md shadow-sm sm:text-sm w-full" placeholder="Search...">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="mt-8">
        <x-course-view :courses="$courses" />
    </div>
</x-app-layout>
