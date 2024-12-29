<x-guest-layout>
    <!-- Session Status -->
    <x-auth-session-status class="mb-4" :status="session('status')" />

    <form class="space-y-2" method="POST" action="{{ route('login') }}">
        @csrf
        <div class="text-center mb-3 flex justify-center">
            <div class="image size-20 mb-3">
                <a href="/">
                    <img src="{{ url('/images/LogoApps.svg') }}" alt="Logo" class="max-w-full h-auto">
                </a>
            </div>
        </div>
        <div class="text-center mb-3 flex justify-center">
            <div class="image mb-3">
                <a href="/">
                    <img src="{{ url('/images/titleLogo.svg') }}" alt="Title" class="max-w-full h-auto">
                </a>
            </div>
        </div>
        <!-- Email Address -->
        <div class="pb-2">
            <x-text-input id="email" class="block mt-1 w-full" type="email" name="email" :value="old('email')"
                required autofocus autocomplete="username" placeholder="Enter Your Email" />

            <div class="mt-4">
                <div class="relative">
                    <x-text-input id="password" class="block mt-1 w-full" type="password" name="password" required
                        autocomplete="current-password" minlength="8" placeholder="Enter Your Password" />

                    <!-- Eye Icon for Show/Hide Password -->
                    <span id="togglePassword" class="absolute inset-y-0 right-0 flex items-center px-3 cursor-pointer">
                        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor"
                            class="h-5 w-5 text-gray-500">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M15 12c0 2.21-1.79 4-4 4s-4-1.79-4-4 1.79-4 4-4 4 1.79 4 4zM2.51 12.79c.48-.92 1.34-1.79 2.43-2.45-.05-.11-.1-.22-.15-.34-.79-1.47-.46-3.31.91-4.61 1.28-1.17 3.19-1.42 4.77-.61 1.68.9 2.34 2.74 1.59 4.35-.25.6-.76 1.09-1.34 1.4-.79-.4-1.7-.29-2.48.2-.91.63-1.34 1.76-1.17 2.87-.55-.13-1.1-.23-1.65-.33.17-.73-.07-1.46-.58-2.06z" />
                        </svg>
                    </span>
                </div>

                <x-input-error :messages="$errors->get('password')" class="mt-2" />
            </div>
            <x-input-error :messages="$errors->get('email')" class="mt-2" />
        </div>

        <div class="flex items-start">
            @if (Route::has('password.request'))
                <a class="ms-2 underline text-sm text-gray-400 hover:text-gray-900"
                    href="{{ route('password.request') }}">
                    {{ __('Forgot your password?') }}
                </a>
            @endif
        </div>

        <div class="mb-3">
            {!! NoCaptcha::display() !!}

            @if ($errors->has('g-recaptcha-response'))
                <x-input-error :messages="$errors->first('g-recaptcha-response')" class="mt-2" />
            @endif
        </div>

        <x-primary-button class="text-center mb-3 flex justify-center">
            {{ __('LOGIN') }}
        </x-primary-button>

        <div class="footer pt-4 text-center">
            <a href="https://stmi.ac.id/">
                <img src="{{ url('/images/footerLogo.svg') }}" alt="Footer Logo" class="max-w-full h-auto">
            </a>
        </div>
    </form>

    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordField = document.getElementById('password');
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;

            // Change the eye icon based on visibility
            this.querySelector('svg').classList.toggle('text-gray-500');
            this.querySelector('svg').classList.toggle('text-blue-500');
        });
    </script>
</x-guest-layout>
