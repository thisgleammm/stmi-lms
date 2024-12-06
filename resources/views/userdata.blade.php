<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Data') }}
        </h2>
        <h2 class="font-semibold text-sm text-gray-800 leading-tight mt-4 ml-2">
             {{ __('student data') }}
        </h2>
    </x-slot>

    <div class="py-2">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="flex justify-between">
                  <div class="p-6 text-gray-900">
                    <button class="border-1 bg-gray-100 px-2 py-2 rounded-md text-sm">
                    {{ __('Add  student +') }}
                    <button>
                  </div>
                  <div class="flex">
                        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 192.904 192.904" width="16px"  class="fill-gray-600 mr-3 rotate-90">
                             <path d="m190.707 180.101-47.078-47.077c11.702-14.072 18.752-32.142 18.752-51.831C162.381 36.423 125.959 0 81.191 0 36.422 0 0 36.423 0 81.193c0 44.767 36.422 81.187 81.191 81.187 19.688 0 37.759-7.049 51.831-18.751l47.079 47.078a7.474 7.474 0 0 0 5.303 2.197 7.498 7.498 0 0 0 5.303-12.803zM15 81.193C15 44.694 44.693 15 81.191 15c36.497 0 66.189 29.694 66.189 66.193 0 36.496-29.692 66.187-66.189 66.187C44.693 147.38 15 117.689 15 81.193z"></path>
                        </svg> 
                        <input type="email" placeholder="Search Something..." class="w-full h-8 my-6 mx-4 rounded-md outline-none bg-transparent text-gray-600 text-sm" />
                   </div>
                </div>
        <div class="overflow-x-auto flex-colum px-4 py-4">
            <table class="min-w-full bg-white border border-gray-100 rounded-lg shadow-md">
                <thead class="bg-gray-300 text-black">
                    <tr>
                        <th class="py-3 px-4 text-left">No.</th>
                        <th class="py-3 px-4 text-left">NIP</th>
                        <th class="py-3 px-4 text-left">Lecturer Name</th>
                        <th class="py-3 px-4 text-left">Email</th>
                        <th class="py-3 px-4 text-left">Status</th>
                        <th class="py-3 px-4 text-center">Options</th>
                    </tr>
                </thead>
                <tbody>
                    <tr class="border-b hover:bg-gray-50">
                        <td class="py-3 px-4">1</td>
                        <td class="py-3 px-4">{{ Auth::user()->name }}</td>
                        <td class="py-3 px-4">1323050</td>
                        <td class="py-3 px-4">{{ Auth::user()->email }}</td>
                        <td class="py-3 px-4">
                            <span class="inline-block px-3 py-1 text-sm font-medium text-white bg-green-500 rounded-full">
                                Active
                            </span>
                        </td>
                        <td class="py-3 px-4 text-center">
                            <button class="text-sm px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 mr-2">
                                Edit
                            </button>
                            <button class="text-sm px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                                Delete
                            </button>
                        </td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
            </div>
        </div>
    </div>
</x-app-layout>
