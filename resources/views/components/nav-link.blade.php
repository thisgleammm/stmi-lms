@props(['active'])

@php
$classes = ($active ?? false)
            ? 'inline-flex items-center px-1 pt-1 border-b-2 border-regal-blue-500 text-sm font-medium leading-5 text-regal-blue focus:outline-none focus:border-regal-blue transition duration-150 ease-in-out text-regal-blue'
            : 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-5 text-gray-500 hover:text-regal-blue-500 hover:border-regal-blue-500 focus:outline-none focus:text-regal-blue-500 focus:border-regal-blue-500 transition duration-150 ease-in-out text-slate-900   ';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
