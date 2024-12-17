<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-3">
            {{ __('Calendar') }}
        </h2>
    </x-slot>
            <div x-data="calendarApp()" class="max-w-4xl my-12 mx-auto bg-white rounded-lg shadow-lg p-4">
                <!-- Header Kalender -->
                <div class="flex items-center mb-4">
                    <h2 class="text-xl font-semibold">Timeline</h2>
                    <!-- Filter Bulan -->
                    <select class="mx-2" x-model="currentMonth" @change="generateDays()" class="border rounded p-2">
                        <template x-for="(month, index) in months" :key="index">
                            <option :value="index" x-text="month"></option>
                        </template>
                    </select>
                </div>

                <!-- Grid Kalender -->
                <div>
                    <!-- Header Hari -->
                    <div class="grid grid-cols-7 text-center font-semibold bg-blue-500 text-white">
                        <div>SUN</div>
                        <div>MON</div>
                        <div>TUE</div>
                        <div>WED</div>
                        <div>THU</div>
                        <div>FRI</div>
                        <div>SAT</div>
                    </div>

                    <!-- Tanggal -->
                    <div class="grid grid-cols-7 border">
                        <template x-for="(day, index) in days" :key="index">
                            <div
                                class="h-16 flex items-center justify-center border relative cursor-pointer"
                                @click="toggleCircle(day)"
                            >
                                <span x-text="day"></span>
                                <!-- Lingkaran untuk tanggal yang dipilih -->
                                <div
                                    x-show="markedDays.includes(day)"
                                    class="absolute w-10 h-10 rounded-full border-4 border-blue-500"
                                ></div>
                            </div>
                        </template>
                    </div>
                </div>
            </div>

            <script>
                function calendarApp() {
                    return {
                        // Data bulan
                        months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October", "November", "December"],
                        currentMonth: new Date().getMonth(), // Bulan saat ini
                        days: [], // Hari dalam bulan
                        markedDays: [], // Tanggal yang ditandai

                        // Generate hari berdasarkan bulan
                        generateDays() {
                            this.days = [];
                            const daysInMonth = new Date(2024, this.currentMonth + 1, 0).getDate();
                            for (let i = 1; i <= daysInMonth; i++) {
                                this.days.push(i);
                            }
                        },

                        // Toggle tanda lingkaran
                        toggleCircle(day) {
                            if (this.markedDays.includes(day)) {
                                this.markedDays = this.markedDays.filter(d => d !== day);
                            } else {
                                this.markedDays.push(day);
                            }
                        },

                        // Initialize
                        init() {
                            this.generateDays();
                        }
                    };
                }
            </script>
</x-app-layout>
