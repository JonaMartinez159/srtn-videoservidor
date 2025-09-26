<div wire:poll.15s>
        @hasrole(['admin', 'pauta'])
        <div class="bg-white rounded-lg w-full mb-4 p-8">
            <div class="grid md:grid-cols-3 p-4 gap-4">

                @if ($servicios_en_uso->toArray() != null)
                    @foreach ($servicios_en_uso as $servicio)
                        <div class="bg-white h-auto border border-gray-200 rounded-lg shadow-lg dark:bg-gray-800 dark:border-gray-700">
                            <a href="{{ route('ver_servicio', $servicio->id) }}">
                                @if ($servicio->aplicacion == 'Programas')
                                    <img class="rounded-t-lg" src="{{ asset('images/programas.jpg') }}" alt="" />
                                @else
                                    <img class="rounded-t-lg" src="{{ asset('images/ocasionales.jpg') }}" alt="" />
                                @endif
                            </a>
                            <div class="p-5">
                                <a href="/ver/show?sk={{$servicio->servicio_key}}" target="_blank">
                                    <h5 class="font-bold tracking-tight text-gray-900 dark:text-white">{{$servicio->nombre}}</h5>
                                </a>
                                <p class="text-xs mb-2">{{$servicio->aplicacion}}</p>
                                @livewire('ChekServicioDisponibilidad', ['id_servicio' => $servicio->id], key($servicio->id))
                                
                                <p class="mb-3 pt-2 font-normal text-gray-700 dark:text-gray-400 text-sm">{{$servicio->descripcion}}</p>
                            </div>
                        </div>      
                    @endforeach
                @else
                    <div class="col-span-3 w-full flex items-center justify-center">
                        <p class="bold-xl text-sm">No Hay Transmisiones En Vivo Actualmente</p>
                    </div>
                @endif
            </div>
        </div>
    @endhasrole
</div>
