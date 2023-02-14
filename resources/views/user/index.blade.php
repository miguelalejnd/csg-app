<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
            {{ __('messages.users') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto px-4 lg:px-8 mb-5">
            <x-link-button href="{{ route('usuarios.create') }}">
                Nuevo usuario
            </x-link-button>
        </div>

        <div class="max-w-7xl mx-auto px-4 lg:px-8 space-y-5">
            <div class="overflow-x-auto rounded-lg border border-gray-300 dark:border-gray-700">
                <table class="table-fixed min-w-full text-sm text-left text-gray-900 dark:text-gray-100">
                    <thead>
                        <tr>
                            <th scope="col" class="px-6 py-3 bg-white dark:bg-gray-800">
                                Nombre
                            </th>
                            
                            <th scope="col" class="px-6 py-3">
                                Correo electrónico
                            </th>

                            <th scope="col" class="px-6 py-3 bg-white dark:bg-gray-800">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    
                    <tbody>
                        @foreach($users as $user)
                            <tr class="border-t border-gray-300 dark:border-gray-700">
                                <td class="px-6 py-4 bg-white dark:bg-gray-800">
                                    {{ $user->name }}
                                </td>
                                <td class="px-6 py-4">
                                    {{ $user->email }}
                                </td>
                                <td class="px-6 py-4 bg-white dark:bg-gray-800">
                                    <a 
                                        href="{{ route('usuarios.show', $user->id) }}"
                                        class="text-blue-500 dark:text-blue-400 hover:underline mr-4"
                                    >
                                        Detalles
                                    </a>

                                    <a
                                        href="{{ route('usuarios.edit', $user->id) }}"
                                        class="text-orange-600 dark:text-orange-400 hover:underline"
                                    >
                                        Editar
                                    </a>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>

            {{ $users->links() }}
        </div>
    </div>
</x-app-layout>
