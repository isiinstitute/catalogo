<div>
    <div
        class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
        <form wire:submit.prevent='buscar' autocomplete="off">
            <div class="border-gray-900/10 pb-2">
                <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                    <div class="sm:col-span-3 sm:col-start-1">
                        <label for="titulo" class="block text-sm font-medium leading-6 text-gray-900">Título</label>
                        <div class="mt-2">
                            <input wire:model="titulo" type="text" name="titulo" id="titulo"
                                class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                        </div>
                    </div>
                    <div class="sm:col-span-3">
                        <label class="block text-sm font-medium leading-6 text-gray-900">&nbsp;</label>
                        <div class="mt-2">
                            <x-button type="submit" id="btnBuscar">Buscar</x-button>
                            <x-success-link href="{{ route('products.create') }}">Registrar nuevo</x-success-link>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>

    <div class="grid grid-cols-1 md:grid-cols-1 gap-6 lg:gap-8 p-6 lg:p-8">
        <div>
            <div class="relative overflow-x-auto mb-4">
                <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
                    <thead class="border-b font-medium dark:border-neutral-500">
                        <tr class="uppercase">
                            <th scope="col" class="px-6 py-4 text-center">#</th>
                            <th scope="col" class="px-6 py-4 text-center">Categoría</th>
                            <th scope="col" class="px-6 py-4 text-center">Marca</th>
                            <th scope="col" class="px-6 py-4 text-center">Título</th>
                            <th scope="col" class="px-6 py-4 text-center">Precio</th>
                            <th scope="col" class="px-6 py-4 text-center">Imagen</th>
                            <th scope="col" class="px-6 py-4 text-center">Usuario</th>
                            <th colspan="2" scope="col" class="px-6 py-4 text-center">Operaciones</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($products as $item)
                            <tr class="border-b dark:border-neutral-500">
                                <td class="whitespace-nowrap px-6 py-4 text-center">{{ $item->id }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-center">
                                    {{ $item->categoria->nombre }}</td>
                                <td class="whitespace-nowrap px-6 py-4 text-center">
                                    {{ $item->marca->nombre }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $item->titulo }}</td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $item->precio }}</td>
                                <td class="whitespace-nowrap px-6 py-4">
                                    <img src="{{ $item->imagen }}" alt="" width="150px">
                                </td>
                                <td class="whitespace-nowrap px-6 py-4">{{ $item->user->name }}</td>
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
            {{ $products->links() }}
        </div>
    </div>
</div>
