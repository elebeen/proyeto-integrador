<x-empleado>
    <div class="w-full p-6">
        <h1 class="text-2xl font-bold mb-6">Filtrar Repuestos</h1>

        <!-- Formulario de filtros -->
        <form action="{{ route('repuestos.filtros') }}" method="GET" class="mb-6 p-4 bg-gray-100 rounded-lg">
            <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4">
                <!-- Filtro por nombre -->
                <div>
                    <label for="nombre" class="block text-base font-medium text-gray-700">Nombre</label>
                    <input type="text" id="nombre" name="nombre" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ request('nombre') }}" placeholder="Ingrese el nombre de un repuesto">
                </div>

                <!-- Filtro por numero de stock -->
                <div>
                    <label for="stock_mayor" class="block text-base font-medium text-gray-700">Stock +</label>
                    <input type="number" id="stock_mayor" name="stock_mayor" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ request('stock_mayor') }}" placeholder="Filtrar elementos con mayor stock del indicado">
                </div>

                <div>
                    <label for="stock_menor" class="block text-base font-medium text-gray-700">Stock -</label>
                    <input type="number" id="stock_menor" name="stock_menor" class="mt-1 block w-full p-2 border border-gray-300 rounded-md" value="{{ request('stock_menor') }}" placeholder="Filtrar elementos con menor stock del indicado">
                </div>
            </div>

            <div class="mt-4">
                <button type="submit" class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600">Filtrar</button>
                <a href="{{ route('repuestos.filtros') }}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Limpiar Filtros</a>
            </div>
        </form>

        <div class="overflow-x-auto h-full w-full">
            @if($repuestos->isNotEmpty()) 
                <table class="w-full bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200 table-fixed">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Nombre</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Stock</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($repuestos as $index => $repuesto)
                            <tr class="{{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-white' }} hover:bg-gray-300 transition duration-200">
                                <td class="p-4 text-gray-700 border-b">{{ ($repuesto->nombre) }}</td>
                                <td class="p-4 text-white border-b">
                                    <span class="px-3 py-1 rounded-full text-sm font-medium 
                                        {{ $repuesto->stock ? 'bg-green-600' : 'bg-red-600' }}">
                                        {{ $repuesto->stock}}
                                    </span>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>                
            @else
                <div class="h-full flex items-center justify-center">
                    <x-no-found>
                        <div class="h-full text-center">
                            <h1 class="mt-4 text-white text-lg">Lo sentimos,</h1>
                            <p class="font-bold text-white text-2xl">no hay repuestos para mostrar</p>
                        </div>
                    </x-no-found>
                </div>
            @endif
        </div>
    </div>
</x-empleado>