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
