<x-empleado>
    <div class="w-full p-6">
        <h1 class="text-2xl font-bold mb-6">Filtrar Citas de Mantenimiento</h1>

        <!-- Formulario de filtros -->
        <form action="{{ route('citas.filtros') }}" method="GET" class="mb-6 p-4 bg-gray-100 rounded-lg">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Filtro por fecha -->
                <div>
                    <label for="fecha" class="block text-base font-medium text-gray-700">Fecha de recepción limite</label>
                    <input type="date" id="fecha" name="fecha" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ request('fecha') }}">
                </div>

                <!-- Filtro por tipo de servicio -->
                <div>
                    <label for="servicio_tipo" class="block text-base font-medium text-gray-700">Tipo de Servicio</label>
                    <select id="servicio_tipo" name="servicio_tipo" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                        <option value="">Selecciona una opción</option>
                        <option value="premium" {{ request('servicio_tipo') == 'premium' ? 'selected' : '' }}>Premium</option>
                        <option value="normal" {{ request('servicio_tipo') == 'normal' ? 'selected' : '' }}>Normal</option>
                    </select>
                </div>

                <!-- Filtro por estado -->
                <div>
                    <label for="estado" class="block text-base font-medium text-gray-700">Estado</label>
                    <select id="estado" name="estado" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                        <option value="">Selecciona una opción</option>
                        <option value="1" {{ request('estado') === '1' ? 'selected' : '' }}>Terminada</option>
                        <option value="0" {{ request('estado') === '0' ? 'selected' : '' }}>No Terminada</option>
                    </select>
                </div>

                <!-- Filtro por nombre de usuario -->
                <div>
                    <label for="usuario" class="block text-base font-medium text-gray-700">Nombre del Usuario</label>
                    <input type="text" id="usuario" name="usuario" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ request('usuario') }}" placeholder="Nombre de usuario">
                </div>

                <!-- Filtro por placa -->
                <div>
                    <label for="placa" class="block text-base font-medium text-gray-700">Placa del Vehículo</label>
                    <input type="text" id="placa" name="placa" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ request('placa') }}" placeholder="Placa del vehículo">
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Filtrar</button>
                <a href="{{ route('citas.filtros') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Limpiar Filtros</a>
            </div>
        </form>

        <div class="overflow-x-auto h-full w-full">
            @if($citasFiltradas->isNotEmpty()) 
                <table class="w-full bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200 table-fixed">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Fecha de recepción</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Tipo de Servicio</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Estado</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Usuario</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Placa</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($citasFiltradas as $index => $cita)
                            <tr class="{{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-white' }} hover:bg-gray-400 transition duration-200">
                                <td class="p-4 text-gray-700 border-b">{{ $cita->fecha_entrega_cliente }}</td>
                                <td class="p-4 text-gray-700 border-b">{{ ucfirst($cita->servicio_tipo) }}</td>
                                <td class="p-4 text-gray-700 border-b">
                                    {{ $cita->estado ? 'Terminada' : 'No Terminada' }}
                                </td>
                                <td class="p-4 text-gray-700 border-b">{{ $cita->user->name ?? 'N/A' }}</td>
                                <td class="p-4 text-gray-700 border-b">{{ $cita->auto->placa ?? 'N/A' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>                
            @else
                <div class="h-full flex items-center justify-center">
                    <x-no-found>
                        <div class="h-full text-center">
                            <h1 class="mt-4 text-white text-lg">Lo sentimos,</h1>
                            <p class="font-bold text-white text-2xl">no hay mantenimientos para mostrar</p>
                        </div>
                    </x-no-found>
                </div>
            @endif
        </div>
    </div>
</x-empleado>   