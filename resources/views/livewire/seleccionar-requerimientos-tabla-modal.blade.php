<div>
    <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">Requerimientos</span>
    <div class="flex -space-x-4 rtl:space-x-reverse p-3">

        @if ($array_requerimientos_seleccionados != null)
            @foreach ($array_requerimientos_seleccionados as $requerimientos_seleccionados)
                <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="{{asset('images/ilustracion.jpg')}}" alt="">
            @endforeach
        @endif
        
        <button type="button" wire:click="$set('showModalrequerimientos', 'true')" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-full text-sm p-2.5 text-center inline-flex items-center me-2 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
            <path stroke="white" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 5v14m-8-7h2m0 0h2m-2 0v2m0-2v-2m12 1h-6m6 4h-6M4 19h16c.5523 0 1-.4477 1-1V6c0-.55228-.4477-1-1-1H4c-.55228 0-1 .44772-1 1v12c0 .5523.44772 1 1 1Z"/>
            </svg>
        </button>
    </div>

    <x-dialog-modal wire:model="showModalrequerimientos">
        <x-slot:title>
            Seleccionar Requerimientos
        </x-slot>
        <x-slot:content>
    
        <p>Filtrar Por Area</p>
        <label for="underline_select" class="sr-only">Underline select</label>
        <select id="underline_select" wire:model.live="etiqueta" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
            <option selected value="camaras">Camaras</option>
            <option value="audio">Audios</option>
            <option value="iluminacion">Iluminacion</option>
            <option value="switcher">Switcher</option>
            <option value="general">Administrativos</option>
            <option value="vehiculos">Vehiculos</option>
        </select>
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

                    @foreach ($requerimientos as $requerimiento)
                        <tr wire:key="{{ $requerimiento->id }}" wire:click="setChecked({{ $requerimiento->id }})" class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200 hover:bg-gray-50 dark:hover:bg-gray-600">
                            <td class="w-4 p-4">
                                <div class="flex items-center">
                                    @if (in_array($requerimiento->id, $array_requerimientos_seleccionados))
                                        <input id="checkbox-table-search-1" checked type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    @else
                                        <input id="checkbox-table-search-1" type="checkbox" class="w-4 h-4 text-blue-600 bg-gray-100 border-gray-300 rounded-sm focus:ring-blue-500 dark:focus:ring-blue-600 dark:ring-offset-gray-800 dark:focus:ring-offset-gray-800 focus:ring-2 dark:bg-gray-700 dark:border-gray-600">
                                    @endif
                                    <label for="checkbox-table-search-1" class="sr-only">checkbox</label>
                                </div>
                            </td>
                            <th scope="row" class="flex items-center px-6 py-4 text-gray-900 whitespace-nowrap dark:text-white">
                                <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-1.jpg" alt="">
                                <div class="ps-3">
                                    <div class="text-base font-semibold">{{ $requerimiento->nombre }}</div>
                                    <div class="font-normal text-gray-500">{{ $requerimiento->tipo }}</div>
                                </div>  
                            </th>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

        </x-slot>
        <x-slot:footer>
            <x-button wire:click="enviarTrabajadoresConvocados">Aceptar</x-button>
        </x-slot>
    </x-dialog-modal>
</div>
