<div>
    <div class="bg-white mx-2 md:mx-24">
        <!-- body -->
        <div class="grid md:grid-cols-2 ">
            <div class="md:p-8 p-4">
                
                <!-- creado por -->
                <div class="w-full bg-white rounded-lg">
                    <div class="flex flex-col items-center pb-10">
                        <img class="w-24 h-24 mb-3 rounded-full" src="{{auth()->user()->profile_photo_url}}" alt=""/>
                        <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">{{auth()->user()->name}}</h5>
                        <span class="text-sm text-gray-500 dark:text-gray-400">Creado Por</span>
                    </div>
                </div>

                <!-- formulario -->
                <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">Info General</span><br><br>
                <div class="mx-auto p-3">
                    <div class="grid xl:grid-cols-2 2xl-grid-cols-3 border-b-2 mb-4">
                        <div class="mb-4 inline w-fit">
                            <label class="text-sm text-gray-500">Fecha</label><br>                  
                            <input type="date" value="2025-08-01" wire:model="fecha" class="w-fit bg-gray-50 border leading-none border-gray-300 text-sm text-gray-500 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" />
                            <div class="text-xs text-red-800">@error('fecha') {{ $message }} @enderror</div>
                        </div>
                        <div class="mb-4">
                            <label class="text-sm text-gray-500 pe-2">Hora Llegada</label> 
                            <div class="relative w-fit">
                                <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                    <svg class="w-3 h-3 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <input type="time" id="time" wire:model="hora_llegada" class="bg-gray-50 border leading-none border-gray-300 text-sm text-gray-500 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                                <div class="text-xs text-red-800">@error('hora_llegada') {{ $message }} @enderror</div>
                            </div> 
                        </div>
                        <div class="mb-4">
                            <label class="text-sm text-gray-500 pe-2">Hora Inicio</label> 
                            <div class="relative w-fit">
                                <div class="absolute inset-y-0 end-0 top-0 flex items-center pe-3.5 pointer-events-none">
                                    <svg class="w-3 h-3 text-gray-500 dark:text-gray-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 24 24">
                                        <path fill-rule="evenodd" d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm11-4a1 1 0 1 0-2 0v4a1 1 0 0 0 .293.707l3 3a1 1 0 0 0 1.414-1.414L13 11.586V8Z" clip-rule="evenodd"/>
                                    </svg>
                                </div>
                                <input type="time" id="time" wire:model="hora_inicio" class="bg-gray-50 border leading-none border-gray-300 text-sm text-gray-500 rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" min="09:00" max="18:00" value="00:00" required />
                                <div class="text-xs text-red-800">@error('hora_inicio') {{ $message }} @enderror</div>
                            </div> 
                        </div>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <input type="text" name="floating_password" id="floating_password" wire:model="nombre" rows="2" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required></input>
                        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre</label>
                        <div class="text-xs text-red-800">@error('nombre') {{ $message }} @enderror</div>
                    </div>

                    <div class="relative z-0 w-full mb-5 group">
                        <textarea type="text" name="floating_password" id="floating_password" wire:model="descripcion" rows="2" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required></textarea>
                        <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Descripcion</label>
                        <div class="text-xs text-red-800">@error('descripcion') {{ $message }} @enderror</div>
                    </div>
                    
                    <div class="relative z-0 w-full mb-5 group">
                        <label for="underline_select" class="sr-only">Underline select</label>
                        <select id="underline_select" wire:model="tipo" class="block py-2.5 px-0 w-full text-sm text-gray-500 bg-transparent border-0 border-b-2 border-gray-200 appearance-none dark:text-gray-400 dark:border-gray-700 focus:outline-none focus:ring-0 focus:border-gray-200 peer">
                            <option selected>Elige una opcion</option>
                            <option value="grabacion">Grabación</option>
                            <option value="transmision">Transmisión en vivo</option>
                        </select>
                        <div class="text-xs text-red-800">@error('tipo') {{ $message }} @enderror</div>
                    </div>
                
                </div><br>

                <!-- Personal convocado -->
                @livewire('SeleccionarPersonalTablaModal')

                <!-- Requerimientos -->
                @livewire('SeleccionarRequerimientosTablaModal')
            </div>

            <div class="md:p-8 p-4">
                <!-- Ubicacion -->
                @livewire('SeleccionarUbicacionTablaModal')

                <!-- Fotografias -->
                @livewire('SubirFotosDeUbicacion')
            </div>
        </div>
        <div class="w-full p-8">
            <div wire:loading class="w-full">  
                <x-button wire:click="save" class="w-full disabled">Cargando...</x-button>
            </div>
            <x-button wire:click="save" wire:loading.remove class="w-full">Registrar Evento</x-button>
        </div>
    </div>
</div>

@script
<script>
    /*Livewire.on('confirmDelete', (id_servicio_a_eliminar) => {
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
    });*/

    Livewire.on('registradoCorrectamente', () => {
        Swal.fire({
            title: 'Listo',
            text: 'El evento se registro correctamente',
            icon: 'success',
            confirmButtonText: 'Aceptar',
            reverseButtons: true
        }).then((result) => {
            if (result.isConfirmed) {
                $wire.dispatch('creadoConfirmado');
            }
            if (result.isDismissed) {
                $wire.dispatch('creadoConfirmado');
            }
        });
    });
</script>
@endscript