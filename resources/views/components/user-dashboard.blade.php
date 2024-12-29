<div>
    <div class="mb-8 mt-4">
        <h2 class="text-xl font-semibold ml-4 sm:ml-16 mb-2 lg:mx-40">Latest Announcements</h2>
        <div class="bg-white p-4 rounded shadow mx-4 sm:mx-6 lg:mx-40">
            <p class="text-base text-gray-500">27 Nov, 12:07</p>
            <p class="text-lg text-slate-950">{{ Auth::user()->name }}</p>
            <a href="#" class="text-blue-600 font-semibold text-base">Maintenance LMS 27th November
                2024</a>
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
                <input type="text" class="border-gray-300 rounded-md shadow-sm sm:text-sm w-full sm:w-auto"
                    placeholder="Search...">
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
                                class="border-gray-300 rounded-md shadow-sm sm:text-sm w-full" placeholder="Search...">
                        </div>
                    </div>
                </div>
            </div>

            <!-- Display filtered courses -->
            <div
                class="rounded grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-12 gap-y-8 mx-4 sm:mx-8 md:mx-16 lg:mx-32 px-4 sm:px-6 lg:px-10">
                <template x-for="course in filteredCourses">
                    <div class="bg-white rounded shadow pb-4 w-full">
                        <!-- Gambar -->
                        <img :src="`/images/${course.image}`" :alt="course.name_courses"
                            class="w-full h-52 object-cover rounded-t-lg mb-4">

                        <!-- Judul Kursus -->
                        <h3 class="text-lg px-4 font-semibold my-2 uppercase" x-text="course.name_courses"></h3>

                        <!-- Info Text -->
                        <p class="text-xs font-bold text-gray-500 mt-4 px-4">
                            0 of 16 activities complete
                        </p>

                        <!-- Progress Bar -->
                        <div class="w-11/12 bg-gray-200 mt-2 rounded-full h-2.5 mx-auto">
                            <div class="bg-blue-600 h-2.5 rounded-full" :style="`width: ${course.progress}%`">
                            </div>
                        </div>
                        <p class="text-xs font-bold text-black my-2 px-4"
                            x-text="`${course.progress}% Course Complete`"></p>

                        <!-- Tombol View Course -->
                        <a class="w-5/12 border-solid border-2 border-blue-600 text-blue-600 px-4 py-2 rounded text-center ml-auto mx-4"
                            :href="`/coursefile/${course.name_courses}`">View Course</a>
                    </div>
                </template>
            </div>
        </div>
    </div>
</div>
