<x-empleado>
    <div class="w-full p-6">
        <h1 class="text-2xl font-bold mb-6">Filtrar Usuarios</h1>
        <form action="{{ route('usuarios.filtros') }}" method="GET" class="mb-6 p-4 bg-gray-100 rounded-lg">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Filtro por name -->
                <div>
                    <label for="name" class="block text-base font-medium text-gray-700">Nombre</label>
                    <input type="text" id="name" name="name" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ request('name') }}" placeholder="Ingrese un nombre">
                </div>
                
                <!-- Filtro por apellido -->
                <div>
                    <label for="apellido" class="block text-base font-medium text-gray-700">Apellido</label>
                    <input type="text" id="apellido" name="apellido" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ request('apellido') }}" placeholder="Ingrese un apellido">
                </div>
                
                {{-- ordenar autos --}}
                <div>
                    <label for="estado" class="block text-base font-medium text-gray-700">Estado</label>
                    <select name="orden" class="mt-1 block w-full p-2 border border-gray-300 rounded-md">
                        <option value="">Selecciona una opción</option>
                        <option value="asc" {{ request('orden') == 'asc' ? 'selected' : '' }}>Edad ascendente</option>
                        <option value="desc" {{ request('orden') == 'desc' ? 'selected' : '' }}>Edad descendente</option>
                    </select>
                </div>
            </div>
            <div class="mt-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Filtrar</button>
                <a href="{{ route('usuarios.filtros') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Limpiar Filtros</a>
            </div>
        </form>

        <div class="overflow-x-auto h-full w-full">
            @if($usersOrdenados->isNotEmpty())
            <table class="w-full bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200 table-fixed">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="px-6 py-3 text-left font-semibold uppercase tracking-wider">Nombre</th>
                            <th class="px-6 py-3 text-left font-semibold uppercase tracking-wider">Apellido</th>
                            <th class="px-6 py-3 text-left font-semibold uppercase tracking-wider">Correo</th>
                            <th class="px-6 py-3 text-left font-semibold uppercase tracking-wider">Edad</th>
                            <th class="px-6 py-3 text-left font-semibold uppercase tracking-wider">Telefono</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($usersOrdenados as $index => $user)
                            <tr class="{{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-white' }} hover:bg-gray-300 transition duration-200">
                                <td class="px-6 py-4 border-b text-gray-700">
                                    <span class="px-3 py-1 bg-amber-200 rounded-full text-sm font-medium">
                                        {{ $user->name }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 border-b text-gray-700">
                                    <span class="px-3 py-1 bg-orange-300 rounded-full text-sm font-medium">
                                        {{ $user->apellido }}
                                    </span>
                                </td>
                                <td class="px-6 py-4 border-b text-gray-700">{{ $user->email  ?? 'N/A' }}</td>
                                <td class="px-6 py-4 border-b text-gray-700">{{ $user->edad }}</td>
                                <td class="px-6 py-4 border-b text-gray-700">{{ $user->telefono  ?? 'N/A' }}</td>
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
    </div>
</x-empleado>