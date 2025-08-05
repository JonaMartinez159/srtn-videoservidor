<div>
    <div>
        <div class="bg-white w-full rounded-lg overflow-x-auto p-4">
            <div class="hidden flex justify-items-end justify-end w-full pb-2">
                <x-button wire:click="$set('showModal', true)">Crear Nuevo</x-button>
            </div><br>

            <div class="flex w-full">
                @if($programas->toArray()==null)
    
                    <div class="w-full text-center block jusfify-center align-items-center items-center">
                        <p class="tex-center"> No Hay Datos</p>
                    </div>
                @else
                    <div class="grid md:grid-cols-3 p-4 gap-4">
                        @foreach ($programas as $key => $item)
                            
                            @livewire('EditarPrograma', ['id_programa' => $item['id']], key($key))

                        @endforeach   
                    </div>
                    
                @endif
    
            </div>
        </div>
    </div>

</div>
