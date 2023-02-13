<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            <a href="{{ route('usuarios.index') }}">{{ __('messages.users') }}</a>
            <svg class="inline overflow-visible mx-1.5 fill-none stroke-current stroke-2 w-auto h-1.5" viewBox="0 0 3 6" stroke-linejoin="round" stroke-linecap="round"><path d="M0 0L3 3L0 6"></path></svg>
            Editar usuario
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8 space-y-6">
            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    @include('user.partials.update-user-profile-form')
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                @include('user.partials.update-user-password-form')
            </div>

            <div class="p-4 sm:p-8 bg-white dark:bg-gray-800 shadow sm:rounded-lg">
                    @include('user.partials.delete-user-form')
            </div>
        </div>
    </div>
</x-app-layout>