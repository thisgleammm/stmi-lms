<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    {{ __("You're logged in!") }}
                </div>
            </div>
        </div>
    </div>

    <footer>
        <div class="pt-64 ">
            <div class="max-w-7xl  ">
                <div class="bg-sky-900 flex justify-center static py-8 text-white">

                    <a href="" class="px-12 pt-14">
                    <img src="{{ url('/images/LogoApps.svg') }}" alt=""class="mt-4 ml-10 mb-4 w-20 ">   
                    <div class="justify-center text-center mr-5 text-xs ">
                        <p>STMI Interactive Management</p>
                        <p>Platform For E-Learning</p>
                    </div>
                    </a>  

                    <div class="flex px-12 text-xs">
                        <div class="mt-4 mr-10">
                            <p class="mb-3">Address</p>
                            <p>JL. Letjen Suprapto No.26, Cemp. Putih</p>
                            <p>Tim., Kec Cemp. Putih, Kota Jakarta Pusat,</p>
                            <p>Daerah Khusus Ibu Kota Jakarta 105010</p>
                            <div class="mt-3">
                             <iframe src=   "https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.81479988534!2d106.8678534!3d-6.1704146!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5043973ff63%3A0xc125c1242e567fd1!2sPolytechnic%20STMI%20Jakarta!5e0!3m2!1sen!2sid!4v1709964453699!5m2!1sen!2sid" frameborder="0"></iframe>
                            </div>
                        </div>
                    </div>

                        <div class="mt-4 px-12 text-xs">
                        <p class="mb-3">Relate Link</p>
                        
                            <a href="https://stmi.ac.id/" class="flex mt-5">
                                <img src="{{ url('/images/images.png') }}" alt=""  class="h-14" >
                                <img src="{{ url('/images/download.png') }}" alt="" class="h-14">
                            </a>
                            
                        </div>

                        <div class="mt-4 px-20 text-xs">
                            <p class="mb-3">sosial media</p>
                            <div class="flex mt-5 justify-between">
                            <a href=""><img src="{{ url('/images/logo/download.png') }}" alt=""  class="h-12 mx-2" ></a>
                            <a href=""><img src="{{ url('/images/logo/download (1).png') }}" alt="" class="h-8 mx-2 mt-2"></a>
                            <a href=""><img src="{{ url('/images/logo/hd-meta-facebook-white-logo-sign-symbol-png-701751694777079kpf2z9a9s8.png') }}" alt="" class="h-8 mx-2 mt-2"></a>
                            <a href=""><img src="{{ url('/images/logo/instagram.png') }}" alt="" class="h-8 mx-2 mt-2"></a>
                            </div>
                            <div class="flex w-12 h-8 mt-6 mr-3">

                           
                            <a href="https://stmi.ac.id/">
                                
                            </a>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </div>
        </div>
    </footer>
</x-app-layout>
