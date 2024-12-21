<x-app-layout>

    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Profile') }}
        </h2>
    </x-slot>

    <div class="max-w-4xl mx-auto p-4 md:p-8">
        <div class="bg-white rounded-lg shadow-sm">

            <x-profile-header name="{{ $user->name }}" role="{{ $user->role }}" lastAccess="{{ 'november' }}" />

            <x-profile-tabs active="about" />

            <div class="p-6">
                <div class="flex w-full gap-6">
                    <div class="flex flex-col w-[50%] gap-6">

                        <x-profile-field label="First Name" :value="'chairunnisa'" />
                        <x-profile-field label="Email Address" :value="$user->email" />
                        <x-profile-field label="Profession" :value="'mahasiswa'" />
                        <x-profile-field label="Country" :value="'indonesia'" />
                    </div>

                    <div class="flex flex-col w-[50%] gap-6">
                        <x-profile-field label="Last Name" :value="'isaw'" />
                        <x-profile-field label="Phone" :value="'083726746979743'" />
                        <x-profile-field label="Interest" :value="$user->interest" />
                        <x-profile-field label="Address" :value="$user->address" />
                    </div>
                    {{-- <div class="flex justify-between gap-6">
                        <x-profile-field label="First Name" :value="'chairunnisa'" />
                        <x-profile-field label="Last Name" :value="'isaw'" />
                    </div>
                    <div class="flex justify-between gap-6">
                        <x-profile-field label="Email Address" :value="$user->email" />
                        <x-profile-field label="Phone" :value="'083726746979743'" />
                    </div>
                    <div class="flex justify-between gap-6">
                        <x-profile-field label="Profession" :value="'mahasiswa'" />
                        <x-profile-field label="Interest" :value="$user->interest" />
                    </div>
                    <div class="flex justify-between gap-6">
                        <x-profile-field label="Country" :value="'indonesia'" />
                        <x-profile-field label="Address" :value="$user->address" />
                    </div> --}}
                </div>
            </div>

        </div>
    </div>

</x-app-layout>
