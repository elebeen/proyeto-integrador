<x-usuario>
    <div class="flex flex-col">
        <div class="w-full p-6 flex-grow">
            <h1 class="text-2xl font-bold mb-6 text-[#D00000]">Mis autos</h1>
            <div class="overflow-x-auto h-full w-full">
                @if($autos->isNotEmpty())
                    <table class="w-full bg-white rounded-lg shadow-lg overflow-hidden border border-[#003049] table-auto text-sm">
                        <thead class="bg-[#D00000] text-white">
                            <tr>
                                <th class="px-4 py-2 text-left font-semibold uppercase tracking-wider">Marca</th>
                                <th class="px-4 py-2 text-left font-semibold uppercase tracking-wider">Modelo</th>
                                <th class="px-4 py-2 text-left font-semibold uppercase tracking-wider">Kilometraje</th>
                                <th class="px-4 py-2 text-left font-semibold uppercase tracking-wider">Color</th>
                                <th class="px-4 py-2 text-left font-semibold uppercase tracking-wider">Placa</th>
                                <th class="px-4 py-2 text-left font-semibold uppercase tracking-wider">Año</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($autos as $index => $auto)
                                <tr class="{{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-white' }} hover:bg-[#FFD166] transition duration-200">
                                    <td class="px-4 py-2 border-b text-[#003049]">
                                        <span class="px-2 py-1 bg-[#D00000] rounded-full text-xs font-medium text-white">
                                            {{ $auto->marca }}
                                        </span>
                                    </td>
                                    <td class="px-4 py-2 border-b text-gray-700">{{ $auto->modelo }}</td>
                                    <td class="px-4 py-2 border-b text-gray-700">{{ $auto->kilometraje }}</td>
                                    <td class="px-4 py-2 border-b text-gray-700">{{ $auto->color }}</td>
                                    <td class="px-4 py-2 border-b text-gray-700">{{ $auto->placa }}</td>
                                    <td class="px-4 py-2 border-b text-gray-700">{{ $auto->anio_fabri }}</td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                @else
                    <div class="h-full flex items-center justify-center">
                        <x-no-found>
                            <div class="h-full text-center">
                                <h1 class="mt-4 text-[#003049] text-lg">Lo sentimos,</h1>
                                <p class="font-bold text-[#D00000] text-2xl">No hay autos para mostrar</p>
                            </div>
                        </x-no-found>
                    </div>
                @endif
            </div>
            <div class="flex justify-center mt-6">
                <a href="{{ route('usuario.welcome')}}" class="px-4 py-2 bg-[#003049] text-white rounded-md hover:bg-[#D00000]">
                    Regresar
                </a>
            </div>
        </div>
    </div>
</x-usuario>
