<x-usuario>
    <div class="w-full p-6">
        <div class="flex items-center justify-center">
            <h1 class="text-2xl font-bold mb-6">Añadir auto</h1>
        </div>
        <form method="POST" action="{{ route('usuario.crear-auto') }}" class="max-w-md mx-auto bg-white p-6 rounded-lg shadow-lg">
            @csrf <!-- Token de seguridad CSRF -->
            @method('POST')
            <!-- Marca -->
            <div class="mb-4">
                <label for="marca" class="block text-gray-700 font-bold mb-2">Marca</label>
                <input type="text" name="marca" id="marca" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-500" required>
                @error('marca')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Modelo -->
            <div class="mb-4">
                <label for="modelo" class="block text-gray-700 font-bold mb-2">Modelo</label>
                <input type="text" name="modelo" id="modelo" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-500" required>
                @error('modelo')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Kilometraje -->
            <div class="mb-4">
                <label for="kilometraje" class="block text-gray-700 font-bold mb-2">Kilometraje</label>
                <input type="number" name="kilometraje" id="kilometraje" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-500" required>
                @error('kilometraje')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Color -->
            <div class="mb-4">
                <label for="color" class="block text-gray-700 font-bold mb-2">Color</label>
                <input type="text" name="color" id="color" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-500" required>
                @error('color')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Placa -->
            <div class="mb-4">
                <label for="placa" class="block text-gray-700 font-bold mb-2">Placa</label>
                <input type="text" name="placa" id="placa" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-500" required>
                @error('placa')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Año de fabricación -->
            <div class="mb-4">
                <label for="anio_fabri" class="block text-gray-700 font-bold mb-2">Año de fabricación</label>
                <input type="number" name="anio_fabri" id="anio_fabri" class="w-full border-gray-300 rounded-lg shadow-sm focus:ring focus:ring-blue-500" required>
                @error('anio_fabri')
                <span class="text-red-500 text-sm">{{ $message }}</span>
                @enderror
            </div>
            
            <!-- Botón -->
            <div class="text-center">
                <div class="flex justify-around">
                    <button type="submit" class="bg-blue-500 text-white py-2 px-4 rounded-lg hover:bg-blue-600 transition">
                        Registrar Auto
                    </button>
                    
                    <a href="{{ route('usuario.welcome') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Regresar</a>
                </div>
            </div>
        </form>
    </div>
    
</x-usuario>