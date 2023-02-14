<a
    {{ $attributes->merge(['class' => 'group inline-flex items-center h-9 rounded-full text-sm font-medium text-gray-700 dark:text-gray-300 whitespace-nowrap px-4 focus:outline-none focus:border-blue-300 bg-white dark:bg-gray-800 border border-gray-300 dark:border-gray-700 hover:text-gray-500 dark:hover:text-gray-400 active:text-gray-700 dark:active:text-gray-300']) }}
>
    {{ $slot }}
    <svg class="overflow-visible ml-3 fill-none stroke-current stroke-2 w-auto h-1.5" viewBox="0 0 3 6" stroke-linejoin="round" stroke-linecap="round"><path d="M0 0L3 3L0 6"></path></svg>
</a>