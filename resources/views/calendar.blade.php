<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-3">
            {{ __('Calendar') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto py-10 ml-48">
        <h1 class="text-xl font-bold text-gray-800 mb-3 ml-6">Timeline</h1>
        <div class="bg-white shadow-md rounded-lg p-6 mx-8">
            <div class="mb-4 flex items-center space-x-4">
                    <label for="filter" class="block text-gray-600 font-medium ml-6">Filter</label>  
                    <select id="filter" class="border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 block sm:text-xs ml-12 mx-2">
                        <option value="month">January</option>
                        <option value="month">February</option>
                        <option value="month">March</option>
                        <option value="month">April</option>
                        <option value="month">May</option>
                        <option value="month">June</option>
                        <option value="month">July</option>
                        <option value="month">August</option>
                        <option value="month">September</option>
                        <option value="month">October</option>
                        <option value="month">November</option>
                        <option value="month">December</option> 
                    </select>
                <div class="flex-grow">
                    <label for="search" class="sr-only">Search</label>
                    <input type="text" id="search" placeholder="All Schedule..." class="border-gray-300 rounded-md shadow-sm focus:ring-blue-500 focus:border-blue-500 block w-2/12 sm:text-xs ">
                </div>
            </div>

            <div class="overflow-x-auto">
                <table class="table-auto border-collapse border border-blue-500 w-full text-center">
                    <thead>
                        <tr class="bg-blue-500 text-white">
                            <th class="border border-blue-500 px-4 py-2">SUN</th>
                            <th class="border border-blue-500 px-4 py-2">MON</th>
                            <th class="border border-blue-500 px-4 py-2">TUE</th>
                            <th class="border border-blue-500 px-4 py-2">WED</th>
                            <th class="border border-blue-500 px-4 py-2">THU</th>
                            <th class="border border-blue-500 px-4 py-2">FRI</th>
                            <th class="border border-blue-500 px-4 py-2">SAT</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td class="border border-blue-500 px-4 py-6">1</td>
                            <td class="border border-blue-500 px-4 py-6">2</td>
                            <td class="border border-blue-500 px-4 py-6">3</td>
                            <td class="border border-blue-500 px-4 py-6">4</td>
                            <td class="border border-blue-500 px-4 py-6">5</td>
                            <td class="border border-blue-500 px-4 py-6">6</td>
                            <td class="border border-blue-500 px-4 py-6">7</td>
                        </tr>
                        <tr>
                            <td class="border border-blue-500 px-4 py-6">8</td>
                            <td class="border border-blue-500 px-4 py-6">9</td>
                            <td class="border border-blue-500 px-4 py-6">10</td>
                            <td class="border border-blue-500 px-4 py-6">11</td>
                            <td class="border border-blue-500 px-4 py-6">12</td>
                            <td class="border border-blue-500 px-4 py-6">13</td>
                            <td class="border border-blue-500 px-4 py-6">14</td>
                        </tr>
                        <tr>
                            <td class="border border-blue-500 px-4 py-6">15</td>
                            <td class="border border-blue-500 px-4 py-6">16</td>
                            <td class="border border-blue-500 px-4 py-6">17</td>
                            <td class="border border-blue-500 px-4 py-6">18</td>
                            <td class="border border-blue-500 px-4 py-6">19</td>
                            <td class="border border-blue-500 px-4 py-6">20</td>
                            <td class="border border-blue-500 px-4 py-6">21</td>
                        </tr>
                        <tr>
                            <td class="border border-blue-500 px-4 py-6">22</td>
                            <td class="border border-blue-500 px-4 py-6">23</td>
                            <td class="border border-blue-500 px-4 py-6">24</td>
                            <td class="border border-blue-500 px-4 py-6">25</td>
                            <td class="border border-blue-500 px-4 py-6">26</td>
                            <td class="border border-blue-500 px-4 py-6">27</td>
                            <td class="border border-blue-500 px-4 py-6">28</td>
                        </tr>
                    </tbody>
                </table>
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

