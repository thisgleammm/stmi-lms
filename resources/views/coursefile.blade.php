<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Data') }}
        </h2>
    </x-slot>


<body class="bg-gray-100 font-sans mb-16">
    <div class="flex flex-col md:flex-row max-w-6xl mx-auto mt-10  shadow-lg rounded-lg">
        <!-- Sidebar -->
        <div class="w-full md:w-1/3 p-6 border-r border-gray-200  bg-white">
            <div class="text-center">
                <img src="{{ url('/images/risetoperasi.jpg') }}" alt="Galaxy" class="w-full h-full mx-auto">
                <h2 class="mt-4 text-xl font-bold">RISET OPERASI</h2>
                <div class="mt-2 bg-blue-200 rounded-full overflow-hidden">
                    <div class="bg-blue-500 h-2.5 w-full"></div>
                </div>
                <p class="mt-2 text-sm font-medium text-gray-500">100% Course Complete</p>
            </div>
            <div class="mt-20 mb-24">
                <ul>
                    <li><a href="#" class="block mt-2 text-gray-700 border-b-2 pr-44 hover:underline">Attendance</a></li>
                    <li><a href="#" class="block mt-2 text-gray-700 border-b-2 pr-44 hover:underline">Material</a></li>
                    <li><a href="#" class="block mt-2 text-gray-700 border-b-2 pr-44 hover:underline">Score</a></li>
                    <li><a href="#" class="block mt-2 text-gray-700 border-b-2 pr-44 hover:underline">Task</a></li>
                </ul>
            </div>
        </div>

        <!-- Main Content -->
        <div class="w-full md:w-2/3 p-6 ml-12 bg-white">
            <h2 class="text-2xl font-semibold text-gray-800">RISET OPERASI</h2>
            <h2 class="text-sm mt-10 ml-8 font-semibold text-gray-800">RISET OPERASI</h2>
            <div class="mt-4">
                <table class="w-full text-left border-collapse border border-gray-300">
                    <thead>
                        <tr class="bg-gray-100">
                            <th class="p-4 border border-gray-300">Session</th>
                            <th class="p-4 border border-gray-300">Date</th>
                            <th class="p-4 border border-gray-300">Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="p-4 border border-gray-300">1</td>
                            <td class="p-4 border border-gray-300">15-07-2024</td>
                            <td class="p-4 border border-gray-300">Present</td>
                        </tr>
                        <tr>
                            <td class="p-4 border border-gray-300">2</td>
                            <td class="p-4 border border-gray-300">22-07-2024</td>
                            <td class="p-4 border border-gray-300">Present</td>
                        </tr>
                        <tr>
                            <td class="p-4 border border-gray-300">3</td>
                            <td class="p-4 border border-gray-300">-</td>
                            <td class="p-4 border border-gray-300">-</td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</body>
</x-app-layout>