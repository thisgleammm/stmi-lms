<!-- Edit Password Form -->
<div id="formPassword" class="space-y-4 hidden">
    <form enctype="multipart/form-data" action="{{ route('update.password') }}" method="POST">
        @csrf
        @method('PATCH')

        <label class="block">
            <span class="text-gray-700">Current Password</span>
            <x-text-input id="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm" type="password"
                name="currentpassword" required autocomplete="current-password" minlength="8"
                placeholder="Enter current password" />
        </label>

        <label class="block">
            <span class="text-gray-700">New Password</span>
            <x-text-input id="newpassword" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                type="password" name="newpassword" required autocomplete="new-password" minlength="8"
                placeholder="Enter new password" />
        </label>

        <label class="block">
            <span class="text-gray-700">Confirm New Password</span>
            <x-text-input id="newrepeatpassword" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm"
                type="password" name="newrepeatpassword" required autocomplete="new-repeat-password" minlength="8"
                placeholder="Confirm new password" />
        </label>

        <div class="flex justify-end gap-4 mt-6">
            <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700">Save</button>
        </div>
    </form>

</div>
