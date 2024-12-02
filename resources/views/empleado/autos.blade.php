<x-empleado>
    <div class="w-full p-6">
        <h1 class="text-2xl font-bold mb-6">Todos los autos</h1>

        <form action="{{ route('autos.filtros') }}" method="GET" class="mb-6 p-4 bg-gray-100 rounded-lg">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Filtro por marca -->
                <div>
                    <label for="marca" class="block text-base font-medium text-gray-700">Marca</label>
                    <input type="text" id="marca" name="marca" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ request('marca') }}" placeholder="Ejemplo: Mercedes">
                </div>
                
                <!-- Filtro por modelo -->
                <div>
                    <label for="modelo" class="block text-base font-medium text-gray-700">Modelo</label>
                    <input type="text" id="modelo" name="modelo" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ request('modelo') }}" placeholder="Ejemplo: x300">
                </div>
                
                <!-- Filtro por color -->
                <div>
                    <label for="color" class="block text-base font-medium text-gray-700">Color</label>
                    <input type="text" id="color" name="color" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ request('color') }}" placeholder="Ejemplo: azul">
                </div>

                <!-- Filtro por placa -->
                <div>
                    <label for="placa" class="block text-base font-medium text-gray-700">Placa</label>
                    <input type="text" id="placa" name="placa" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ request('placa') }}" placeholder="Ejemplo: zzz-123">
                </div>

                <!-- Filtro por año de fabricacion -->
                <div>
                    <label for="anio_fabri" class="block text-base font-medium text-gray-700">Año de fabricación</label>
                    <input type="number" id="anio_fabri" name="anio_fabri" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ request('anio_fabri') }}" placeholder="Filtrar autos con fechas de fabricacion anteriores a la indicada">
                </div>

                <!-- Filtro por usuarios -->
                <div>
                    <label for="usuario" class="block text-base font-medium text-gray-700">Cliente</label>
                    <input type="text" id="usuario" name="usuario" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ request('usuario') }}" placeholder="Ejemplo: juan">
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Filtrar</button>
                <a href="{{ route('autos.filtros') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Limpiar Filtros</a>
            </div>
        </form>
        
        <div class="overflow-x-auto h-full w-full">
            @if($autos->isNotEmpty())
            <table class="w-full bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200 table-fixed">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-6 py-3 text-left font-semibold uppercase tracking-wider">Marca</th>
                            <th class="px-6 py-3 text-left font-semibold uppercase tracking-wider">Modelo</th>
                            <th class="px-6 py-3 text-left font-semibold uppercase tracking-wider">Kilometraje</th>
                            <th class="px-6 py-3 text-left font-semibold uppercase tracking-wider">Color</th>
                            <th class="px-6 py-3 text-left font-semibold uppercase tracking-wider">Placa</th>
                            <th class="px-6 py-3 text-left font-semibold uppercase tracking-wider">Año de fabricación</th>
                            <th class="px-6 py-3 text-left font-semibold uppercase tracking-wider">Cliente</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($autos as $index => $auto)
                            <tr class="{{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-white' }} hover:bg-gray-300 transition duration-200">
                                <td class="px-6 py-4 border-b text-white">
                                    <span class="px-3 py-1 bg-green-600 rounded-full text-sm font-medium">
                                        {{ $auto->marca }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 border-b text-gray-700">{{ $auto->modelo }}</td>
                                <td class="px-6 py-4 border-b text-gray-700">{{ $auto->kilometraje }}</td>
                                <td class="px-6 py-4 border-b text-gray-700">{{ $auto->color }}</td>
                                <td class="px-6 py-4 border-b text-gray-700">{{ $auto->placa }}</td>
                                <td class="px-6 py-4 border-b text-gray-700">{{ $auto->anio_fabri }}</td>
                                <td class="px-6 py-4 border-b text-gray-700">{{ $auto->user->name ?? 'N/A' }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            @else
                <div class="h-full flex items-center justify-center">
                    <x-no-found>
                        <div class="h-full text-center">
                            <h1 class="mt-4 text-white text-lg">Lo sentimos,</h1>
                            <p class="font-bold text-white text-2xl">no hay autos para mostrar</p>
                        </div>
                    </x-no-found>               
                </div>
            @endif
        </div>
        <div class="mt-4">
            <div class="space-x-4 flex items-center justify-around">
                {{ $autos->links('pagination::tailwind') }}
            </div>
        </div>
    </div>
</x-empleado>