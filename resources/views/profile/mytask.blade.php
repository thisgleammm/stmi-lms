<x-app-layout>
    <x-slot name="header">
        <h2 class="font-extrabold text-xl text-slate-950 leading-tight ml-14">
            {{ __('My Task') }}
        </h2>
    </x-slot>

    <h2 class="font-semibold text-xl text-gray-800 leading-tight ml-w-screen-lg">
        {{ __('Attempt Quiz') }}
    </h2>

    <div class="flex-grow">
        <div class="bg-gray-50 p-4 rounded-md shadow-md mx-40 mt-2 mr-42 max-w-max">
        <h3 class="font-extrabold text-base text-slate-950 font-bold ml-10 ">QUIZ REVIEW - Analisa Jaringan (Riset Operasi)</h3>
        <p class="text-sm text-slate-950 ml-10">Kumpulkan tugas dalam bentuk QUIZ REVIEW Analisa Jaringan (Riset Operasi).pdf  </p>
        <a href="#" class="text-slate-900 hover:underlined mt-2 ml-10 block text-xs">
            Tuesday, 18 November 2024 - Saturday 30 November 2024 (23:59)
        </a>
    </div>

            <<div class="container mx-auto">
                <div class="flex flex-col items-center justify-center h-screen">
                    <div class="bg-white shadow-md rounded px-32 pt-32 pb-32 mb-40 w-8/12">
                        <div class="mb-4">
                            <label class="block text-gray-900 text-lg font-bold mb-2" for="file">
                                Upload Files Here (Only PDF)
                            </label>
                            <input class="shadow appearance-none border rounded w-full py-6 px-4 text-gray-700 leading-tight focus:outline-none focus:shadow-outline text-lg" id="file" name="file" type="file">
                        </div>
                        <div class="flex items-center justify-between">
                            <button class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded focus:outline-none focus:shadow-outline text-lg">
                                Submit
                            </button>
                        </div>
                    </div>
                </div>
            </form>
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

