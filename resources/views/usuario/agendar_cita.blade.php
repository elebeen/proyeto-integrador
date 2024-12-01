<x-usuario>
    <div class="min-h-screen flex items-center justify-center">
        <div class="bg-white shadow-lg rounded-lg p-8 w-full max-w-lg">
            <h2 class="text-2xl font-semibold text-gray-800 text-center mb-6">Agendar Cita</h2>

            <!-- Formulario -->
            <form action="{{ route('usuario.crear-cita') }}" method="POST" class="space-y-4">
                @csrf

                <!-- Motivo -->
                <div>
                    <label for="motivo" class="block text-sm font-medium text-gray-700">Motivo</label>
                    <textarea id="motivo" name="motivo" rows="4" 
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-700" required></textarea>
                </div>

                <!-- Tipo de Servicio -->
                <div>
                    <label for="servicio_tipo" class="block text-sm font-medium text-gray-700">Tipo de Servicio</label>
                    <select id="servicio_tipo" name="servicio_tipo"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-700" required>
                        <option value="">Seleccione un servicio</option>
                        <option value="Electricidad">Electricidad</option>
                        <option value="Mecanica">Mecánica</option>
                        <option value="Planchado">Planchado</option>
                        <option value="General">General</option>
                    </select>
                </div>

                <!-- Categoría -->
                <div>
                    <label for="categoria" class="block text-sm font-medium text-gray-700">Categoría</label>
                    <select id="categoria" name="categoria"
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-700" required>
                        <option value="">Seleccione una categoría</option>
                        <option value="normal">Normal</option>
                        <option value="premium">Premium</option>
                    </select>
                </div>

                <!-- Auto -->
                <div>
                    <label for="auto" class="block text-sm font-medium text-gray-700">Auto</label>
                    <input type="number" id="auto" name="auto" placeholder=""
                        class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:border-indigo-500 focus:ring-indigo-500 text-gray-700" required>
                </div>

                <!-- Botones -->
                <div class="flex justify-around">
                    <button type="submit"
                        class="bg-red-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Agendar Cita
                    </button>
                    <button type="submit"
                        class="bg-red-600 text-white py-2 px-4 rounded-md shadow-md hover:bg-red-700 focus:outline-none focus:ring-2 focus:ring-indigo-500 focus:ring-offset-2">
                        Regresar
                    </button>
                </div>
            </form>
        </div>
    </div>
</x-usuario>