<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-3">
            {{ __('Calendar') }}
        </h2>
    </x-slot>

    <div x-data="calendarApp()" class="max-w-4xl my-12 mx-auto bg-white rounded-lg shadow-lg">
        <!-- Header Kalender -->
        <div class="p-6 bg-gray-50">
            <h2 class="text-2xl font-semibold mb-2">Calendar</h2>
            <div class="flex items-center justify-between">
                <div class="flex items-center">
                    <span class="text-lg font-medium mr-2">Timeline</span>
                    <select x-model="currentMonth" @change="generateDays()"
                        class="border border-gray-300 rounded-md p-2 text-sm focus:ring-blue-500 focus:border-blue-500">
                        <template x-for="(month, index) in months" :key="index">
                            <option :value="index" x-text="month"></option>
                        </template>
                    </select>
                    <input type="text" placeholder="All Schedule..."
                        class="border border-gray-300 rounded-md ml-2 p-2 text-sm focus:ring-blue-500 focus:border-blue-500" />
                </div>
            </div>

            <!-- Informasi Tanggal -->
            <div class="mt-4 text-gray-700">
                <p x-show="selectedDate" class="text-lg font-medium">
                    <span x-text="formattedDate"></span>
                </p>
            </div>
        </div>

        <!-- Grid Kalender -->
        <div class="p-6">
            <!-- Header Hari -->
            <div class="grid grid-cols-7 text-center font-semibold bg-blue-600 text-white rounded-t-md">
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
                    <div class="h-16 flex items-center justify-center border relative cursor-pointer hover:bg-gray-100 transition"
                        @click="selectDate(day)">
                        <span x-text="day" class="text-sm"></span>
                        <!-- Lingkaran untuk tanggal yang dipilih -->
                        <div x-show="markedDays.includes(day)"
                            class="absolute w-10 h-10 rounded-full border-4 border-blue-500 flex items-center justify-center">
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <script>
        function calendarApp() {
            return {
                // Data bulan
                months: ["January", "February", "March", "April", "May", "June", "July", "August", "September", "October",
                    "November", "December"
                ],
                currentMonth: new Date().getMonth(), // Bulan saat ini
                days: [], // Hari dalam bulan
                markedDays: [], // Tanggal yang ditandai
                selectedDate: null, // Tanggal yang dipilih
                formattedDate: "", // Tanggal yang diformat

                // Generate hari berdasarkan bulan
                generateDays() {
                    this.days = [];
                    const daysInMonth = new Date(2024, this.currentMonth + 1, 0).getDate();
                    for (let i = 1; i <= daysInMonth; i++) {
                        this.days.push(i);
                    }
                    this.markedDays = []; // Reset lingkaran saat bulan berubah
                },

                // Pilih tanggal
                selectDate(day) {
                    const date = new Date(2024, this.currentMonth, day);
                    const dayNames = ["Sunday", "Monday", "Tuesday", "Wednesday", "Thursday", "Friday", "Saturday"];
                    const dayName = dayNames[date.getDay()];
                    this.selectedDate = date;
                    this.formattedDate = `${dayName}, ${day} ${this.months[this.currentMonth]} 2024`;

                    // Atur lingkaran
                    this.markedDays = [day]; // Hanya tanggal yang dipilih
                },

                // Initialize
                init() {
                    this.generateDays();
                }
            };
        }
    </script>

    <!-- Back to Top Button -->
    <button id="back-to-top" class="hidden fixed bottom-8 right-8 bg-white text-blue px-4 py-2 rounded-full shadow-lg">
        ^
    </button>

    <script>
        // Back to Top Button Functionality
        const backToTopButton = document.getElementById('back-to-top');

        window.addEventListener('scroll', () => {
            if (window.scrollY > 300) {
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
