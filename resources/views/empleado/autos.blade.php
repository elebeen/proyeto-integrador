<x-empleado>
    <div class="w-full h-screen">
        <div class="overflow-x-auto bg-white shadow rounded-lg p-4 h-full">
            @forelse($request as $auto)
                <table class="min-w-full w-full bg-white border border-gray-200">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-b">Marca</th>
                            <th class="px-4 py-2 border-b">Modelo</th>
                            <th class="px-4 py-2 border-b">Kilometraje</th>
                            <th class="px-4 py-2 border-b">Color</th>
                            <th class="px-4 py-2 border-b">Placa</th>
                            <th class="px-4 py-2 border-b">Año de fabricación</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
                            <td class="px-4 py-2 border-b">
                                <span class="px-2 py-1 rounded-full">
                                    {{ ($auto->marca) }}
                                </span>
                            </td>
                            <td class="px-4 py-2 border-b">{{ $auto->modelo }}</td>
                            <td class="px-4 py-2 border-b">
                                {{ $auto->kilometraje }}
                            </td>
                            <td class="px-4 py-2 border-b">{{ $auto->color }}</td>
                            <td class="px-4 py-2 border-b">{{ $auto->placa }}</td>
                            <td class="px-4 py-2 border-b">{{ $auto->anio_fabri }}</td>
                        </tr>
                    </tbody>
                </table>
            @empty
                <x-no-found>
                    <h1 class="mt-4 text-white text-lg">Lo sentimos,</h1>
                    <p class="font-bold text-white text-2xl">no hay autos para mostrar</p>
                </x-no-found>               
            @endforelse
        </div>
    </div>
</x-empleado>