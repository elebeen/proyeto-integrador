<x-usuario>
    <div class="w-full p-6 pt-0">
        <div class=" pt-6">
            <h1 class="text-2xl font-bold mb-6">Mis mantenimientos</h1>
        </div>
        <div class="overflow-x-auto h-full w-full">
            @if($mantenimientos->isNotEmpty())
                <table class="w-full bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200 table-fixed">
                    <thead class="sticky top-0 bg-gray-800 text-white">
                        <tr>
                            <th class="p-4 text-center font-semibold uppercase tracking-wider">Fecha de recibo del auto</th>
                            <th class="p-4 text-center font-semibold uppercase tracking-wider">Tipo de Servicio</th>
                            <th class="p-4 text-center font-semibold uppercase tracking-wider">Estado</th>
                            <th class="p-4 text-center font-semibold uppercase tracking-wider">Ingreso del auto al taller</th>
                            <th class="p-4 text-center font-semibold uppercase tracking-wider">Usuario</th>
                            <th class="p-4 text-center font-semibold uppercase tracking-wider">Placa</th>
                            <th class="p-4 text-center font-semibold uppercase tracking-wider">Empleado a cargo</th>
                            <th class="p-4 text-center font-semibold uppercase tracking-wider">Categoria</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($mantenimientos as $index => $cita)
                            <tr 
                                class="{{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-white' }} hover:bg-gray-300 transition duration-200 cursor-pointer"
                                onclick="window.location='{{ route('mantenimiento.detalle', $cita->id) }}'"
                                >
                                <td class="p-4 text-gray-700 border-b">
                                    <div class="flex justify-center">
                                        @if ($cita->fecha_entrega_cliente)
                                            {{ $cita->fecha_entrega_cliente->format('d/m/Y') }}
                                        @else
                                            <span class="px-3 py-1 rounded-full text-sm font-medium bg-red-600 text-white">
                                                No se ingresó
                                            </span>
                                        @endif
                                    </div>
                                </td>
                                <td class="p-4 text-gray-700 border-b">
                                    <div class="flex justify-center">
                                        <span class="px-3 py-1 rounded-full text-sm font-medium 
                                            {{ $cita->servicio_tipo === 'normal' ? 'bg-blue-400 text-white' : 'bg-yellow-500 text-black' }}">
                                            {{ ucfirst($cita->servicio_tipo) }}
                                        </span>
                                    </div>
                                </td>
                                <td class="p-4 text-white border-b">
                                    <div class="flex justify-center">
                                        <span class="px-3 py-1 rounded-full text-sm font-medium 
                                            {{ $cita->estado ? 'bg-green-600' : 'bg-red-600' }}">
                                            {{ $cita->estado ? 'Terminado' : 'Pendiente' }}
                                        </span>
                                    </div>
                                </td>
                                <td class="p-4 text-white border-b">
                                    <div class="flex justify-center">
                                        <span class="px-3 py-1 rounded-full text-sm font-medium 
                                            {{ $cita->auto_ingresado ? 'bg-green-600' : 'bg-red-600' }}">
                                            {{ $cita->auto_ingresado ? 'Ingresado' : 'No ingresado' }}
                                        </span>
                                    </div>
                                </td>
                                <td class="p-4 text-gray-700 border-b">
                                    <div class="flex justify-center">
                                        <div class="flex justify-center">
                                            <span class="px-3 py-1 rounded-full text-sm font-medium bg-stone-700 text-white">
                                                {{ $cita->user->name }}
                                            </span>
                                        </div>
                                    </div>
                                </td>
                                <td class="p-4 text-gray-700 border-b">
                                    <div class="flex justify-center">
                                        {{ $cita->auto->placa ?? 'N/A' }}
                                    </div>
                                </td>
                                <td class="p-4 text-gray-700 border-b">
                                    {{ $cita->empleado->nombre }} {{ $cita->empleado->apellido }}
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
                            <h1 class="mt-4 text-white text-lg">Lo sentimos,</h1>
                            <p class="font-bold text-white text-2xl">no hay mantenimientos para mostrar</p>
                        </div>
                    </x-no-found>
                </div>
            @endif
        </div>
    </div>

</x-usuario>