<div>
    <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">Ubicacion</span>
    <div class="w-full flex justify-end items-end">
        <x-button wire:click="$set('showModalubicacion', true)">Seleccionar Ubicacion</x-button>
    </div>

    @if ($ubicacion_seleccionada != null)
        <div class="p-3">
            @if ($otro_seleccionado == true)
                <div class="flex w-full">
                    <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                        <path fill-rule="evenodd" d="M12 2a1 1 0 0 1 .932.638l7 18a1 1 0 0 1-1.326 1.281L13 19.517V13a1 1 0 1 0-2 0v6.517l-5.606 2.402a1 1 0 0 1-1.326-1.281l7-18A1 1 0 0 1 12 2Z" clip-rule="evenodd"/>
                    </svg>
                    <p>Calle: {{ $calle }}, Colonia: {{ $colonia }}, #{{ $numero }} </p>
                    <p class="ps-1">{{ $nombre }}</p>
                </div>
            @else
               <iframe src="{{ $ubicacion_seleccionada }}" class="w-full h-[400px]" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            @endif
        </div><br>
    @else
    @endif
    

    <x-dialog-modal wire:model="showModalubicacion">
        <x-slot:title>
            Seleccionar Ubicacion
        </x-slot>
        <x-slot:content>
    
        <p>Filtrar Por Area</p>
        <label for="underline_select" class="sr-only">Underline select</label>
        <select id="underline_select" wire:model.live="etiqueta" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
            <option selected value="museos">Museos</option>
            <option value="instituciones">instituciones/Secretarías</option>
            <option value="restaurantes">restaurantes</option>
            <option value="otro">Otro</option>
        </select>

        @if ($etiqueta != 'otro')
            <div class="relative overflow-x-auto sm:rounded-lg">
                <!-- Barra de busqueda -->
                <div class=" hidden flex items-center justify-between flex-column md:flex-row flex-wrap space-y-4 md:space-y-0 py-4 bg-white dark:bg-gray-900">
                    <label for="table-search" class="sr-only">Search</label>
                    <div class="relative">
                        <div class="absolute inset-y-0 rtl:inset-r-0 start-0 flex items-center ps-3 pointer-events-none">
                            <svg class="w-4 h-4 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 20 20">
                                <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m19 19-4-4m0-7A7 7 0 1 1 1 8a7 7 0 0 1 14 0Z"/>
                            </svg>
                        </div>
                        <input type="text" id="table-search-users" class="block pt-2 ps-10 text-sm text-gray-900 border border-gray-300 rounded-lg w-80 bg-gray-50 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Search for users">
                    </div>
                </div>
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="p-4">
                                <div class="flex items-center">
                                    <input id="checkbox-all-search" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    <label for="checkbox-all-search" class="sr-only">checkbox</label>
                                </div>
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                        </tr>
                    </thead>
                    <tbody>

                        @foreach ($ubicaciones as $ubicacion)
                            <tr wire:key="{{ $ubicacion->id }}" wire:click="setUbicacion('{{ json_encode($ubicacion) }}')" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                                <td class="w-4 p-4">
                                    <div class="flex items-center">
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                        <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                    </div>
                                </td>
                                <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                    <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="">
                                    <div class="ps-3">
                                        <div class="text-base font-semibold">{{ $ubicacion->nombre }}</div>
                                        <div class="font-normal text-gray-500">{{ $ubicacion->etiqueta }}</div>
                                    </div>  
                                </th>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        @else    
            
            <div class="p-4">
                <p class="mb-2">Ingrese la ubicacion</p>
                <form class="max-w-md mx-auto pt-2" wire:submit="enviarOtraUbicacion">
                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_email" id="floating_email"  wire:model="nombre" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_email" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre</label>
                        <div class="text-xs text-red-800">@error('nombre') {{ $message }} @enderror</div>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_password" id="floating_password" wire:model="calle" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Calle</label>
                        <div class="text-xs text-red-800">@error('calle') {{ $message }} @enderror</div>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_password" id="floating_password" wire:model="colonia" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Colonia</label>
                        <div class="text-xs text-red-800">@error('colonia') {{ $message }} @enderror</div>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_password" id="floating_password" wire:model="numero" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Numero</label>
                    </div>
                    <x-button>Aceptar</x-button>
                </form>
            </div>
        @endif
        

        </x-slot>
        <x-slot:footer>
            
        </x-slot>
    </x-dialog-modal>
</div>
