<x-empleado>
    <div class="w-full p-6">
        <h1 class="text-2xl font-bold mb-6">Filtrar Citas de Mantenimiento</h1>

        <!-- Formulario de filtros -->
        <form action="{{ route('citas.filtros') }}" method="GET" class="mb-6 p-4 bg-gray-100 rounded-lg">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Filtro por fecha -->
                <div>
                    <label for="fecha" class="block text-sm font-medium text-gray-700">Fecha de Entrega</label>
                    <input type="date" id="fecha" name="fecha" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ request('fecha') }}">
                </div>

                <!-- Filtro por tipo de servicio -->
                <div>
                    <label for="servicio_tipo" class="block text-sm font-medium text-gray-700">Tipo de Servicio</label>
                    <select id="servicio_tipo" name="servicio_tipo" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                        <option value="">Selecciona una opción</option>
                        <option value="premium" {{ request('servicio_tipo') == 'premium' ? 'selected' : '' }}>Premium</option>
                        <option value="normal" {{ request('servicio_tipo') == 'normal' ? 'selected' : '' }}>Normal</option>
                    </select>
                </div>

                <!-- Filtro por estado -->
                <div>
                    <label for="estado" class="block text-sm font-medium text-gray-700">Estado</label>
                    <select id="estado" name="estado" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                        <option value="">Selecciona una opción</option>
                        <option value="1" {{ request('estado') === '1' ? 'selected' : '' }}>Terminada</option>
                        <option value="0" {{ request('estado') === '0' ? 'selected' : '' }}>No Terminada</option>
                    </select>
                </div>

                <!-- Filtro por nombre de usuario -->
                <div>
                    <label for="usuario" class="block text-sm font-medium text-gray-700">Nombre del Usuario</label>
                    <input type="text" id="usuario" name="usuario" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ request('usuario') }}" placeholder="Nombre de usuario">
                </div>

                <!-- Filtro por placa -->
                <div>
                    <label for="placa" class="block text-sm font-medium text-gray-700">Placa del Vehículo</label>
                    <input type="text" id="placa" name="placa" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ request('placa') }}" placeholder="Placa del vehículo">
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Filtrar</button>
                <a href="{{ route('citas.filtros') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Limpiar Filtros</a>
            </div>
        </form>

        <div class="w-full">
            <div class="h-full">
                @forelse($citasFiltradas as $cita)
                    <div class="overflow-x-auto">
                        <table class="w-full bg-white rounded-lg shadow-lg">
                            <thead class="bg-gray-200">
                                <tr>
                                    <th class="p-4 text-left">Fecha de Entrega</th>
                                    <th class="p-4 text-left">Tipo de Servicio</th>
                                    <th class="p-4 text-left">Estado</th>
                                    <th class="p-4 text-left">Usuario</th>
                                    <th class="p-4 text-left">Placa del Vehículo</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="border-b border-gray-200">
                                    <td class="p-4">{{ $cita->fecha_entrega_cliente }}</td>
                                    <td class="p-4">{{ ucfirst($cita->servicio_tipo) }}</td>
                                    <td class="p-4">{{ $cita->estado ? 'Terminada' : 'No Terminada' }}</td>
                                    <td class="p-4">{{ $cita->user->name ?? 'N/A' }}</td>
                                    <td class="p-4">{{ $cita->auto->placa ?? 'N/A' }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                @empty
                    <x-no-found>
                        <div class="min-h-80">
                            <h1 class="mt-4 text-white text-lg">Lo sentimos,</h1>
                            <p class="font-bold text-white text-2xl">no hay mantenimientos para mostrar</p>
                        </div>
                    </x-no-found>
                @endforelse
            </div>
        </div>
        <!-- Tabla de citas filtradas -->
    </div>
</x-empleado>   