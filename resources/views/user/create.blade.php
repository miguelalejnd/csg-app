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
            Crear usuario
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 overflow-hidden shadow-sm sm:rounded-lg">
                <div class="max-w-xl">
                    <header>
                        <h2 class="text-lg font-medium text-gray-900 dark:text-gray-100">
                            {{ __('Nueva cuenta de usuario') }}
                        </h2>

                        <p class="mt-1 text-sm text-gray-600 dark:text-gray-400">
                            {{ __('Ingrese la información del nuevo usuario, posteriormente cree la cuenta para almacenarla.') }}
                        </p>
                    </header>

                    <form method="POST" action="{{ route('usuarios.store') }}" class="mt-6 space-y-6" autocomplete="off">
                        @csrf

                        <!-- Name -->
                        <div>
                            <x-input-label for="name" :value="__('messages.name')" />
                            <x-text-input id="name" name="name" type="text" class="mt-1 block w-full" :value="old('name')" required autofocus autocomplete="name" maxlength="60" />
                            <x-input-error class="mt-2" :messages="$errors->get('name')" />
                        </div>

                        <!-- Email Address -->
                        <div>
                            <x-input-label for="email" :value="__('messages.email')" />
                            <x-text-input id="email" name="email" type="email" class="mt-1 block w-full" :value="old('email')" required autocomplete="username" />
                            <x-input-error class="mt-2" :messages="$errors->get('email')" />
                        </div>

                        <!-- Password -->
                        <div>
                            <x-input-label for="password" :value="__('messages.password')" />
                            <x-text-input id="password" name="password" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
                        </div>

                        <!-- Confirm Password -->
                        <div>
                            <x-input-label for="password_confirmation" :value="__('messages.confirm_password')" />
                            <x-text-input id="password_confirmation" name="password_confirmation" type="password" class="mt-1 block w-full" autocomplete="new-password" />
                            <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                        </div>

                        <!-- Submit button -->
                        <x-primary-button>{{ __('Crear') }}</x-primary-button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>