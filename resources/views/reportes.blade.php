<x-app-layout>
    <div class="flex w-full justify-center align-center align-items-center my-8">
        <div class="bg-white w-full max-w-xl rounded-lg p-8">
            <p>Crear un reporte {{$id_aplicacion}}</p><br>

            

            <form class="mx-auto" method="POST" action="{{route('enviar-reporte', $id_aplicacion)}}">
                @csrf
                <!--  Aplicacion -->
                <label for="countries" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Aplicacion</label>
                <select id="aplicacion" disabled name="aplicacion" wire:model="aplicacion" class="mb-6 bg-gray-50 border border-gray-300 text-gray-900 text-sm rounded-lg focus:ring-blue-500 focus:border-blue-500 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500">
                    @switch($id_aplicacion)
                        @case('Canal1')
                            <option value="Canal1" selected>Canal1</option>
                            <option value="Canal2">Canal2</option>
                            <option value="tele10">Tele10</option>
                            @break
                        @case('Canal2')
                            <option value="Canal1" >Canal1</option>
                            <option value="Canal2" selected>Canal2</option>
                            <option value="tele10">Tele10</option>
                            @break
                        @case('Tele10')
                            <option value="Canal1" >Canal1</option>
                            <option value="Canal2" >Canal2</option>
                            <option value="tele10" selected>Tele10</option>
                            @break
                        @default
                        
                    @endswitch
                </select> 

                <div class="relative z-0 w-full mb-5 group">
                    <input type="email" name="correo" id="correo" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="correo" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 rtl:peer-focus:left-auto peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Correo</label>
                </div>
                <div class="relative z-0 w-full mb-5 group">
                    <input type="text" name="nombre" id="nombre" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                    <label for="nombre" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Nombre</label>
                </div>

                <label for="reporte" class="block mb-2 text-sm font-medium text-gray-900 dark:text-white">Reporte</label>
                <textarea id="reporte" name="reporte" rows="4" class="mb-4 block p-2.5 w-full text-sm text-gray-900 bg-gray-50 rounded-lg border border-gray-300 focus:ring-blue-500 focus:border-blue-500 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Describe el error"></textarea>
                <x-button type="submit" class="w-full">Enviar</x-button>

                @isset($success)
                    <div class="p-4 mb-4 mt-4 text-sm text-green-800 rounded-lg bg-green-50 dark:bg-gray-800 dark:text-green-400" role="alert">
                        <span class="font-medium">Hecho!</span> El reporte se creo correctamente
                    </div>
                @endisset
            </form>
  
        </div>
    </div>
</x-app-layout>