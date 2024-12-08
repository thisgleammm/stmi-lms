<footer>
    <div class="bg-regal-blue flex flex-col lg:flex-row justify-center py-12 text-white">
        <a href="{{ route('dashboard') }}" class="text-center px-5 pt-14">
            <img src="{{ url('/images/LogoFooter.svg') }}" alt="Logo SIMPEL" class="mt-4 ml-8 mb-4">   
        </a>

        <div class="flex flex-col lg:flex-row mt-4 lg:px-16 px-6 mr-16">
            <!-- Alamat -->
            <div class="mt-4 lg:mt-0 mr-10 mb-8 lg:mb-0">
                <p class="mb-3 text-lg font-bold">Address</p>
                
                <!-- Google Maps Embed -->
                <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d15866.81479988534!2d106.8678534!3d-6.1704146!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2e69f5043973ff63%3A0xc125c1242e567fd1!2sPolytechnic%20STMI%20Jakarta!5e0!3m2!1sen!2sid!4v1709964453699!5m2!1sen!2sid"></iframe>
                
                <div class="mt-6">
                    <!-- Email dengan ikon -->
                    <p class="flex items-center mb-3">
                        <img src="{{ url('/images/email.svg') }}" alt="Email Icon" class="w-6 h-6 mr-2">
                        Email: 
                        <a href="mailto:simpel@poltekSTMI.ac.id" class="ml-2 text-white hover:text-gray-500">
                            simpel@poltekSTMI.ac.id
                        </a>
                    </p>

                    <!-- Phone dengan ikon -->
                    <p class="flex items-center mb-3">
                        <img src="{{ url('/images/telp.svg') }}" alt="Phone Icon" class="w-6 h-6 mr-2">
                        Phone: <span class="ml-2">(021) 42886064</span>
                    </p>
                </div>
            </div>

            <!-- Related Link -->
            <div class="flex flex-col lg:mt-0 mt-4 lg:px-10 text-base mb-8 lg:mb-0">
                <p class="mb-3 text-lg font-bold">Our Official Partners</p>
                <p>These are links to our collaborative partners</p>
                <p>and other institutions that share our vision</p>
                <p>and mission in education and development.</p>
                
                <!-- Membuat gambar berdampingan menggunakan flex -->
                <div class="flex mt-8 space-x-8 justify-center lg:justify-start">
                    <!-- Link pertama untuk gambar Kemenperin -->
                    <a href="https://kemenperin.go.id/" class="mr-8">
                        <img src="{{ url('/images/kemenperinlogo.svg') }}" alt="Kemenperin" class="mr-2 w-24 h-auto lg:w-32 lg:h-32">
                    </a>

                    <!-- Link kedua untuk gambar STMI -->
                    <a href="https://stmi.ac.id/" class="mr-4">
                        <img src="{{ url('/images/stmilogo.svg') }}" alt="STMI" class="w-24 h-auto lg:w-28 lg:h-32">
                    </a>
                </div>
            </div>

            <!-- Sosial Media -->
            <div class="flex flex-col lg:mt-0 mt-4 lg:px-10 text-base">
                <!-- Judul Sosial Media -->
                <p class="mb-3 text-lg font-bold">Sosial Media</p>

                <!-- Deskripsi Sosial Media -->
                <p>Follow our official social media accounts for the latest updates.</p>
                <p>Get access to educational content and resources.</p>
                <p>Stay informed about news and events from our institution.</p>

                <!-- Ikon Sosial Media -->
                <div class="flex lg:justify-start justify-center mt-14 space-x-8 lg:space-x-12">
                    <a href="https://facebook.com/PoliteknikSTMIJakarta/" class="w-16 h-16 lg:w-20 lg:h-20">
                        <img src="{{ url('/images/facebook.svg') }}" alt="Facebook" class="w-full h-full object-contain">
                    </a>
                    <a href="https://twitter.com/stmijakarta" class="w-16 h-16 lg:w-20 lg:h-20">
                        <img src="{{ url('/images/x.svg') }}" alt="X" class="w-full h-full object-contain">
                    </a>
                    <a href="https://instagram.com/stmijakarta/" class="w-16 h-16 lg:w-20 lg:h-20">
                        <img src="{{ url('/images/instagram.svg') }}" alt="Instagram" class="w-full h-full object-contain">
                    </a>
                    <a href="https://youtube.com/@PoliteknikSTMIJakarta" class="w-16 h-16 lg:w-20 lg:h-20">
                        <img src="{{ url('/images/youtube.svg') }}" alt="YouTube" class="w-full h-full object-contain">
                    </a>
                </div>
            </div>
        </div>
    </div>    
</footer>