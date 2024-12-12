<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-3">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>
    @if (Auth::user()->level === 'admin')
        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
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
        <h2 class="text-xl font-semibold ml-44 mb-2">Latest Announcements</h2>
        <div class="bg-white p-4 rounded shadow mx-40">
            <p class="text-base text-gray-500">27 Nov, 12:07</p>
            <p class="text-lg text-slate-950">Alvaro Muyassar</p>
            <a href="#" class="text-blue-600 font-semibold text-base">Maintenance LMS 27th November 2024</a>
        </div>
    </div>

    <!-- Timeline Section -->
    <div class="mb-8">
        <div class="flex items-center justify-between ml-44 mb-4">
            <h2 class="text-xl font-semibold">Timeline</h2>
            <a href="#" class="text-blue-600 mr-44">See All My Task</a>
        </div>
        <div class="bg-white p-4 rounded mx-40 shadow">
            <div class="flex items-center justify-between mb-4">
                <select class="border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 block sm:text-sm">
                    <option>Sort by dates</option>
                    <option>Upcoming</option>
                    <option>Complete</option>
                </select>
                <input type="text" class="border-gray-300 rounded px-2 py-1" placeholder="Search...">
            </div>
            <div class="border-t pt-4">
                <p class="text-sm text-gray-500">Saturday, 30 November 2024</p>
                <div class="flex items-center justify-between">
                    <div>
                        <h3 class="text-lg font-semibold">QUIZ REVIEW - Penugasan (Riset Operasi)</h3>
                        <p class="text-sm text-gray-500">Metode Penugasan kasus Minimasi & Maksimasi</p>
                    </div>
                    <button class="bg-blue-600 text-white px-4 py-2 rounded">Attempt Quiz Now</button>
                </div>
            </div>
        </div>
        <x-course-view1>

        </x-course-view1>
    </div>
    @endif
</x-app-layout>
