<x-empleado>
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
        <form action="{{ route('empleado.editar_mantenimiento', $mantenimiento) }}" method="POST">
            @csrf
            @method('POST')
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
                            <button class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600" type="submit">Actualizar</button>
                        </div>
                        <div class="flex items-center">
                            <a href="{{ route('mantenimiento.empleado') }}" class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600">Regresar</a>
                        </div>
                    </div>
                </div>
            </div>
        </form>

        <div class="overflow-x-auto h-full w-full p-6 pt-0">
            <h1 class="text-2xl font-bold mb-6">Reparaciones</h1>
            <a href="{{ route('reparacion.formulario', $mantenimiento) }}">
                <ul class="bg-slate-400 p-8 rounded-lg shadow-md mt-4 mb-4">
                    <li>
                        <button type="submit">
                            <div class="flex justify-left items-center transform transition-transform hover:scale-110">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="#ffffff" class="size-6">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M12 9v6m3-3H9m12 0a9 9 0 1 1-18 0 9 9 0 0 1 18 0Z" />
                                </svg>
                                <span class="px-1 py-1 rounded-full text-lg font-medium text-white">Reparaciones</span>
                            </div>
                        </button>
                    </li>
                </ul>
            </a>
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

    </div>
    <script>
        // function toggleAutoIngresado() {
        //     // Obtener referencia al botón y al input oculto
        //     const toggleButton = document.getElementById('auto_ingresado_toggle');
        //     const hiddenInput = document.getElementById('auto_ingresado');
        //     const fechaIngresoInput = document.getElementById('fecha_entrega_cliente');
            
        //     // Cambiar valor del botón (0 -> 1 o 1 -> 0)
        //     let currentValue = toggleButton.getAttribute('data-value');
        //     let newValue = currentValue == "1" ? "0" : "1";
            
        //     // Actualizar el valor del botón y el input oculto
        //     toggleButton.setAttribute('data-value', newValue);
        //     hiddenInput.value = newValue;
    
        //     // Cambiar estilos y texto según el nuevo valor
        //     if (newValue == "1") {
        //         toggleButton.textContent = "Ingresado";
        //         toggleButton.classList.remove("bg-red-600", "hover:bg-red-700");
        //         toggleButton.classList.add("bg-green-600", "hover:bg-green-700");
        //         const currentDate = new Date().toISOString().split('T')[0]; // Formato YYYY-MM-DD
        //         fechaIngresoInput.value = currentDate;
        //     } else if (newValue == "0") {
        //         toggleButton.textContent = "No Ingresado";
        //         toggleButton.classList.remove("bg-green-600", "hover:bg-green-700");
        //         toggleButton.classList.add("bg-red-600", "hover:bg-red-700");
        //         fechaIngresoInput.value = "";
        //     }
        // }

        // function toggleEstado() {
        //     // Obtener referencias al botón y al input oculto
        //     const toggleButton = document.getElementById('estado_toggle');
        //     const hiddenInput = document.getElementById('estado');
        //     const reparacion_terminada_input = document.getElementById('reparacion_terminada');
            
        //     // Cambiar valor del botón (0 -> 1 o 1 -> 0)
        //     let currentValue = toggleButton.getAttribute('data-value');
        //     let newValue = currentValue == "1" ? "0" : "1";
            
        //     // Actualizar el valor del botón y del input oculto
        //     toggleButton.setAttribute('data-value', newValue);
        //     hiddenInput.value = newValue;

        //     // Cambiar estilos y texto según el nuevo valor
        //     if (newValue == "1") {
        //         toggleButton.textContent = "Terminado";
        //         toggleButton.classList.remove("bg-red-600", "hover:bg-red-700");
        //         toggleButton.classList.add("bg-green-600", "hover:bg-green-700");
        //         const currentDate = new Date().toISOString().split('T')[0]; // Formato YYYY-MM-DD
        //         reparacion_terminada_input.value = currentDate;
        //     } else if (newValue == "0"){
        //         toggleButton.textContent = "Pendiente";
        //         toggleButton.classList.remove("bg-green-600", "hover:bg-green-700");
        //         toggleButton.classList.add("bg-red-600", "hover:bg-red-700");
        //         reparacion_terminada_input.value = "";
        //     }
        // }

        // function toggleAutoDevuelto() {
        //     // Obtener referencias al botón y al input oculto
        //     const toggleButton = document.getElementById('auto_devuelto_toggle');
        //     const hiddenInput = document.getElementById('auto_devuelto');
        //     const reparacion_terminada_input = document.getElementById('fecha_devol_cliente');
            
        //     // Cambiar valor del botón (0 -> 1 o 1 -> 0)
        //     let currentValue = toggleButton.getAttribute('data-value');
        //     let newValue = currentValue == "1" ? "0" : "1";
            
        //     // Actualizar el valor del botón y del input oculto
        //     toggleButton.setAttribute('data-value', newValue);
        //     hiddenInput.value = newValue;

        //     // Cambiar estilos y texto según el nuevo valor
        //     if (newValue == "1") {
        //         toggleButton.textContent = "Devuelto";
        //         toggleButton.classList.remove("bg-red-600", "hover:bg-red-700");
        //         toggleButton.classList.add("bg-green-600", "hover:bg-green-700");
        //         const currentDate = new Date().toISOString().split('T')[0]; // Formato YYYY-MM-DD
        //         reparacion_terminada_input.value = currentDate;
        //     } else if (newValue == "0"){
        //         toggleButton.textContent = "En taller";
        //         toggleButton.classList.remove("bg-green-600", "hover:bg-green-700");
        //         toggleButton.classList.add("bg-red-600", "hover:bg-red-700");
        //         reparacion_terminada_input.value = "";
        //     }
        // }

        function toggleAutoIngresado() {
            const toggleButton = document.getElementById('auto_ingresado_toggle');
            const hiddenInput = document.getElementById('auto_ingresado');
            const fechaIngresoInput = document.getElementById('fecha_entrega_cliente');
            const estadoToggle = document.getElementById('estado_toggle');
            const estadoInput = document.getElementById('estado');
            const fechaReparacion_terminadaInput = document.getElementById('reparacion_terminada');
            const autoDevueltoToggle = document.getElementById('auto_devuelto_toggle');
            const autoDevueltoInput = document.getElementById('auto_devuelto');
            const fechaDevolucionInput = document.getElementById('fecha_devol_cliente');

            let currentValue = toggleButton.getAttribute('data-value');
            let newValue = currentValue === "1" ? "0" : "1";

            toggleButton.setAttribute('data-value', newValue);
            hiddenInput.value = newValue;

            if (newValue === "1") {
                toggleButton.textContent = "Ingresado";
                toggleButton.classList.remove("bg-red-600", "hover:bg-red-700");
                toggleButton.classList.add("bg-green-600", "hover:bg-green-700");
                fechaIngresoInput.value = new Date().toISOString().split('T')[0];
            } else {
                toggleButton.textContent = "No Ingresado";
                toggleButton.classList.remove("bg-green-600", "hover:bg-green-700");
                toggleButton.classList.add("bg-red-600", "hover:bg-red-700");
                fechaIngresoInput.value = "";

                // Forzar los otros estados a false
                estadoToggle.setAttribute('data-value', "0");
                estadoToggle.textContent = "Pendiente";
                estadoToggle.classList.remove("bg-green-600", "hover:bg-green-700");
                estadoToggle.classList.add("bg-red-600", "hover:bg-red-700");
                estadoInput.value = "0";
                fechaReparacion_terminadaInput.value = "";

                autoDevueltoToggle.setAttribute('data-value', "0");
                autoDevueltoToggle.textContent = "En taller";
                autoDevueltoToggle.classList.remove("bg-green-600", "hover:bg-green-700");
                autoDevueltoToggle.classList.add("bg-red-600", "hover:bg-red-700");
                autoDevueltoInput.value = "0";
                fechaDevolucionInput.value = "";
            }
        }

        function toggleEstado() {
            const toggleButton = document.getElementById('estado_toggle');
            const hiddenInput = document.getElementById('estado');
            const reparacionTerminadaInput = document.getElementById('reparacion_terminada');
            const autoIngresadoInput = document.getElementById('auto_ingresado');

            let currentValue = toggleButton.getAttribute('data-value');
            let newValue = currentValue === "1" ? "0" : "1";

            if (autoIngresadoInput.value === "0" && newValue === "1") {
                alert("El auto debe estar ingresado al taller antes de marcar como terminado.");
                return;
            }

            toggleButton.setAttribute('data-value', newValue);
            hiddenInput.value = newValue;

            if (newValue === "1") {
                toggleButton.textContent = "Terminado";
                toggleButton.classList.remove("bg-red-600", "hover:bg-red-700");
                toggleButton.classList.add("bg-green-600", "hover:bg-green-700");
                reparacionTerminadaInput.value = new Date().toISOString().split('T')[0];
            } else {
                toggleButton.textContent = "Pendiente";
                toggleButton.classList.remove("bg-green-600", "hover:bg-green-700");
                toggleButton.classList.add("bg-red-600", "hover:bg-red-700");
                reparacionTerminadaInput.value = "";

                // Forzar Auto Devuelto a falso
                const autoDevueltoToggle = document.getElementById('auto_devuelto_toggle');
                const autoDevueltoInput = document.getElementById('auto_devuelto');
                const fechaDevolucionInput = document.getElementById('fecha_devol_cliente');

                autoDevueltoToggle.setAttribute('data-value', "0");
                autoDevueltoToggle.textContent = "En taller";
                autoDevueltoToggle.classList.remove("bg-green-600", "hover:bg-green-700");
                autoDevueltoToggle.classList.add("bg-red-600", "hover:bg-red-700");
                autoDevueltoInput.value = "0";
                fechaDevolucionInput.value = "";
            }
        }

        function toggleAutoDevuelto() {
            const toggleButton = document.getElementById('auto_devuelto_toggle');
            const hiddenInput = document.getElementById('auto_devuelto');
            const fechaDevolucionInput = document.getElementById('fecha_devol_cliente');
            const estadoInput = document.getElementById('estado');

            let currentValue = toggleButton.getAttribute('data-value');
            let newValue = currentValue === "1" ? "0" : "1";

            if (estadoInput.value === "0" && newValue === "1") {
                alert("El estado debe estar terminado antes de marcar como devuelto.");
                return;
            }

            toggleButton.setAttribute('data-value', newValue);
            hiddenInput.value = newValue;

            if (newValue === "1") {
                toggleButton.textContent = "Devuelto";
                toggleButton.classList.remove("bg-red-600", "hover:bg-red-700");
                toggleButton.classList.add("bg-green-600", "hover:bg-green-700");
                fechaDevolucionInput.value = new Date().toISOString().split('T')[0];
            } else {
                toggleButton.textContent = "En taller";
                toggleButton.classList.remove("bg-green-600", "hover:bg-green-700");
                toggleButton.classList.add("bg-red-600", "hover:bg-red-700");
                fechaDevolucionInput.value = "";
            }
        }
    </script>
</x-empleado>