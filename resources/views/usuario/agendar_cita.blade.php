<x-usuario>
    <div class="flex items-center justify-center">
        <div class="container px-10">
            <div class="bg-white shadow-lg rounded-lg w-full p-10 my-10 mx-10">
                <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">Agendar Cita</h2>
                <!-- Formulario -->
                <form action="{{ route('usuario.crear-cita') }}" method="POST" class="grid grid-cols-2 gap-4">
                    @csrf
                
                    <!-- Motivo -->
                    <div class="col-span-2">
                        <label for="motivo" class="block text-sm font-medium text-gray-700">Descripción del problema</label>
                        <textarea id="motivo" name="motivo" rows="4"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-700"
                            required placeholder="Ingrese una descripción de su problema"></textarea>
                    </div>
                
                    <!-- Categoría -->
                    <div>
                        <label for="categoria" class="block text-sm font-medium text-gray-700">Tipo de Servicio</label>
                        <select id="categoria" name="categoria" class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-700" required>
                            <option value="">Seleccione un servicio</option>
                            <option value="Electricidad">Electricidad</option>
                            <option value="Mecanica">Mecanica</option>
                            <option value="Planchado">Planchado</option>
                            <option value="General">General</option>
                            <option value="Preventivo">Preventivo</option>
                        </select>
                    </div>
                    <!-- Tipo de Servicio -->
                
                    <div>
                        <label for="servicio_tipo" class="block text-sm font-medium text-gray-700">Categoría</label>
                        <select id="servicio_tipo" name="servicio_tipo"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-700"
                            required>
                            <option value="">Seleccione una categoría</option>
                            <option value="normal">Normal</option>
                            <option value="premium">Premium</option>
                        </select>
                    </div>
                
                    <!-- Auto -->
                    <div class="col-span-2">
                        <label for="auto" class="block text-sm font-medium text-gray-700">Auto</label>
                        <select name="auto_id" id="auto"
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-700"
                            required>
                            <option value="">Seleccione uno de sus autos</option>
                            @foreach ($autos as $auto)
                                <option value="{{ $auto->id }}">{{ $auto->marca }} {{ $auto->modelo }}</option>
                            @endforeach
                        </select>
                    </div>                    
                
                    <!-- Botones -->
                    <div class="col-span-2 flex justify-center">
                        <button type="submit"
                            class="bg-red-600 text-white py-2 px-4 rounded-md mr-3 shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                            Agendar Cita
                        </button>
                        <a href="{{ route('usuario.welcome') }}"
                            class="bg-gray-600 text-white py-2 px-4 rounded-md ml-3 shadow-md hover:bg-gray-700 focus:outline-none focus:ring-2 focus:ring-gray-500 focus:ring-offset-2">
                            Regresar
                        </a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const autoSelect = document.getElementById('auto'); // Selecciona el elemento con ID "auto"
    
            autoSelect.addEventListener('click', function () {
                // Convertir las opciones en un array y mostrarlo en la consola
                const optionsArray = Array.from(autoSelect.options);
                console.log(optionsArray); // Muestra todo el array de opciones
    
                // Verificar si hay opciones distintas a la predeterminada
                const hasOptions = optionsArray.some(option => option.value !== "");
    
                if (!hasOptions) {
                    alert("No tiene autos registrados. Será redirigido a la página para registrar un auto.");
                    
                    // Redirigir a la página de registrar autos
                    window.location.href = "{{ route('usuario.anadir-auto') }}";
                }
            });
        });
    </script>
</x-usuario>