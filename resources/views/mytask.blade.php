<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-3">
            {{ __('My Task') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto py-6 ml-44">
        <h1 class="text-xl font-bold text-gray-800 mb-6">Timeline</h1>
            <div class="mb-4 flex">
                <label for="filter" class="block text-gray-600 ml-8 font-medium mt-3 ">Filter</label>
                <select id="filter" class="border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-2/12 sm:text-sm ml-4 mt-2">
                    <option value="dates">Sort by dates</option>
                    <option value="dates">Sort by dates</option>
                    <option value="dates">Sort by dates</option>
                    <option value="dates">Sort by dates</option>
                </select>
            </div>
            <div>
                <div class="bg-white p-2 rounded shadow mx-8">
                <h2 class="text-base font-semibold text-gray-700 mb-4 mt-4 ml-9">Saturday, 30 November 2024</h2>
                <div class="space-y-4 my-5">
                    <!-- Task Card -->
                    <div class="bg-gray-100 rounded-lg p-4 mx-4 flex justify-between items-center">
                        <div class="flex items-center">
                            <div class="bg-blue-500 text-white p-3 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M6.75 12a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">QUIZ REVIEW - Penugasan (Riset Operasi)</h3>
                                <p class="text-gray-600 text-sm">Metode Penugasan kasus Minimasi & Maksimasi</p>
                                <p class="text-gray-500 text-xs mt-1">23:59</p>
                            </div>
                        </div>
                        <x-attempt-session></x-attempt-session>
                        </div>
                    <!-- End Task Card -->

                    <!-- Task Card -->
                    <div class="bg-gray-100 rounded-lg p-4 mx-4 flex justify-between items-center">
                        <div class="flex items-center">
                            <div class="bg-blue-500 text-white p-3 rounded-full mr-4">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M9 12l2 2 4-4M6.75 12a5.25 5.25 0 1110.5 0 5.25 5.25 0 01-10.5 0z" />
                                </svg>
                            </div>
                            <div>
                                <h3 class="text-lg font-semibold text-gray-800">QUIZ REVIEW - Linux (Sistem Operasi)</h3>
                                <p class="text-gray-600 text-sm">Mengirimkan bukti Screenshot bahwa Linux Terinstall</p>
                                <p class="text-gray-500 text-xs mt-1">23:59</p>
                            </div>
                        </div>
                      <x-attempt-session></x-attempt-session>
                    </div>
                    <!-- End Task Card -->
                </div>
            </div>
        </div>
    </div>

</x-app-layout>