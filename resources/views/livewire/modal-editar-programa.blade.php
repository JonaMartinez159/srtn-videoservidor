<div>
    <button wire:click="$set('showModalEditar', true)" class="inline-flex items-center px-3 me-1 py-2 text-sm font-medium text-center text-white bg-blue-700 rounded-lg hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">
        Editar
    </button>

    <x-dialog-modal wire:model="showModalEditar">
        <x-slot:title>
            Crear Servicio
        </x-slot>
        <x-slot:content>
            <form wire:submit.prevent="actualizarPrograma" class="p-6 rounded-lg w-full"  method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Nombre del servicio -->
                <label for="nombre" class="block font-medium">Nombre del programa:</label>
                <input type="text" wire:model="nombre" id="nombre" name="nombre" required minlength="3" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-300">
                @error('nombre') <span class="error">{{ $message }}</span> @enderror
                
                <!-- Descripción -->
                <label for="descripcion" class="block font-medium mt-3">Descripción</label>
                <textarea id="descripcion" wire:model="descripcion" name="descripcion" rows="3" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-300"></textarea>

                <!--  miniatura -->
                <label for="miniatura" class="block font-medium mt-3">Banner:</label>
                <input id="miniatura" wire:model="foto" wire.ignore type="file">

                <div class="flex w-full justify-center items-stretch py-2 mt-4">
                    <x-button wire:loading.attr="disabled" type="submit" class="text-center w-full">Editar</x-button>
                </div>
            </form>

        </x-slot>
        <x-slot:footer>
        </x-slot>
    </x-dialog-modal>
</div>
