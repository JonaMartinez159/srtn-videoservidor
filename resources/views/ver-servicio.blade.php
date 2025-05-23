<x-app-layout>
    <div class="grid md:grid-cols-2 gap-6 mb-4">
        <div class="bg-white">
            <iframe src="{{ $datos_de_servicio['enlace_consumo_web']}}" frameborder="0" class="w-full h-full"></iframe>
            
            <!-- 
            <div class="relative overflow-x-auto">
                <table class="w-full text-sm text-left rtl:text-right text-gray-500 dark:text-gray-400">
                    <tbody>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Resolucion
                            </th>
                            <td class="text-end px-8 py-4">
                                1920x1080
                            </td>
                        </tr>
                        <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700 border-gray-200">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Bitrate
                            </th>
                            <td class="text-end px-8 py-4">
                                2500Mb/s
                            </td>
                        </tr>
                        <tr class="bg-white dark:bg-gray-800">
                            <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                                Audio
                            </th>
                            <td class="text-end px-8 py-4">
                                48Khz 2C
                            </td>
                        </tr>
                    </tbody>
                </table>
                
            </div>
            -->
        </div>
        
        <div class="w-full">      
            @livewire('EnlacesDeServicio', ['datos_de_servicio' => $datos_de_servicio])
            
        </div>
        
    </div>  

    <div class="overflow-x-auto shadow-md sm:rounded-lg bg-white p-6">
        <p>Estadisticas</p>

        @livewire('StreamStat')
    </div>
    
</x-app-layout>
