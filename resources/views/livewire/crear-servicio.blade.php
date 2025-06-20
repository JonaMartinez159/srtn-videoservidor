<div>
    <div class="bg-white w-full rounded-lg overflow-x-auto p-4">
        <div class="flex justify-items-end justify-end w-full pb-2">
            <x-button wire:click="$set('showModal', true)">Crear Nuevo</x-button>
        </div>

        <select name="filtro" wire:model.live="filtro" id="filtro">
            <option value="Ocasional" selected>Ocasional</option>
            <option value="Programas">Programas</option>
            <option value="Permanentes">Permanentes</option>
        </select>

        <div class="flex w-full">
            @if($servicios_activos->toArray()==null)

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
                            Estado
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Descripción
                        </th>
                        <th scope="col" class="px-6 py-3">
                            StreamKey
                        </th>
                        <th scope="col" class="px-6 py-3">
                            Acciones
                        </th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($servicios_activos as $key => $item)
                            
                        <tr wire:key="{{ $item['id'] }}" class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                            <th wire:key="col-1" scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                <p>{{ $item['nombre'] }} </p>
                            </th>
                            <td wire:key="col-2" class="px-6 py-4">
                                <div wire:key="flex-1" class="flex">
                                    
                                    <livewire:chekServicioDisponibilidad :id_servicio="$item['id']" :key="$item['servicio_key']" /> 
                                </div>
                            </td>
                            <td wire:key="col-3" class="px-6 py-4">
                                <p>{{ $item['descripcion']; }}</p>
                            </td>
                            <td wire:key="col-4" class="px-6 py-4">
                                <p>{{ $item['stream_key']; }}</p>
                            </td>
                            <td wire:key="col-5" class="px-6 py-4" >
                                <div class="flex items-start">
                                    <a href="{{ route('ver_servicio', $item['id']) }}" class="pt-1">
                                        <svg class="w-6 h-6 me-2 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M4.998 7.78C6.729 6.345 9.198 5 12 5c2.802 0 5.27 1.345 7.002 2.78a12.713 12.713 0 0 1 2.096 2.183c.253.344.465.682.618.997.14.286.284.658.284 1.04s-.145.754-.284 1.04a6.6 6.6 0 0 1-.618.997 12.712 12.712 0 0 1-2.096 2.183C17.271 17.655 14.802 19 12 19c-2.802 0-5.27-1.345-7.002-2.78a12.712 12.712 0 0 1-2.096-2.183 6.6 6.6 0 0 1-.618-.997C2.144 12.754 2 12.382 2 12s.145-.754.284-1.04c.153-.315.365-.653.618-.997A12.714 12.714 0 0 1 4.998 7.78ZM12 15a3 3 0 1 0 0-6 3 3 0 0 0 0 6Z" clip-rule="evenodd"/>
                                        </svg>
                                    </a>
                                    <button wire:click="eliminarServicio({{$item['id']}})" class="pt-1">
                                        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                            <path fill-rule="evenodd" d="M8.586 2.586A2 2 0 0 1 10 2h4a2 2 0 0 1 2 2v2h3a1 1 0 1 1 0 2v12a2 2 0 0 1-2 2H7a2 2 0 0 1-2-2V8a1 1 0 0 1 0-2h3V4a2 2 0 0 1 .586-1.414ZM10 6h4V4h-4v2Zm1 4a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Zm4 0a1 1 0 1 0-2 0v8a1 1 0 1 0 2 0v-8Z" clip-rule="evenodd"/>
                                        </svg>                                      
                                    </button>
                                    <div>
                                        <button id="dropdownMenuIconButton-{{ $item['id'] }}" data-dropdown-toggle="dropdownDots-{{ $item['id'] }}" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                            <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                            <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                            </svg>
                                            </button>
                                            
                                            <!-- Dropdown menu -->
                                            <div id="dropdownDots-{{ $item['id'] }}" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                                                <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton-{{ $item['id'] }}">
                                                <li>
                                                    <a href="http://localhost:8080/stat" target="_blank" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Estadisticas</a>
                                                </li>
                                                <li>
                                                    <a href="#" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logs</a>
                                                </li>
                                                </ul>
                                            </div>
                                        
                                        </button>
                
                                    </div>
                                </div>
                            </td>
                        </tr>
                        
                    @endforeach
                    
                </tbody>
                </table>
            @endif

        </div>
    </div>
    <x-dialog-modal wire:model="showModal">
        <x-slot:title>
            Crear Servicio
        </x-slot>
        <x-slot:content>
            <form wire:submit="crearServicio" class="p-6 rounded-lg w-full">
                @csrf
                <h2 class="text-lg font-bold mb-4">Registro de Servicio</h2>

                <!-- Nombre del servicio -->
                <label for="nombre" class="block font-medium">Nombre del servicio:</label>
                <input type="text" id="nombre" name="nombre" wire:model="nombre" required minlength="3" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-300">
                @error('nombre') <span class="error">{{ $message }}</span> @enderror
                
                <!-- Descripción -->
                <label for="descripcion" class="block font-medium mt-3">Descripción:</label>
                <textarea id="descripcion" name="descripcion" wire:model="descripcion" rows="3" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-300"></textarea>
                
                <!--  Aplicacion 
                <label for="aplicacion" class="block font-medium mt-2">Aplicacion</label>
                <select id="aplicacion" required name="aplicacion" wire:model="aplicacion" class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    <option value="" selected>Elige una aplicacion</option>
                    <option value="Canal1">Canal1</option>
                    <option value="Canal2">Canal2</option>
                    <option value="tele10">Tele10</option>
                </select> -->          
                     
                <!--  Stream Key -->
                <label for="stream_key" class="block font-medium mt-2">Stream-key</label>
                <input type="text" id="stream_key" name="stream_key" wire:model="stream_key" required minlength="3" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-300">
                @error('stream_key') <span class="error">{{ $message }}</span> @enderror <br>

                <label for="aplicacion" class="block font-medium mt-3">Tipo de servicio</label>
                <label class="block">
                    <input type="radio" name="aplicacion" id="ocasional" value="Ocasional" wire:model="aplicacion" class="mr-2"> Ocasional
                </label>
                <label class="block">
                    <input type="radio" name="aplicacion" id="permanente" value="Permanentes" wire:model="aplicacion" class="mr-2"> Permanente
                </label>
                <label class="block">
                    <input type="radio" name="aplicacion" id="programa" value="Programas" wire:model="aplicacion" class="mr-2"> Programa Habitual
                </label>
    

                <!-- Campo Fecha de Autoeliminación -->
                <div id="fechaAutoeliminacion" class="hidden mt-4">
                    <label class="block text-sm font-medium">Nota</label>
                    <p>El servicio se eliminará automaticamente en 3 dias pero la grabacion permanecera 
                        en el archivo historico
                    </p>
                </div>

                <!-- Campos de Programa Habitual -->
                <div id="programaHabitual" class="hidden mt-4">
                    <label class="block text-sm font-medium">Nombre del Programa</label>
                    <select id="nombrePrograma" name="idPrograma" wire:model="idPrograma"  class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                        <option value="" selected>Elige una aplicacion</option>

                        @foreach ($programas as $programa)
                            <option value="{{ $programa->id }}">{{ $programa->nombre }}</option>
                        @endforeach
                        
                    </select>
                </div>

                <script>
                    document.querySelectorAll('input[name="aplicacion"]').forEach(radio => {
                        radio.addEventListener('change', function () {
                            document.getElementById('fechaAutoeliminacion').classList.toggle('hidden', this.id !== 'ocasional');
                            document.getElementById('programaHabitual').classList.toggle('hidden', this.id !== 'programa');
                        });
                    });
                </script>
            
            
                <div class="flex w-full justify-center items-stretch py-2 mt-4">
                    <x-button wire:loading.attr="disabled" type="submit" class="text-center w-full">Crear</x-button>
                </div>
            </form>

        </x-slot>
        <x-slot:footer>
        </x-slot>
    </x-dialog-modal>
</div>

@script
<script>
    Livewire.on('confirmDelete', (id_servicio_a_eliminar) => {
        Swal.fire({
            title: 'Estas seguro?',
            text: 'El servicio se eliminará por completo',
            icon: 'warning',
            showCancelButton: true,
            confirmButtonText: 'si, eliminar',
            cancelButtonText: 'No, cancelar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $wire.dispatch('eliminarConfirmado', { id_servicio_a_eliminar:  @this.id_servicio});
            }
        });
    });

    Livewire.on('errorDelete', () => {
        Swal.fire("Error, el servicio esta en uso");
    });
</script>
@endscript