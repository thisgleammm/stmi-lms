<!-- Edit Phone Form -->
<div id="formPhone" class="space-y-4">
    <form enctype="multipart/form-data" action="{{ route('phone.update') }}" method="POST">
        @csrf
        @method('PATCH')
        {{-- <input type="hidden" name="idUser" value="{{ auth()->user()->id }}"> --}}

        <!-- Current Phone -->
        <label class="block">
            <span class="text-gray-700">Current Phone</span>
            <input id="currentnumber" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm " type="text"
                name="currentphone" required placeholder="Enter current phone" value="{{ old('currentphone') }}" />
            @error('currentphone')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </label>

        <!-- New Phone -->
        <label class="block">
            <span class="text-gray-700">New Phone</span>
            <input id="newnumber" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm " type="text"
                name="newnumber" required placeholder="Enter new phone" value="{{ old('newnumber') }}" />
            @error('newnumber')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </label>

        <!-- Password -->
        <label class="block">
            <span class="text-gray-700">Password</span>
            <input id="password" class="mt-1 block w-full border-gray-300 rounded-md shadow-sm " type="password"
                name="password" required minlength="8" placeholder="Enter your password" />
            @error('password')
                <span class="text-sm text-red-500">{{ $message }}</span>
            @enderror
        </label>

        <!-- Submit Button -->
        <div class="flex justify-end gap-4 mt-6">
            <button class="px-4 py-2 bg-blue-600 text-white rounded-lg hover:bg-blue-700" type="submit">Save</button>
        </div>
    </form>
</div>
