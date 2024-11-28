<x-empleado>
    <div class="w-full p-6 bg-gray-100 rounded-lg shadow-md">
        <form action="{{ route('mantenimiento.reparaciones', $mantenimiento->id) }}" method="POST" class="space-y-6">
            @csrf
            
            <div>
                <label for="descripcion" class="block text-sm font-medium text-gray-700">Descripción de la reparación:</label>
                <input type="text" id="descripcion" name="descripcion" required 
                    class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-700">
            </div>
            
            <div id="repuestos-container" class="space-y-4">
                <h4 class="text-lg font-semibold text-gray-800">Repuestos:</h4>
                <div class="repuesto-item flex items-center space-x-4">
                    <div class="flex-1">
                        <label for="repuestos[0][id]" class="block text-sm font-medium text-gray-700">Repuesto:</label>
                        <select name="repuestos[0][id]" id="repuestos[0][id]" 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-700">
                            @foreach($repuestos as $repuesto)
                                <option value="{{ $repuesto->id }}">{{ $repuesto->nombre }}</option>
                            @endforeach
                        </select>
                    </div>
        
                    <div class="flex-1">
                        <label for="repuestos[0][cantidad]" class="block text-sm font-medium text-gray-700">Cantidad:</label>
                        <input type="number" name="repuestos[0][cantidad]" min="1" required 
                            class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-700">
                    </div>
                </div>
            </div>
        
            <div class="flex space-x-4">
                <button type="button" onclick="agregarRepuesto()" 
                    class="px-4 py-2 bg-blue-500 text-white rounded-md hover:bg-blue-600 focus:ring-2 focus:ring-blue-400">
                    Agregar más repuestos
                </button>
                <button type="submit" 
                    class="px-4 py-2 bg-green-500 text-white rounded-md hover:bg-green-600 focus:ring-2 focus:ring-green-400">
                    Guardar reparación
                </button>
            </div>
        </form>
        
        <script>
            function agregarRepuesto() {
                const container = document.getElementById('repuestos-container');
                const index = container.querySelectorAll('.repuesto-item').length;
            
                const html = `
                    <div class="repuesto-item flex items-center space-x-4">
                        <div class="flex-1">
                            <label for="repuestos[${index}][id]" class="block text-sm font-medium text-gray-700">Repuesto:</label>
                            <select name="repuestos[${index}][id]" id="repuestos[${index}][id]" 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-700">
                                @foreach($repuestos as $repuesto)
                                    <option value="{{ $repuesto->id }}">{{ $repuesto->nombre }}</option>
                                @endforeach
                            </select>
                        </div>
        
                        <div class="flex-1">
                            <label for="repuestos[${index}][cantidad]" class="block text-sm font-medium text-gray-700">Cantidad:</label>
                            <input type="number" name="repuestos[${index}][cantidad]" min="1" required 
                                class="mt-1 block w-full rounded-md border-gray-300 shadow-sm focus:ring-indigo-500 focus:border-indigo-500 text-gray-700">
                        </div>
                    </div>
                `;
                container.insertAdjacentHTML('beforeend', html);
            }
        </script>        
    </div>
</x-empleado>
