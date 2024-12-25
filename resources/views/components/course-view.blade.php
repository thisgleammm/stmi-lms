<div class="rounded grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-x-12 gap-y-8 mx-4 sm:mx-8 md:mx-16 lg:mx-32 px-4 sm:px-6 lg:px-10">
    @foreach ($courses as $item)
        <div class="bg-white rounded shadow pb-4 w-full flex flex-col">
            <!-- Gambar -->
            <img src="{{ url('/images/' . $item['image']) }}" alt="{{ $item['name_courses'] }}"
                class="w-full h-52 object-cover rounded-t-lg mb-4">
            
            <!-- Judul Kursus -->
            <h3 class="text-lg px-4 font-semibold my-2 uppercase">{{ $item['name_courses'] }}</h3>
            
            <!-- Info Text -->
            <p class="text-xs font-bold text-gray-500 mt-4 px-4">
                0 of 16 activities complete
            </p>

            <!-- Progress Bar -->
            <div class="w-11/12 bg-gray-200 mt-2 rounded-full h-2.5 mx-auto">
                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 0%;"></div>
            </div>
            <p class="text-xs font-bold text-black my-2 px-4">
                0% Course Complete
            </p>
            
            <!-- Tombol View Course -->
            <a class="w-5/12 border-solid border-2 border-blue-600 text-blue-600 px-4 py-2 rounded text-center ml-auto mx-4"
                href="<?= url('coursefile/' . $item['name_courses']) ?>">View Course</a>
        </div>
    @endforeach
</div>
