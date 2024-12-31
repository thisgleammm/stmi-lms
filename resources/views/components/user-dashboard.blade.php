<div x-data="backToTop()" x-init="init()" class="sm:mb-8 xl:mb-8 mb-8 sm:mt-4 xl:mt-4 mt-4">
    <div>
        <div class="flex flex-col sm:flex-row sm:space-x-6 sm:mx-40 mb-8 xl:flex-row xl:space-x-6 xl:mx-40">
            <!-- Left Column: Latest Announcements & Timeline -->
            <div class="flex-1 space-y-8 sm:space-y-8 xl:space-y-8">
                <!-- Latest Announcements -->
                <div class="bg-white p-4 sm:p-6 xl:p-4 rounded shadow">
                    <h2 class="text-xl font-semibold mb-2">Latest Announcements</h2>
                    <p class="text-base text-gray-500">27 Nov, 12:07</p>
                    <p class="text-lg text-slate-950">Admin STMI</p>
                    <a href="#" class="text-blue-600 font-semibold text-base">Maintenance LMS 27th November 2024</a>
                </div>

                <!-- Timeline Section -->
                <div class="bg-white p-4 sm:p-6 xl:p-4 rounded shadow">
                    <div class="flex items-center justify-between mb-4 sm:mb-6 xl:mb-4">
                        <h2 class="text-xl font-semibold">Timeline</h2>
                        <a href="<?= url('mytask') ?>" class="text-blue-600">See all my task</a>
                    </div>
                    <div class="flex items-center space-x-2 w-full sm:w-auto mb-4 sm:mb-6 xl:mb-8 xl:w-auto">
                        <select
                            class="border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 block sm:text-sm w-full sm:w-auto xl:text-base xl:w-auto">
                            <option>Sort by dates</option>
                            <option>Upcoming</option>
                            <option>Complete</option>
                        </select>
                        <x-text-input class="border-gray-300 rounded-md shadow-sm w-full sm:text-sm sm:w-auto xl:text-base xl:w-auto" type="text"
                            placeholder="Search..." />
                    </div>
                    <div>
                        <p class="text-sm text-gray-500">Saturday, 30 November 2024</p>
                        <div class="flex items-center justify-between sm:space-x-4 xl:space-x-6">
                            <div>
                                <h3 class="text-lg font-semibold">QUIZ REVIEW - Penugasan (Riset Operasi)</h3>
                                <p class="text-sm text-gray-500">Metode Penugasan kasus Minimasi & Maksimasi</p>
                            </div>
                            <x-attempt-session />
                        </div>
                    </div>
                </div>
            </div>

            <!-- Right Column: Berita Terkini -->
            <div class="w-full sm:w-2/3 xl:w-1/3 bg-gray-50 rounded shadow-lg p-4">
                <div id="default-carousel" class="relative w-full" data-carousel="slide">
                    <!-- Carousel wrapper -->
                    <div class="relative h-56 overflow-hidden rounded-lg sm:h-72 xl:h-96">
                        <!-- Item 1 -->
                        <div class="duration-700 ease-in-out" data-carousel-item>
                            <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/4/22/b8060e71-6297-4cc3-ab7d-47f8055a0b19.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Berita Terkini">
                        </div>
                        <!-- Item 2 -->
                        <div class="duration-700 ease-in-out" data-carousel-item>
                            <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/4/22/b8060e71-6297-4cc3-ab7d-47f8055a0b19.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Berita Terkini">
                        </div>
                        <!-- Item 3 -->
                        <div class="duration-700 ease-in-out" data-carousel-item>
                            <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/4/22/b8060e71-6297-4cc3-ab7d-47f8055a0b19.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Berita Terkini">
                        </div>
                        <!-- Item 4 -->
                        <div class="duration-700 ease-in-out" data-carousel-item>
                            <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/4/22/b8060e71-6297-4cc3-ab7d-47f8055a0b19.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Berita Terkini">
                        </div>
                        <!-- Item 5 -->
                        <div class="duration-700 ease-in-out" data-carousel-item>
                            <img src="https://images.tokopedia.net/img/cache/500-square/VqbcmM/2021/4/22/b8060e71-6297-4cc3-ab7d-47f8055a0b19.jpg" class="absolute block w-full -translate-x-1/2 -translate-y-1/2 top-1/2 left-1/2" alt="Berita Terkini">
                        </div>
                    </div>
                    <!-- Slider indicators -->
                    <div class="absolute z-30 flex -translate-x-1/2 bottom-5 left-1/2 space-x-3 rtl:space-x-reverse">
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="true" aria-label="Slide 1" data-carousel-slide-to="0"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 2" data-carousel-slide-to="1"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 3" data-carousel-slide-to="2"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 4" data-carousel-slide-to="3"></button>
                        <button type="button" class="w-3 h-3 rounded-full" aria-current="false" aria-label="Slide 5" data-carousel-slide-to="4"></button>
                    </div>
                    <!-- Slider controls -->
                    <button type="button" class="absolute top-0 start-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-prev>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 1 1 5l4 4"/>
                            </svg>
                            <span class="sr-only">Previous</span>
                        </span>
                    </button>
                    <button type="button" class="absolute top-0 end-0 z-30 flex items-center justify-center h-full px-4 cursor-pointer group focus:outline-none" data-carousel-next>
                        <span class="inline-flex items-center justify-center w-10 h-10 rounded-full bg-white/30 group-focus:ring-white group-focus:outline-none">
                            <svg class="w-4 h-4 text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 6 10">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 9 4-4-4-4"/>
                            </svg>
                            <span class="sr-only">Next</span>
                        </span>
                    </button>
                </div>
            </div>
            
        </div>

        <!-- Course Section -->
        <div class="mb-8" x-data="{
            search: '',
            courses: {{ Js::from($courses) }},
            sortOption: 'alphabetical-asc', // Menyimpan opsi pengurutan
            get filteredCourses() {
                let courses = this.courses;

                // Menyaring berdasarkan pencarian
                if (this.search) {
                    courses = courses.filter(course => course.name_courses.toLowerCase().includes(this.search.toLowerCase()));
                }

                // Menyortir berdasarkan opsi yang dipilih
                if (this.sortOption === 'alphabetical-asc') {
                    courses.sort((a, b) => a.name_courses.localeCompare(b.name_courses));  // A-Z
                } else if (this.sortOption === 'alphabetical-desc') {
                    courses.sort((a, b) => b.name_courses.localeCompare(a.name_courses));  // Z-A
                }

                return courses;
            }
        }">
            <div class="flex items-center justify-between ml-4 sm:ml-16 mb-4 xl:mx-40">
                <h2 class="text-xl font-semibold">Course Overview</h2>
                <a href="<?= url('mycourse') ?>" class="text-blue-600 xl:mr-4 mr-4 sm:mr-16">See all my course</a>
            </div>
            <div class="px-4 mx-4 sm:mx-6 xl:mx-36">
                <div class="flex items-center justify-between mb-4">
                    <!-- Filter & Search Section -->
                    <div class="flex items-center space-x-4 w-full sm:w-auto">
                        <!-- Filter Section -->
                        <div class="flex items-center space-x-2 w-full sm:w-auto">
                            <span class="text-gray-700 text-sm font-medium">Filter</span>
                            <select x-model="sortOption" class="border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 block sm:text-md w-full">
                                <option value="alphabetical-asc">Sort A-Z</option>
                                <option value="alphabetical-desc">Sort Z-A</option>
                            </select>
                        </div>

                        <!-- Search Section -->
                        <div class="flex items-center space-x-2 w-full sm:w-auto">
                            <div class="relative w-full sm:w-auto">
                                <x-text-input x-model.debounce="search" class="border-gray-300 rounded-md shadow-sm sm:text-sm w-full" type="text"
                                    placeholder="Search..." />
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Display filtered courses -->
                <div class="rounded grid grid-cols-1 sm:grid-cols-4 gap-8 px-6">
                    <template x-for="course in filteredCourses">
                        <div class="bg-white rounded-lg shadow-lg pb-4">
                            <!-- Gambar -->
                            <img :src="`/images/${course.image}`" :alt="course.name_courses"
                                class="w-full h-48 object-cover rounded-t-lg">
                            <!-- Judul Kursus -->
                            <h3 class="text-md px-4 font-semibold my-2 uppercase" x-text="course.name_courses"></h3>
                            <!-- Info Text -->
                            <p class="text-xs font-medium text-gray-500 px-4">0 of 16 activities complete</p>
                            <!-- Progress Bar -->
                            <div class="w-11/12 bg-gray-200 mt-2 rounded-full h-2.5 mx-auto">
                                <div class="bg-blue-600 h-2.5 rounded-full" :style="`width: ${course.progress}%`"></div>
                            </div>
                            <p class="text-xs font-medium text-black px-4 mt-2"
                                x-text="`${course.progress}% Course Complete`"></p>
                            <!-- Tombol View Course -->
                            <div class="px-4 mt-4">
                                <a class="w-full border-solid border-2 border-blue-600 text-blue-600 py-2 rounded text-center block"
                                    :href="`/coursefile/${course.name_courses}`">View Course</a>
                            </div>
                        </div>
                    </template>
                </div>
            </div>
        </div>

        <!-- Back to Top Button -->
        <button id="back-to-top" x-show="showButton" @click="scrollToTop"
            class="fixed bottom-60 right-8 z-50 transition-opacity duration-300" :class="{'opacity-100': showButton, 'opacity-0': !showButton}">
            <img src="/images/logolingkaran.svg" alt="Back to Top" class="h-40 w-40">
        </button>


        <script>
            function backToTop() {
                return {
                    showButton: false, // Tombol disembunyikan secara default
                    intervalId: null,  // Menyimpan ID interval untuk auto-scroll

        
                    init() {
                        // Menambahkan event listener untuk scroll
                        window.addEventListener('scroll', () => {
                            // Menampilkan tombol jika scroll lebih dari 300px
                            this.showButton = window.scrollY > 300;
                        });
                    },
        
                    // Fungsi untuk scroll ke atas
                    scrollToTop() {
                        window.scrollTo({
                            top: 0,
                            behavior: 'smooth',
                        });
                    },
        
                    // Menghentikan interval jika komponen dihancurkan
                    destroy() {
                        clearInterval(this.intervalId);
                    }
                };
            }
        </script>