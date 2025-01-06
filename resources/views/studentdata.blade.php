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
            
                       <!-- Button untuk membuka modal -->
                        <button id="openModalButton" class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                            Add student +
                        </button>
                        
                        <!-- Modal add lecture  -->
                        <div id="modal" class="fixed inset-0 bg-gray-600 bg-opacity-50 flex items-center justify-center hidden">
                            <div class="bg-white p-8 rounded-lg w-full max-w-md">
                                <h2 class="text-2xl text-center font-semibold mb-4">add Student</h2>
                                
                                <form action="{{ route('studentdata') }}" method="POST">
                                    @csrf
                                    <div class="mb-4">
                                        <label for="name" class="block text-sm font-medium text-gray-700">nama</label>
                                        <input type="text" id="name" name="name" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your name">
                                    </div>
                                    <div class="mb-n4">
                                        <label for="email" class="block text-sm font-medium text-gray-700">email</label>
                                        <input type="email" id="email" name="email" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your NIP">
                                    </div>

                                    <div class="mb-4">
                                        <label for="password" class="block text-sm font-medium text-gray-700">password</label>
                                        <input type="password" id="password" name="password" class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" placeholder="Enter your password">
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
                                    <th class="py-3 px-4 text-left">Student Name</th>
                                    <th class="py-3 px-4 text-left">Email</th>
                                    <th class="py-3 px-4 text-left">Progam Studi</th>
                                    <th class="py-3 px-4 text-center">Options</th>
                                </tr>
                            </thead>
                                            <tbody>
                                                @foreach($users as $no => $user)
                                                    <tr class="border-b hover:bg-gray-50">
                                                        <td class="py-3 px-4">{{ $no + 1 }}</td>
                                                        <td class="py-3 px-4">{{ $user->name }}</td>
                                                        <td class="py-3 px-4">{{ $user->email }}</td>
                                                        <td class="py-3 px-4">Sistem Informasi</td>
                                                        <td class="py-3 px-4 text-center">
                                                            <button 
                                                                onclick="openEditModal({{ $user->id }}, '{{ $user->name }}', '{{ $user->email }}')" 
                                                                class="px-2 py-1 text-sm text-white bg-blue-500 rounded hover:bg-blue-600">
                                                                Edit
                                                            </button>
                                                        </td>
                                                    </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>

                                    <!-- Modal Edit -->
                                    <div id="modaledit" class="fixed inset-0 bg-gray-600 bg-opacity-50 hidden justify-center items-center">
                                        <div class="bg-white p-8 rounded-lg w-96">
                                            <h2 class="text-2xl font-semibold text-center mb-4">Edit User</h2>
                                            <form id="editForm" action="#" method="POST">
                                                @csrf
                                                @method('PUT')

                                                <!-- Nama -->
                                                <div class="mb-4">
                                                    <label for="edit_name" class="block text-sm font-medium text-gray-700">Nama</label>
                                                    <input type="text" id="edit_name" name="name" 
                                                        class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" 
                                                        placeholder="Enter your name" required>
                                                </div>

                                                <!-- Email -->
                                                <div class="mb-4">
                                                    <label for="edit_email" class="block text-sm font-medium text-gray-700">Email</label>
                                                    <input type="email" id="edit_email" name="email" 
                                                        class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" 
                                                        placeholder="Enter your email" required>
                                                </div>

                                                <!-- Password (Opsional) -->
                                                <div class="mb-4">
                                                    <label for="edit_password" class="block text-sm font-medium text-gray-700">Password</label>
                                                    <input type="password" id="edit_password" name="password" 
                                                        class="mt-2 block w-full px-4 py-2 border border-gray-300 rounded-md focus:ring-blue-500 focus:border-blue-500" 
                                                        placeholder="Enter new password (optional)">
                                                </div>

                                                <!-- Tombol Aksi -->
                                                <div class="flex justify-end space-x-2">
                                                    <button type="button" id="closeModalButtonedit" 
                                                        class="px-4 py-2 bg-gray-400 text-white rounded hover:bg-gray-500">
                                                        Cancel
                                                    </button>
                                                    <button type="submit" 
                                                        class="px-4 py-2 bg-blue-500 text-white rounded hover:bg-blue-600">
                                                        Submit
                                                    </button>
                                                </div>
                                            </form>             
                                           </div>
                                        </div>
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
                            
                            function openEditModal(id, name, email) {
                            const modal = document.getElementById('modaledit');
                            const form = document.getElementById('editForm');
                            const nameInput = document.getElementById('edit_name');
                            const emailInput = document.getElementById('edit_email');

                            // Set data ke modal
                            form.action = `/studentdata/${id}`; // Sesuaikan route
                            nameInput.value = name;
                            emailInput.value = email;

                            // Tampilkan modal
                            modal.classList.remove('hidden');
                            modal.classList.add('flex');
                        }

                        // Fungsi untuk menutup modal
                        document.getElementById('closeModalButtonedit').addEventListener('click', function () {
                            const modal = document.getElementById('modaledit');
                            modal.classList.remove('flex');
                            modal.classList.add('hidden');
                        });

                            openModalButton.addEventListener('click', () => {
                                modal.classList.remove('hidden');
                            });

                            closeModalButton.addEventListener('click', () => {
                                modal.classList.add('hidden');
                            });
                            
                           
                        </script>
                    
    