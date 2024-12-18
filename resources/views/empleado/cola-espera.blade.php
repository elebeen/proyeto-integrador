<x-empleado>
    <div class="w-full p-6">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Cola de Espera</h1>
        <div class="overflow-x-auto bg-white shadow rounded-lg h-full">
            @if($autosEnCola->isNotEmpty())
                <table class="w-full bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200 table-fixed">
                    <thead class="bg-gray-800 text-white">
                        <tr>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Placa</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Marca</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Modelo</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Fecha de Terminación</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Tipo de servicio</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Estado del mantenimiento</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Ingreso del auto al taller</th>
                            <th class="p-4 text-left font-semibold uppercase tracking-wider">Estado del auto</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($autosEnCola as $index => $auto)
                        <tr class="{{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-white' }} hover:bg-gray-300 transition duration-200">
                            <td class="p-4 text-gray-700 border-b">{{ $auto->auto->placa ?? 'N/A' }}</td>
                            <td class="p-4 text-gray-700 border-b">{{ $auto->auto->marca ?? 'N/A' }}</td>
                            <td class="p-4 text-gray-700 border-b">{{ $auto->auto->modelo ?? 'N/A' }}</td>
                            <td class="p-4 text-gray-700 border-b">{{ $auto->reparacion_terminada ? $auto->reparacion_terminada->format('d/m/Y') : 'N/A' }}</td>
                            <td class="p-4 text-gray-700 border-b">
                                <span class="px-3 py-1 rounded-full text-sm font-medium 
                                    {{ $auto->servicio_tipo === 'normal' ? 'bg-blue-400 text-white' : 'bg-yellow-500 text-black' }}">
                                    {{ ucfirst($auto->servicio_tipo) }}
                                </span>
                            </td>
                            <td class="p-4 text-white border-b">
                                <span class="px-3 py-1 rounded-full text-sm font-medium 
                                    {{ $auto->estado ? 'bg-green-600' : 'bg-red-600' }}">
                                    {{ $auto->estado ? 'Terminado' : 'Pendiente' }}
                                </span>
                            </td>
                            <td class="p-4 text-white border-b">
                                <span class="px-3 py-1 rounded-full text-sm font-medium 
                                    {{ $auto->auto_ingresado ? 'bg-green-600' : 'bg-red-600' }}">
                                    {{ $auto->auto_ingresado ? 'Ingresado' : 'No ingresado' }}
                                </span>
                            </td>
                            <td class="p-4 text-center border-b">
                                <form action="{{ route('cola.recogido', $auto->id) }}" method="POST" onsubmit="return confirmAction();">
                                    @csrf
                                    <button type="submit"
                                        class="px-4 py-2 font-semibold rounded {{ $auto->auto_devuelto ? 'bg-green-500 hover:bg-green-600' : 'bg-red-500 hover:bg-red-600' }} text-white transition duration-300 ease-in-out">
                                        {{ $auto->auto_devuelto ? 'Devuelto' : 'En taller' }}
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
                            <p class="font-bold text-white text-2xl">no hay Autos en la cola de espera</p>
                        </div>
                    </x-no-found> 
                </div>
            @endif
        </div>
    </div>
    <script>
        function confirmAction() {
            // Mostrar la ventana de confirmación
            const confirmed = confirm("¿Estás seguro de que deseas marcar este mantenimiento como recogido?");
            
            // Si se cancela, retorna false para prevenir el envío
            return confirmed;
        }
    </script>
</x-empleado>

