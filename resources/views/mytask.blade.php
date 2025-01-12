<x-app-layout>
    <x-slot name="header">
    @if(Auth::user()->level === 'mahasiswa')
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-3">
            {{ __('My Task') }}
        </h2>
    @else
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-3">
        {{ __('My Schedule') }}
        </h2>   
    @endif
    </x-slot>


    @if(Auth::user()->level === 'mahasiswa')
    <!-- Timeline Header -->
    <div class="mb-8 mt-4">
        <h2 class="text-xl font-semibold ml-4 sm:ml-16 mb-2 lg:mx-40">Timeline</h2>
        <div class="px-4 mx-4 sm:mx-6 lg:mx-36">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                <!-- Filter Section -->
                <div class="flex items-center space-x-2 w-full sm:w-auto">
                    <span class="text-gray-700 text-sm font-medium">Filter</span>
                    <select
                        class="border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 block sm:text-md w-full sm:w-auto">
                        <option>Sort by dates</option>
                        <option>Upcoming</option>
                        <option>Complete</option>
                    </select>
                </div>
                <!-- Additional Filters or Controls (Optional) -->
                <!-- Anda dapat menambahkan elemen lain di sini jika diperlukan -->
            </div>
        </div>
    </div>

    <!-- Timeline Item -->
    <div class="mb-8">
        <h2 class="text-xl font-semibold ml-4 sm:ml-16 mb-2 lg:mx-40">Saturday, 30 November 2024</h2>
        <div class="bg-white p-6 rounded mx-4 sm:mx-6 lg:mx-40 shadow">
            <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                <!-- Icon Container -->
                <div class="bg-blue-500 text-white rounded w-16 h-16 flex items-center justify-center">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-8 h-8">
                        <path fill="currentColor"
                            d="M280 64l40 0c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 128C0 92.7 28.7 64 64 64l40 0 9.6 0C121 27.5 153.3 0 192 0s71 27.5 78.4 64l9.6 0zM64 112c-8.8 0-16 7.2-16 16l0 320c0 8.8 7.2 16 16 16l256 0c8.8 0 16-7.2 16-16l0-320c0-8.8-7.2-16-16-16l-16 0 0 24c0 13.3-10.7 24-24 24l-88 0-88 0c-13.3 0-24-10.7-24-24l0-24-16 0zm128-8a24 24 0 1 0 0-48 24 24 0 1 0 0 48z" />
                    </svg>
                </div>

                <!-- Text Container -->
                <div class="flex-1 mt-4 sm:mt-0 sm:ml-4">
                    <h3 class="text-xl font-semibold">QUIZ REVIEW - Penugasan (Riset Operasi)</h3>
                    <p class="text-md text-gray-500">
                        Metode Penugasan kasus Minimasi & Maksimasi -
                        <span class="font-semibold text-red-600">Deadline 23:59</span>
                    </p>
                </div>

                <!-- Attempt Session Component -->
                <div class="mt-4 sm:mt-0">
                    <x-attempt-session />
                </div>
            </div>
        </div>
    </div>
    <!-- Back to Top Button -->
    <button id="back-to-top" class="hidden fixed bottom-60 right-8">
        <img src="/images/logolingkaran.svg" alt="Back to Top" class="h-40 w-40">
    </button>


        @else
            <!-- Timeline Header -->
            <div class="mb-8 mt-4">
                <h2 class="text-xl font-semibold ml-4 sm:ml-16 mb-2 lg:mx-40">Timeline</h2>
                <div class="px-4 mx-4 sm:mx-6 lg:mx-36">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between mb-4">
                        <!-- Filter Section -->
                        <div class="flex items-center space-x-2 w-full sm:w-auto">
                            <span class="text-gray-700 text-sm font-medium">Filter</span>
                            <select
                                class="border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 block sm:text-md w-full sm:w-auto">
                                <option>Sort by dates</option>
                                <option>Upcoming</option>
                                <option>Complete</option>
                            </select>
                        </div>
                        <!-- Additional Filters or Controls (Optional) -->
                        <!-- Anda dapat menambahkan elemen lain di sini jika diperlukan -->
                    </div>
                </div>
            </div>

            <!-- Timeline Item -->
            <div class="mb-8">
                <h2 class="text-xl font-semibold ml-4 sm:ml-16 mb-2 lg:mx-40">Saturday, 30 November 2024</h2>
                <div class="bg-white p-6 rounded mx-4 sm:mx-6 lg:mx-40 shadow">
                    <div class="flex flex-col sm:flex-row sm:items-center sm:justify-between">
                        <!-- Icon Container -->
                        <div class="bg-blue-500 text-white rounded w-16 h-16 flex items-center justify-center">
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" class="w-8 h-8">
                                <path fill="currentColor"
                                    d="M280 64l40 0c35.3 0 64 28.7 64 64l0 320c0 35.3-28.7 64-64 64L64 512c-35.3 0-64-28.7-64-64L0 128C0 92.7 28.7 64 64 64l40 0 9.6 0C121 27.5 153.3 0 192 0s71 27.5 78.4 64l9.6 0zM64 112c-8.8 0-16 7.2-16 16l0 320c0 8.8 7.2 16 16 16l256 0c8.8 0 16-7.2 16-16l0-320c0-8.8-7.2-16-16-16l-16 0 0 24c0 13.3-10.7 24-24 24l-88 0-88 0c-13.3 0-24-10.7-24-24l0-24-16 0zm128-8a24 24 0 1 0 0-48 24 24 0 1 0 0 48z" />
                            </svg>
                        </div>

                        <!-- Text Container -->
                        <div class="flex-1 mt-4 sm:mt-0 sm:ml-4">
                            <h3 class="text-xl font-semibold">QUIZ REVIEW - Penugasan (Riset Operasi)</h3>
                            <p class="text-md text-gray-500">
                                Metode Penugasan kasus Minimasi & Maksimasi -
                                <span class="font-semibold text-red-600">Deadline 23:59</span>
                            </p>
                        </div>

                        <!-- Attempt Session Component -->
                        <div class="mt-4 sm:mt-0">
                        <a class="border-solid border-2 border-blue-600 text-blue-600 px-4 py-2 rounded text-center" href="<?= url('mytask') ?>">open</a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Back to Top Button -->
            <button id="back-to-top" class="hidden fixed bottom-60 right-8">
                <img src="/images/logolingkaran.svg" alt="Back to Top" class="h-40 w-40">
            </button>
            
        @endif    










    <script>
        // Back to Top Button Functionality
        const backToTopButton = document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 200) {
                backToTopButton.classList.remove('hidden');
            } else {
                backToTopButton.classList.add('hidden');
            }
        });

        backToTopButton.addEventListener('click', () => {
            window.scrollTo({
                top: 0,
                behavior: 'smooth',
            });
        });
    </script>
</x-app-layout>
