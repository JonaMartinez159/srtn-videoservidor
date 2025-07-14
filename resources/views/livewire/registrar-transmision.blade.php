<div>
    <button wire:click="$set('showModal', true)" class="inline-flex justify-center items-center py-2.5 px-5 text-base font-medium text-center text-white rounded-lg bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300 dark:focus:ring-blue-900">
        Registrar Transmision
        <svg class="w-3.5 h-3.5 ms-2 rtl:rotate-180" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 14 10">
            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M1 5h12m0 0L9 1m4 4L9 9"/>
        </svg>
    </button>

    <x-dialog-modal wire:model="showModal">
        <x-slot:title>
            Registrar Transmision
        </x-slot>
        <x-slot:content>
            <form wire:submit.prevent="registrarTransmision" class="p-6 rounded-lg w-full"  method="POST" enctype="multipart/form-data">
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


