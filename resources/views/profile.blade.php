<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto p-4 md:p-8">
        <div class="bg-white rounded-lg shadow-sm">
           @php
                // Split the name into parts (first name and last name)
                $nameParts = explode(' ', Auth::user()->name);

                // If there are more than 1 part, treat the first part as first name and the rest as last name
                if (count($nameParts) > 1) {
                    $firstName = implode(' ', array_slice($nameParts, 0, -1));  // all parts except the last one
                    $lastName = $nameParts[count($nameParts) - 1];  // the last part
                } else {
                    // If only one part exists, treat it as the first name, and leave the last name empty
                    $firstName = $nameParts[0];
                    $lastName = '';
                }
            @endphp

            <x-profile-header avatarUrl="{{ Auth::user()->profile_picture ? asset('storage/' . Auth::user()->profile_picture) : asset('/images/profile.svg') }}"  name="{{ $user->name }}" role="{{ $user->role }}" lastUpdated="{{ Auth::user()->updated_at->format('d F Y, H:i:s') }}" />

            <x-profile-tabs active="about" />

            <div class="p-6">
                <div class="flex w-full gap-6">
                    <div class="flex flex-col w-[50%] gap-6">
                        <x-profile-field label="First Name" :value="$firstName" />
                        <x-profile-field label="Email Address" :value="Auth::user()->email" />
                        <x-profile-field label="Profession" :value="ucwords(Auth::user()->level)" />
                    </div>

                    <div class="flex flex-col w-[50%] gap-6">
                        <x-profile-field label="Last Name" :value="$lastName" />
                        <x-profile-field label="Phone" :value="$user->phone_number" />
                        <x-profile-field label="Country" :value="'Indonesia'" />
                    </div>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>