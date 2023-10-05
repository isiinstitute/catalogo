<div>
    <div
        class="p-6 lg:p-8 bg-white dark:bg-gray-800 dark:bg-gradient-to-bl dark:from-gray-700/50 dark:via-transparent border-b border-gray-200 dark:border-gray-700">
        <form autocomplete="off" wire:submit.prevent='registrar'>
            <div class="space-y-12">
                <div class="border-b border-gray-900/10 pb-12">
                    <div class="mt-2 grid grid-cols-1 gap-x-6 gap-y-8 sm:grid-cols-6">
                        <div class="col-span-full">
                            <label for="email" class="block text-sm font-medium leading-6 text-gray-900">Correo
                                electrónico</label>
                            <div class="mt-2">
                                <input id="email" name="email" type="email" wire:model="email"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <x-input-error for="email" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="name" class="block text-sm font-medium leading-6 text-gray-900">Nombre
                                completo</label>
                            <div class="mt-2">
                                <input id="name" name="name" type="text" wire:model="name"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <x-input-error for="name" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="password"
                                class="block text-sm font-medium leading-6 text-gray-900">Contraseña</label>
                            <div class="mt-2">
                                <input id="password" name="password" type="password" wire:model="password"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <x-input-error for="password" class="mt-2" />
                            </div>
                        </div>
                        <div class="col-span-full">
                            <label for="password_confirmation"
                                class="block text-sm font-medium leading-6 text-gray-900">Confirmar
                                contraseña</label>
                            <div class="mt-2">
                                <input id="password_confirmation" name="password_confirmation" type="password"
                                    wire:model="password_confirmation"
                                    class="block w-full rounded-md border-0 py-1.5 text-gray-900 shadow-sm ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6">
                                <x-input-error for="password_confirmation" class="mt-2" />
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
