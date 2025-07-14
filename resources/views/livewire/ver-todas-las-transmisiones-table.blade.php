<div class="overflow-x-auto">
    <table class="w-full lg:text-sm text-xs  text-left rtl:text-left text-gray-500 dark:text-gray-400">
        <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Fecha
                </th>
                <th scope="col" class="px-6 py-3">
                    Lugar
                </th>
                <th scope="col" class="px-6 py-3">
                    Responsable
                </th>
                <th scope="col" class="px-6 py-3">
                    Descripción
                </th>
                <th scope="col" class="px-6 py-3">
                    Hora Inicio
                </th>
                <th scope="col" class="px-6 py-3">
                    Acciones
                </th>
            </tr>
        </thead>
        <tbody>
            @foreach ($transmisiones as $item)
                
                <tr class="odd:bg-white odd:dark:bg-gray-900 even:bg-gray-50 even:dark:bg-gray-800 border-b dark:border-gray-700 border-gray-200">
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <p>{{ $item['fecha'] }} </p>
                    </th>
                    <th scope="row" class="px-6 py-4 font-medium text-gray-900 whitespace-nowrap dark:text-white">
                        <p>{{ $item['lugar'] }} </p>
                    </th>
                    <td class="px-6 py-4">
                        <p>{{ $item['responsable']; }}</p>
                    </td>
                    <td class="px-6 py-4">
                        <p>{{ $item['descripcion']; }}</p>
                    </td>
                    <td class="px-6 py-4">
                        @if ($item['hora_inicio']==null)
                            <p>Indefinido</p>
                        @else
                        <p>{{ $item['hora_inicio']; }}</p>
                        @endif
                    </td>
                    <td class="px-6 py-4" >
                        @livewire('AccionesDeTransmisionesTable', ['id_transmision' => $item['id']], key($item['id']))
                    </td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
