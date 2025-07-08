<div>
    <div class="bg-white h-auto border border-gray-200 rounded-lg shadow-sm dark:bg-gray-800 dark:border-gray-700">
        <a href="#">
            <img class="rounded-t-lg" src="{{$programas_data->banner}}" alt="" />
        </a>
        <div class="p-5">
            <a href="#">
                <h5 class="mb-2 font-bold tracking-tight text-gray-900 dark:text-white">{{$programas_data->nombre}}</h5>
            </a>
            <div class="flex mb-2">
                @livewire('ModalEditarPrograma', ['nombre' => $programas_data->nombre, 'descripcion' => $programas_data->descripcion, 'id_programa' => $programas_data->id], key($programas_data->id))
                
                <a href="{{route('episodios', $id_programa)}}" class="inline-flex items-center px-3 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
                    Episodios
                </a>
            </div>
            <p class="mb-3 font-normal text-gray-700 dark:text-gray-400 text-sm">{{$programas_data->descripcion}}</p>
        </div>
    </div>


    
  
</div>
