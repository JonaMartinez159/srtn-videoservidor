<div>
    <button wire:click="$set('showModal', true)" class="pt-1">
        <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
            <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
            <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
          </svg>                                  
        </button>

    <x-dialog-modal wire:model="showModal">
        <x-slot:title>
            Editar Transmision
        </x-slot>
        <x-slot:content>
            <form wire:submit.prevent="editarTransmision" class="p-6 rounded-lg w-full"  method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Tipo -->
                <div class="mb-2">
                    <label for="tipo" class="block font-medium text-gray-700">Tipo</label>
                    <select id="tipo" name="tipo" wire:model="tipo" required class="form-select w-full mt-1">
                    <option value="">Selecciona</option>
                    <option value="Transmisión en vivo">Transmisión en vivo</option>
                    <option value="Grabación">Grabación</option>
                    </select>
                </div>
            
                <!-- Fecha -->
                <div class="mb-2">
                    <label for="fecha" class="block font-medium text-gray-700">Fecha</label>
                    <input type="date" id="fecha"  wire:model="fecha" name="fecha" required class="form-input w-full mt-1" />
                </div>
            
                <!-- Hora de llegada -->
                <div class="mb-2">
                    <label for="hora_llegada" class="block font-medium text-gray-700">Hora de llegada</label>
                    <input type="time" id="hora_llegada" wire:model="hora_llegada" name="hora_llegada"  class="form-input w-full mt-1" />
                </div>
            
                <!-- Hora de inicio -->
                <div class="mb-2">
                    <label for="hora_inicio" class="block font-medium text-gray-700">Hora de inicio</label>
                    <input type="time" id="hora_inicio" wire:model="hora_inicio" name="hora_inicio"  class="form-input w-full mt-1" />
                </div>
            
                <!-- lugar -->
                <div class="mb-2">
                    <label for="opcion" class="block font-medium text-gray-700">Lugar</label>
                    <input type="text" id="otroInput" name="otroInput" wire:model="lugar" class="form-input w-full mt-2" required />
                </div>
            
                <!-- Descripción -->
                <div class="mb-2">
                    <label for="descripcion" class="block font-medium text-gray-700">Descripción</label>
                    <textarea id="descripcion" name="descripcion" wire:model="descripcion" required class="form-textarea w-full mt-1"></textarea>
                </div>
            
                <!-- Nota -->
                <div class="mb-2">
                    <label for="nota" class="block font-medium text-gray-700">Nota</label>
                    <textarea id="nota" name="nota" wire:model="nota" class="form-textarea w-full mt-1"></textarea>
                </div>
            
                <!-- Responsable -->
                <div class="mb-6">
                    <label for="responsable" class="block font-medium text-gray-700">Responsable</label>
                    <select id="responsable" name="responsable" wire:model="responsable" required class="form-select w-full mt-1">
                        <option value="">Selecciona</option>
                        <option value="User">Jonathan Garcia</option>
                        <option value="User">Lizeth Luna</option>
                    </select>
                </div>
                
                <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Enviar</button>

            </form>

        </x-slot>
        <x-slot:footer>
        </x-slot>
    </x-dialog-modal>
</div>
