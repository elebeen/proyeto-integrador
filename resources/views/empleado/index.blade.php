<x-empleado>
    <div class="w-full p-6">
        <h1 class="text-2xl font-bold mb-6 text-gray-800">Ultima Lista de Usuarios</h1>
        <div class="overflow-x-auto bg-white shadow rounded-lg h-full">
            <table class="w-full bg-white rounded-lg shadow-lg overflow-hidden border border-gray-200 table-fixed">
                <thead class="bg-gray-800 text-white">
                    <tr>
                        <th class="p-4 text-left font-semibold uppercase tracking-wider">Nombre y Apellido</th>
                        <th class="p-4 text-left font-semibold uppercase tracking-wider">Correo</th>
                        <th class="p-4 text-left font-semibold uppercase tracking-wider">Fecha de Registro</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach($usuariosEnOrden as $index => $usuario)
                        <tr class="{{ $index % 2 === 0 ? 'bg-gray-100' : 'bg-white' }} hover:bg-gray-300 transition duration-200 cursor-pointer">
                            <td class="p-4 text-gray-700 border-b">
                                <div class="flex items-center">
                                    <span>{{ $usuario->name }} {{ $usuario->apellido }}</span>
                                </div>
                            </td>
                            <td class="p-4 text-gray-700 border-b">
                                <div class="flex items-center">
                                    {{ $usuario->email }}
                                </div>
                            </td>
                            <td class="p-4 text-gray-700 border-b">
                                <div class="flex items-center">
                                    {{ $usuario->created_at->format('d/m/Y') }}
                                </div>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-empleado>
