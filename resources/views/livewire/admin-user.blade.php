<div>
    <div
        class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
        <form wire:submit.prevent='buscar' autocomplete="off">
            <div class="border-gray-900/10 pb-2">
                <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-2 sm:col-start-1">
                        <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo
                            electrónico</label>
                        <div class="mt-2">
                            <input wire:model="email" type="text" name="email" id="email"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nombre</label>
                        <div class="mt-2">
                            <input wire:model="name" type="text" name="name" id="name"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-2">
                        <label class="block text-sm font-medium leading-6 text-gray-900">&nbsp;</label>
                        <div class="mt-2">
                            <x-button type="submit" id="btnBuscar">Buscar</x-button>
                            <x-success-link href="{{ route('users.create') }}">Registrar nuevo</x-success-link>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">
        <div>
            <div class="flex flex-col">
                <div class="sm:-mx-6 lg:-mx-8">
                    <div class="inline-block min-w-full py-2 sm:px-6 lg:px-8">
                        <div class="mb-4">
                            <table class="min-w-full text-left text-sm font-light">
                                <thead class="border-b font-medium dark:border-neutral-500">
                                    <tr class="uppercase">
                                        <th scope="col" class="px-6 py-4 text-center">#</th>
                                        <th scope="col" class="px-6 py-4 text-center">Nombre</th>
                                        <th scope="col" class="px-6 py-4 text-center">Email</th>
                                        <th colspan="2" scope="col" class="px-6 py-4 text-center">Operaciones</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($users as $user)
                                        <tr class="border-b dark:border-neutral-500">
                                            <td class="whitespace-nowrap px-6 py-4 text-center">{{ $user->id }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $user->name }}</td>
                                            <td class="whitespace-nowrap px-6 py-4">{{ $user->email }}</td>
                                            <td class="whitespace-nowrap py-4">
                                                <x-warning-button>
                                                    Editar
                                                </x-warning-button>
                                            </td>
                                            <td class="whitespace-nowrap py-4">
                                                <x-danger-button>
                                                    Eliminar
                                                </x-danger-button>
                                            </td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>

                        </div>
                        {{ $users->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
