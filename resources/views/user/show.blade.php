<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="{{ route('usuarios.index') }}">{{ __('messages.users') }}</a>
            <svg class="inline overflow-visible mx-1.5 fill-none stroke-current stroke-2 w-auto h-1.5" viewBox="0 0 3 6" stroke-linejoin="round" stroke-linecap="round"><path d="M0 0L3 3L0 6"></path></svg>
            Ver detalles
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                <div class="text-gray-900 dark:text-gray-100 font-medium">
                    <section>
                        <header>
                            <h2 class="text-lg">
                                {{ __('Detalles del usuario') }}
                            </h2>

                            <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                                {{ __('La información de esta cuenta se presenta a continuación.') }}
                            </p>
                        </header>

                        <div class="border-t border-gray-300 dark:border-gray-700 mt-6">
                            <dl>
                                <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4">
                                    <dt class="text-sm text-gray-600 dark:text-gray-400">Nombre</dt>
                                    <dd class="mt-1 text-sm sm:col-span-2 sm:mt-0">{{ $user->name }}</dd>
                                </div>

                                <div class="px-4 py-4 sm:grid sm:grid-cols-3 sm:gap-4 border-t border-gray-300 dark:border-gray-700">
                                    <dt class="text-sm text-gray-600 dark:text-gray-400">Correo electrónico</dt>
                                    <dd class="mt-1 text-sm sm:col-span-2 sm:mt-0">{{ $user->email }}</dd>
                                </div>
                            </dl>

                            <div class="border-t border-gray-300 dark:border-gray-700 pt-6">
                                <x-link-button href="{{ route('usuarios.edit', $user->id) }}">
                                    Editar información
                                </x-link-button>
                            </div>
                        </div>
                    </section>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
