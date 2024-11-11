<x-empleado>
    <div class="container mx-auto p-4">
        <h1 class="text-2xl font-semibold text-center mb-6">Citas Ordenadas por Prioridad</h1>
    
        <div class="overflow-x-auto bg-white shadow rounded-lg p-4">
            <table class="min-w-full w-full bg-white border border-gray-200">
                <thead>
                    <tr>
                        {{-- <th class="px-4 py-2 border-b">ID de Cita</th> --}}
                        <th class="px-4 py-2 border-b">Tipo de Servicio</th>
                        <th class="px-4 py-2 border-b">Fecha de Creación</th>
                        <th class="px-4 py-2 border-b">Placa</th>
                        <th class="px-4 py-2 border-b">Cliente</th>
                        <th class="px-4 py-2 border-b">Estado</th>
                    </tr>
                </thead>
                <tbody>
                    @forelse($citasOrdenadas as $cita)
                        <tr class="text-center">
                            {{-- <td class="px-4 py-2 border-b">{{ $cita->id }}</td> --}}
                            <td class="px-4 py-2 border-b">
                                <span class="px-2 py-1 rounded-full {{ $cita->servicio_tipo === 'premium' ? 'bg-yellow-500 text-white' : 'bg-gray-200 text-gray-700' }}">
                                    {{ ucfirst($cita->servicio_tipo) }}
                                </span>
                            </td>
                            <td class="px-4 py-2 border-b">{{ $cita->created_at->format('d/m/Y H:i') }}</td>
                            <td class="px-4 py-2 border-b">
                                {{ $cita->estado ? 'Completado' : 'Pendiente' }}
                            </td>
                            <td class="px-4 py-2 border-b">{{ $cita->auto->placa ?? 'N/A' }}</td>
                            <td class="px-4 py-2 border-b">{{ $cita->user->name ?? 'N/A' }}</td>
                        </tr>
                    @empty
                        <tr>
                            <td colspan="4" class="px-4 py-2 text-center text-gray-500">No hay citas pendientes.</td>
                        </tr>
                    @endforelse
                </tbody>
            </table>
        </div>
    </div>
</x-empleado>