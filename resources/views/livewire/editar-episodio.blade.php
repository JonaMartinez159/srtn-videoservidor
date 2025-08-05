<div>    
    <div class="bg-white p-4 w-full">
        <div class="flex items-end justify-end">
            @livewire('ModalAgregarEpisodio', ['id_programa' => $id_programa])
        </div>
        <div class="flex w-full">
            @if($episodios->toArray()==null)

                <div class="w-full text-center block jusfify-center align-items-center items-center">
                    <p class="tex-center"> No Hay Datos</p>
                </div>
            @else
                <table class="w-full lg:text-sm text-xs  text-left rtl:text-left text-gray-500 dark:text-gray-400">
                    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                        <tr>
                            <th scope="col" class="px-6 py-3">
                                Nombre
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Descripción
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Ruta
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Creado
                            </th>
                            <th scope="col" class="px-6 py-3">
                                Acciones
                            </th>
                        </tr>
                    </thead>
                    <tbody>    
                        @foreach ($episodios as $key => $item)
                            <div>
                                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                        <p>{{ $item['nombre']}} </p>
                                    </th>
                                    <td class="px-6 py-4">
                                        <p>{{  $item['descripcion'] }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p>{{ $item['path'] }}</p>
                                    </td>
                                    <td class="px-6 py-4">
                                        <p>{{ $item['created_at']}}</p>
                                    </td>
                                    <td class="px-6 py-4" >
                                        @livewire('ModalEditarEpisodio', ['nombre' => $item['nombre'], 'descripcion'=> $item['descripcion'], 'id_episodio' => $item['id']], key('key_'.$key))
                                    </td>
                                </tr>
                            </div>
                        
                        @endforeach
                            
                       
                    </tbody>
                </table>
            @endif

        </div>
    </div>          

    <div>
        @if (session()->has('message'))
            <div id="toast-success" class=" absolute bottom-10 right-10 flex items-center w-full max-w-xs p-4 mb-4 text-white bg-blue-500 rounded-lg shadow-sm dark:text-gray-400 dark:bg-gray-800" role="alert">
                <div class="inline-flex items-center justify-center shrink-0 w-8 h-8 text-green-300 bg-blue-500 rounded-lg dark:bg-green-800 dark:text-green-200">
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                        <path d="M10 .5a9.5 9.5 0 1 0 9.5 9.5A9.51 9.51 0 0 0 10 .5Zm3.707 8.207-4 4a1 1 0 0 1-1.414 0l-2-2a1 1 0 0 1 1.414-1.414L9 10.586l3.293-3.293a1 1 0 0 1 1.414 1.414Z"/>
                    </svg>
                    <span class="sr-only">Check icon</span>
                </div>
                <div class="ms-3 text-sm font-normal">Editado correctamente</div>
                <button id="trigger" type="button" class="ms-auto -mx-1.5 -my-1.5 bg-white text-gray-400 hover:text-gray-900 rounded-lg focus:ring-2 focus:ring-gray-300 p-1.5 hover:bg-gray-100 inline-flex items-center justify-center h-8 w-8 dark:text-gray-500 dark:hover:text-white dark:bg-gray-800 dark:hover:bg-gray-700" data-dismiss-target="#toast-success" aria-label="Close">
                    <span class="sr-only">Close</span>
                    <svg class="w-3 h-3" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m1 1 6 6m0 0 6 6M7 7l6-6M7 7l-6 6"/>
                    </svg>
                </button>
            </div>
        @endif

    </div>
</div>
