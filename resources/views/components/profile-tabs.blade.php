@props(['active'])

<div class="border-b">
    <nav class="flex items-center gap-4">
        <!-- Tabs (About Me, GPA) -->
        <div class="flex gap-4">
            <a href="#" data-tab="about"
                class="tab-link px-4 py-2 text-lg font-medium border-b-2 -mb-px {{ $active === 'about' ? 'border-blue-600 text-blue-600' : 'border-transparent text-gray-500' }}">
                About Me
            </a>
            <a href="#" data-tab="gpa"
                class="tab-link px-4 py-2 text-lg font-medium border-b-2 -mb-px {{ $active === 'gpa' ? 'border-blue-600 text-blue-600' : 'border-transparent text-gray-500' }}">
                GPA
            </a>
        </div>

        <!-- Edit Profile -->
        <a href="#" data-tab="about" id="openEditProfileModal"
            class="tab-link px-4 py-2 text-lg font-medium border-b-2 -mb-px ml-auto {{ $active === 'editprofile' ? 'border-blue-600 text-blue-600' : 'border-transparent text-gray-500' }}">
            Edit Profile
        </a>
    </nav>
</div>

<!-- Modal -->
<div id="editProfileModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 z-50 hidden items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg w-96 p-6 relative">
        <div class="flex justify-between items-center border-b pb-3 mb-4">
            <h2 class="text-xl font-semibold">Edit Profile</h2>
            <button id="closeModal" class="text-gray-500 hover:text-gray-700">&times;</button>
        </div>

        {{-- Component Buat Button nya --}}
        <x-profile-edit.edit-header />

        {{-- Component Buat Edit Phone number --}}
        <x-profile-edit.edit-phone />

        {{-- Component buat edit password --}}
        <x-profile-edit.edit-password />


    </div>
</div>

<script>
    // Get modal and tab elements
    const openModalButton = document.getElementById('openEditProfileModal');
    const modal = document.getElementById('editProfileModal');
    const closeModalButton = document.getElementById('closeModal');
    const tabPhone = document.getElementById('tabPhone');
    const tabPassword = document.getElementById('tabPassword');
    const formPhone = document.getElementById('formPhone');
    const formPassword = document.getElementById('formPassword');

    // Open modal
    openModalButton.addEventListener('click', (e) => {
        e.preventDefault();
        modal.classList.remove('hidden');
        modal.classList.add('flex');
    });

    // Close modal
    closeModalButton.addEventListener('click', () => modal.classList.add('hidden'));

    // Tab functionality
    tabPhone.addEventListener('click', () => {
        tabPhone.classList.add('text-blue-600', 'border-b-2', 'border-blue-600');
        tabPhone.classList.remove('text-gray-500');
        tabPassword.classList.add('text-gray-500');
        tabPassword.classList.remove('text-blue-600', 'border-b-2', 'border-blue-600');
        formPhone.classList.remove('hidden');
        formPassword.classList.add('hidden');
    });

    tabPassword.addEventListener('click', () => {
        tabPassword.classList.add('text-blue-600', 'border-b-2', 'border-blue-600');
        tabPassword.classList.remove('text-gray-500');
        tabPhone.classList.add('text-gray-500');
        tabPhone.classList.remove('text-blue-600', 'border-b-2', 'border-blue-600');
        formPassword.classList.remove('hidden');
        formPhone.classList.add('hidden');
    });

    // Close modal when clicking outside content
    modal.addEventListener('click', (e) => {
        if (e.target === modal) {
            modal.classList.add('hidden');
        }
    });
</script>
