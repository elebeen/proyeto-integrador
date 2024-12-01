<x-usuario>
    <div class="w-full p-6">
        <h1 class="text-2xl font-bold mb-6">Mis autos</h1>
        
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
        <div class="flex justify-center mt-6">
            <a href="{{ route('usuario.welcome')}}" class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md hover:bg-gray-400">Regresar</a>
        </div>
    </div>
</x-usuario>