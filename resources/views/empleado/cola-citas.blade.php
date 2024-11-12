<x-empleado>
    <div class="w-full h-screen">
        <div class="overflow-x-auto bg-white shadow rounded-lg p-4 h-full">
            @forelse($citasOrdenadas as $cita)
                <table class="min-w-full w-full bg-white border border-gray-200">
                    <thead>
                        <tr>
                            <th class="px-4 py-2 border-b">Tipo de Servicio</th>
                            <th class="px-4 py-2 border-b">Fecha de Creación</th>
                            <th class="px-4 py-2 border-b">Placa</th>
                            <th class="px-4 py-2 border-b">Cliente</th>
                            <th class="px-4 py-2 border-b">Estado</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr class="text-center">
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
                    </tbody>
                </table>
            @empty
                <x-no-found>
                    <h1 class="mt-4 text-white text-lg">Lo sentimos,</h1>
                    <p class="font-bold text-white text-2xl">no hay mantenimientos para mostrar</p>
                </x-no-found> 
            @endforelse
        </div>
    </div>
</x-empleado>