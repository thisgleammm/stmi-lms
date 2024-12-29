<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-3">
            {{ __('My Course') }}
        </h2>
    </x-slot>

    <!-- My Course Section -->
    <div class="mb-8 mt-4" x-data="{
        search: '',
        courses: {{ Js::from($courses) }},
        get filteredCourses() {
            if (!this.search) return this.courses;
            return this.courses.filter(course => course.name_courses.toLowerCase().includes(this.search.toLowerCase()));
        }
    }">
        <h2 class="text-xl font-semibold ml-4 sm:ml-16 mb-2 lg:mx-40">My Courses</h2>
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
                            <input type="text" x-model="search"
                                class="border-gray-300 rounded-md shadow-sm sm:text-sm w-full" placeholder="Search...">
                        </div>
                    </div>
                </div>

            </div>
            <div class="mt-8">
                <div class="rounded grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-8 px-6 lg:px-10">
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
                                <div class="bg-blue-600 h-2.5 rounded-full" :style="`width: ${course.progress}%`">
                                </div>
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
    </div>

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
