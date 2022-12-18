
@php
$classes = 'inline-flex items-center px-1 pt-1 border-b-2 border-transparent text-sm font-medium leading-4 text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 focus:outline-none focus:text-gray-700 dark:focus:text-gray-300 focus:text-gray-800 dark:focus:text-gray-200 transition duration-150 ease-in-out';
@endphp

<a {{ $attributes->merge(['class' => $classes]) }}>
    {{ $slot }}
</a>
