<x-app-layout>
    <x-slot name="navigation">
        @include('welcome.navigation')
    </x-slot>

    <div class="pb-5">
        <!--Hero-->
        <div class="max-w-7xl mx-auto text-gray-800 dark:text-gray-200 flex flex-col md:flex-row items-center my-12 md:my-16 sm:px-6 lg:px-8">
            <!--Left Col-->
            <div class="flex flex-col w-full lg:w-1/2 justify-center items-start pt-12 pb-24 px-6">
                <p class="uppercase tracking-loose">{{ __('messages.comporation_name') }}</p>
                <h1 class="font-bold text-3xl my-4">{{ __('messages.comporation_description')}}</h1>
                <p class="leading-normal mb-4">
                    Enter your super app's description here... The key is to find the right length.  Don't want it to be too long, but then don't want it to be too short so that it looks weird between the title and button below.
                </p>
                
                <a 
                    href="#"
                    class="inline-flex items-center font-semibold text-red-500 dark:text-red-600 hover:text-indigo-400"
                    >
                    Saber más
                    <svg class="inline-block w-3 ml-2 fill-current" viewBox="0 0 12 12">
                        <path d="M9.707,5.293l-5-5A1,1,0,0,0,3.293,1.707L7.586,6,3.293,10.293a1,1,0,1,0,1.414,1.414l5-5A1,1,0,0,0,9.707,5.293Z"></path>
                    </svg>
                </a>
            </div>

            <!--Right Col-->
            <div class="w-full lg:w-1/2 lg:py-6 text-center">
                <img class="w-3/5 mx-auto" src="{{ asset('img/img1.svg') }}" alt="mec&aacute;nico en el taller">
            </div>
        </div>

        <!-- Component areas -->
        <section class="max-w-7xl mx-auto sm:px-6 lg:px-8 mb-5">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-800 dark:text-gray-200 font-medium p-6">
                    <!-- Title -->
                    <h2 class="text-xl font-semibold mb-6 leading-none">
                        <span class="text-red-500 dark:text-red-600">{{ __('messages.areas_title.red_text') }}</span>{{ __('messages.areas_title.normal_text') }}
                    </h2>

                    <!-- Area list-->
                    <div class="grid grid-cols-1 gap-8 md:grid-cols-2 lg:grid-cols-3">
                        <div>
                            <span class="flex items-center pb-4 gap-3">
                                <svg class="w-6 h-6 fill-none shrink-0 stroke-current stroke-red-500 dark:stroke-red-600 stroke-[1.5px]" viewBox="0 0 24 24"><path d="M20 18v-6s0 0 0 0l-2-5-1-1H7L6 7l-2 5s0 0 0 0v6m16 0H4m16 0v2a1 1 0 0 1-1 0v-2M4 18v2a1 1 0 0 0 1 0v-2m-1-7h16M8 14v1m8-1v1"/></svg>
                                <h2 class="font-semibold leading-none text-xl">{{ __('messages.cars') }}</h2>
                            </span>
                            <p class="leading-none">Servicio de reparacion para automoviles de peso liviano.</p>
                        </div>

                        <div>
                            <span class="flex items-center pb-4 gap-3">
                                <svg class="w-6 h-6 fill-none shrink-0 stroke-current stroke-red-500 dark:stroke-red-600 stroke-[1.5px]" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="M21 12a9 9 0 1 1-18 0 9 9 0 0 1 18 0z"/><path stroke-linecap="round" stroke-linejoin="round" d="m9 10 1-1h4l1 1v4l-1 1h-4a1 1 0 0 1-1-1v-4z"/></svg>
                                <h2 class="font-semibold leading-none text-xl">{{ __('messages.motorcycles') }}</h2>
                            </span>
                            <p class="leading-none">Motocicletas de todo tipo, marca y cilindraje.</p>
                        </div>

                        <div>
                            <span class="flex items-center pb-4 gap-3">
                                <svg class="w-6 h-6 fill-none shrink-0 stroke-current stroke-red-500 dark:stroke-red-600 stroke-[1.5px]" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" d="m21 7.5-9-5.25L3 7.5m18 0-9 5.25m9-5.25v9l-9 5.25M3 7.5l9 5.25M3 7.5v9l9 5.25m0-9v9"/></svg>
                                <h2 class="font-semibold leading-none text-xl">{{ __('messages.parts') }}</h2>
                            </span>
                            <p class="leading-none">Tenemos disponibles repuestos para la ventas, tanto para carros como motos.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        
        <!-- Component services -->
        <section class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="text-gray-800 dark:text-gray-200 font-medium p-6">
                    <!-- Title -->
                    <h2 class="text-xl font-semibold leading-none">
                        <span class="text-red-500 dark:text-red-600">{{ __('messages.services_title.red_text') }}</span>{{ __('messages.services_title.normal_text') }}
                    </h2>

                    <!-- Subtitle -->
                    <p class="mt-2 leading-none">
                    {{ __('messages.services_subtitle') }}
                    </p>

                    <!-- Service list -->
                    <div class="grid grid-cols-1 gap-4 mt-6 md:grid-cols-2">
                        <div class="rounded-xl border border-red-500 dark:border-red-600 p-5">
                            <span class="flex items-center pb-4 gap-3">
                                <svg class="w-6 h-6 fill-none shrink-0 stroke-current stroke-red-500 dark:stroke-red-600 stroke-[1.5px]" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M11.42 15.17 17.25 21A2.652 2.652 0 0 0 21 17.25l-5.877-5.877M11.42 15.17l2.496-3.03c.317-.384.74-.626 1.208-.766M11.42 15.17l-4.655 5.653a2.548 2.548 0 1 1-3.586-3.586l6.837-5.63m5.108-.233c.55-.164 1.163-.188 1.743-.14a4.5 4.5 0 0 0 4.486-6.336l-3.276 3.277a3.004 3.004 0 0 1-2.25-2.25l3.276-3.276a4.5 4.5 0 0 0-6.336 4.486c.091 1.076-.071 2.264-.904 2.95l-.102.085m-1.745 1.437L5.909 7.5H4.5L2.25 3.75l1.5-1.5L7.5 4.5v1.409l4.26 4.26m-1.745 1.437 1.745-1.437m6.615 8.206L15.75 15.75M4.867 19.125h.008v.008h-.008v-.008z"/>
                                </svg>
                                <h2 class="font-semibold leading-none text-xl">{{ __('messages.general_mechanics') }}</h2>
                            </span>
                            <p class="leading-none">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla
                            </p>
                        </div>

                        <div class="rounded-xl border border-red-500 dark:border-red-600 p-5">
                            <span class="flex items-center pb-4 gap-3">
                                <svg class="w-6 h-6 fill-none shrink-0 stroke-current stroke-red-500 dark:stroke-red-600 stroke-[1.5px]" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V13.5zm0 2.25h.008v.008H8.25v-.008zm0 2.25h.008v.008H8.25V18zm2.498-6.75h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V13.5zm0 2.25h.007v.008h-.007v-.008zm0 2.25h.007v.008h-.007V18zm2.504-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zm0 2.25h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V18zm2.498-6.75h.008v.008h-.008v-.008zm0 2.25h.008v.008h-.008V13.5zM8.25 6h7.5v2.25h-7.5V6zM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25z"/>
                                </svg>
                                <h2 class="font-semibold leading-none text-xl">{{ __('messages.diagnosis') }}</h2>
                            </span>
                            <p class="leading-none">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla
                            </p>
                        </div>

                        <div class="rounded-xl border border-red-500 dark:border-red-600 p-5">
                            <span class="flex items-center pb-4 gap-3">
                                <svg class="w-6 h-6 fill-none shrink-0 stroke-current stroke-red-500 dark:stroke-red-600 stroke-[1.5px]" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="m3.75 13.5 10.5-11.25L12 10.5h8.25L9.75 21.75 12 13.5H3.75z"/>
                                </svg>
                                <h2 class="font-semibold leading-none text-xl">{{ __('messages.electric') }}</h2>
                            </span>
                            <p class="leading-none">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla
                            </p>
                        </div>

                        <div class="rounded-xl border border-red-500 dark:border-red-600 p-5">
                            <span class="flex items-center pb-4 gap-3">
                                <svg class="w-6 h-6 fill-none shrink-0 stroke-current stroke-red-500 dark:stroke-red-60 stroke-[1.5px]" viewBox="0 0 24 24">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M10 3v6a2 2 0 0 1-1 1l-4 5m5-12H9m1 0a24 24 0 0 1 4 0m0 0v6l1 1 5 5M14 3h1m5 12-2 1a9 9 0 0 1-6-1 9 9 0 0 0-6-1l-1 1m15 0 1 2c1 1 1 3-1 3a48 48 0 0 1-8 1l-8-1c-2 0-2-2-1-3l2-2"/>
                                </svg>
                                <h2 class="font-semibold leading-none text-xl">{{ __('messages.oils') }}</h2>
                            </span>
                            <p class="leading-none">
                                Lorem ipsum dolor sit amet consectetur adipisicing elit. Provident ab nulla
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <x-slot name="footer">
        @include('welcome.footer')
    </x-slot>
</x-app-layout>
