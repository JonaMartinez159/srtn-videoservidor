<x-app-layout>
    <div class="overflow-x-auto shadow-md sm:rounded-lg bg-white">
        <table class="w-full text-sm text-left rtl:text-left text-gray-500 dark:text-gray-400">
            <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
                <tr>
                    <th scope="col" class="px-6 py-3">
                        Nombre
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Estado
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Categoria
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Ultima Publicacion
                    </th>
                    <th scope="col" class="px-6 py-3">
                        Acciones
                    </th>
                </tr>
            </thead>
            <tbody>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Canal1
                    </th>
                    <td class="px-6 py-4">
                        <div class="flex">
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-1 mt-1"></div>Funcionando
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        Uso General
                    </td>
                    <td class="px-6 py-4">
                        No hay datos
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-start">
                            <div>
                                <button id="dropdownMenuIconButton-1" data-dropdown-toggle="dropdownDots-1" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                    <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                    </svg>
                                    </button>
                                    
                                    <!-- Dropdown menu -->
                                    <div id="dropdownDots-1" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton-1">
                                        <li>
                                            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logs</a>
                                        </li>
                                        <li>
                                            <a href="{{route('reporte', ['id_aplicacion'=>'Canal1'])}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reportar Bugs</a>
                                        </li>
                                        </ul>
                                        <div class="py-2">
                                            <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" disabled>Reiniciar</a>
                                        </div>
                                        
                                
                                    </div>
                                
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Canal2
                    </th>
                    <td class="px-6 py-4">
                        <div class="flex">
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-1 mt-1"></div>Funcionando
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        Uso General
                    </td>
                    <td class="px-6 py-4">
                        No hay datos
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-start">
                            <div>
                                <button id="dropdownMenuIconButton-2" data-dropdown-toggle="dropdownDots-2" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                    <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                    </svg>
                                    </button>
                                    
                                    <!-- Dropdown menu -->
                                    <div id="dropdownDots-2" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton-2">
                                        <li>
                                            <a class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logs</a>
                                        </li>
                                        <li>
                                            <a href="{{route('reporte', ['id_aplicacion'=>'Canal2'])}}" wire:navigate class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reportar Bugs</a>
                                        </li>
                                        </ul>
                                        <div class="py-2">
                                            <a class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" disabled="disabled">Reiniciar</a>
                                        </div>
                                        
                                
                                    </div>
                                
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        Tele10
                    </th>
                    <td class="px-6 py-4">
                        <div class="flex">
                            <div class="h-2.5 w-2.5 rounded-full bg-green-500 me-1 mt-1"></div>Funcionando
                        </div>
                    </td>
                    <td class="px-6 py-4">
                        Permanente
                    </td>
                    <td class="px-6 py-4">
                        Hoy
                    </td>
                    <td class="px-6 py-4">
                        <div class="flex items-start">
                            <div>
                                <button id="dropdownMenuIconButton-3" data-dropdown-toggle="dropdownDots-3" class="inline-flex items-center p-2 text-sm font-medium text-center text-gray-900 rounded-lg hover:bg-gray-100 focus:ring-4 focus:outline-none dark:text-white focus:ring-gray-50 dark:bg-gray-800 dark:hover:bg-gray-700 dark:focus:ring-gray-600" type="button">
                                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="currentColor" viewBox="0 0 4 15">
                                    <path d="M3.5 1.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 6.041a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Zm0 5.959a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0Z"/>
                                    </svg>
                                    </button>
                                    
                                    <!-- Dropdown menu -->
                                    <div id="dropdownDots-3" class="z-10 hidden bg-white divide-y divide-gray-100 rounded-lg shadow-sm w-44 dark:bg-gray-700 dark:divide-gray-600">
                                        <ul class="py-2 text-sm text-gray-700 dark:text-gray-200" aria-labelledby="dropdownMenuIconButton-3">
                                        <li>
                                            <a  class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Logs</a>
                                        </li>
                                        <li>
                                            <a href="{{route('reporte', ['id_aplicacion'=>'Tele10'])}}" class="block px-4 py-2 hover:bg-gray-100 dark:hover:bg-gray-600 dark:hover:text-white">Reportar Bugs</a>
                                        </li>
                                        </ul>
                                        <div class="py-2">
                                            <a  class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:hover:bg-gray-600 dark:text-gray-200 dark:hover:text-white" disabled="disabled">Reiniciar</a>
                                        </div>
                                        
                                
                                    </div>
                                
                                </button>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>

</x-app-layout>

