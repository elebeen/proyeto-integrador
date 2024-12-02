<x-usuario>
    <div class="w-full p-6 pt-0">
        <div class="pt-6">
            <h1 class="text-2xl font-bold mb-6 text-[#D00000]">Mis Mantenimientos</h1>
        </div>
        <div class="overflow-x-auto h-full w-full">
            @if($mantenimientos->isNotEmpty())
                <table class="w-full bg-white rounded-lg shadow-lg overflow-hidden border border-[#003049] table-auto text-sm">
                    <!-- Cabecera de la tabla -->
                    <thead class="sticky top-0 bg-[#D00000] text-white">
                        <tr>
                            <th class="p-4 text-center font-semibold uppercase tracking-wider">Fecha de Recibo del Auto</th>
                            <th class="p-4 text-center font-semibold uppercase tracking-wider">Tipo de Servicio</th>
                            <th class="p-4 text-center font-semibold uppercase tracking-wider">Estado</th>
                            <th class="p-4 text-center font-semibold uppercase tracking-wider">Ingreso del Auto al Taller</th>
                            <th class="p-4 text-center font-semibold uppercase tracking-wider">Usuario</th>
                            <th class="p-4 text-center font-semibold uppercase tracking-wider">Placa</th>
                            <th class="p-4 text-center font-semibold uppercase tracking-wider">Empleado a Cargo</th>
                            <th class="p-4 text-center font-semibold uppercase tracking-wider">Categoría</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mantenimientos as $index => $cita)
                            <tr 
                                class="{{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-white' }} hover:bg-[#FFD166] transition duration-200 cursor-pointer"
                                onclick="window.location='{{ route('usuario.mantenimiento-detalle', $cita->id) }}'">
                                <td class="p-4 text-gray-700 border-b">
                                    <div class="flex justify-center">   
                                        @if ($cita->fecha_entrega_cliente)
                                            {{ $cita->fecha_entrega_cliente->format('d/m/Y') }}
                                        @else
                                            <span class="px-3 py-1 rounded-full text-sm font-medium bg-[#D00000] text-white">
                                                No se ingresó
                                            </span>
                                        @endif
                                    </div>
                                </td>
                                <td class="p-4 text-gray-700 border-b">
                                    <div class="flex justify-center">
                                        <span class="px-3 py-1 rounded-full text-sm font-medium 
                                            {{ $cita->servicio_tipo === 'normal' ? 'bg-blue-500 text-white' : 'bg-yellow-400 text-black' }}">
                                            {{ ucfirst($cita->servicio_tipo) }}
                                        </span>
                                    </div>
                                </td>
                                <td class="p-4 text-white border-b">
                                    <div class="flex justify-center">
                                        <span class="px-3 py-1 rounded-full text-sm font-medium 
                                            {{ $cita->estado ? 'bg-green-600' : 'bg-[#D00000]' }}">
                                            {{ $cita->estado ? 'Terminado' : 'Pendiente' }}
                                        </span>
                                    </div>
                                </td>
                                <td class="p-4 text-white border-b">
                                    <div class="flex justify-center">
                                        <span class="px-3 py-1 rounded-full text-sm font-medium 
                                            {{ $cita->auto_ingresado ? 'bg-green-600' : 'bg-[#D00000]' }}">
                                            {{ $cita->auto_ingresado ? 'Ingresado' : 'No ingresado' }}
                                        </span>
                                    </div>
                                </td>
                                <td class="p-4 text-gray-700 border-b">
                                    <div class="flex justify-center">
                                        <span class="px-3 py-1 rounded-full text-sm font-medium bg-gray-800 text-white">
                                            {{ $cita->user->name }}
                                        </span>
                                    </div>
                                </td>
                                <td class="p-4 text-gray-700 border-b">
                                    <div class="flex justify-center">
                                        {{ $cita->auto->placa ?? 'N/A' }}
                                    </div>
                                </td>
                                <td class="p-4 text-gray-700 border-b">
                                    @if ($cita->empleado)
                                        <div class="flex justify-center">
                                            {{ $cita->empleado->nombre }} {{ $cita->empleado->apellido }}
                                        </div>
                                    @else
                                        <div class="flex justify-center">
                                            <span class="px-3 py-1 rounded-full text-sm font-medium bg-red-700 text-white">
                                                En proceso
                                            </span>
                                        </div>
                                    @endif
                                </td>
                                <td class="p-4 text-gray-700 border-b">
                                    <div class="flex justify-center">
                                        {{ $cita->categoria }}
                                    </div>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
                <div class="mt-4">
                    <div class="space-x-4 flex items-center justify-around">
                        {{ $mantenimientos->links('pagination::tailwind') }}
                    </div>
                </div>
            @else
                <div class="h-full flex items-center justify-center">
                    <x-no-found>
                        <div class="h-full text-center">
                            <h1 class="mt-4 text-[#003049] text-lg">Lo sentimos,</h1>
                            <p class="font-bold text-[#D00000] text-2xl">No hay mantenimientos para mostrar</p>
                        </div>
                    </x-no-found>
                </div>
            @endif
        </div>
    </div>
</x-usuario>