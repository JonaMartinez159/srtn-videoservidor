<div>
    <div class="bg-white rounded-lg w-full">
        <div class="grid md:grid-cols-6 w-full">
            <div class=" md:col-span-2 md:pt-8 p-8 border-r-2 border-gray-100 w-full">
                


                <div>
                    <div class="py-5 rounded-lg dark:bg-gray-800 dark:border-gray-700">
                        <div class="flex w-full md:px-7 py-2">
                            <div class="w-full">
                                <button class="bg-blue-50 rounded-full p-2" wire:click="atrazarMes">
                                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m15 19-7-7 7-7"/>
                                    </svg>
                                </button>
                            </div>
                            <div class="flex w-full justify-start">
                                <time class="text-lg ps-8 font-medium text-gray-900 dark:text-white">{{ $nombreDelMes }}</time>
                            </div>
                            <div class="flex w-full justify-end">
                                <button class="bg-blue-50 rounded-full p-2" wire:click="avanzarMes">
                                    <svg class="w-4 h-4 text-gray-800 dark:text-white" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="m9 5 7 7-7 7"/>
                                    </svg>
                                </button>
                            </div>
                        </div>

                        <ol class="mt-3 divide-y divide-gray-200 dark:divide-gray-700">
                            @foreach ($transmisiones_mes as $transmision)
                                <li wire:key="{{ $transmision->id }}" class="cursor-pointer">
                                    <a  wire:click="eventoSeleccionado(' {{ $transmision->id }} ')" class="items-center block p-7 sm:flex hover:bg-gray-100 dark:hover:bg-gray-700">
                                        <!-- <img class="w-12 h-12 mb-3 me-3 rounded-full sm:mb-0" src="/docs/images/people/profile-picture-4.jpg" alt="Laura Romeros image"/> -->
                                        <div class="text-gray-600 dark:text-gray-400">
                                            <div class="text-base font-normal"><span class="font-medium text-gray-900 dark:text-white">{{ $transmision->nombre }}</span></div>
                                            <div class="text-sm font-normal"> {{ $transmision->descripcion }} </div>
                                            <span class="inline-flex items-center text-xs font-normal text-gray-500 dark:text-gray-400">
                                                <svg class="w-2.5 h-2.5 me-1" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 20 20">
                                                    <path d="m2 13.587 3.055-3.055A4.913 4.913 0 0 1 5 10a5.006 5.006 0 0 1 5-5c.178.008.356.026.532.054l1.744-1.744A8.973 8.973 0 0 0 10 3C4.612 3 0 8.336 0 10a6.49 6.49 0 0 0 2 3.587Z"/>
                                                    <path d="m12.7 8.714 6.007-6.007a1 1 0 1 0-1.414-1.414L11.286 7.3a2.98 2.98 0 0 0-.588-.21l-.035-.01a2.981 2.981 0 0 0-3.584 3.583c0 .012.008.022.01.033.05.204.12.401.211.59l-6.007 6.007a1 1 0 1 0 1.414 1.414L8.714 12.7c.189.091.386.162.59.211.011 0 .021.007.033.01a2.981 2.981 0 0 0 3.584-3.584c0-.012-.008-.023-.011-.035a3.05 3.05 0 0 0-.21-.588Z"/>
                                                    <path d="M17.821 6.593 14.964 9.45a4.952 4.952 0 0 1-5.514 5.514L7.665 16.75c.767.165 1.55.25 2.335.251 6.453 0 10-5.258 10-7 0-1.166-1.637-2.874-2.179-3.407Z"/>
                                                </svg>
                                                {{ $transmision->fecha }}
                                            </span> 
                                        </div>
                                    </a>
                                </li>
                            @endforeach

                        </ol>
                    </div>
                </div>

            </div>

            <div class="md:col-span-4">
                @livewire('InformacionDeEventoDeCalendario')
            </div>
        </div>
    </div>
    
</div>