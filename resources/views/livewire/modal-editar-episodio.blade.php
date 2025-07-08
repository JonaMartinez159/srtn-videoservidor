<div>
    <div class="flex items-start">
        <button wire:click="$set('showModal', true)" class="pt-1">
            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M11.32 6.176H5c-1.105 0-2 .949-2 2.118v10.588C3 20.052 3.895 21 5 21h11c1.105 0 2-.948 2-2.118v-7.75l-3.914 4.144A2.46 2.46 0 0 1 12.81 16l-2.681.568c-1.75.37-3.292-1.263-2.942-3.115l.536-2.839c.097-.512.335-.983.684-1.352l2.914-3.086Z" clip-rule="evenodd"/>
                <path fill-rule="evenodd" d="M19.846 4.318a2.148 2.148 0 0 0-.437-.692 2.014 2.014 0 0 0-.654-.463 1.92 1.92 0 0 0-1.544 0 2.014 2.014 0 0 0-.654.463l-.546.578 2.852 3.02.546-.579a2.14 2.14 0 0 0 .437-.692 2.244 2.244 0 0 0 0-1.635ZM17.45 8.721 14.597 5.7 9.82 10.76a.54.54 0 0 0-.137.27l-.536 2.84c-.07.37.239.696.588.622l2.682-.567a.492.492 0 0 0 .255-.145l4.778-5.06Z" clip-rule="evenodd"/>
                </svg>                                          
        </button>
        @if ($en_demanda->en_demanda == "1")
        
            <button wire:click="ponerEnDemanda" class="pt-1">
                <svg class="w-6 h-6 text-blue-400 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M19.003 3A2 2 0 0 1 21 5v2h-2V5.414L17.414 7h-2.828l2-2h-2.172l-2 2H9.586l2-2H9.414l-2 2H3V5a2 2 0 0 1 2-2h14.003ZM3 9v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9H3Zm2-2.414L6.586 5H5v1.586Zm4.553 4.52a1 1 0 0 1 1.047.094l4 3a1 1 0 0 1 0 1.6l-4 3A1 1 0 0 1 9 18v-6a1 1 0 0 1 .553-.894Z" clip-rule="evenodd"/>
                </svg>                                                   
            </button>
        @else
            <button wire:click="ponerEnDemanda" class="pt-1">
                <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                    <path fill-rule="evenodd" d="M19.003 3A2 2 0 0 1 21 5v2h-2V5.414L17.414 7h-2.828l2-2h-2.172l-2 2H9.586l2-2H9.414l-2 2H3V5a2 2 0 0 1 2-2h14.003ZM3 9v10a2 2 0 0 0 2 2h14a2 2 0 0 0 2-2V9H3Zm2-2.414L6.586 5H5v1.586Zm4.553 4.52a1 1 0 0 1 1.047.094l4 3a1 1 0 0 1 0 1.6l-4 3A1 1 0 0 1 9 18v-6a1 1 0 0 1 .553-.894Z" clip-rule="evenodd"/>
                </svg>                                                   
            </button>
        @endif
        
    </div>

    

    <x-dialog-modal wire:model="showModal">
        <x-slot:title>
            Crear Servicio
        </x-slot>
        <x-slot:content>
            <form wire:submit.prevent="actualizarGrabacion" class="p-6 rounded-lg w-full"  method="POST" enctype="multipart/form-data">
                @csrf
                
                <!-- Nombre del servicio -->
                <label for="nombre" class="block font-medium">Nombre del episodio:</label>
                <input type="text" wire:model="nombre" id="nombre" name="nombre" required minlength="3" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-300">
                @error('nombre') <span class="error">{{ $message }}</span> @enderror
                
                <!-- Descripción -->
                <label for="descripcion" class="block font-medium mt-3">Descripción:</label>
                <textarea id="descripcion" wire:model="descripcion" name="descripcion" rows="3" class="w-full px-3 py-2 border rounded-lg focus:ring focus:ring-blue-300"></textarea>

                <!--  miniatura -->
                <label for="miniatura" class="block font-medium mt-3">Miniatura:</label>
                <input id="miniatura"  type="file">

                <div class="flex w-full justify-center items-stretch py-2 mt-4">
                    <x-button wire:loading.attr="disabled" type="submit" class="text-center w-full">Editar</x-button>
                </div>
            </form>

        </x-slot>
        <x-slot:footer>
        </x-slot>
    </x-dialog-modal>
</div>
