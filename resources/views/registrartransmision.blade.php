<x-app-layout>
    <div class="flex justify-center items-center">
        <div class="flex md:w-[800px] w-full bg-white rounded-xl">
            <form class="p-6 rounded-lg w-full" method="POST" enctype="multipart/form-data">
                @csrf

                <!-- Tipo -->
                <div class="mb-2">
                    <label for="tipo" class="block font-medium text-gray-700">Tipo</label>
                    <select id="tipo" name="tipo" required class="form-select w-full mt-1">
                    <option value="">Selecciona</option>
                    <option value="Transmisión en vivo">Transmisión en vivo</option>
                    <option value="Grabación">Grabación</option>
                    </select>
                </div>
            
                <!-- Fecha -->
                <div class="mb-2">
                    <label for="fecha" class="block font-medium text-gray-700">Fecha</label>
                    <input type="date" id="fecha" name="fecha" required class="form-input w-full mt-1" />
                </div>
            
                <!-- Hora de llegada -->
                <div class="mb-2">
                    <label for="hora_llegada" class="block font-medium text-gray-700">Hora de llegada</label>
                    <input type="time" id="hora_llegada" name="hora_llegada"  class="form-input w-full mt-1" />
                </div>
            
                <!-- Hora de inicio -->
                <div class="mb-2">
                    <label for="hora_inicio" class="block font-medium text-gray-700">Hora de inicio</label>
                    <input type="time" id="hora_inicio" name="hora_inicio"  class="form-input w-full mt-1" />
                </div>
            
                <!-- lugar -->
                <div class="mb-2">
                    <label for="opcion" class="block font-medium text-gray-700">Lugar</label>
                    <input type="text" id="otroInput" name="otroInput" class="form-input w-full mt-2" required />
                </div>
            
                <!-- Descripción -->
                <div class="mb-2">
                    <label for="descripcion" class="block font-medium text-gray-700">Descripción</label>
                    <textarea id="descripcion" name="descripcion" required class="form-textarea w-full mt-1"></textarea>
                </div>
            
                <!-- Nota -->
                <div class="mb-2">
                    <label for="nota" class="block font-medium text-gray-700">Nota</label>
                    <textarea id="nota" name="nota" class="form-textarea w-full mt-1"></textarea>
                </div>
            
                <!-- Responsable -->
                <div class="mb-6">
                    <label for="responsable" class="block font-medium text-gray-700">Responsable</label>
                    <select id="responsable" name="responsable" required class="form-select w-full mt-1">
                        <option value="">Selecciona</option>
                        <option value="User">Jonathan Garcia</option>
                        <option value="User">Lizeth Luna</option>
                    </select>
                </div>
                
                <button type="submit" class="w-full bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700">Enviar</button>

            </form>
        </div>
    </div>
    
</x-app-layout>