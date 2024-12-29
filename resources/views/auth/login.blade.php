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
                        <img id="eyeIcon" src="{{ url('/images/unhide.svg') }}" alt="Show Password" class="h-5 w-5">
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

    <!-- Script untuk Toggle Password Visibility -->
    <script>
        // Toggle password visibility
        document.getElementById('togglePassword').addEventListener('click', function() {
            const passwordField = document.getElementById('password');
            const eyeIcon = document.getElementById('eyeIcon');
            const type = passwordField.type === 'password' ? 'text' : 'password';
            passwordField.type = type;

            // Toggle the icon between 'unhide' and 'hide'
            if (passwordField.type === 'password') {
                eyeIcon.src = '{{ url('/images/unhide.svg') }}'; // Ganti ikon menjadi 'unhide'
                eyeIcon.alt = 'Show Password';
            } else {
                eyeIcon.src = '{{ url('/images/hide.svg') }}'; // Ganti ikon menjadi 'hide'
                eyeIcon.alt = 'Hide Password';
            }
        });
    </script>
</x-guest-layout>
