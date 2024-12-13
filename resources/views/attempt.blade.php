<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-3">
            {{ __('My Task') }}
        </h2>
    </x-slot>



<body class="bg-gray-100 font-sans">
    <div class="container mx-auto px-4 py-6 mr-1">
        <!-- Page Title -->
        <h1 class="text-xl font-bold mb-4 ml-48">Attempt Quiz</h1>

        <!-- Quiz Details -->
        <div class="bg-white p-6 rounded-lg shadow mb-6 mx-44">
            <h2 class="text-lg font-semibold mb-2 ml-1">QUIZ REVIEW - Analisa Jaringan (Riset Operasi)</h2>
            <p class="text-gray-700 mb-1 text-base ml-1">Kumpulkan Tugas Dalam Bentuk QUIZ REVIEW - Analisa Jaringan (Riset Operasi)</p>
            <p class="text-blue-500 text-xs ml-1">Tuesday, 18 November 2024 - Saturday, 30 November 2024 (23:59)</p>
        </div>

        <!-- Upload Section -->
        <div class="bg-white p-6 rounded-lg shadow mx-44" x-data="{ files: [] }">
            <div class="border-2 border-dashed border-gray-300 rounded-lg p-6 text-center h-auto">
                <input type="file" accept=".pdf" class="hidden" id="file-upload" @change="files = $event.target.files" multiple>
                <label for="file-upload" class="cursor-pointe ">
                    <div class="text-gray-400 text-2xl font-semibold my-44  ">Upload Files Here</div>
                    <p class="text-gray-500">(Only File Type: PDF)</p>
                    <p class="text-blue-600 underline">Click to select the file in the file explorer or drag the file into the upload box</p>
                </label>
                <!-- Preview files -->
                <template x-if="files.length > 0">
                    <div class="mt-4">
                        <h3 class="text-lg font-semibold">Selected Files:</h3>
                        <ul class="mt-2 text-left">
                            <template x-for="file in files" :key="file.name">
                                <li class="text-gray-700">- <span x-text="file.name"></span></li>
                            </template>
                        </ul>
                    </div>
                </template>
            </div>
        </div>
    </div>
</body>
</x-app-layout>