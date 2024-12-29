<div class="mb-8 mt-4">
    <div>
        <div class="flex flex-col lg:flex-row lg:space-x-6 lg:mx-40 mb-8">
            <!-- Left Column: Latest Announcements & Timeline -->
            <div class="flex-1 space-y-8">
                <!-- Latest Announcements -->
                <div class="bg-white p-4 rounded shadow">
                    <h2 class="text-xl font-semibold mb-2">Latest Announcements</h2>
                    <p class="text-base text-gray-500">27 Nov, 12:07</p>
                    <p class="text-lg text-slate-950">{{ Auth::user()->name }}</p>
                    <a href="#" class="text-blue-600 font-semibold text-base">Maintenance LMS 27th November 2024</a>
                </div>

                <!-- Timeline Section -->
                <div class="bg-white p-4 rounded shadow">
                    <div class="flex items-center justify-between mb-4">
                        <h2 class="text-xl font-semibold">Timeline</h2>
                        <a href="<?= url('mytask') ?>" class="text-blue-600">See all my task</a>
                    </div>
                    <div class="flex items-center space-x-2 w-full sm:w-auto mb-4">
                        <select
                            class="border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 block sm:text-sm w-full sm:w-auto">
                            <option>Sort by dates</option>
                            <option>Upcoming</option>
                            <option>Complete</option>
                        </select>
                        <input type="text" class="border-gray-300 rounded-md shadow-sm sm:text-sm w-full sm:w-auto"
                            placeholder="Search...">
                    </div>
                    <div>
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

            <!-- Right Column: Berita Terkini -->
            <div class="w-full lg:w-1/3 bg-gray-50 rounded shadow-lg p-4">
                <!-- Container untuk gambar yang bisa digeser -->
                <div class="relative">
                    <div class="flex overflow-x-scroll space-x-4" id="news-container">
                        <!-- Berita 1 -->
                        <img src="https://stmi.ac.id/wp-content/uploads/2024/11/8-2-768x960.jpg" alt="Berita Terkini"
                            class="rounded-lg object-cover w-full mb-4">
                        <!-- Berita 2 -->
                        <img src="https://stmi.ac.id/wp-content/uploads/2024/11/1-4-768x960.jpg" alt="Berita Terkini"
                            class="rounded-lg object-cover w-full mb-4">
                        <!-- Berita 3 -->
                        <img src="https://stmi.ac.id/wp-content/uploads/2024/11/5-3-768x961.jpg" alt="Berita Terkini"
                            class="rounded-lg object-cover w-full mb-4">
                        <!-- Berita 4 -->
                        <img src="https://stmi.ac.id/wp-content/uploads/2024/11/7-1-768x961.jpg" alt="Berita Terkini"
                            class="rounded-lg object-cover w-full mb-4">
                        <!-- Berita 5 -->
                        <img src="https://stmi.ac.id/wp-content/uploads/2024/11/5-1-768x961.jpg" alt="Berita Terkini"
                            class="rounded-lg object-cover w-full mb-4">
                    </div>
                </div>
            </div>
        </div>

        <!-- Course Section -->
        <div class="mb-8" x-data="{
            search: '',
            courses: {{ Js::from($courses) }},
            get filteredCourses() {
                if (!this.search) return this.courses;
                return this.courses.filter(course => course.name_courses.toLowerCase().includes(this.search.toLowerCase()));
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
                                <input x-model.debounce="search" type="text"
                                    class="border-gray-300 rounded-md shadow-sm sm:text-sm w-full"
                                    placeholder="Search...">
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Display filtered courses -->
                <div class="rounded grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 lg:grid-cols-4 gap-8 px-6 lg:px-10">
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
        <button id="back-to-top"
            class="hidden fixed bottom-8 right-8 bg-white text-blue px-4 py-2 rounded-full shadow-lg">
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

        <script>
            // Fungsi untuk geser otomatis setiap 30 detik
            setInterval(function() {
                const container = document.getElementById('news-container');
                container.scrollBy({
                    left: 200, // Geser 200px ke kanan
                    behavior: 'smooth'
                });
            }, 30000); // 30 detik
        </script>
