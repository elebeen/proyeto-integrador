<x-empleado>
    <div class="w-full p-6">
        <h1 class="text-2xl font-bold pl-6">Detalle del Mantenimiento</h1>
        <form action="{{ route('empleado.editar_mantenimiento', $cita->id) }}">
            <div class="overflow-x-auto h-full w-full p-6">
                <div class="grid grid-cols-3 gap-6 bg-white p-8 rounded-lg shadow-md">
                    <div class="col-span-3">
                        <label for="motivo" class="block text-sm font-medium text-gray-700 mb-2">Descripción del problema</label>
                        <input 
                            type="text" 
                            id="motivo" 
                            name="motivo" 
                            value="{{ old('motivo') }}" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                        >
                    </div>
                    <div class="col-span-1">
                        <label for="auto_ingresado" class="block text-sm font-medium text-gray-700 mb-2">Auto ingresado al taller</label>
                        <input 
                            type="text" 
                            id="auto_ingresado" 
                            name="auto_ingresado" 
                            value="{{ old('auto_ingresado') }}" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                        >
                    </div>
                    <div class="col-span-1">
                        <label for="fecha_ingreso" class="block text-sm font-medium text-gray-700 mb-2">Fecha de ingreso</label>
                        <input 
                            type="date" 
                            id="fecha_ingreso" 
                            name="fecha_ingreso" 
                            value="{{ old('fecha_entrega_cliente') }}" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                        >
                    </div>
                    <div class="col-span-1">
                        <label for="fecha_devolucion" class="block text-sm font-medium text-gray-700 mb-2">Fecha de devolución</label>
                        <input 
                            type="date" 
                            id="fecha_devolucion" 
                            name="fecha_devolucion" 
                            value="{{ old('fecha_devol_cliente') }}" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                        >
                    </div>
                    <div class="col-span-1">
                        <label for="estado" class="block text-sm font-medium text-gray-700 mb-2">Estado</label>
                        <input 
                            type="text" 
                            id="estado" 
                            name="estado" 
                            value="{{ old('estado') }}" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                        >
                    </div>
                    <div class="col-span-1">
                        <label for="reparacion_terminada" class="block text-sm font-medium text-gray-700 mb-2">Fecha de término de la reparación</label>
                        <input 
                            type="text" 
                            id="reparacion_terminada" 
                            name="reparacion_terminada" 
                            value="{{ old('reparacion_terminada') }}" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                        >
                    </div>
                    <div class="col-span-1">
                        <label for="servicio_tipo" class="block text-sm font-medium text-gray-700 mb-2">Tipo de servicio</label>
                        <input 
                            type="text" 
                            id="servicio_tipo" 
                            name="servicio_tipo" 
                            value="{{ old('servicio_tipo') }}" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                        >
                    </div>
                    <div class="col-span-1">
                        <label for="cliente" class="block text-sm font-medium text-gray-700 mb-2">Cliente</label>
                        <input 
                            type="text" 
                            id="cliente" 
                            name="cliente" 
                            value="{{ old('nombre') }}" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                        >
                    </div>
                    <div class="col-span-1">
                        <label for="marca_modelo" class="block text-sm font-medium text-gray-700 mb-2">Marca y modelo</label>
                        <input 
                            type="text" 
                            id="marca_modelo" 
                            name="marca_modelo" 
                            value="{{ old('marca') }} {{ old('modelo') }}" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                        >
                    </div>
                    <div class="col-span-1">
                        <label for="placa" class="block text-sm font-medium text-gray-700 mb-2">Placa</label>
                        <input 
                            type="text" 
                            id="placa" 
                            name="placa" 
                            value="{{ old('placa') }}" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                        >
                    </div>
                    <div class="col-span-3">
                        <label for="empleado_asignado" class="block text-sm font-medium text-gray-700 mb-2">Empleado asignado</label>
                        <input 
                            type="text" 
                            id="empleado_asignado" 
                            name="empleado_asignado" 
                            value="{{ old('empleado') }}" 
                            class="w-full px-4 py-2 border border-gray-300 rounded-md focus:ring focus:ring-blue-300 focus:outline-none"
                        >
                    </div>
                </div>
            </div>    
        </form>
    </div>
</x-empleado>