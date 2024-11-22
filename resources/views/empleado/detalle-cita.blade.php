<x-empleado>
    <div class="w-full p-6">
        <h1 class="text-2xl font-bold pl-6">Detalle del Mantenimiento</h1>
        <form action="{{ route('empleado.editar_mantenimiento', $mantenimiento) }}" method="POST">
            @csrf
            @method('PATCH')
            <div class="overflow-x-auto h-full w-full p-6">
                <div class="grid grid-cols-3 gap-6 bg-white p-8 rounded-lg shadow-md">
                    <div class="col-span-3">
                        <label for="motivo" class="block text-lg font-medium text-gray-700 mb-2">Descripción del problema</label>
                        <textarea 
                            type="text"
                            id="motivo"
                            name="motivo"
                            value="{{ old('motivo', $mantenimiento->motivo) }}"
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                            disabled
                        >{{ old('motivo', $mantenimiento->motivo ) }}</textarea>
                        <x-input-error :messages="$errors->get('motivo')" class="mt-2" />
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
                        <x-input-error :messages="$errors->get('mantenimiento->name')" class="mt-2" />
                    </div>
                    <div class="col-span-1">
                        <label for="marca_modelo" class="block text-lg font-medium text-gray-700 mb-2">Marca</label>
                        <input 
                            type="text" 
                            id="marca_modelo" 
                            name="marca_modelo" 
                            value="{{ old('marca', $mantenimiento->auto->marca) }}" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                            disabled
                        >
                        <x-input-error :messages="$errors->get('auto_ingresado')" class="mt-2" />
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
                        <x-input-error :messages="$errors->get('auto_ingresado')" class="mt-2" />
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
                        <x-input-error :messages="$errors->get('servicio_tipo')" class="mt-2" />
                    </div>
                    <div class="col-span-1">
                        <label for="marca_modelo" class="block text-lg font-medium text-gray-700 mb-2">Modelo</label>
                        <input
                            type="text" 
                            id="marca_modelo" 
                            name="marca_modelo" 
                            value="{{ old('modelo', $mantenimiento->auto->modelo) }}" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                            disabled
                        >
                        <x-input-error :messages="$errors->get('auto_ingresado')" class="mt-2"/>
                    </div>
                </div>
            </div>
                <div class="overflow-x-auto h-full w-full p-6">
                    <div class="grid grid-cols-3 gap-6 bg-white p-8 rounded-lg shadow-md">
                        <div class="col-span-1">
                            <label for="auto_ingresado" class="block text-lg font-medium text-gray-700 mb-2">Auto ingresado al taller</label>
                            <button class="{{ $mantenimiento->auto_ingresado ? 'bg-green-600' : 'bg-red-600' }} w-full px-4 py-2 rounded-md hover:bg-orange-100 text-white focus:ring focus:ring-blue-300 focus:outline-none    " type="menu" value="{{ old('auto_ingresado', $mantenimiento->auto_ingresado) }}">
                                {{ $mantenimiento->auto_ingresado ? 'Ingresado' : 'No Ingresado' }}
                            </button>
                        <x-input-error :messages="$errors->get('auto_ingresado')" class="mt-2" />
                        </div>
                        <div class="col-span-1">
                            <label for="fecha_ingreso" class="block text-lg font-medium text-gray-700 mb-2">Fecha de ingreso</label>
                            <input
                                type="date"
                                id="fecha_ingreso"
                                name="fecha_ingreso"
                                value="{{ old('fecha_entrega_cliente', $mantenimiento->fecha_entrega_cliente) }}"
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                            >
                            <x-input-error :messages="$errors->get('fecha_ingreso')" class="mt-2" />
                        </div>
                        <div class="col-span-1">
                            <label for="fecha_devolucion" class="block text-lg font-medium text-gray-700 mb-2">Fecha de devolución</label>
                            <input 
                                type="date" 
                                id="fecha_devolucion" 
                                name="fecha_devolucion" 
                                value="{{ old('fecha_devol_cliente', $mantenimiento->fecha_devol_cliente) }}" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                            >
                            <x-input-error :messages="$errors->get('fecha_devolucion')" class="mt-2" />
                        </div>
                        <div class="col-span-1">
                            <label for="estado" class="block text-lg font-medium text-gray-700 mb-2">Estado</label>
                            <button class="{{ $mantenimiento->estado ? 'bg-green-600' : 'bg-red-600' }} w-full px-4 py-2 rounded-md hover:bg-orange-100 text-white focus:ring focus:ring-blue-300 focus:outline-none" type="menu" value="{{ old('auto_ingresado', $mantenimiento->auto_ingresado) }}">
                                {{ $mantenimiento->estado ? 'Terminado' : 'Pendiente' }}
                            </button>
                            <x-input-error :messages="$errors->get('estado')" class="mt-2" />
                        </div>
                        <div class="col-span-1">
                            <label for="reparacion_terminada" class="block text-lg font-medium text-gray-700 mb-2">Fecha de término de la reparación</label>
                            <input 
                                type="date" 
                                id="reparacion_terminada" 
                                name="reparacion_terminada" 
                                value="{{ old('reparacion_terminada', $mantenimiento->reparacion_terminada) }}" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                            >
                            <x-input-error :messages="$errors->get('reparacion_terminada')" class="mt-2" />
                        </div>
                        <div class="col-span-1">
                            <label for="empleado_asignado" class="block text-lg font-medium text-gray-700 mb-2">Empleado asignado</label>
                            <input 
                                type="text" 
                                id="empleado_asignado" 
                                name="empleado_asignado" 
                                value="{{ old('nombre', $mantenimiento->empleado->nombre) }} {{ old('apellido', $mantenimiento->empleado->apellido) }}" 
                                class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                            >
                            <x-input-error :messages="$errors->get('auto_ingresado')" class="mt-2" />
                        </div>
                        <div class="flex items-center">
                            <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600" type="submit">Actualizar</button>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</x-empleado>