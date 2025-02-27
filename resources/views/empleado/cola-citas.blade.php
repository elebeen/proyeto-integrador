<x-empleado>
    <div class="w-full p-6">
        <h1 class="text-2xl font-bold mb-6">Citas a atender</h1>
        <div class="overflow-x-auto bg-white shadow rounded-lg h-full">
            @if($citasOrdenadas->isNotEmpty())
                <table class="w-full bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200 table-fixed">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Fecha de Creación</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Fecha de recibo del auto</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Tipo de Servicio</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Estado</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Ingreso del auto al taller</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Placa</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Cliente</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Acción</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($citasOrdenadas as $index => $cita)
                        <tr class="{{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-white' }} hover:bg-gray-300 transition duration-200"
                        >
                            <td class="p-4 text-gray-700 border-b">{{ $cita->created_at->format('d/m/Y') }}</td>
                            <td class="p-4 text-gray-700 border-b">{{ $cita->fecha_entrega_cliente->format('d/m/Y') }}</td>
                            <td class="p-4 text-gray-700 border-b">
                                <span class="px-3 py-1 rounded-full text-sm font-medium 
                                    {{ $cita->servicio_tipo === 'normal' ? 'bg-blue-400 text-white' : 'bg-yellow-500 text-black' }}">
                                    {{ ucfirst($cita->servicio_tipo) }}
                                </span>
                            </td>
                            <td class="p-4 text-white border-b">
                                <span class="px-3 py-1 rounded-full text-sm font-medium 
                                    {{ $cita->estado ? 'bg-green-600' : 'bg-red-600' }}">
                                    {{ $cita->estado ? 'Terminado' : 'Pendiente' }}
                                </span>
                            </td>
                            <td class="p-4 text-white border-b">
                                <span class="px-3 py-1 rounded-full text-sm font-medium 
                                    {{ $cita->auto_ingresado ? 'bg-green-600' : 'bg-red-600' }}">
                                    {{ $cita->auto_ingresado ? 'Ingresado' : 'No ingresado' }}
                                </span>
                            </td>
                            <td class="p-4 text-gray-700 border-b">{{ $cita->auto->placa ?? 'N/A' }}</td>
                            <td class="p-4 text-gray-700 border-b">{{ $cita->user->name ?? 'N/A' }}</td>
                            <td class="p-4 text-gray-700 border-b">
                                <form action="{{ route('tomar-mantenimiento') }}" method="POST">
                                    @csrf
                                    @method('POST')
                                    <button type="submit" id="tomarTrabajo">
                                        <div class="flex justify-left items-center transform transition-transform hover:scale-110 bg-teal-500 hover:bg-teal-600 p-2 rounded text-white font-medium">
                                            Tomar trabajo
                                        </div>
                                    </button>
                                </form>
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
                            <p class="font-bold text-white text-2xl">no hay mantenimientos para mostrar</p>
                        </div>
                    </x-no-found> 
                </div>
            @endif
        </div>
    </div>
    <script>
        document.addEventListener('DOMContentLoaded', function () {
            const form = document.getElementById('formTomarTrabajo');
            const button = document.getElementById('tomarTrabajo');
    
            button.addEventListener('click', function (event) {
                const confirmed = confirm('¿Estás seguro de que deseas tomar este trabajo?');
                if (!confirmed) {
                    event.preventDefault(); // Evita que el formulario se envíe
                }
            });
        });
    </script>
</x-empleado>