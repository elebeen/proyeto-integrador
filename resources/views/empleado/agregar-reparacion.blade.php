<x-empleado>
    <div class="w-full p-6">
        <form action="{{ route('mantenimiento.reparaciones', $mantenimiento->id) }}" method="POST">
            @csrf
            <div>
                <label for="descripcion">Descripción de la reparación:</label>
                <input type="text" id="descripcion" name="descripcion" required>
            </div>
            
            <div id="repuestos-container">
                <h4>Repuestos:</h4>
                <div class="repuesto-item">
                    <label for="repuestos[0][id]">Repuesto:</label>
                    <select name="repuestos[0][id]" id="repuestos[0][id]">
                        @foreach($repuestos as $repuesto)
                            <option value="{{ $repuesto->id }}">{{ $repuesto->nombre }}</option>
                        @endforeach
                    </select>
        
                    <label for="repuestos[0][cantidad]">Cantidad:</label>
                    <input type="number" name="repuestos[0][cantidad]" min="1" required>
                </div>
            </div>
        
            <button type="button" onclick="agregarRepuesto()">Agregar más repuestos</button>
            <button type="submit">Guardar reparación</button>
        </form>
        
        <script>
            function agregarRepuesto() {
                const container = document.getElementById('repuestos-container');
                const index = container.querySelectorAll('.repuesto-item').length;
            
                const html = `
                    <div class="repuesto-item">
                        <label for="repuestos[${index}][id]">Repuesto:</label>
                        <select name="repuestos[${index}][id]" id="repuestos[${index}][id]">
                            @foreach($repuestos as $repuesto)
                                <option value="{{ $repuesto->id }}">{{ $repuesto->nombre }}</option>
                            @endforeach
                        </select>
            
                        <label for="repuestos[${index}][cantidad]">Cantidad:</label>
                        <input type="number" name="repuestos[${index}][cantidad]" min="1" required>
                    </div>
                `;
                container.insertAdjacentHTML('beforeend', html);
            }
        </script>        
    </div>
</x-empleado>