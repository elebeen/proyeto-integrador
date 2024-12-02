<x-usuario>
    <div class="w-full p-6">
        <h1 class="text-2xl font-bold pl-6">Detalle del Mantenimiento</h1>
        <div class="overflow-x-auto h-full w-full p-6">
            <div class="grid grid-cols-3 gap-6 bg-white p-8 rounded-lg shadow-md">
                <div class="col-span-3">
                    <label for="motivo" class="block text-lg font-medium text-gray-700 mb-2">Descripción del problema</label>
                    <textarea 
                        id="motivo"
                        name="motivo"
                        class="w-full px-4 py-2 m-0 border border-gray-300 rounded-md"
                        disabled
                        rows="3"
                    >{{ old('motivo', $mantenimiento->motivo ) }}
                    </textarea>
                </div>
                <div class="col-span-1">
                    <label for="cliente" class="block text-lg font-medium text-gray-700 mb-2">Cliente</label>
                    <input 
                        type="text" 
                        id="cliente" 
                        name="cliente" 
                        value="{{ old('name', $mantenimiento->user->name) }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                        disabled
                    >
                </div>
                <div class="col-span-1">
                    <label for="marca" class="block text-lg font-medium text-gray-700 mb-2">Marca</label>
                    <input 
                        type="text" 
                        id="marca" 
                        name="marca" 
                        value="{{ old('marca', $mantenimiento->auto->marca) }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                        disabled
                    >
                </div>
                <div class="col-span-1">
                    <label for="placa" class="block text-lg font-medium text-gray-700 mb-2">Placa</label>
                    <input 
                        type="text" 
                        id="placa" 
                        name="placa" 
                        value="{{ old('placa', $mantenimiento->auto->placa) }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                        disabled
                    >
                </div>
                <div class="col-span-1">
                    <label for="categoria" class="block text-lg font-medium text-gray-700 mb-2">Categoria</label>
                    <input 
                        type="text" 
                        id="categoria" 
                        name="categoria" 
                        value="{{ old('categoria', $mantenimiento->categoria) }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                        disabled
                    >
                </div>
                <div class="col-span-1">
                    <label for="servicio_tipo" class="block text-lg font-medium text-gray-700 mb-2">Tipo de servicio</label>
                    <input 
                        type="text" 
                        id="servicio_tipo" 
                        name="servicio_tipo" 
                        value="{{ old('servicio_tipo', $mantenimiento->servicio_tipo) }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                        disabled
                    >
                </div>
                <div class="col-span-1">
                    <label for="modelo" class="block text-lg font-medium text-gray-700 mb-2">Modelo</label>
                    <input
                        type="text" 
                        id="modelo" 
                        name="modelo" 
                        value="{{ old('modelo', $mantenimiento->auto->modelo) }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                        disabled
                    >
                </div>
            </div>
        </div>

        <div class="overflow-x-auto h-full w-full p-6">
            <div class="grid grid-cols-3 gap-6 bg-white p-8 rounded-lg shadow-md">
                <div class="col-span-1">
                    <label for="auto_ingresado" class="block text-lg font-medium text-gray-700 mb-2">Auto ingresado al taller</label>
                    <button 
                        type="button" 
                        id="auto_ingresado_toggle"
                        class="{{ $mantenimiento->auto_ingresado ? 'bg-green-600' : 'bg-red-600' }} w-full px-4 py-2 rounded-md text-white focus:ring focus:ring-blue-300 focus:outline-none"
                        data-value="{{ old('auto_ingresado', $mantenimiento->auto_ingresado) }}"
                        onclick="toggleAutoIngresado()"
                    >
                        {{ $mantenimiento?->auto_ingresado ? 'Ingresado' : 'No Ingresado' }}
                    </button>
                    <!-- Campo oculto para enviar el valor del botón -->
                    <input 
                        type="hidden" 
                        id="auto_ingresado" 
                        name="auto_ingresado" 
                        value="{{ old('auto_ingresado', $mantenimiento->auto_ingresado) }}"
                    >
                    <x-input-error :messages="$errors->get('auto_ingresado')" class="mt-2" />
                </div>
                <div class="col-span-1">
                    <label for="estado" class="block text-lg font-medium text-gray-700 mb-2">Estado</label>
                    <!-- Botón Toggle -->
                    <button 
                        type="button" 
                        id="estado_toggle" 
                        class="{{ $mantenimiento->estado ? 'bg-green-600' : 'bg-red-600' }} w-full px-4 py-2 rounded-md text-white focus:ring focus:ring-blue-300 focus:outline-none"
                        data-value="{{ old('estado', $mantenimiento->estado) }}"
                        onclick="toggleEstado()"
                    >
                        {{ $mantenimiento?->estado ? 'Terminado' : 'Pendiente' }}
                    </button>
                    <!-- Campo oculto para sincronizar el valor del botón -->
                    <input 
                        type="hidden" 
                        id="estado" 
                        name="estado" 
                        value="{{ old('estado', $mantenimiento->estado) }}"
                    >
                    <x-input-error :messages="$errors->get('estado')" class="mt-2" />
                </div>
                <div class="col-span-1">
                    <label for="auto_devuelto" class="block text-lg font-medium text-gray-700 mb-2">Auto devuelto</label>
                    <button
                        type="button" 
                        id="auto_devuelto_toggle"
                        class="{{ $mantenimiento->estado ? 'bg-green-600' : 'bg-red-600' }} w-full px-4 py-2 rounded-md text-white focus:ring focus:ring-blue-300 focus:outline-none"
                        data-value="{{ old('auto_devuelto', $mantenimiento->auto_devuelto) }}"
                        onclick="toggleAutoDevuelto()"
                    >
                        {{ $mantenimiento?->auto_devuelto ? 'Devuelto' : 'En taller' }}
                    </button>
                    <input
                        type="hidden"
                        id="auto_devuelto"
                        name="auto_devuelto"
                        value="{{ old('auto_devuelto', $mantenimiento->auto_devuelto) }}"
                    >
                    <x-input-error :messages="$errors->get('auto_devuelto')" class="mt-2" />
                </div>
                <div class="col-span-1">
                    <label for="fecha_entrega_cliente" class="block text-lg font-medium text-gray-700 mb-2">Fecha de ingreso</label>
                    <input
                        type="date"
                        id="fecha_entrega_cliente"
                        name="fecha_entrega_cliente"
                        value="{{ old('fecha_entrega_cliente', $mantenimiento->fecha_entrega_cliente?->format('Y-m-d')) }}"
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                    >
                    <x-input-error :messages="$errors->get('fecha_entrega_cliente')" class="mt-2" />
                </div>
                <div class="col-span-1">
                    <label for="reparacion_terminada" class="block text-lg font-medium text-gray-700 mb-2">Fecha de término de la reparación</label>
                    <input 
                        type="date" 
                        id="reparacion_terminada" 
                        name="reparacion_terminada" 
                        value="{{ old('reparacion_terminada', $mantenimiento->reparacion_terminada?->format('Y-m-d')) }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                    >
                    <x-input-error :messages="$errors->get('reparacion_terminada')" class="mt-2" />
                </div>
                <div class="col-span-1">
                    <label for="fecha_devol_cliente" class="block text-lg font-medium text-gray-700 mb-2">Fecha de devolución</label>
                    <input 
                        type="date" 
                        id="fecha_devol_cliente" 
                        name="fecha_devol_cliente" 
                        value="{{ old('fecha_devol_cliente', $mantenimiento->fecha_devol_cliente?->format('Y-m-d')) }}" 
                        class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                    >
                    <x-input-error :messages="$errors->get('fecha_devol_cliente')" class="mt-2" />
                </div>
                <div class="col-span-3 flex justify-center w-full gap-4">
                    <div class="flex items-center">
                        <a href="{{ route('mantenimiento.empleado') }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">Regresar</a>
                    </div>
                </div>
            </div>
        </div>

        <div class="overflow-x-auto h-full w-full p-6 pt-0">
            <h1 class="text-2xl font-bold mb-6">Reparaciones</h1>
            @foreach ($mantenimiento->reparaciones as $reparacion)
                <ul class="bg-white p-8 rounded-lg shadow-md mt-4 mb-4">
                    <li>
                        <p>{{ $reparacion->descripcion}}</p>
                        @if ($reparacion->repuestos->isEmpty())
                            <p>No se usaron repuestos en esta reparación.</p>
                        @else
                            <ul>
                                @foreach ($reparacion->repuestos as $repuesto)
                                    <li>
                                        {{ $repuesto->nombre }} (Cantidad: {{ $repuesto->pivot->cantidad_usada }})
                                    </li>
                                @endforeach
                            </ul>
                        @endif
                    </li>
                </ul>
            @endforeach
        </div>

</x-usuario>