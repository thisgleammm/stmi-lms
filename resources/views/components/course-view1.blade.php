<div class="bg-white rounded shadow flex flex-wrap justify-center mx-24 my-4 mb-24 px-10 gap-5">
    @foreach ($courses as $item)
        <div class="bg-white col-4 col-md-8 rounded shadow p-4 mx-4 w-1/4 flex flex-col items-center">
            <img src="{{ url('/images/' . $item['image']) }}" alt="{{ $item['name_courses'] }}"
                class="w-full h-52 object-fill rounded mb-4">
            <h3 class="text-sm font-semibold my-8 text-center">{{ $item['name_courses'] }}</h3>
            <div class="w-full bg-gray-200 mt-4 rounded-full h-2.5 my-2">
                <div class="bg-blue-600 h-2.5 rounded-full" style="width: 0%;"></div>
            </div>
            <p class="text-xs font-medium text-gray-700 mb-4 text-center">0% Course Complete</p>
            <a class="bg-blue-600 text-white px-4 py-2 rounded mt-4 text-center"
                href="<?= url('coursefile/' . $item['name_courses']) ?>">View Course</a>
        </div>
    @endforeach
</div>
