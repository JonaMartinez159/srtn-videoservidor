<div>
    <div id="info_evento" class="w-full h-screen bg-white rounded-xl">
        @if ($id_evento != '0')
            <div class="flex p-6 w-full">
                <div> 
                    <p class="text-lg text-blue-700"><b>{{$transmision_data[0]['tipo']}}</b></p>
                </div>
            </div>

            <!-- body -->
            <div class="grid md:grid-cols-2 ">
                <div class="p-8">
                    
                    <!-- creado por -->
                    <div class="w-full bg-white rounded-lg">
                        <div class="flex flex-col items-center pb-10">
                            <img class="w-24 h-24 mb-3 rounded-full" src="/docs/images/people/profile-picture-3.jpg" alt="Bonnie image"/>
                            <h5 class="mb-1 text-xl font-medium text-gray-900 dark:text-white">Bonnie Green</h5>
                            <span class="text-sm text-gray-500 dark:text-gray-400">Creado Por</span>
                        </div>
                    </div>

                    <!-- formulario -->
                    <span class="mb-1 bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">Info General</span>
                    <form class="mx-auto p-3">
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" value="{{$transmision_data[0]['descripcion']}}" name="floating_password" id="floating_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Descripcion</label>
                        </div>
                        <div class="relative z-0 w-full mb-5 group">
                            <input type="text" value="{{$transmision_data[0]['tipo']}}" name="repeat_password" id="floating_repeat_password" class="block py-2.5 px-0 w-full text-sm text-gray-900 bg-transparent border-0 border-b-2 border-gray-300 appearance-none dark:text-white dark:border-gray-600 dark:focus:border-blue-500 focus:outline-none focus:ring-0 focus:border-blue-600 peer" placeholder=" " required />
                            <label for="floating_repeat_password" class="peer-focus:font-medium absolute text-sm text-gray-500 dark:text-gray-400 duration-300 transform -translate-y-6 scale-75 top-3 -z-10 origin-[0] peer-focus:start-0 rtl:peer-focus:translate-x-1/4 peer-focus:text-blue-600 peer-focus:dark:text-blue-500 peer-placeholder-shown:scale-100 peer-placeholder-shown:translate-y-0 peer-focus:scale-75 peer-focus:-translate-y-6">Tipo</label>
                        </div>
                    </form><br>

                    <!-- Encargado -->
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">Encargado</span>
                    <div class="flex items-center gap-4 p-3">
                        <img class="w-10 h-10 rounded-full" src="/docs/images/people/profile-picture-5.jpg" alt="">
                        <div class="font-medium dark:text-white">
                            <div>{{$transmision_data[0]['responsable']}}</div>
                            <div class="text-sm text-gray-500 dark:text-gray-400">Cargo</div>
                        </div>
                    </div><br>

                    <!-- Personal convocado -->
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">Personal Convocado</span>
                    <div class="flex -space-x-4 rtl:space-x-reverse p-3">
                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/docs/images/people/profile-picture-5.jpg" alt="">
                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/docs/images/people/profile-picture-2.jpg" alt="">
                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/docs/images/people/profile-picture-3.jpg" alt="">
                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/docs/images/people/profile-picture-4.jpg" alt="">
                    </div><br>

                    <!-- Requerimientos -->
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">Requerimientos</span>
                    <div class="flex -space-x-4 rtl:space-x-reverse p-3">
                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/docs/images/people/profile-picture-5.jpg" alt="">
                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/docs/images/people/profile-picture-2.jpg" alt="">
                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/docs/images/people/profile-picture-3.jpg" alt="">
                        <img class="w-10 h-10 border-2 border-white rounded-full dark:border-gray-800" src="/docs/images/people/profile-picture-4.jpg" alt="">
                    </div>
                </div>

                <div>
                    <!-- Ubicacion -->
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">Ubicacion</span>
                    <div class="p-3">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3711.936905775404!2d-104.8949786241184!3d21.510191171068108!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x842736fe21bb980b%3A0x6269bd642952ee1d!2sCinco%20Pueblos%20Casa%20De%20Artesanias!5e0!3m2!1ses!2smx!4v1755640195994!5m2!1ses!2smx" class="w-full h-[400px]" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div><br>

                    <!-- Fotografias -->
                    <span class="bg-blue-100 text-blue-800 text-xs font-medium me-2 px-2.5 py-0.5 rounded-sm dark:bg-blue-900 dark:text-blue-300">Fotografias</span>
                    <div class="p-3">

                    </div>
                </div>
            </div>
        @else
            <div class="w-full h-full">
                <div class="flex justify-center items-center h-full">
                    <div class="block justify-center align-items-center align-center text-center">
                        <img src="{{asset('images/ilustracion.jpg')}}" alt="" class="max-w-xs">
                        <p>Selecciona una transmision del calendario</p>
                    </div>
                </div>
            </div>
        @endif
        
    </div>

</div>
