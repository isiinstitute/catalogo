<div>
    <div
        class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
        <form autocomplete="off" wire:submit.prevent='registrar'>
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="sm:col-span-3">
                            <label for="categoria_id"
                                class="block text-sm font-medium leading-6 text-gray-900">Categoría</label>
                            <div class="mt-2">
                                <select id="categoria_id" name="categoria_id" wire:model="categoria_id"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option>[-- Seleccione --]</option>
                                    @foreach ($categorias as $categoria)
                                        <option value="{{ $categoria->id }}">{{ $categoria->nombre }}</option>
                                    @endforeach
                                </select>
                                <x-input-error for="categoria_id" class="mt-2" />
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="marca_id"
                                class="block text-sm font-medium leading-6 text-gray-900">Marca</label>
                            <div class="mt-2">
                                <select id="marca_id" name="marca_id" wire:model="marca_id"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                    <option>[-- Seleccione --]</option>
                                    @foreach ($marcas as $marca)
                                        <option value="{{ $marca->id }}">{{ $marca->nombre }}</option>
                                    @endforeach
                                </select>
                                <x-input-error for="marca_id" class="mt-2" />
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="titulo"
                                class="block text-sm font-medium leading-6 text-gray-900">Título</label>
                            <div class="mt-2">
                                <input id="titulo" name="titulo" type="text" wire:model="titulo"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <x-input-error for="titulo" class="mt-2" />
                            </div>
                        </div>
                        <div class="sm:col-span-3">
                            <label for="precio"
                                class="block text-sm font-medium leading-6 text-gray-900">Precio</label>
                            <div class="mt-2">
                                <input id="precio" name="precio" type="number" wire:model="precio" step="any"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <x-input-error for="precio" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="imagen"
                                class="block text-sm font-medium leading-6 text-gray-900">Imagen</label>
                            <div class="mt-2">
                                <input
                                    class="relative m-0 block w-full min-w-0 flex-auto rounded border border-solid border-neutral-300 bg-clip-padding px-3 py-[0.32rem] text-base font-normal text-neutral-700 transition duration-300 ease-in-out file:-mx-3 file:-my-[0.32rem] file:overflow-hidden file:rounded-none file:border-0 file:border-solid file:border-inherit file:bg-neutral-100 file:px-3 file:py-[0.32rem] file:text-neutral-700 file:transition file:duration-150 file:ease-in-out file:[border-inline-end-width:1px] file:[margin-inline-end:0.75rem] hover:file:bg-neutral-200 focus:border-primary focus:text-neutral-700 focus:shadow-te-primary focus:outline-none dark:border-neutral-600 dark:text-neutral-200 dark:file:bg-neutral-700 dark:file:text-neutral-100 dark:focus:border-primary"
                                    type="file" id="imagen" name="imagen" wire:model="imagen" />
                                <x-input-error for="imagen" class="mt-2" />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-6 flex items-center justify-end gap-x-6">
                <a href="{{ route('users.index') }}" type="button"
                    class="text-sm font-semibold leading-6 text-gray-900">Cancelar</a>
                <button type="submit"
                    class="rounded-md bg-indigo-600 px-3 py-2 text-sm font-semibold text-white shadow-sm hover:bg-indigo-500 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600">Guardar</button>
            </div>
        </form>
    </div>
</div>
