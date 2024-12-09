<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('User Data') }}
        </h2>
    </x-slot>

    <div class="py-2">
          <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
             <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg ">
                <div class="flex justify-between">
                  <div class="p-6 text-gray-900">
                    {{ __('Lecture Data') }}
                       <!-- Button untuk membuka modal -->
                        <button id="openModalButton" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                            add lecture +
                        </button>

                        <!-- Modal add lecture  -->
                        <div id="modal" class="fixed flex justify-center inset-0 bg-gray-600 bg-opacity-50 hidden justify-center items-center">
                            <div class="bg-white p-8 rounded-lg w-96">
                                <h2 class="text-2xl text-center font-semibold mb-4">add lecture</h2>
                                <form>
                                    <div class="mb-4">
                                        <label for="name" class="block text-sm font-medium text-gray-700">nama</label>
                                        <input type="text" id="name" name="name" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your name">
                                    </div>
                                    <div class="mb-4">
                                        <label for="email" class="block text-sm font-medium text-gray-700">NIP</label>
                                        <input type="text" id="NIP" name="NIP" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your NIP">
                                    </div>
                                    <div class="mb-4">
                                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                        <input type="email" id="emai" name="email" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your email">
                                    </div>
                                    <div class="mb-4">
                                        <label for="email" class="block text-sm font-medium text-gray-700">phone_number</label>
                                        <input type="text" id="phone_number" name="phone number" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your Phone number">
                                    </div>
                                    
                                    <div class="flex justify-end space-x-2">
                                        <button type="button" id="closeModalButton" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Cancel</button>
                                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Submit</button>
                                    </div>
                                </form>
                            </div>
                        </div>                   
                    </div>
                        <div class="flex">
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
                                    <td class="py-3 px-4">1323050</td>
                                    <td class="py-3 px-4">{{ Auth::user()->name }}</td>
                                <td class="py-3 px-4">{{ Auth::user()->email }}</td>
                                    <td class="py-3 px-4">
                                        <span class="inline-block px-3 py-1 text-sm font-medium text-white bg-green-500 rounded-full">
                                            Active
                                        </span>
                                    </td>
                                    <td class="py-3 px-4 text-center">
                                        <button id="openModalButtonedit" class="text-sm px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600 mr-2">
                                            Edit
                                        </button>
                                        <div id="modaledit" class="fixed flex justify-center text-left inset-0 bg-gray-600 bg-opacity-50 hidden justify-center items-center">
                                            <div class="bg-white p-8 rounded-lg w-96">
                                                <h2 class="text-2xl font-semibold text-center mb-4">Edit User</h2>
                                                <form>
                                                    <div class="mb-4">
                                                        <label for="name" class="block text-sm font-medium text-gray-700">nama</label>
                                                        <input type="text" id="name" name="name" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your name">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="email" class="block text-sm font-medium text-gray-700">NIP</label>
                                                        <input type="text" id="NIP" name="NIP" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your NIP">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="email" class="block text-sm font-medium text-gray-700">Email</label>
                                                        <input type="email" id="emai" name="email" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your email">
                                                    </div>
                                                    <div class="mb-4">
                                                        <label for="email" class="block text-sm font-medium text-gray-700">phone_number</label>
                                                        <input type="text" id="phone_number" name="phone number" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your Phone number">
                                                    </div>
                                                    
                                                    <div class="flex justify-end space-x-2">
                                                        <button type="button" id="closeModalButtonedit" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Cancel</button>
                                                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
                                        <button id="openModalButtondelete" class="text-sm px-4 py-2 bg-red-500 text-white rounded hover:bg-red-600">
                                            Delete
                                        </button>
                                        <div id="modaldelete" class="fixed flex justify-center text-left inset-0 bg-gray-600 bg-opacity-50 hidden justify-center items-center">
                                            <div class="bg-white p-8 rounded-lg w-96">
                                                <h2 class="text-2xl font-semibold text-center mb-4">yakin mau di hapus</h2>
                                                <form>
                                                    <div class="flex justify-between space-x-2 mt-10 ">
                                                        <button type="button" id="closeModalButtondelete" class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">Cancel</button>
                                                        <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">Submit</button>
                                                    </div>
                                                </form>
                                            </div>
                                        </div>
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
                        <script scr="..\resources\js" >
                            // Script untuk membuka dan menutup modal
                            const openModalButton = document.getElementById('openModalButton');
                            const closeModalButton = document.getElementById('closeModalButton');
                            const modal = document.getElementById('modal');
                            
                            const openModalButtonedit = document.getElementById('openModalButtonedit');
                            const closeModalButtonedit = document.getElementById('closeModalButtonedit');
                            const modaledit = document.getElementById('modaledit');
                            
                            const openModalButtondelete = document.getElementById('openModalButtondelete');
                            const closeModalButtondelete = document.getElementById('closeModalButtondelete');
                            const modaldelete = document.getElementById('modaldelete');
                    

                            openModalButton.addEventListener('click', () => {
                                modal.classList.remove('hidden');
                            });

                            closeModalButton.addEventListener('click', () => {
                                modal.classList.add('hidden');
                            });
                            
                            openModalButtonedit.addEventListener('click', () => {
                                modaledit.classList.remove('hidden');
                            });

                            closeModalButtonedit.addEventListener('click', () => {
                                modaledit.classList.add('hidden');
                            });

                            openModalButtondelete.addEventListener('click', () => {
                                modaldelete.classList.remove('hidden');
                            });
                            
                            closeModalButtondelete.addEventListener('click', () => {
                                modaldelete.classList.add('hidden');
                            });
                        </script>
                        <script>
                            // const openModalButtonedit = document.getElementById('openModalButtonedit');
                            // const closeModalButtonedit = document.getElementById('closeModalButtonedit');
                            // const modaledit = document.getElementById('modaledit');

                            // openModalButtonedit.addEventListener('click', () => {
                            //     modaledit.classList.remove('hidden');
                            // });

                            // closeModalButtonedit.addEventListener('click', () => {
                            //     modaledit.classList.add('hidden');
                            // });
                            
                        </script>

