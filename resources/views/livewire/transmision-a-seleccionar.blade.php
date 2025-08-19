<div>
    @isset($transmisiones_hoy)
        @if ($transmisiones_hoy->toArray() != null)
            @foreach ($transmisiones_hoy as $transmision)
                <a href="#" wire:click="verEventoSeleccionado({{$transmision->id}})">
                    <div class="flex bg-gray-100 rounded-xl p-6 mb-2">
                        <div><img src="{{asset('images/ilustracion.jpg')}}" alt="" width="50"></div>
                        <div class="block ps-2 items-center justify-center w-full">
                            <p class="text-sm">{{$transmision->tipo}}</p>
                            <p class="text-xs text-gray-800">Inicio: {{$transmision->hora_inicio}}</p>
                        </div>
                        <div class="items-end justify-end pt-2">
                            <svg class="w-6 h-6 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                            </svg>
                        </div>
                    </div>
                </a>
            @endforeach
        @else
            <div class="block">
                <div class="flex justify-center items-center p-6">
                    <div class="block">
                        <img src="{{asset('images/box.png')}}" alt="" class="w-[120px]">
                        <p class="text-sm">No hay transmisiones</p>
                    </div>
                </div>
                
            </div>
        @endif
    @endisset

</div>
