<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="{{ route('usuarios.index') }}">{{ __('messages.users') }}</a>

            <svg 
                class="inline overflow-visible mx-1.5 fill-none stroke-current stroke-2 w-auto h-1.5"
                viewBox="0 0 3 6"
                stroke-linejoin="round"
                stroke-linecap="round"
            >
                <path d="M0 0L3 3L0 6" />
            </svg>
            Ver detalles
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="text-gray-900 dark:text-gray-100 font-medium text-sm">
                    <section>
                        <header>
                            <h2 class="text-lg">
                                Detalles del usuario
                            </h2>

                            <p class="mt-1 text-gray-600 dark:text-gray-400">
                                La información de esta cuenta se presenta a continuación.
                            </p>
                        </header>

                        <div class="my-6">
                            <dl>
                                <div class="p-4 sm:grid sm:grid-cols-3 sm:gap-4 border-y border-gray-300 dark:border-gray-700">
                                    <dt class="text-gray-600 dark:text-gray-400">Nombre</dt>
                                    <dd class="sm:col-span-2 sm:mt-0">{{ $user->name }}</dd>
                                </div>

                                <div class="p-4 sm:grid sm:grid-cols-3 sm:gap-4 border-b border-gray-300 dark:border-gray-700">
                                    <dt class="text-gray-600 dark:text-gray-400">Correo electrónico</dt>
                                    <dd class="sm:col-span-2 sm:mt-0">{{ $user->email }}</dd>
                                </div>
                            </dl>
                        </div>

                        <x-link-button href="{{ route('usuarios.edit', $user->id) }}">
                                    Editar información
                         </x-link-button>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
