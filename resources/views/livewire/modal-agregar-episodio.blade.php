<div>
    <x-button wire:click="$set('showModal', true)">Agregar</x-button>

    
    <x-dialog-modal wire:model="showModal">
        <x-slot:title>
            Agrega Episodio
        </x-slot>
        <x-slot:content>
            <form wire:submit.prevent="agregarEpisodio" class="p-6 rounded-lg w-full"  method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Path -->
                <div class=" mb-2">
                    <label for="path" class="block text-sm font-medium text-gray-900">Path *</label>
                    <input wire:model="path" type="text" id="path" name="path" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </div>

                <!-- Streamkey -->
                <div class="mb-2">
                    <label for="streamkey" class="block text-sm font-medium text-gray-900">Streamkey *</label>
                    <input wire:model="streamkey" type="text" id="streamkey" name="streamkey" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </div>

                <!-- Nombre -->
                <div class=" mb-2">
                    <label for="nombre" class="block text-sm font-medium text-gray-900">Nombre *</label>
                    <input wire:model="nombre" type="text" id="nombre" name="nombre" required
                        class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5" />
                </div>

                <!-- Descripción -->
                <div class=" mb-2">
                    <label for="descripcion" class="block text-sm font-medium text-gray-900">Descripción</label>
                    <textarea wire:model="descripcion" id="descripcion" name="descripcion" rows="4"
                            class="bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5"></textarea>
                </div>

                
                <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Enviar</button>

            </form>

        </x-slot>
        <x-slot:footer>
        </x-slot>
    </x-dialog-modal>
</div>
