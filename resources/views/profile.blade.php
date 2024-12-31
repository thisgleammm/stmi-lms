<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>
    {{-- {{ dd($user) }} --}}
    <div class="max-w-4xl mx-auto p-4 md:p-8">
        <div class="bg-white rounded-lg shadow-sm">
            <x-profile-header
                avatarUrl="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('/images/profile.svg') }}"
                name="{{ $user['name'] }}" role="{{ $user['role'] }}"
                lastUpdated="{{ Auth::user()->updated_at->format('d F Y, H:i:s') }}" />

            <x-profile-tabs active="about" />

            <div class="p-6">
                <div id="about-tab-content" class="tab-content">
                    <div class="flex w-full gap-6">
                        <div class="flex flex-col w-[50%] gap-6">
                            <x-profile-field label="First Name" :value="$user['firstName']" />
                            <x-profile-field label="Email Address" :value="$user['email']" />
                            <x-profile-field label="Profession" :value="$user['role']" />
                        </div>

                        <div class="flex flex-col w-[50%] gap-6">
                            <x-profile-field label="Last Name" :value="$user['lastName']" />
                            <x-profile-field label="Phone" :value="$user['phone_number']" />
                            <x-profile-field label="Country" :value="'Indonesia'" />
                        </div>
                    </div>
                </div>

                <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>

                <div id="gpa-tab-content" class="tab-content hidden">
                    <div class="text-center">
                        <h2 class="text-lg font-semibold mb-4">GPA (Grade Point Average)</h2>
                        <canvas id="gpaChart" width="400" height="200"></canvas>
                    </div>
                </div>
            </div>

            <script>
                document.addEventListener('DOMContentLoaded', () => {
                    const ctx = document.getElementById('gpaChart').getContext('2d');

                    // Data untuk chart
                    const data = {
                        labels: ['Term 1', 'Term 2', 'Term 3'], // Nama semester atau periode
                        datasets: [{
                            label: 'Average GPA',
                            data: [3.5, 3.0, 3.3], // Nilai GPA tiap semester
                            borderColor: 'rgba(54, 162, 235, 1)', // Warna garis
                            backgroundColor: 'rgba(54, 162, 235, 0.2)', // Warna area di bawah garis
                            borderWidth: 2,
                            tension: 0.4, // Membuat garis melengkung
                            pointRadius: 5, // Ukuran titik data
                            pointBackgroundColor: 'rgba(54, 162, 235, 1)', // Warna titik data
                        }]
                    };

                    // Konfigurasi chart
                    const config = {
                        type: 'line', // Tipe grafik
                        data: data,
                        options: {
                            responsive: true,
                            plugins: {
                                legend: {
                                    display: true,
                                    position: 'top'
                                }
                            },
                            scales: {
                                y: {
                                    beginAtZero: true,
                                    max: 4.0 // Skala maksimum GPA
                                }
                            }
                        }
                    };

                    // Render chart
                    new Chart(ctx, config);
                });
            </script>


            <script>
                document.querySelectorAll('.tab-link').forEach(link => {
                    link.addEventListener('click', (event) => {
                        event.preventDefault();
                        const targetTab = link.dataset.tab;

                        // Hide all tab contents
                        document.querySelectorAll('.tab-content').forEach(content => {
                            content.classList.add('hidden');
                        });

                        // Remove active class from all links
                        document.querySelectorAll('.tab-link').forEach(tab => {
                            tab.classList.remove('border-blue-600', 'text-blue-600');
                            tab.classList.add('border-transparent', 'text-gray-500');
                        });

                        // Show the selected tab content
                        document.getElementById(`${targetTab}-tab-content`).classList.remove('hidden');

                        // Add active class to the clicked link
                        link.classList.add('border-blue-600', 'text-blue-600');
                        link.classList.remove('border-transparent', 'text-gray-500');
                    });
                });
            </script>


            <!-- Back to Top Button -->
            <button id="back-to-top" class="hidden fixed bottom-60 right-8">
                <img src="/images/logolingkaran.svg" alt="Back to Top" class="h-40 w-40">
            </button>


            <script>
                // Back to Top Button Functionality
                const backToTopButton = document.getElementById('back-to-top');

                window.addEventListener('scroll', () => {
                    if (window.scrollY > 200) {
                        backToTopButton.classList.remove('hidden');
                    } else {
                        backToTopButton.classList.add('hidden');
                    }
                });

                backToTopButton.addEventListener('click', () => {
                    window.scrollTo({
                        top: 0,
                        behavior: 'smooth',
                    });
                });
            </script>
</x-app-layout>
