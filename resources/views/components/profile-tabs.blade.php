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
<div id="editProfileModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 hidden z-50 flex items-center justify-center">
    <div class="bg-white rounded-lg shadow-lg w-96 p-6 relative">
        <div class="flex justify-between items-center border-b pb-3 mb-4">
            <h2 class="text-xl font-semibold">Edit Profile</h2>
            <button id="closeModal" class="text-gray-500 hover:text-gray-700">&times;</button>
        </div>

        <!-- Tabs for Phone and Password -->
        <div class="flex gap-4 border-b mb-4">
            <button id="tabPhone" class="tab-button text-blue-600 border-b-2 border-blue-600 px-4 py-2">Phone</button>
            <button id="tabPassword" class="tab-button text-gray-500 px-4 py-2">Password</button>
        </div>

        <!-- Edit Phone Form -->
        <div id="formPhone" class="space-y-4">
            <label class="block">
                <span class="text-gray-700">Current Phone</span>
                <x-text-input id="currentnumber" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" type="text" name="currentphone" required
                    autocomplete="current-number" placeholder="Enter current phone" />
            </label>
            <label class="block">
                <span class="text-gray-700">New Phone</span>
                <x-text-input id="newnumber" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" type="text" name="newnumber" required
                    autocomplete="new-number" placeholder="Enter new phone" />
            </label>
            <label class="block">
                <span class="text-gray-700">Password</span>
                <x-text-input id="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" type="password" name="password" required
                    autocomplete="current-password" minlength="8" placeholder="Enter your password" />
            </label>
        </div>

        <!-- Edit Password Form -->
        <div id="formPassword" class="space-y-4 hidden">
            <label class="block">
                <span class="text-gray-700">Current Password</span>
                <x-text-input id="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" type="password" name="password" required
                    autocomplete="current-password" minlength="8" placeholder="Enter current password" />
            </label>
            <label class="block">
                <span class="text-gray-700">New Password</span>
                    <x-text-input id="newpassword" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" type="password" name="newpassword" required
                    autocomplete="new-password" minlength="8" placeholder="Enter new password" />
            </label>
            <label class="block">
                <span class="text-gray-700">Confirm New Password</span>
                <x-text-input id="newrepeatpassword" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" type="password" name="newrepeatpassword" required
                    autocomplete="new-repeat-password" minlength="8" placeholder="Confirm new password" />
            </label>
        </div>

        <div class="flex justify-end gap-4 mt-6">
            <button id="cancelButton"
                class="px-4 py-2 bg-gray-200 text-gray-600 rounded-lg hover:bg-gray-300">Cancel</button>
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Save</button>
        </div>
    </div>
</div>

<script>
    // Get modal and tab elements
    const openModalButton = document.getElementById('openEditProfileModal');
    const modal = document.getElementById('editProfileModal');
    const closeModalButton = document.getElementById('closeModal');
    const cancelButton = document.getElementById('cancelButton');
    const tabPhone = document.getElementById('tabPhone');
    const tabPassword = document.getElementById('tabPassword');
    const formPhone = document.getElementById('formPhone');
    const formPassword = document.getElementById('formPassword');

    // Open modal
    openModalButton.addEventListener('click', (e) => {
        e.preventDefault();
        modal.classList.remove('hidden');
    });

    // Close modal
    closeModalButton.addEventListener('click', () => modal.classList.add('hidden'));
    cancelButton.addEventListener('click', () => modal.classList.add('hidden'));

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
