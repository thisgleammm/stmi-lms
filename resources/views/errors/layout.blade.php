<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>@yield('title')</title>

        <!-- Styles -->
        @vite(['resources/css/app.css', 'resources/js/app.js'])
    </head>
    <div class="grid h-screen place-content-center bg-white px-4">
        <div class="text-center">
            <h1 class="text-9xl font-black text-blue-400">@yield('code')</h1>

            <p class="text-2xl font-bold tracking-tight text-gray-900 sm:text-4xl">@yield('title')</p>

            <p class="mt-4 text-gray-500">@yield('message')</p>

            <a
            href="/"
            class="mt-6 inline-block shadow-lg text-center rounded-lg bg-blue-600 hover:bg-blue-800 px-5 py-3 text-sm font-medium text-white focus:outline-none focus:ring-4 focus:ring-blue-300"
            >
            Go Back Home
            </a>
        </div>
    </div>
</html>
