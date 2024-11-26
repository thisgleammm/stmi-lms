<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>{{ config('app.name', 'Laravel') }}</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,500,600&display=swap" rel="stylesheet" />

        <!-- Scripts -->
        @vite(['resources/css/app.css', '../../css/login.css', 'resources/js/app.js'])
        <script async src="https://www.google.com/recaptcha/api.js"></script>
    </head>
    <body class="font-sans text-gray-900 antialiased bg-[url('../../public/images/bgMainLogin.svg')] bg-main bg-cover bg-no-repeat w-full">
        <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0">

            <div class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
                <!-- Form Login -->
                <form class="space-y-2" action="#">
                    <div class="title text-center mb-3 flex justify-center">
                        <div class="image size-20 mb-3">
                            <img src="{{ url('/images/LogoApps.svg') }}" alt="Logo" class="max-w-full h-auto">
                        </div>
                    </div>
                    <div class="title text-center">
                        <div class="image mb-10">
                            <img src="{{ url('/images/titleLogo.svg') }}" alt="Title" class="max-w-full h-auto">
                        </div>
                    </div>
                    <div class="input-form">
                        <div class="pb-5">
                            <input type="email" name="email" id="email" class="bg-white border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-md" placeholder="Masukkan Email Anda" required />
                        </div>
                        <div>
                            <input type="password" name="password" id="password" placeholder="Masukkan Password Anda" class="bg-white border border-gray-100 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 shadow-md" required />
                        </div>
                    </div>
                    <div class="flex items-start">
                        <a href="#" class="ms-2 text-sm text-gray-400 drop-shadow-sm my-2">Tidak bisa masuk?</a>
                    </div>
                    <div class="g-recaptcha mt-4" data-sitekey="{{config('services.recaptcha.key')}}"></div>
                    <button type="submit" class="w-full text-white bg-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center shadow-lg">MASUK</button>
                    <div class="footer pt-8 text-center">
                        <img src="{{ url('/images/footerLogo.svg') }}" alt="Footer Logo" class="max-w-full h-auto">
                    </div>
                </form>
            </div>
        </div>
    </body>
</html>
