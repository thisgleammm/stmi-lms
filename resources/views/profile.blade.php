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
                <div class="flex w-full gap-6">
                    <div class="flex flex-col w-[50%] gap-6">
                        <x-profile-field label="First Name" :value="$user["firstName"]" />
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
        </div>
    </div>
</x-app-layout>
