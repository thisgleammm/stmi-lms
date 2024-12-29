<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Course') }}
        </h2>
    </x-slot>

    <body class="bg-gray-100 font-sans mb-16">
        <div class="flex flex-col md:flex-row max-w-6xl mx-auto mt-10  shadow-lg rounded-lg">
            <!-- Sidebar -->
            <div class="w-full md:w-1/3 p-6 border-r border-gray-200  bg-white">
                <div class="text-center">
                    <img src="{{ url('/images/' . $selectedCourse['image']) }}" alt="Galaxy"
                        class="w-[200px] h-[200px] md:w-full md:h-full mx-auto">
                    <h2 class="mt-4 text-xl font-bold">{{ $course }}</h2>
                    <div class="mt-2 bg-blue-200 rounded-full overflow-hidden">
                        <div class="bg-blue-500 h-2.5 w-full"></div>
                    </div>
                    <p class="mt-2 text-sm font-medium text-gray-500">100% Course Complete</p>
                </div>
                <div class="mt-20 mb-24">
                    <ul>
                        <li><a href="{{ url('coursefile/' . $course) }}"
                                class="block mt-2 text-gray-700 border-b-2 pr-44 hover:underline">Attendance</a></li>
                        <li><a href="{{ url('coursefile/' . $course . '/materials') }}"
                                class="block mt-2 text-gray-700 border-b-2 pr-44 hover:underline">Material</a></li>
                        <li><a href="{{ url('coursefile/' . $course . '/score') }}"
                                class="block mt-2 text-gray-700 border-b-2 pr-44 hover:underline">Score</a></li>
                        <li><a href="{{ url('coursefile/' . $course . '/task') }}"
                                class="block mt-2 text-gray-700 border-b-2 pr-44 hover:underline">Task</a>
                        </li>
                    </ul>
                </div>
            </div>

            @if ($type === 'attendance')
                <!-- Main Content -->
                <div class="w-full md:w-2/3 p-6 ml-12 bg-white">
                    <h2 class="text-2xl font-semibold text-gray-800">{{ $course }}</h2>
                    <h2 class="text-sm mt-10 ml-8 font-semibold text-gray-800">Attendance</h2>
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
                                    <td class="p-[25px] border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                </tr>
                                <tr>
                                    <td class="p-[25px] border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                </tr>
                                <tr>
                                    <td class="p-[25px] border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                </tr>
                                <tr>
                                    <td class="p-[25px] border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                </tr>
                                <tr>
                                    <td class="p-[25px] border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @elseif($type === 'materials')
                <!-- Main Content -->
                <div class="w-full md:w-2/3 p-6 ml-12 bg-white">
                    <h2 class="text-2xl font-semibold text-gray-800">{{ $course }}</h2>
                    <h2 class="text-sm mt-10 ml-8 font-semibold text-gray-800">Materials</h2>

                    <!-- Filter dan Search -->
                    <div class="flex justify-between items-center mt-6 px-4">
                        <form method="GET" action="{{ url('coursefile/' . $course . '/materials') }}"
                            class="flex items-center">
                            <select name="sort" onchange="this.form.submit()"
                                class="border border-gray-300 rounded-md p-2 bg-white text-sm text-gray-600 mr-4">
                                <option value="asc" {{ request('sort') === 'asc' ? 'selected' : '' }}>Sort by Name
                                    (A-Z)</option>
                                <option value="desc" {{ request('sort') === 'desc' ? 'selected' : '' }}>Sort by Name
                                    (Z-A)</option>
                            </select>
                        </form>
                        <form method="GET" action="{{ url('coursefile/' . $course . '/materials') }}"
                            class="relative">
                            <input type="text" name="search" placeholder="Search..."
                                value="{{ request('search') }}"
                                class="border border-gray-300 rounded-md p-2 text-sm text-gray-600 w-64">
                            <button type="submit"
                                class="absolute right-2 top-2 text-gray-500 hover:text-gray-700 focus:outline-none">
                                <i class="fas fa-search"></i>
                            </button>
                        </form>
                    </div>

                    <!-- Daftar Material -->
                    <div class="mt-6 space-y-6">
                        @php
                            $materials = [
                                [
                                    'title' => 'Introduction to Programming',
                                    'description' => 'Learn the basics of programming with this introductory material.',
                                    'file' => 'introduction-to-programming.pdf',
                                    'date' => '15-07-2024',
                                ],
                                [
                                    'title' => 'Data Structures',
                                    'description' => 'Understand the fundamental data structures used in programming.',
                                    'file' => 'data-structures.pdf',
                                    'date' => '22-07-2024',
                                ],
                            ];

                            // Handle sorting
                            if (request('sort') === 'asc') {
                                usort($materials, fn($a, $b) => strcmp($a['title'], $b['title']));
                            } elseif (request('sort') === 'desc') {
                                usort($materials, fn($a, $b) => strcmp($b['title'], $a['title']));
                            }

                            // Handle search
                            if ($search = request('search')) {
                                $materials = array_filter(
                                    $materials,
                                    fn($material) => stripos($material['title'], $search) !== false,
                                );
                            }
                        @endphp

                        @forelse ($materials as $material)
                            <div class="bg-gray-100 p-4 rounded-lg shadow-md flex items-start space-x-4">
                                <div class="flex-grow">
                                    <h3 class="text-lg font-semibold text-gray-800">{{ $material['title'] }}</h3>
                                    <p class="text-gray-600 text-sm">{{ $material['description'] }}</p>
                                    <p class="text-gray-400 text-xs mt-1">Uploaded on: {{ $material['date'] }}</p>
                                </div>
                                <div>
                                    <a href="{{ url('/materials/' . $material['file']) }}" target="_blank"
                                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">
                                        Download
                                    </a>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-600 text-center mt-4">No materials found.</p>
                        @endforelse
                    </div>
                </div>
            @elseif($type === 'score')
                <!-- Main Content -->
                <div class="w-full md:w-2/3 p-6 ml-12 bg-white">
                    <h2 class="text-2xl font-semibold text-gray-800">{{ $course }}</h2>
                    <h2 class="text-sm mt-10 ml-8 font-semibold text-gray-800">Score</h2>
                    <div class="mt-4">
                        <table class="w-full text-left border-collapse border border-gray-300">
                            <thead>
                                <tr class="bg-gray-100">
                                    <th class="p-4 border border-gray-300">Description</th>
                                    <th class="p-4 border border-gray-300">Score</th>
                                    <th class="p-4 border border-gray-300">Index</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td class="p-4 border border-gray-300">TASK 1</td>
                                    <td class="p-4 border border-gray-300">97</td>
                                    <td class="p-4 border border-gray-300">A</td>
                                </tr>
                                <tr>
                                    <td class="p-4 border border-gray-300">TASK 2</td>
                                    <td class="p-4 border border-gray-300">70</td>
                                    <td class="p-4 border border-gray-300">B</td>
                                </tr>
                                <tr>
                                    <td class="p-4 border border-gray-300">TASK 3</td>
                                    <td class="p-4 border border-gray-300">71</td>
                                    <td class="p-4 border border-gray-300">B</td>
                                </tr>
                                <tr>
                                    <td class="p-4 border border-gray-300">QUIZ</td>
                                    <td class="p-4 border border-gray-300">60</td>
                                    <td class="p-4 border border-gray-300">C</td>
                                </tr>
                                <tr>
                                    <td class="p-4 border border-gray-300">MID TEST</td>
                                    <td class="p-4 border border-gray-300">81</td>
                                    <td class="p-4 border border-gray-300">B+</td>
                                </tr>
                                <tr>
                                    <td class="p-4 border border-gray-300">FINAL TEST</td>
                                    <td class="p-4 border border-gray-300">91</td>
                                    <td class="p-4 border border-gray-300">A</td>
                                </tr>
                                <tr>
                                    <td class="p-[25px] border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                </tr>
                                <tr>
                                    <td class="p-[25px] border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                </tr>
                                <tr>
                                    <td class="p-[25px] border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                </tr>
                                <tr>
                                    <td class="p-[25px] border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                </tr>
                                <tr>
                                    <td class="p-[25px] border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                </tr>
                                <tr>
                                    <td class="p-[25px] border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                </tr>
                                <tr>
                                    <td class="p-[25px] border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                </tr>
                                <tr>
                                    <td class="p-[25px] border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                </tr>
                                <tr>
                                    <td class="p-[25px] border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                </tr>
                                <tr>
                                    <td class="p-[25px] border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                    <td class="p-4 border border-gray-300"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            @elseif($type === 'task')
                <!-- Main Content -->
                <div class="w-full md:w-2/3 p-6 bg-gray-100">
                    <h2 class="text-2xl font-semibold text-gray-800">{{ $course }}</h2>
                    <h2 class="text-sm mt-4 ml-2 font-semibold text-gray-800">Task</h2>

                    <!-- Filter dan Search -->
                    <div class="flex justify-between items-center mt-4 px-4">
                        <form method="GET" action="{{ url('coursefile/' . $course . '/task') }}">
                            <select name="filter" onchange="this.form.submit()"
                                class="border border-gray-300 rounded-md p-2 bg-white text-sm text-gray-600">
                                <option value="uncompleted"
                                    {{ request('filter') === 'uncompleted' ? 'selected' : '' }}>Sort by Uncompleted
                                    Tasks</option>
                                <option value="completed" {{ request('filter') === 'completed' ? 'selected' : '' }}>
                                    Sort by Completed Tasks</option>
                                <option value="all" {{ request('filter') === 'all' ? 'selected' : '' }}>Show All
                                    Tasks</option>
                            </select>
                        </form>
                        <div class="relative">
                            <input type="text" placeholder="Search..."
                                class="border border-gray-300 rounded-md p-2 text-sm text-gray-600 w-64">
                        </div>
                    </div>

                    <!-- List Task -->
                    <div class="mt-6 space-y-4">
                        @php
                            $tasks = [
                                [
                                    'date' => 'Tuesday, 25 November 2024',
                                    'title' => 'QUIZ REVIEW - Analisa Jaringan (Riset Operasi)',
                                    'desc' => 'Metode Analisa Jaringan kasus Minimasi & Maksimasi',
                                    'deadline' => '23:59 Saturday, 30 November 2024',
                                    'status' => 'completed',
                                ],
                                [
                                    'date' => 'Tuesday, 18 November 2024',
                                    'title' => 'QUIZ REVIEW - Penugasan (Riset Operasi)',
                                    'desc' => 'Metode Penugasan kasus Minimasi & Maksimasi',
                                    'deadline' => '23:59 Monday, 24 November 2024',
                                    'status' => 'uncompleted',
                                ],
                            ];

                            $filter = request('filter') ?? 'uncompleted';
                            $filteredTasks = array_filter($tasks, function ($task) use ($filter) {
                                return $filter === 'all' || $task['status'] === $filter;
                            });
                        @endphp

                        @forelse ($filteredTasks as $task)
                            <div class="bg-white p-4 shadow-md rounded-lg flex items-start space-x-4">
                                <div
                                    class="w-12 h-12 bg-blue-500 text-white rounded-full flex items-center justify-center">
                                    <i
                                        class="fas fa-{{ $task['status'] === 'completed' ? 'check' : 'times' }} text-xl"></i>
                                </div>
                                <div class="flex-grow">
                                    <h3 class="text-lg font-semibold text-gray-800">
                                        {{ $task['date'] }}
                                    </h3>
                                    <p class="text-gray-600 text-sm">
                                        {{ $task['title'] }}
                                    </p>
                                    <p class="text-gray-400 text-xs mt-1">{{ $task['deadline'] }}</p>
                                </div>
                                <div>
                                    <a href="#"
                                        class="bg-blue-500 text-white px-4 py-2 rounded-md hover:bg-blue-600 transition">
                                        {{ $task['status'] === 'completed' ? 'View Result' : 'Attempt quiz now' }}
                                    </a>
                                </div>
                            </div>
                        @empty
                            <p class="text-gray-600 text-center mt-4">No tasks found.</p>
                        @endforelse
                    </div>
                </div>
            @endif
        </div>
    </body>
</x-app-layout>
