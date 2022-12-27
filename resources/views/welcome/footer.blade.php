<footer aria-label="Site Footer" class="bg-white dark:bg-gray-800">
    <div class="max-w-screen-xl px-4 py-10 mx-auto sm:px-6 lg:px-8">
        <div class="text-center">
            <h2 class="font-medium mt-4 text-gray-500 dark:text-gray-300 text-2xl">
                &iquest;Consultas&quest; con gusto lo atendemos
            </h2>

            <p class="max-w-sm mx-auto mb-4 text-gray-500 dark:text-gray-300">
                Escr&iacute;banos a traves de WhatsApp
            </p>
            
            <a 
                aria-label="Chat on WhatsApp"
                class="mx-auto text-gray-500 dark:text-gray-400 hover:text-gray-700 dark:hover:text-gray-300 text-sm font-medium transition py-2 px-4"
                href="https://wa.me/50370171649"
                target="_blank"
                rel="noopener noreferrer"
            >
                <svg class="w-6 h-6 fill-current stroke-current align-top inline-block" aria-label="WhatsApp" viewBox="0 0 302 308"><path fill="none" stroke-width="26" d="m20 290 14-65a138 138 0 1 1 50 47z"/><path d="M205 170c-3-2-6-3-9 1l-12 16c-3 2-5 3-9 1-15-8-36-17-54-47-1-4 1-6 3-8l9-14c2-2 1-4 0-6l-12-29c-3-8-6-7-9-7h-8c-2 0-6 1-10 5-22 22-13 53 3 73 3 4 23 40 66 59 32 14 39 12 48 10 11-1 22-10 27-19 1-3 6-16 2-18"/></svg>
                <span >Chat en Whatsapp</span>
            </a>
        </div>

        <div
            class="pt-8 mt-8 border-t border-gray-100 dark:border-gray-700 flex gap-5 flex-col md:flex-row items-center justify-between"
        >
            <nav class="grow basis-0">
                <ul class="flex flex-wrap gap-4">
                    <li>
                        <x-link :href="route('welcome.index')">
                            {{ __('Bienvenida') }}
                        </x-link>
                    </li>
                    @guest
                    <li>
                        <x-link :href="route('login')">
                            {{ __('messages.login') }}
                        </x-link>
                    </li>
                    @endguest
                </ul>
            </nav>

            <ul class="flex justify-center gap-6 grow basis-0">
                <li>
                    <a
                        href="https://www.facebook.com/profile.php?id=100083341297220"
                        rel="noreferrer"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-gray-500 dark:text-gray-400 transition hover:text-gray-700 dark:hover:text-gray-300"
                    >
                        <span class="sr-only">Facebook</span>

                        <svg
                            class="w-6 h-6 fill-current"
                            viewBox="0 0 20.01 16.4"
                            aria-hidden="true"
                        >
                        <path fill-rule="evenodd" d="M20.01 8.26a10 10 0 1 0-11.56 9.88v-7H5.91V8.27h2.54v-2.2c0-2.5 1.49-3.9 3.78-3.9 1.09 0 2.23.2 2.23.2v2.46h-1.25c-1.24 0-1.63.77-1.63 1.56v1.88h2.78l-.45 2.89h-2.33v6.99a10 10 0 0 0 8.43-9.88z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </li>

                <li>
                    <a
                        href="https://www.instagram.com/csgarage.sv/"
                        rel="noreferrer"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-gray-500 dark:text-gray-400 transition hover:text-gray-700 dark:hover:text-gray-300"
                    >
                        <span class="sr-only">Instagram</span>

                        <svg
                            class="w-6 h-6 fill-current"
                            viewBox="0 0 24 24"
                            aria-hidden="true"
                        >
                            <path d="M18.3 4.4c-.8 0-1.4.6-1.4 1.4 0 .8.6 1.4 1.4 1.4.8 0 1.4-.6 1.4-1.4 0-.8-.6-1.4-1.4-1.4zM12 6.2a6 6 0 0 0-5.9 5.9A6 6 0 0 0 12 18a6 6 0 0 0 5.9-5.9A6 6 0 0 0 12 6.2zm0 9.7a3.8 3.8 0 1 1 0-7.6 3.8 3.8 0 0 1 0 7.6z"/><path d="M16.8 0H7.3A7.2 7.2 0 0 0 0 7.2v9.5c0 4 3.2 7.2 7.2 7.2h9.5c4 0 7.2-3.2 7.2-7.2V7.2A7 7 0 0 0 16.8 0Zm4.9 16.8a5 5 0 0 1-5 5H7.2a5 5 0 0 1-5-5V7.3a5 5 0 0 1 5-5h9.5a5 5 0 0 1 5 5z"/>
                        </svg>
                    </a>
                </li>

                <li>
                    <a
                        href="https://www.tiktok.com/@csgarage.sv"
                        rel="noreferrer"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="text-gray-500 dark:text-gray-400 transition hover:text-gray-700 dark:hover:text-gray-300"
                    >
                        <span class="sr-only">Tiktok</span>
                        <svg
                            class="w-6 h-6 fill-current"
                            viewBox="0 0 17.46 20.02"
                            aria-hidden="true"
                        >
                        <path fill-rule="evenodd" d="M16.46 4.69A4.8 4.8 0 0 1 12.7.44V0H9.24v13.67a2.9 2.9 0 0 1-5.2 1.75 2.9 2.9 0 0 1 3.2-4.52V7.4a6.33 6.33 0 0 0-5.4 10.7 6.33 6.33 0 0 0 10.85-4.43V6.7a8.18 8.18 0 0 0 4.77 1.52V4.8a4.83 4.83 0 0 1-1-.1z" clip-rule="evenodd"/>
                        </svg>
                    </a>
                </li>
            </ul>

            <div class="text-gray-500 dark:text-gray-400 text-sm font-medium text-right grow basis-0">
                ©
                <script>document.write(new Date().getFullYear());</script>
                Copyright:
                <span class="text-gray-700 dark:text-gray-300 inline">CSGarage</span>
            </div>
        </div>
    </div>
</footer>