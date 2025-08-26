<x-app-layout>
    <div class="bg-white mx-2 md:mx-24">
        <!-- body -->
        <div class="grid md:grid-cols-2 ">
            <div class="p-8">
                
                <!-- creado por -->
                <div class="w-full bg-white rounded-lg">
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-24 h-24 mb-3 rounded-full" src="{{auth()->user()->profile_photo_url}}" alt=""/>
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Creado Por</span>
                    </div>
                </div>

                <!-- formulario -->
                <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">Info General</span><br><br>
                <form class="mx-auto p-3">
                    <div class="relative z-0 w-full mb-5 group">
                        <textarea type="text" name="floating_password" id="floating_password" rows="2" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required></textarea>
                        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Descripcion</label>
                    </div>
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="underline_select" class="sr-only">Underline select</label>
                        <select id="underline_select" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected>Elige una opcion</option>
                            <option value="grabacion">Grabación</option>
                            <option value="transmision">Transmisión en vivo</option>
                        </select>
                    </div>
                </form><br>

                <!-- Encargado -->
                @livewire('Encargado', ['tipo' => 'editar'])

                <!-- Personal convocado -->
                @livewire('SeleccionarPersonalTablaModal')

                <!-- Requerimientos -->
                @livewire('SeleccionarRequerimientosTablaModal')
            </div>

            <div class="p-8">
                <!-- Ubicacion -->
                @livewire('SeleccionarUbicacionTablaModal')

                <!-- Fotografias -->
                @livewire('SubirFotosDeUbicacion')
            </div>
        </div>
    </div>
    
</x-app-layout>