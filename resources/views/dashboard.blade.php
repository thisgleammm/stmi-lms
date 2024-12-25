<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-3">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if (Auth::user()->level === 'admin')
        <div class="py-12">
            <div class="max-w-7xl mx-4 sm:mx-6 lg:mx-8">
                <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                    <div class="p-6 text-gray-900">
                        {{ __('Monthly Statistics') }}
                        <div class="relative flex flex-col rounded-xl bg-white bg-clip-border text-gray-700 shadow-md">
                            <div id="bar-chart"></div>
                            <script src="https://cdn.jsdelivr.net/npm/apexcharts"></script>
                            <script>
                                const chartConfig = {
                                    series: [{
                                            name: "Lecturer",
                                            data: [400, 600, 800, 500], // Replace with actual data
                                        },
                                        {
                                            name: "Student",
                                            data: [600, 1200, 1000, 700], // Replace with actual data
                                        },
                                    ],
                                    chart: {
                                        type: "bar",
                                        height: 350,
                                        toolbar: {
                                            show: false,
                                        },
                                    },
                                    colors: ["#89CFF0", "#0D47A1"], // Lecturer: Light Blue, Student: Dark Blue
                                    plotOptions: {
                                        bar: {
                                            horizontal: false,
                                            columnWidth: "50%",
                                            endingShape: "flat",
                                        },
                                    },
                                    xaxis: {
                                        categories: ["January", "February", "March", "May"], // Replace with your months
                                        labels: {
                                            style: {
                                                fontSize: "12px",
                                                fontWeight: 400,
                                            },
                                        },
                                    },
                                    yaxis: {
                                        labels: {
                                            formatter: function(value) {
                                                return value.toFixed(0); // Adjust decimals if needed
                                            },
                                        },
                                    },
                                    dataLabels: {
                                        enabled: false,
                                    },
                                    legend: {
                                        position: "bottom",
                                        horizontalAlign: "center",
                                    },
                                    grid: {
                                        borderColor: "#e7e7e7",
                                    },
                                };
                                const chart = new ApexCharts(document.querySelector("#bar-chart"), chartConfig);
                                chart.render();
                            </script>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @else
        <div class="mb-8 mt-4">
            <h2 class="text-xl font-semibold ml-4 sm:ml-16 mb-2 lg:mx-40">Latest Announcements</h2>
            <div class="bg-white p-4 rounded shadow mx-4 sm:mx-6 lg:mx-40">
                <p class="text-base text-gray-500">27 Nov, 12:07</p>
                <p class="text-lg text-slate-950">{{ Auth::user()->name }}</p>
                <a href="#" class="text-blue-600 font-semibold text-base">Maintenance LMS 27th November 2024</a>
            </div>
        </div>

        <!-- Timeline Section -->
        <div class="mb-8">
            <div class="flex items-center justify-between ml-4 sm:ml-16 mb-4 lg:mx-40">
                <h2 class="text-xl font-semibold">Timeline</h2>
                <a href="<?= url('mytask') ?>" class="text-blue-600 lg:mr-4 mr-4 sm:mr-20">See all my task</a>
            </div>
            <div class="bg-white p-4 rounded mx-4 sm:mx-6 lg:mx-40 shadow">
                <div class="flex items-center space-x-2 w-full sm:w-auto">
                    <select
                        class="border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 block sm:text-sm w-full sm:w-auto">
                        <option>Sort by dates</option>
                        <option>Upcoming</option>
                        <option>Complete</option>
                    </select>
                    {{-- <input type="text" class="border-gray-300 rounded-md shadow-sm px-2 py-1 sm:text-sm w-full sm:w-auto" placeholder="Search..."> --}}
                    <input type="text" class="border-gray-300 rounded-md shadow-sm sm:text-sm w-full sm:w-auto" placeholder="Search...">
                </div>
                <div class="pt-4">
                    <p class="text-sm text-gray-500">Saturday, 30 November 2024</p>
                    <div class="flex items-center justify-between">
                        <div>
                            <h3 class="text-lg font-semibold">QUIZ REVIEW - Penugasan (Riset Operasi)</h3>
                            <p class="text-sm text-gray-500">Metode Penugasan kasus Minimasi & Maksimasi</p>
                        </div>
                        <x-attempt-session />
                    </div>
                </div>
            </div>
        </div>

        <!-- Course Section -->
        <div class="mb-8" x-data="{
            search: '',
            filteredCourses() {
                return @entangle('courses').filter(course => {
                    return course.title.toLowerCase().includes(this.search.toLowerCase()) ||
                           course.description.toLowerCase().includes(this.search.toLowerCase());
                });
            }
        }">
            <div class="flex items-center justify-between ml-4 sm:ml-16 mb-4 lg:mx-40">
                <h2 class="text-xl font-semibold">Course Overview</h2>
                <a href="<?= url('mytask') ?>" class="text-blue-600 lg:mr-4 mr-4 sm:mr-16">See all my course</a>
            </div>
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
                                <input x-model="search" type="text" class="border-gray-300 rounded-md shadow-sm sm:text-sm w-full" placeholder="Search...">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Display filtered courses -->
                <div class="course-list">
                    <template x-for="course in filteredCourses()" :key="course.id">
                        <div class="course-item">
                            <h3 x-text="course.title"></h3>
                            <p x-text="course.description"></p>
                        </div>
                    </template>
                </div>
            </div>
        </div>

        <x-course-view :courses="$courses"/> 
    @endif
</x-app-layout>
