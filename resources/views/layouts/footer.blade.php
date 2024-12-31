<footer class="bg-regal-blue text-white py-10">
    <div class="container mx-auto grid grid-cols-1 sm:grid-cols-2 xl:grid-cols-4 gap-8 px-6">
        <!-- Logo -->
        <div class="flex items-center justify-center sm:justify-start">
            <a href="{{ route('dashboard') }}" class="flex items-center">
                <img src="{{ url('/images/LogoFooter.svg') }}" alt="Logo SIMPEL" class="w-24 h-24 sm:w-32 sm:h-32 xl:w-32 xl:h-32">
            </a>
        </div>

        <!-- Address Section -->
        <div class="text-left">
            <h3 class="text-lg font-bold mb-4">Address</h3>
            <p class="mb-4">
                <a href="https://www.google.com/maps/place/Politeknik+STMI+Jakarta/@-6.1715186,106.8668288,17z" 
                target="_blank" 
                rel="noopener noreferrer" 
                class="text-white hover:text-gray-300">
                    Jl. Letjen Suprapto No.26, Cemp. Putih Tim., Kec. Cemp. Putih, Jakarta Pusat, Daerah Khusus Ibukota Jakarta 10510
                </a>
            </p>
            <div class="space-y-4">
                <div class="flex items-center">
                    <img src="{{ url('/images/email.svg') }}" alt="Email Icon" class="w-6 h-6 mr-2">
                    <a href="mailto:simpel@poltekSTMI.ac.id" class="text-white hover:text-gray-400">
                        simpel@poltekSTMI.ac.id
                    </a>
                </div>
                <div class="flex items-center">
                    <img src="{{ url('/images/telp.svg') }}" alt="Phone Icon" class="w-6 h-6 mr-2">
                    <span>(021) 42886064</span>
                </div>
            </div>
        </div>

        <!-- Official Partners Section -->
        <div class="text-left">
            <h3 class="text-lg font-bold mb-4">Our Official Partners</h3>
            <p class="text-sm mb-6">These are links to our collaborative partners and other institutions that share our vision and mission in education and development.</p>
            <div class="flex space-x-6">
                <a href="https://kemenperin.go.id/" class="w-16 h-16 sm:w-20 sm:h-20 xl:w-20 xl:h-20">
                    <img src="{{ url('/images/kemenperinlogo.svg') }}" alt="Kemenperin" class="w-full h-full object-contain">
                </a>
                <a href="https://stmi.ac.id/" class="w-16 h-16 sm:w-20 sm:h-20 xl:w-20 xl:h-20">
                    <img src="{{ url('/images/stmilogo.svg') }}" alt="STMI" class="w-full h-full object-contain">
                </a>
            </div>
        </div>

        <!-- Social Media Section -->
        <div class="text-left">
            <h3 class="text-lg font-bold mb-4">Social Media</h3>
            <p class="text-sm mb-6">Follow our official social media accounts for the latest updates, educational content, and resources. Stay informed about news and events from our institution.</p>
            <div class="flex space-x-6">
                <a href="https://facebook.com/PoliteknikSTMIJakarta/" class="w-10 h-10 sm:w-12 sm:h-12 xl:w-12 xl:h-12">
                    <img src="{{ url('/images/facebook.svg') }}" alt="Facebook" class="w-full h-full object-contain">
                </a>
                <a href="https://twitter.com/stmijakarta" class="w-10 h-10 sm:w-12 sm:h-12 xl:w-12 xl:h-12">
                    <img src="{{ url('/images/x.svg') }}" alt="Twitter" class="w-full h-full object-contain">
                </a>
                <a href="https://instagram.com/stmijakarta/" class="w-10 h-10 sm:w-12 sm:h-12 xl:w-12 xl:h-12">
                    <img src="{{ url('/images/instagram.svg') }}" alt="Instagram" class="w-full h-full object-contain">
                </a>
                <a href="https://youtube.com/@PoliteknikSTMIJakarta" class="w-10 h-10 sm:w-12 sm:h-12 xl:w-12 xl:h-12">
                    <img src="{{ url('/images/youtube.svg') }}" alt="YouTube" class="w-full h-full object-contain">
                </a>
            </div>
        </div>
    </div>    
</footer>
